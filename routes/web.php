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
    Route::get('/', [
		'uses'=>'PageController@getIndex',
		'as'=>'home.index',
		]);
});
Route::group(['prefix' => 'tieng-han/tu-vung-tieng-han/'], function() {
    Route::get('/{slug}',[
		'uses'=>'PageController@getDetail',
		'as'=>'home.detail',
		]);
});

Route::group(['prefix' => 'tu-vung'], function() {
    Route::get('/{slug}',[
		'uses'=>'PageController@getQuesetion',
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

Route::group(['prefix' => '/admin'], function() {
   Route::get('/', [
		'uses'=>'AdminController@getIndex',
		'as'=>'admin.index',
		]);
   Route::get('/them-moi-bai-viet', [
		'uses'=>'AdminController@getPost',
		'as'=>'admin.addPost',
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



