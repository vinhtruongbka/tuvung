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
use App\Useronline;

class HomeController extends Controller
{
    public function getIndex(Request $request){
        $news = News::orderBy('id', 'desc')->paginate(20);
        $address = Address::first();
        $sidebars = Sidebar::where('status', 0)->get();
        $categorys = Category::where('status', 0)->get();
        $categorys_2 = Category::where('status', 1)->get();
        $menus = DB::table('category')->join('sidebar', 'category.idSidebar', '=', 'sidebar.id') 
        ->select('category.*')
        ->where('sidebar.title','menu')
        ->get();
        return view('page.home',compact('news','sidebars','categorys','categorys_2','menus','address'));
    }

    public function getDetail($slug){
         $address = Address::first();
    	$menus = DB::table('category')->join('sidebar', 'category.idSidebar', '=', 'sidebar.id') 
        ->select('category.*')
        ->where('sidebar.title','menu')
        ->get();
        $sidebars = Sidebar::where('status', 0)->get();
        $categorys = Category::where('status', 0)->get();
        $categorys_2 = Category::where('status', 1)->get();
        $desc = DB::table('news')->join('category', 'news.idCategory', '=', 'category.id') 
        ->select('news.title as newsTitle','news.content','category.*')
        ->where('category.slug',$slug)
        ->first();
            $desc2 = News::where('slug', $slug)->first();
            return view('page.detail',compact('sidebars','categorys','categorys_2','desc','menus','desc2','address')); 
    }

    public function getQuesetion($slug,Request $request){
        $auth = Category::where('slug', $slug)->first();
        if ($auth->aut == 1 && !Auth::check()) {
            return redirect()->route('getLogin');
        }

        if ($auth->aut == 1 && !$request->user()->authorizeRoles(['employee', 'admin'])) {
             return redirect()->route('home.getMoney');
        }
        $address = Address::first();
    	$menus = DB::table('category')->join('sidebar', 'category.idSidebar', '=', 'sidebar.id') 
        ->select('category.*')
        ->where('sidebar.title','menu')
        ->get();
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
