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
use MongoDB\Client as Mongo;
use Illuminate\Http\Request;


Route::get('/', function (Request $request) { 
	if($request->session()->get('status')=="0"){
		return redirect()->route('admin.dashboard'); 
	}elseif  ($request->session()->get('status')=="1"){
		return redirect()->route('user.index'); 
	}else{
		return redirect()->route('index'); 
	}
  
})->name('home');


Route::get('/check/{id}','checkController@index')->middleware('CheckAuth')->name('check');





Route::get('/register/{id}', 'RegisterController@index')->name('register');






Route::get('/welcome', 'homeController@index')->name('index');


Route::get('/getAuth', 'LoginController@test');


Route::get('/addregister', function () {    return view('addregis');})->middleware('CheckAuth')->name('addregister');


Route::get('/logout', 'LoginController@logout')->name('logout');


// Route::get('/admin', function () {    return view('admin');})->middleware('CheckAuth')->name('admin.dashboard');

Route::get('/admin', 'AdminController@index')->middleware('CheckAuth')->name('admin.dashboard');

Route::get('/userindex', 'userController@index')->middleware('CheckAuth')->name('user.index');





Route::get('/regmember', 'regmemberController@index')->middleware('CheckAuth')->name('addmember');


//ลบ
Route::get('/userindex/{id}', 'userController@del')->middleware('CheckAuth')->name('delPP');

Route::get('/regmember/{id}', 'regmemberController@del')->middleware('CheckAuth')->name('delmember');

Route::get('/register/del/{id}', 'RegisterController@del')->middleware('CheckAuth')->name('delregister');
Route::get('/check/{name}/{sur}', 'checkController@del')->middleware('CheckAuth')->name('delcheck');
//ลบ


//sent

Route::post('/regmember', 'LoginController@sent')->name('regMember');

Route::post('/addregis', 'addRegisController@sent')->name('addRegis');

Route::post('/register', 'RegisterController@sent')->name('regSent');


Route::post('/login', 'LoginController@auth')->name('login');

//sent


Route::get('/mongoDB', function () { 
   $collection = (new Mongo)->TreeUCheck->member;
   dd($collection->find()->toArray());
});
