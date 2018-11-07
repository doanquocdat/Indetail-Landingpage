<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|"
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('myroute/{tenbien}',function($tenbien){
	return "chao ban ".$tenbien;
})->where(['[tenbien]'=>'[0-9]']);
Route::get('/Route1',['as'=>'MyRoute1',function(){
	echo "Xin chao Route 1";
}]);

Route::get('Route2',function(){
	echo "Route2";
})->name('MyRoute2');



Route::group(['prefix'=>'MyGroup'],function(){
     Route::get('User1',function(){
     	echo "User 1";
     });
     Route::get('User2',function(){
     	echo "User 2";
     });
     Route::get('User3',function(){
     	echo "User 3";
     });
});


Route::get('goiten',function(){
     return redirect()->route('MyRoute1');

});

//Goi Controller
Route::get('XinChao','MyController@XinChao');

Route::get('ThamSo/{ten}','MyController@KhoaHoc');


//Goi URL
Route::get('MyRequest','MyController@GetURL');

//Gui nhan du lieu voi Request

Route::get('getForm',function(){
	return view('postForm');
});

Route::post('postForm',['as'=>'postForm','uses'=>'MyController@postForm' ]);


//Cookie

Route::get('setCookie','MyController@setCookie');

Route::get('getCookie','MyController@getCookie');


//Upload File

Route::get('uploadFile',function(){
	return view('postForm');

});

Route::post('postFile',['as'=>'postFile','use'=>'MyController@postFile']);

//Response
Route::get('getJson','MyController@getJson');

Route::get('myView','MyController@myView');

Route::get('Time/{t}','MyController@Time');

View::share('KhoaHoc','Laravel');

//Route::('Time/{t}','MyController@Time');
Route::get('master',function(){
	return view('layouts.master');
});

// Route::get('blade/{t}',function(){
// 	return view('pages.laravel');
// });

Route::get('blade/{str}','MyController@blade');


//Database

Route::get('database',function(){
	Schema::create('loaisanpham',function($table){
		$table->increments('id');
		$table->string('ten',200);
		
	});
	echo "Da thuc hien lenh tao bang";
});

Route::get('landing',function(){
	return view('layouts.index');
});
