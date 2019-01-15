<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\News;
use App\Sidebar;
use App\Category;
use App\Categorychi;
use App\Menu;
use App\Vocabulary;

class AdminController extends Controller
{
    public function getIndex()
		{	
			
			return view('backend.page.home');
		}

	public function getCategory()
		{	
			$sidebars = Sidebar::all();
			$desc = DB::table('sidebar')->join('category', 'sidebar.id', '=', 'category.SidebarID')
			 ->select('category.*','sidebar.Title as sidebarTitle')
			 ->get();

			return view('backend.page.category',compact('sidebars','desc'));
		}

	public function getSidebar()
		{	
			$sidebars = Sidebar::where('status','0')->get();
			return view('backend.page.addSidebar',compact('sidebars'));
		}

	public function getMenu()
		{	
			$sidebars = Sidebar::all();
			return view('backend.page.addMenu',compact('sidebars'));
		}

	public function getPost()
		{	
			 $categorys = Category::all();
			return view('backend.page.post',compact('categorys'));
		}

	public function getVocabularyList()
		{	
			  $desc = DB::table('categorychi')->join('vocabulary', 'categorychi.id', '=', 'vocabulary.idCategorychi')
			 ->select('categorychi.Title as categorychiTitle','vocabulary.*')
			 ->get();
			return view('backend.page.VocabularyList',compact('desc'));
		}

	public function getCategoryList()
		{	
			 $categorys = Category::where('status','0')->get();
			 $desc = DB::table('categorychi')->join('category', 'categorychi.idCategory', '=', 'category.id')
			 ->select('categorychi.Title as categorychiTitle','categorychi.slug as categorychiSlug','categorychi.id as categorychiId','category.slug as categorySlug','category.Title as categoryTitle','categorychi.idCategory')
			 ->get();
			return view('backend.page.categoryList',compact('categorys','desc'));
		}

	public function getCategoryListDetail($id)
		{	
			 $desc = DB::table('categorychi')->join('category', 'categorychi.idCategory', '=', 'category.id')
			 ->select('categorychi.Title as categorychiTitle','categorychi.slug as categorychiSlug','categorychi.id as categorychiId','category.slug as categorySlug','category.Title as categoryTitle','categorychi.idCategory')
			 ->where('categorychi.id',$id)
			 ->first();
			  $categorys = Category::all();
			$data = array('desc' => $desc,'categorys'=>$categorys);
      		return $data;
		}

	public function getIdSidebar($id)
		{	
			
			 $sidebar = Sidebar::where('Sidebar.id',$id)->first();
			$data = array('sidebar'=>$sidebar);
      		return $data;
		}

	public function getIdCategory($id)
		{	
			
			 $category = Category::where('Category.id',$id)->first();
			$data = array('category'=>$category);
      		return $data;
		}

		public function editVocabulary($id)
		{	
			$categorychi = Categorychi::all();
			$vocabulary = Vocabulary::where('vocabulary.id',$id)->first();
			$data = array('vocabulary'=>$vocabulary,'categorychi'=>$categorychi);
      		return $data;
		}


	public function postSidebar(Request $req)
		{
			$sidebar = new Sidebar;
	        $sidebar->Title = $req->title;
	        $sidebar->slug = $req->slug;
	        $sidebar->status = $req->optradio;
	        $sidebar->save();

	        return redirect()->route('adminGetSidebar');
		} 

	public function postCategory(Request $req)
		{	
			$status = 0;
			if ($req->Status == 1) {
				$status = 1;
			}
			$category = new Category;
	        $category->Title = $req->title;
	        $category->slug = $req->slug;
	        $category->SidebarID = $req->SidebarID;
	        $category->Status = $status;
	        $category->save();

	        return redirect()->route('adminCategory');
		}

	public function postMenu(Request $req)
		{
			$menu = new Menu;
	        $menu->Title = $req->title;
	        $menu->slug = $req->slug;
	        $menu->save();
	        return redirect()->route('adminGetSidebar');
		}

