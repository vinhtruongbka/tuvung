<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => ''], function() {
    Route::get('', [
		'uses'=>'HomeController@getIndex',
		'as'=>'home.index',
		]);
});
Route::group(['prefix' => 'tieng-han/tu-vung-tieng-han'], function() {
    Route::get('/{slug}',[
		'uses'=>'homeController@getDetail',
		'as'=>'home.detail',
		]);
});

Route::group(['prefix' => 'tai-khoan'], function() {
    Route::get('/dang-ky',[
		'uses'=>'UserController@getRegisration',
		'as'=>'home.getRegisration',
		]);
    Route::get('/dang-nhap',[
		'uses'=>'UserController@getLogin',
		'as'=>'getLogin',
		]);
    Route::get('/dang-xuat',[
		'uses'=>'UserController@postLogout',
		'as'=>'postLogout',
		]);
    Route::post('/login', ['as' => 'login', 'uses' => 'UserController@postLogin']);
    Route::post('/registration', ['as' => 'postRegistration', 'uses' => 'UserController@postRegistration']);
});

Route::group(['prefix' => 'quan-tri'], function() {
    Route::get('quan-ly-tien-trong-tai-khoan',[
		'uses'=>'UserController@getMoney',
		'as'=>'home.getMoney',
		]);
    Route::get('/dang-nhap',[
		'uses'=>'UserController@getLogin',
		'as'=>'getLogin',
		]);
    Route::get('/dang-xuat',[
		'uses'=>'UserController@postLogout',
		'as'=>'postLogout',
		]);
    Route::get('/ra-han/{slug}',[
		'uses'=>'UserController@getExtension',
		'as'=>'getExtension',
		]);
    Route::get('/nap-tien-vao-tai-khoan',[
		'uses'=>'UserController@getRecharge',
		'as'=>'getRecharge',
		]);
    Route::post('add-ra-han', ['as' => 'postExtension', 'uses' => 'UserController@postExtension']);
    Route::post('/login', ['as' => 'login', 'uses' => 'UserController@postLogin']);
});

Route::group(['prefix' => 'trang-chu'], function() {
    Route::get('/{slug}',[
		'uses'=>'HomeController@getQuesetion',
		'as'=>'home.Quesetion',
		]);
    Route::get('/{slug1}/{slug2}',[
		'uses'=>'PageController@getLearningWords',
		'as'=>'home.LearningWords',
		]);

});
Route::group(['prefix' => 'luyen-viet'], function() {
    Route::get('/{slug}',[
		'uses'=>'PageController@getPracticeWritings',
		'as'=>'home.PracticeWriting',
		]);
});
Route::group(['prefix' => 'luyen-nghe'], function() {
    Route::get('/{slug}',[
		'uses'=>'PageController@getpracticeListening',
		'as'=>'home.practiceListening',
		]);
});

Route::group(['prefix' => 'trac-nghiem'], function() {
    Route::get('/{slug}',[
		'uses'=>'PageController@getQuizz',
		'as'=>'home.getQuizz',
		]);
});

Route::group(['prefix' => '/admin'], function() {
	Route::get('/login', [
		'uses'=>'AdminController@getLoginAdmin',
		'as'=>'admin.getLoginAdmin',
		]);
	Route::get('/profile', [
		'uses'=>'AdminController@getProfile',
		'as'=>'admin.getProfile',
		]);
	Route::get('/address', [
		'uses'=>'AdminController@getAddress',
		'as'=>'admin.getAddress',
		]);
	Route::get('/password', [
		'uses'=>'AdminController@getPassword',
		'as'=>'admin.getPassword',
		]);
	 Route::post('/login-admin', ['as' => 'loginAdmin', 'uses' => 'UserController@postLoginAdmin']);
	 
   Route::get('/', [
		'uses'=>'AdminController@getIndex',
		'as'=>'admin.index',
		]);

    Route::get('/file', [
		'uses'=>'AdminController@getFile',
		'as'=>'admin.getFile',
		]);

    Route::get('/err', [
		'uses'=>'AdminController@getErr',
		'as'=>'admin.getErr',
		]);
   Route::get('/bai-viet', [
		'uses'=>'AdminController@getPost',
		'as'=>'admin.addPost',
		]);
   Route::get('/danh-sach-bai-viet', [
		'uses'=>'AdminController@getListPost',
		'as'=>'admin.getListPost',
		]);
    Route::get('/sua-bai-viet/{slug}', [
		'uses'=>'AdminController@getEditPost',
		'as'=>'admin.getEditPost',
		]);
    Route::post('/update-news', [
       	'uses'=>'AdminController@updateNews',
       	'as'=>'admin.updateNews',
       ]);
    Route::post('/update-address', [
       	'uses'=>'AdminController@updateAddress',
       	'as'=>'admin.updateAddress',
       ]);
    Route::post('/update-user', [
       	'uses'=>'AdminController@updateUser',
       	'as'=>'admin.updateUser',
       ]);
    Route::post('/update-admin', [
       	'uses'=>'AdminController@updateAdmin',
       	'as'=>'admin.updateAdmin',
       ]);
    Route::post('/update-password', [
       	'uses'=>'AdminController@updatePassword',
       	'as'=>'admin.updatePassword',
       ]);
     Route::get('/edit-user/{id}', [
		'uses'=>'AdminController@getEditUser',
		'as'=>'admin.getEditUser',
		]);
     Route::get('/delete-user/{id}', [
		'uses'=>'AdminController@deleteUser',
		'as'=>'admin.deleteUser',
		]);

    Route::get('/sua-bai-viet/xoa/{id}', [
		'uses'=>'AdminController@deleteNews',
		'as'=>'admin.deleteNews',
		]);

   Route::post('/post-posts', [
	'uses'=>'AdminController@addPosts',
	'as'=>'addPosts',
	]);
   Route::post('/post-sidebar', [
	'uses'=>'AdminController@postSidebar',
	'as'=>'adminPostSidebar',
	]);
   Route::post('/post-category', [
	'uses'=>'AdminController@postCategory',
	'as'=>'adminPostCategory',
	]);
  
});


