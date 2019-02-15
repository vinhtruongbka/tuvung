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
use App\Categorychi;
use App\User;
use App\Role;
use DateTime;
use App\Address;

class PageController extends Controller
{
    public function getLearningWords($slug1,$slug2,Request $request){
        if (Auth::check()) {
            $role_employee = Role::where('name', 'employee')->first();
            if (strtotime(Auth::user()->endDate) < strtotime(date('Y-m-d'))) {
               Auth::user()->roles()->detach($role_employee);
           }
           if ($request->user()->authorizeRoles(['employee', 'admin'])) { 
            $address = Address::first();   
            $menus = Category::where('idSidebar', 6)->get();
            $sidebars = Sidebar::where('Status', 0)->get();
            $categorys = Category::where('Status', 0)->get();
            $categorys_2 = Category::where('Status', 1)->get();
            $desc = DB::table('categorychi')->join('category', 'categorychi.idCategory', '=', 'category.id')
            ->join('vocabulary', 'vocabulary.idCategorychi', '=', 'categorychi.id')
            ->select('categorychi.Title as categorychiTitle','categorychi.slug as categorychiSlug','vocabulary.*')
            ->where('categorychi.slug',$slug2)
            ->where('category.status',0)
            ->get();
            $desc2 = DB::table('categorychi')->join('category', 'categorychi.idCategory', '=', 'category.id')
            ->join('vocabulary', 'vocabulary.idCategorychi', '=', 'categorychi.id')
            ->select('category.slug as categoryslug','categorychi.Title as categorychiTitle','categorychi.slug as categorychiSlug','categorychi.status as categorychiStatus','vocabulary.*')
            ->where('categorychi.slug',$slug2)
            ->where('category.status',0)
            ->first();
            return view('page.LearningWords',compact('sidebars','categorys','categorys_2','menus','desc','desc2','address'));
        } else {
         return redirect()->route('home.getMoney');
     }

 } else {
    return redirect()->route('getLogin');
}
}

public function getPracticeWritings($slug,Request $request){
    if (Auth::check()) {
        $role_employee = Role::where('name', 'employee')->first();
        if (strtotime(Auth::user()->endDate) < strtotime(date('Y-m-d'))) {
         Auth::user()->roles()->detach($role_employee);
     }
     if ($request->user()->authorizeRoles(['employee', 'admin'])) { 

        $address = Address::first();
        $menus = Category::where('idSidebar', 6)->get();
        $sidebars = Sidebar::where('Status', 0)->get();
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
        return view('page.practiceWriting',compact('sidebars','categorys','categorys_2','menus','desc','desc2','address'));
    } else {
       return redirect()->route('home.getMoney');
   }

} else {
    return redirect()->route('getLogin');
}

}

public function getpracticeListening($slug,Request $request){
    if (Auth::check()) {
        $role_employee = Role::where('name', 'employee')->first();
        if (strtotime(Auth::user()->endDate) < strtotime(date('Y-m-d'))) {
         Auth::user()->roles()->detach($role_employee);
     }
     if ($request->user()->authorizeRoles(['employee', 'admin'])) { 

        $address = Address::first();
        $menus = Category::where('idSidebar', 6)->get();
        $sidebars = Sidebar::where('Status', 0)->get();
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
        return view('page.practiceListening',compact('sidebars','categorys','categorys_2','menus','desc','desc2','address'));
    } else {
       return redirect()->route('home.getMoney');
   }

} else {
    return redirect()->route('getLogin');
}

}

public function getQuizz($slug,Request $request){
    if (Auth::check()) {
        $role_employee = Role::where('name', 'employee')->first();
        if (strtotime(Auth::user()->endDate) < strtotime(date('Y-m-d'))) {
         Auth::user()->roles()->detach($role_employee);
     }
     if ($request->user()->authorizeRoles(['employee', 'admin'])) { 

        $address = Address::first();
        $menus = Category::where('idSidebar', 6)->get();
        $sidebars = Sidebar::where('Status', 0)->get();
        $categorys = Category::where('Status', 0)->get();
        $categorys_2 = Category::where('Status', 1)->get();
        $desc = DB::table('categorychi')->join('category', 'categorychi.idCategory', '=', 'category.id')
        ->join('vocabulary', 'vocabulary.idCategorychi', '=', 'categorychi.id')
        ->select('categorychi.Title as categorychiTitle','categorychi.slug as categorychiSlug','vocabulary.*')
        ->where('categorychi.slug',$slug)
        ->where('category.Status',0)
        ->inRandomOrder()
        ->get(); 
        // dd($desc);
        $desc2 = DB::table('categorychi')->join('category', 'categorychi.idCategory', '=', 'category.id')
        ->join('vocabulary', 'vocabulary.idCategorychi', '=', 'categorychi.id')
        ->select('categorychi.Title as categorychiTitle','categorychi.slug as categorychiSlug','vocabulary.*','category.slug as categorySlug')
        ->where('categorychi.slug',$slug)
        ->where('category.Status',0)
        ->first();
        $desc3 = Vocabulary::all();
        return view('page.quizz',compact('sidebars','categorys','categorys_2','menus','desc','desc2','desc3','address'));
    } else {
       return redirect()->route('home.getMoney');
   }

} else {
    return redirect()->route('getLogin');
}

}
}
