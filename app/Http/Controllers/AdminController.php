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
use App\User;
use App\Role;
use Illuminate\Support\Facades\Auth;
use App\Address;

class AdminController extends Controller
{

    public function getIndex(Request $request)
		{	
			if (Auth::check() && $request->user()->authorizeRoles( 'admin')) {
				$role_manager  = Role::where('name', 'admin')->first();

				$idUsers = DB::table('users')->join('role_user', 'users.id', '=', 'role_user.user_id')
				->select('users.id')
				->where('role_user.role_id','!=',$role_manager->id)
				->groupBy('users.id')
				->get();
				$id= json_decode( json_encode($idUsers), true);
				$users = DB::table('users')->whereIn('id', $id)
				->get();
				return view('backend.page.home',compact('users'));
			} else {
				return redirect()->intended('/admin/login');
			}
			
		}
	public function getLoginAdmin()
		{	
			
			return view('backend.login');
		}

	public function getErr()
		{	
			
			return view('backend.page.err');
		}
	public function getProfile(Request $request)
		{	
			if (Auth::check() && $request->user()->authorizeRoles( 'admin')) {
				
				return view('backend.page.profile');
			} else {
				return redirect()->intended('/admin/login');
			}
		}
	public function getAddress(Request $request)
		{	
			if (Auth::check() && $request->user()->authorizeRoles( 'admin')) {
				
				$address = Address::first();
				return view('backend.page.address',compact('address'));
			} else {
				return redirect()->intended('/admin/login');
			}
		}
	public function getPassword(Request $request)
		{	
			if (Auth::check() && $request->user()->authorizeRoles( 'admin')) {
				
				return view('backend.page.password');
			} else {
				return redirect()->intended('/admin/login');
			}
			
		}
	public function getFile(Request $request)
		{	
			if (Auth::check() && $request->user()->authorizeRoles( 'admin')) {
				
				return view('backend.page.file');
			} else {
				return redirect()->intended('/admin/login');
			}
			
		}

	public function getCategory(Request $request)
		{	
			if (Auth::check() && $request->user()->authorizeRoles( 'admin')) {
				
				$sidebars = Sidebar::all();
				$desc = DB::table('sidebar')->join('category', 'sidebar.id', '=', 'category.idSidebar')
				 ->select('category.*','sidebar.title as sidebarTitle')
				 ->orderBy('category.id', 'desc')
				 ->get();

				return view('backend.page.category',compact('sidebars','desc'));
			} else {
				return redirect()->intended('/admin/login');
			}
		}

	public function getSidebar(Request $request)
		{	
			if (Auth::check() && $request->user()->authorizeRoles( 'admin')) {
				
				$sidebars = Sidebar::where('status','0')->get();
				return view('backend.page.addSidebar',compact('sidebars'));
			} else {
				return redirect()->intended('/admin/login');
			}
			
		}

	public function getMenu(Request $request)
		{	
			if (Auth::check() && $request->user()->authorizeRoles( 'admin')) {
				
				$sidebars = Sidebar::all();
				return view('backend.page.addMenu',compact('sidebars'));
			} else {
				return redirect()->intended('/admin/login');
			}
			
		}

	public function getPost(Request $request)
		{	
			if (Auth::check() && $request->user()->authorizeRoles( 'admin')) {
				
				 $categorys = Category::where('status','1')->orWhere('status','2')->get();
				return view('backend.page.post',compact('categorys'));
			} else {
				return redirect()->intended('/admin/login');
			}
			
		}
	public function getEditPost($slug,Request $request)
		{
			if (Auth::check() && $request->user()->authorizeRoles( 'admin')) {
				
				$categorys = Category::where('status','1')->orWhere('status','2')->get();
				$news = DB::table('news')->join('category', 'category.id', '=', 'news.idCategory')
				 ->select('news.*','category.title as categoryTitle')
				 ->where('news.slug',$slug)
				 ->first();
				return view('backend.page.editPost',compact('news','categorys'));
			} else {
				return redirect()->intended('/admin/login');
			}
			
		}
	public function getListPost(Request $request)
		{	
			if (Auth::check() && $request->user()->authorizeRoles( 'admin')) {
				
				 $news = DB::table('news')->join('category', 'category.id', '=', 'news.idCategory')
			 ->select('news.*','category.title as categoryTitle')
			 ->orderBy('news.id', 'desc')
			 ->get();
			return view('backend.page.postList',compact('news'));
			} else {
				return redirect()->intended('/admin/login');
			}
			
		}

