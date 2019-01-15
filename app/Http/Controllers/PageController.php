<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\News;
use App\Sidebar;
use App\Category;
use App\Menu;

class PageController extends Controller
{
    public function getIndex(){
        $news = News::all();
        $sidebars = Sidebar::where('Status', 0)->get();
        $categorys = Category::where('Status', 0)->get();
        $categorys_2 = Category::where('Status', 1)->get();
        $menus = Category::where('SidebarID', 17)->get();
        return view('page.home',compact('news','sidebars','categorys','categorys_2','menus'));
    }

    public function getDetail($slug){
    	$menus = Menu::all();
        $sidebars = Sidebar::all();
        $categorys = Category::where('Status', 0)->get();
        $categorys_2 = Category::where('Status', 1)->get();
        $desc = DB::table('news')->join('category', 'news.IdCategory', '=', 'category.id') 
			 ->select('news.Title as newsTitle','news.Content','category.*')
			 ->where('category.slug',$slug)
			 ->first();

        return view('page.detail',compact('sidebars','categorys','categorys_2','desc','menus'));
    }

    public function getQuesetion($slug){
    	$menus = Menu::all();
        $sidebars = Sidebar::all();
        $sidebars = Sidebar::all();
        $categorys = Category::where('Status', 0)->get();
        $categorys_2 = Category::where('Status', 1)->get();

        $desc = DB::table('categorychi')->join('category', 'categorychi.idCategory', '=', 'category.id')
			 ->select('categorychi.Title as categorychiTitle','categorychi.slug as categorychiSlug','category.slug as categorySlug')
			 ->where('category.slug',$slug)
			 ->get();
        return view('page.question',compact('sidebars','categorys','categorys_2','desc','menus'));
    }

    public function getLearningWords($slug1,$slug2){
    	$menus = Menu::all();
        $sidebars = Sidebar::all();
        $sidebars = Sidebar::all();
        $categorys = Category::where('Status', 0)->get();
        $categorys_2 = Category::where('Status', 1)->get();
        $desc = DB::table('categorychi')->join('category', 'categorychi.idCategory', '=', 'category.id')
             ->join('vocabulary', 'vocabulary.idCategorychi', '=', 'categorychi.id')
             ->select('categorychi.Title as categorychiTitle','categorychi.slug as categorychiSlug','vocabulary.*')
             ->where('categorychi.slug',$slug2)
             ->where('category.Status',0)
             ->get();
        $desc2 = DB::table('categorychi')->join('category', 'categorychi.idCategory', '=', 'category.id')
             ->join('vocabulary', 'vocabulary.idCategorychi', '=', 'categorychi.id')
             ->select('categorychi.Title as categorychiTitle','categorychi.slug as categorychiSlug','vocabulary.*')
             ->where('categorychi.slug',$slug2)
             ->where('category.Status',0)
             ->first();
        return view('page.LearningWords',compact('sidebars','categorys','categorys_2','menus','desc','desc2'));
    }

    public function getPracticeWritings($slug){
        $menus = Menu::all();
        $sidebars = Sidebar::all();
        $sidebars = Sidebar::all();
        $categorys = Category::where('Status', 0)->get();
        $categorys_2 = Category::where('Status', 1)->get();
        $desc = DB::table('categorychi')->join('category', 'categorychi.idCategory', '=', 'category.id')
             ->join('vocabulary', 'vocabulary.idCategorychi', '=', 'categorychi.id')
             ->select('categorychi.Title as categorychiTitle','categorychi.slug as categorychiSlug','vocabulary.*')
             ->where('categorychi.slug',$slug)
             ->where('category.Status',0)
             ->inRandomOrder()
             ->get();
          $desc2 = DB::table('categorychi')->join('category', 'categorychi.idCategory', '=', 'category.id')
             ->join('vocabulary', 'vocabulary.idCategorychi', '=', 'categorychi.id')
             ->select('categorychi.Title as categorychiTitle','categorychi.slug as categorychiSlug','vocabulary.*','category.slug as categorySlug')
             ->where('categorychi.slug',$slug)
             ->where('category.Status',0)
             ->first();
        return view('page.practiceWriting',compact('sidebars','categorys','categorys_2','menus','desc','desc2'));
    }
}