		public function getQuesetion()
		{	
			$categorys = Category::where('Status', 0)->get();
			$desc = DB::table('categorychi')->join('category', 'categorychi.idCategory', '=', 'category.id')
			 ->select('categorychi.Title as categorychiTitle','categorychi.slug as categorychiSlug','categorychi.id as categorychiId','category.slug as categorySlug')
			 ->where('category.Status',0)
			 ->get();
			return view('backend.page.question',compact('categorys','desc'));
		}

			public function postQuesetion(Request $req)
		{	
			$categorychi = new Categorychi;
	        $categorychi->Title = $req->title;
	        $categorychi->slug = $req->slug;
	        $categorychi->idCategory = $req->idCategory;
	        $categorychi->status = $req->optradio;
	        $categorychi->save();

	         return redirect()->route('admin.getCategoryList');
		}

			public function postLearningWords(Request $req)
		{	

			$data = array(
			    array('idCategorychi'=>$req->idCategory, 'korean'=>$req->korean1,'vietnamese'=>$req->vietnamese1,'audio'=>$req->audio1->getClientOriginalName(),'images'=>$req->image1->getClientOriginalName()),
			    array('idCategorychi'=>$req->idCategory, 'korean'=>$req->korean2,'vietnamese'=>$req->vietnamese2,'audio'=>$req->audio2->getClientOriginalName(),'images'=>$req->image2->getClientOriginalName())
			);
			$req->audio1->move('uploads/audio', $req->audio1->getClientOriginalName());
			$req->image1->move('uploads/images', $req->image1->getClientOriginalName());

			Vocabulary::insert($data);
		}

		public function DeleteCategoryListDetail($id)
		{	
			Categorychi::find($id)->delete();
			return redirect()->route('admin.getCategoryList');
		}

		public function DeleteCategory($id)
		{	
			Category::find($id)->delete();
			return redirect()->route('adminCategory');
		}

		public function DeleteSidebar($id)
		{	
			Sidebar::find($id)->delete();
			return redirect()->route('adminGetSidebar');
		}

		public function deleteVocabulary($id)
		{	
			Vocabulary::find($id)->delete();
			return redirect()->route('admin.VocabularyList');
		}

			public function updateCategogryChi(Request $req)
		{	

			 DB::table('categorychi')
			    ->where('id', $req->id)
			    ->update([
			   		'idCategory' => $req->idCategory,
			   		'Title' => $req->title,
			   		'Slug' => $req->slug
			   	]);
			return redirect()->route('admin.getCategoryList');
		}

			public function updateCategogry(Request $req)
		{	

			 DB::table('category')
			    ->where('id', $req->id)
			    ->update([
			   		'Title' => $req->title,
			   		'Slug' => $req->slug
			   	]);
			return redirect()->route('adminCategory');
		}

			public function updateVocabulary(Request $req)
		{	
			$vocabulary = Vocabulary::find($req->id);
			$images = "";
			$audio = "";

			if ($req->hasFile('images')) {
				$images = $req->images;
				$req->image1->move('uploads/images', $req->image1->getClientOriginalName());
			}else {
				$images = $vocabulary->images;
			}

			if ($req->hasFile('audio')) {
				$audio = $req->audio;
				$req->audio1->move('uploads/audio', $req->audio1->getClientOriginalName());
			}else {
				$audio = $vocabulary->audio;
			}


			 DB::table('vocabulary')
			    ->where('id', $req->id)
			    ->update([
			   		'korean' => $req->korean,
			   		'vietnamese' => $req->vietnamese,
			   		'images' => $images,
			   		'audio' => $audio    		
			   	]);
			return redirect()->route('admin.VocabularyList');
		}


			public function updateSidebar(Request $req)
		{	
			
			 DB::table('sidebar')
			    ->where('id', $req->id)
			    ->update([
			   		'Title' => $req->title,
			   		'Slug' => $req->slug
			   	]);
			return redirect()->route('adminGetSidebar');
		}
}