		public function updateNews(Request $req)
		{	
			if (Auth::check() && $req->user()->authorizeRoles( 'admin')) {

				$link =$req->images;
				$base_url =  asset('')."uploads/";
				$images = str_replace($base_url,"",$link);
				 DB::table('news')
				    ->where('id', $req->idNews)
				    ->update([
				   		'title' => $req->title,
				        'slug' => $req->slug,
				        'desc' => $req->desc,
				        'content' => $req->content,
				        'images' => $images,
				        'idCategory' => $req->idCategory,
				   	]);
				return redirect()->route('admin.getListPost');
			}
		}

		public function updateAddress(Request $req)
		{	
			if (Auth::check() && $req->user()->authorizeRoles( 'admin')) {

				$link =$req->images;
				$base_url =  asset('')."uploads/";
				$images = str_replace($base_url,"",$link);
				 DB::table('address')
				    ->where('id', $req->id)
				    ->update([
				        'content' => $req->desc,
				        'images' => $images,
				   	]);
				return redirect()->route('admin.getAddress');
				} else {
				return redirect()->intended('/admin/login');
			}
		}

		public function updateUser(Request $req)
		{	
			if (Auth::check() && $req->user()->authorizeRoles( 'admin')) {

				$user = User::find($req->idUser);
				$money = $user->money + $req->money;
				 DB::table('users')
				    ->where('id', $req->idUser)
				    ->update([
				   		'money' => $money
				   	]);
				return redirect()->route('admin.index');
				} else {
				return redirect()->intended('/admin/login');
			}
			
		}

		public function updateAdmin(Request $req)
		{	
			if (Auth::check() && $req->user()->authorizeRoles( 'admin')) {

					$link =$req->images;
					$base_url =  asset('')."uploads/";
					$images = str_replace($base_url,"",$link);
					 DB::table('users')
					    ->where('id', $req->id)
					    ->update([
					   		'name' => $req->name,
					   		'email' => $req->email,
					   		'birth' => date('Y-m-d',strtotime($req->birth)),
					   		'sex' => $req->sex,
					   		'images' => $images,
					   	]);
					return redirect()->route('admin.getProfile');
				} else {
				return redirect()->intended('/admin/login');
			}
			
		}
		public function updatePassword(Request $req)
		{	
			if ($req->password != $req->password2) {
				 return redirect()->back()->with(['flag'=>'danger','message'=>'Mật khẩu không giống nhau']);
			}
			 DB::table('users')
			    ->where('id', $req->id)
			    ->update([
			   		'password' =>  bcrypt($req->password),
			   	]);
			return redirect()->route('admin.getProfile');
		}
		public function getEditUser($id,Request $request)
		{	
			if (Auth::check() && $request->user()->authorizeRoles( 'admin')) {
				$user = User::where('users.id',$id)->first();
      			return $user;
				} else {
				return redirect()->intended('/admin/login');
			}
			
		}

		public function deleteNews($id)
		{	
			News::find($id)->delete();
			return redirect()->route('admin.getListPost');
		}

		public function deleteUser($id)
		{	
			User::find($id)->delete();
			return redirect()->route('admin.index');
		}

