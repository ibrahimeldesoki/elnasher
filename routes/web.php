<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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



Route::get('/', function () {
    return redirect()->route('all_users');});
Route::get('/dashboard', function(){
    if(auth()->user()){
        if (auth()->user()->role->slug == 'admin') {
            return redirect()->route('all_users');
        }
    }
})->name('dashboard');
Auth::routes();
Route::get('/dashboard/logout', 'Auth\LoginController@logout')->name('logout');
Route::group(['middleware'=> 'App\Http\Middleware\Admin'],function(){
    Route::get('/dashboard/role/create','RoleController@create')->name('add_role');
    Route::post('/dashboard/role/store','RoleController@store')->name('store_role');
    Route::get('/dashboard/role/index','RoleController@index')->name('all_roles');
    Route::get('/dashboard/role/edit/{id}','RoleController@edit')->name('edit_role');
    Route::post('/dashboard/role/update/{id}','RoleController@update')->name('update_role');
    Route::get('/dashboard/role/delete/{id}','RoleController@destroy')->name('delete_role');
    //user
    Route::get('/dashboard/users','RegisterController@index')->name('all_users');
    Route::get('/dashboard/users/delete/{id}','RegisterController@destroy')->name('delete_user');
    Route::get('/dashboard/users/create','RegisterController@create')->name('add_user');
    Route::post('/dashboard/users/store','RegisterController@store')->name('store_user');
    Route::get('/dashboard/users/edit/{id}','RegisterController@edit')->name('edit_user');
    Route::post('/dashboard/users/update/{id}','RegisterController@update')->name('update_user');
    //services
    Route::resource('services', 'ServiceController');
    Route::get('/delete/service/{id}' , 'ServiceController@destroy')->name('delete_service');
});