Route::group(['prefix' => 'admin/sidebar'], function() {
	//Get
	Route::get('menu-chinh', [
		'uses'=>'AdminController@getSidebar',
		'as'=>'adminGetSidebar',
		]);
    Route::get('/danh-muc', [
		'uses'=>'AdminController@getCategory',
		'as'=>'adminCategory',
		]);
    Route::get('/danh-muc/danh-sach', [
		'uses'=>'AdminController@getCategoryList',
		'as'=>'admin.getCategoryList',
		]);

	//Post
	 Route::post('/post-sidebar', [
       	'uses'=>'AdminController@postSidebar',
       	'as'=>'adminPostSidebar',
       ]);
	 Route::post('/post-sidebar', [
       	'uses'=>'AdminController@postSidebar',
       	'as'=>'adminPostSidebar',
       ]);
     Route::post('/post-category', [
       	'uses'=>'AdminController@postCategory',
       	'as'=>'adminPostCategory',
       ]);
   

	//Edit
	
	Route::get('/{id}', [
		'uses'=>'AdminController@getIdSidebar',
		'as'=>'admin.getIdSidebar',
		]);

	Route::get('/danh-muc/{id}', [
		'uses'=>'AdminController@getIdCategory',
		'as'=>'admin.getIdCategory',
		]);

	Route::get('/danh-muc/danh-muc-con/{id}', [
		'uses'=>'AdminController@getCategoryListDetail',
		'as'=>'admin.getCategoryListDetail',
		]);


	 //Update
	   Route::post('/update-categogryChi', [
       	'uses'=>'AdminController@updateCategogryChi',
       	'as'=>'admin.updateCategogryChi',
       ]);

     Route::post('/update-sidebar', [
       	'uses'=>'AdminController@updateSidebar',
       	'as'=>'admin.updateSidebar',
       ]);
      Route::post('/update-categogry', [
       	'uses'=>'AdminController@updateCategogry',
       	'as'=>'admin.updateCategogry',
       ]);

	//Delete
	Route::get('/danh-muc/danh-muc-con/xoa/{id}', [
		'uses'=>'AdminController@DeleteCategoryListDetail',
		'as'=>'admin.DeleteCategoryListDetail',
		]);

	Route::get('/danh-muc/xoa/{id}', [
		'uses'=>'AdminController@DeleteCategory',
		'as'=>'admin.DeleteCategory',
		]);
	Route::get('menu-chinh/xoa/{id}', [
			'uses'=>'AdminController@DeleteSidebar',
			'as'=>'admin.DeleteSidebar',
		]);
       
      
});

Route::group(['prefix' => 'admin/tu-vung'], function() {
     Route::get('/them-moi', [
		'uses'=>'AdminController@getQuesetion',
		'as'=>'admin.Quesetion',
		]);
    Route::get('/danh-sach', [
		'uses'=>'AdminController@getVocabularyList',
		'as'=>'admin.VocabularyList',
		]);

    //Delete
     Route::get('/danh-sach/xoa/{id}', [
		'uses'=>'AdminController@deleteVocabulary',
		'as'=>'admin.deleteVocabulary',
		]);

	//Edit 
	 Route::get('/danh-sach/{id}', [
		'uses'=>'AdminController@editVocabulary',
		'as'=>'admin.editVocabulary',
		]);

    Route::post('/post-quesetion', [
		'uses'=>'AdminController@postQuesetion',
		'as'=>'admin.postQuesetion',
	]);
	Route::post('/post-LearningWords', [
		'uses'=>'AdminController@postLearningWords',
		'as'=>'admin.postLearningWords',
	]);

	//update
	 Route::post('/danh-sach/update-Vocabulary', [
       	'uses'=>'AdminController@updateVocabulary',
       	'as'=>'admin.updateVocabulary',
       ]);
});