	public function getVocabularyList(Request $request)
		{	
			if (Auth::check() && $request->user()->authorizeRoles( 'admin')) {

				$desc = DB::table('categorychi')->join('vocabulary', 'categorychi.id', '=', 'vocabulary.idCategorychi')
				 ->select('categorychi.title as categorychiTitle','vocabulary.*')
				 ->orderBy('categorychi.id', 'desc')
				 ->get();
				return view('backend.page.VocabularyList',compact('desc'));
				} else {
				return redirect()->intended('/admin/login');
				}
			 
		}

	public function getCategoryList(Request $request)
		{	
			if (Auth::check() && $request->user()->authorizeRoles( 'admin')) {

				$categorys = Category::where('status','0')->get();
				$desc = DB::table('categorychi')->join('category', 'categorychi.idCategory', '=', 'category.id')
				->select('categorychi.title as categorychiTitle','categorychi.slug as categorychiSlug','categorychi.id as categorychiId','category.slug as categorySlug','category.title as categoryTitle','categorychi.idCategory')
				->orderBy('categorychi.id', 'desc')
				->get();
			return view('backend.page.categoryList',compact('categorys','desc'));
				} else {
			return redirect()->intended('/admin/login');
			}
			 
		}

	public function getCategoryListDetail($id,Request $request)
		{	
			if (Auth::check() && $request->user()->authorizeRoles( 'admin')) {
				$desc = DB::table('categorychi')->join('category', 'categorychi.idCategory', '=', 'category.id')
				->select('categorychi.title as categorychiTitle','categorychi.slug as categorychiSlug','categorychi.id as categorychiId','category.slug as categorySlug','category.title as categoryTitle','categorychi.idCategory')
				->where('categorychi.id',$id)
				->first();
				$categorys = Category::all();
				$data = array('desc' => $desc,'categorys'=>$categorys);
				return $data;
				} else {
				return redirect()->intended('/admin/login');
			}
			
		}

	public function getIdSidebar($id,Request $request)
		{	
			if (Auth::check() && $request->user()->authorizeRoles( 'admin')) {

				 $sidebar = Sidebar::where('sidebar.id',$id)->first();
				$data = array('sidebar'=>$sidebar);
	      		return $data;
			} else {
				return redirect()->intended('/admin/login');
			}
			
		}

	public function getIdCategory($id)
		{	
			$sidebar = Sidebar::all();
			 $category = Category::where('category.id',$id)->first();
			$data = array('category'=>$category,'sidebar'=>$sidebar);
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
	        $sidebar->title = $req->title;
	        $sidebar->slug = $req->slug;
	        $sidebar->save();

	        return redirect()->route('adminGetSidebar');
		} 

	public function addPosts(Request $req)
		{
			$link =$req->images;
			$base_url =  asset('')."uploads/";
			$images = str_replace($base_url,"",$link);
			$news = new News;
	        $news->title = $req->title;
	        $news->slug = $req->slug;
	        $news->desc = $req->desc;
	        $news->content = $req->content;
	        $news->images = $images;
	        $news->idCategory = $req->idCategory;
	        $news->save();

	        return redirect()->route('admin.getListPost');
		
	    }
	public function postCategory(Request $req)
		{	

			$category = new Category;
	        $category->title = $req->title;
	        $category->slug = $req->slug;
	        $category->idSidebar = $req->idSidebar;
	        $category->status = $req->optradio;
	        $category->aut = $req->aut;
	        $category->save();

	        return redirect()->route('adminCategory');
		}

	public function postMenu(Request $req)
		{
			$menu = new Menu;
	        $menu->title = $req->title;
	        $menu->slug = $req->slug;
	        $menu->save();
	        return redirect()->route('adminGetSidebar');
		}

		public function getQuesetion(Request $request)
		{	
			if (Auth::check() && $request->user()->authorizeRoles( 'admin')) {

				$categorys = Category::where('status', 0)->get();
				$desc = DB::table('categorychi')->join('category', 'categorychi.idCategory', '=', 'category.id')
				->select('categorychi.title as categorychiTitle','categorychi.slug as categorychiSlug','categorychi.id as categorychiId','category.slug as categorySlug')
				->where('category.status',0)
				->get();
				return view('backend.page.question',compact('categorys','desc'));
	      		return $data;
			} else {
				return redirect()->intended('/admin/login');
			}
		}

