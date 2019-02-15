<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\News;
use App\Sidebar;
use App\Category;
use App\Vocabulary;
use App\Address;

class HomeController extends Controller
{
    public function getIndex(){
        $news = News::all();
        $address = Address::first();
        $sidebars = Sidebar::where('status', 0)->get();
        $categorys = Category::where('status', 0)->get();
        $categorys_2 = Category::where('status', 1)->get();
        $menus = Category::where('idSidebar', 6)->get();
        return view('page.home',compact('news','sidebars','categorys','categorys_2','menus','address'));
    }

    public function getDetail($slug){
         $address = Address::first();
    	$menus = Category::where('idSidebar', 6)->get();
        $sidebars = Sidebar::where('status', 0)->get();
        $categorys = Category::where('status', 0)->get();
        $categorys_2 = Category::where('status', 1)->get();
        $desc = DB::table('news')->join('category', 'news.IdCategory', '=', 'category.id') 
        ->select('news.title as newsTitle','news.Content','category.*')
        ->where('category.slug',$slug)
        ->first();
            $desc2 = News::where('Slug', $slug)->first();
            return view('page.detail',compact('sidebars','categorys','categorys_2','desc','menus','desc2','address')); 
    }

    public function getQuesetion($slug){
         $address = Address::first();
    	$menus = Category::where('idSidebar', 6)->get();
        $sidebars = Sidebar::where('status', 0)->get();
        $categorys = Category::where('status', 0)->get();
        $categorys_2 = Category::where('status', 1)->get();

        $desc = DB::table('categorychi')->join('category', 'categorychi.idCategory', '=', 'category.id')
			 ->select('categorychi.title as categorychiTitle','categorychi.slug as categorychiSlug','category.slug as categorySlug')
			 ->where('category.slug',$slug)
			 ->get();
        return view('page.question',compact('sidebars','categorys','categorys_2','desc','menus','address'));
    }
}
