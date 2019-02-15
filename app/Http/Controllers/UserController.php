<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\MessageBag;
use App\News;
use App\Sidebar;
use App\Category;
use App\Menu;
use App\Vietnam;
use App\Korean;
use App\Vocabulary;
use App\User;
use App\Role;
use DateTime;
use App\Address;

class UserController extends Controller
{
	public function getRegisration(){
        $address = Address::first();   
        $news = News::all();
        $sidebars = Sidebar::where('status', 0)->get();
        $categorys = Category::where('status', 0)->get();
        $categorys_2 = Category::where('status', 1)->get();
        $menus = Category::where('idSidebar', 6)->get();
        return view('page.registration',compact('news','sidebars','categorys','categorys_2','menus','address'));
    }

    public function getLogin(){
        $address = Address::first();   
        $news = News::all();
        $sidebars = Sidebar::where('status', 0)->get();
        $categorys = Category::where('status', 0)->get();
        $categorys_2 = Category::where('status', 1)->get();
        $menus = Category::where('idSidebar', 6)->get();
        return view('page.login',compact('news','sidebars','categorys','categorys_2','menus','address'));
    }

    public function postLogout(){
        Auth::logout();
        return redirect()->route('home.index');
    }
    public function postRegistration(Request $req){
        $this->validate($req,[
            'rg_name' =>'required|min:6',
            'rg_email' =>'required|email|unique:users,email',
            'rg_password' =>'required|min:6',
            'confirm_password' =>'required|same:rg_password',
            'rg_sex_select' =>'required',
            'rg_year_select' =>'required',
            'rg_month_select' =>'required',
            'rg_day_select' =>'required',
        ],[
            'rg_name.required' =>'Vui lòng nhập họ tên của bạn',
            'rg_name.min' => 'Họ tên ít nhât 6 ký tự',
            'rg_email.required' =>'Vui lòng nhập địa chỉ email của bạn',
            'rg_email.email' =>'Địa chỉ mail không đúng định dạng',
            'rg_password.required' =>'Vui lòng nhập mật khẩu của bạn',
            'rg_password.min' =>'Mật khẩu ít nhât 6 ký tự',
            'confirm_password.same' =>'Mật khẩu không giống nhau',
            'rg_email.unique'=>'Địa chỉ email này đã tồn tại, vui lòng chọn email khác',
            'rg_sex_select.required' =>'Vui lòng nhập giới tính của bạn',
            'rg_year_select.required' =>'Vui lòng nhập năm sinh của bạn',
            'rg_month_select.required' =>'Vui lòng nhập tháng sinh của bạn',
            'rg_day_select.required' =>'Vui lòng nhập ngày sinh của bạn',
        ]);

           $role_employee = Role::where('name', 'employee')->first();
           $role_manager  = Role::where('name', 'admin')->first();
           $role_saler = Role::where('name', 'saler')->first();
           if ($req->rg_sex_select == 1) {
               $rg_sex_select = "Nữ";
           } else {
               $rg_sex_select = "Nam";
           }

           $birth = null;
           if ($req->rg_year_select != null 
            && $req->rg_month_select != null 
            && $req->rg_day_select != null
            ) {
            $birth = $req->rg_year_select.'-'.$req->rg_month_select.'-'.$req->rg_day_select;
            } 
           $user = new User();
           $user->name = $req->rg_name;
           $user->email = $req->rg_email;
           $user->password = bcrypt($req->rg_password);
           $user->sex = $rg_sex_select;
           $user->birth = $birth;
           $user->save();
           $user->roles()->attach($role_saler);

            Auth::attempt(['email' => $req->rg_email,'password' => $req->rg_password]);
            return redirect()->intended('/');
    }

    public function postLogin(Request $request) {
        $role_employee = Role::where('name', 'employee')->first();
        $data=[
            'email'=>$request->email,
            'password'=>$request->password,
        ];
        if(Auth::attempt($data)){
            if (strtotime(Auth::user()->endDate) < strtotime(date('Y-m-d'))) {
                 Auth::user()->roles()->detach($role_employee);
            }
            return redirect()->intended('/');
        }else{
            return redirect()->back()->with(['flag'=>'danger','message'=>'Đăng nhập thất bai ! xem lại email và mật khẩu']);
        }
    }
    public function postLoginAdmin(Request $request) {
        $role_admin = Role::where('name', 'admin')->first();
        $data=[
            'email'=>$request->email,
            'password'=>$request->password,
        ];
        if(Auth::attempt($data)){
           if ($request->user()->authorizeRoles('admin')) {
              return redirect()->intended('/admin');
           } else {
               return redirect()->back()->with(['flag'=>'danger','message'=>'Bạn không có quyền truy cập trang này!']);
           } 
        }else{
            return redirect()->back()->with(['flag'=>'danger','message'=>'Đăng nhập thất bai ! xem lại email và mật khẩu']);
        }
    }

    public function getMoney(Request $request) {
        $address = Address::first();   
        $news = News::all();
        $sidebars = Sidebar::where('status', 0)->get();
        $categorys = Category::where('status', 0)->get();
        $categorys_2 = Category::where('status', 1)->get();
        $menus = Category::where('idSidebar', 6)->get();
        return view('page.money',compact('news','sidebars','categorys','categorys_2','menus','address'));
    }

    public function getExtension($slug,Request $request) {
        $address = Address::first();   
        $news = News::all();
        $sidebars = Sidebar::where('status', 0)->get();
        $categorys = Category::where('status', 0)->get();
        $categorys_2 = Category::where('status', 1)->get();
        $menus = Category::where('idSidebar', 6)->get();
        $date = $slug;
        return view('page.extension',compact('news','sidebars','categorys','categorys_2','menus','date','address'));
    }

    public function getRecharge() {
        $address = Address::first();   
        $news = News::all();
        $sidebars = Sidebar::where('status', 0)->get();
        $categorys = Category::where('status', 0)->get();
        $categorys_2 = Category::where('status', 1)->get();
        $menus = Category::where('idSidebar', 6)->get();
        return view('page.recharge',compact('news','sidebars','categorys','categorys_2','menus','address'));
    }

    public function postExtension(Request $request) {

       if (Auth::user()->money < $request->money) {
            return redirect()->route('getExtension',$request->endDate)->with(['flag'=>'danger','errMoney'=>'Số tiền trong tài khoản không đủ để đăng ký !']);
       } else {
            $role_employee = Role::where('name', 'employee')->first();
           $role_manager  = Role::where('name', 'admin')->first();
           $role_saler = Role::where('name', 'saler')->first();
            $money = Auth::user()->money - $request->money;
            if (strtotime(Auth::user()->endDate) < strtotime(date('Y-m-d'))) {
                $dateint = date_modify(new DateTime(), "+ " . $request->endDate . "days ");
            } else {
                $dateint = date_modify(new DateTime(Auth::user()->endDate), "+ " . $request->endDate . "days ");
            }
            DB::table('users')
                    ->where('id', Auth::user()->id)
                    ->update([
                        'money' => $money,
                        'endDate' => $dateint,
                    ]);
            Auth::user()->roles()->attach($role_employee);
            return redirect()->route('home.getMoney');
       }
       
    }
}