			public function postQuesetion(Request $req)
		{	
			$categorychi = new Categorychi;
	        $categorychi->title = $req->title;
	        $categorychi->slug = $req->slug;
	        $categorychi->idCategory = $req->idCategory;
	        $categorychi->status = $req->optradio;
	        $categorychi->save();

	         return redirect()->route('admin.getCategoryList');
		}

			public function postLearningWords(Request $req)
		{	
			// $this->validate($req, 
			// 	[	
			// 		'vietnamtrue' =>'required',
			// 		'koreantrue' =>'required',
			// 		'images' => 'required|mimes:jpg,jpeg,png,gif',
			// 		'audio' => 'required|mimes:mp3',
			// 	],			
			// 	[	
			// 		'vietnamtrue.required' => 'Bạn cần tiếng việt',
			// 		'koreantrue.required' => 'Bạn cần nhập tiếng hàn',
			// 		'images.required' => 'Bạn cần nhập hình ảnh',
			// 		'images.mimes' => 'Chỉ chấp nhận hình ảnh với đuôi .jpg .jpeg .png .gif',
			// 		'audio.required' => 'Bạn cần nhập hình ảnh',
			// 		'audio.mimes' => 'Chỉ chấp nhận hình ảnh với đuôi .jpg .jpeg .png .gif',

			// 	]
			// );			
			$data = array();
			    for ($i=0; $i <6 ; $i++) {
			    	$audio = 'audio'.$i;
			    	$images = 'images'.$i;
			    	$vietnamtrue = 'vietnamtrue'.$i;
			    	$koreantrue = 'koreantrue'.$i;

			    	if ($req->$koreantrue && $req->$vietnamtrue && $req->$audio != null && $req->$images != null) {
		    			$arrayName = array('idCategorychi'=> $req->idCategorychi, 'audio'=> $req->$audio->getClientOriginalName(),'images'=> $req->$images->getClientOriginalName(),'vietnamtrue' => $req->$vietnamtrue,'koreantrue' => $req->$koreantrue);
		  					array_push($data, $arrayName);
		  					$req->$audio->move('uploads/audio', $req->$audio->getClientOriginalName());
							$req->$images->move('uploads/images', $req->$images->getClientOriginalName());
			    		}	
			    };
			Vocabulary::insert($data); 
			return redirect()->route('admin.VocabularyList');

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
			   		'title' => $req->title,
			   		'slug' => $req->slug,
			   	]);
			return redirect()->route('admin.getCategoryList');
		}

			public function updateCategogry(Request $req)
		{	

			 DB::table('category')
			    ->where('id', $req->id)
			    ->update([
			   		'title' => $req->title,
			   		'slug' => $req->slug,
			   		'idSidebar'=>$req->idSidebar,
			   		'aut'=>$req->aut
			   	]);
			return redirect()->route('adminCategory');
		}

			public function updateVocabulary(Request $req)
		{	
			$vocabulary = Vocabulary::find($req->id);
			$images = "";
			$audio = "";

			if ($req->hasFile('images')) {
				$images = $req->images->getClientOriginalName();
				$req->images->move('uploads/images', $req->images->getClientOriginalName());
			}else {
				$images = $vocabulary->images;
			}

			if ($req->hasFile('audio')) {
				$audio = $req->audio->getClientOriginalName();
				$req->audio->move('uploads/audio', $req->audio->getClientOriginalName());
			}else {
				$audio = $vocabulary->audio;
			}

			 DB::table('vocabulary')
			    ->where('id', $req->id)
			    ->update([
			   		'koreantrue' => $req->koreantrue,
			   		'vietnamtrue' => $req->vietnamtrue,
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
			   		'title' => $req->title,
			   		'slug' => $req->slug
			   	]);
			return redirect()->route('adminGetSidebar');
		}
}
