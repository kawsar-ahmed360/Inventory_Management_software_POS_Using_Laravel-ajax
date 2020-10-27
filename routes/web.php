<?php

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
    return view('backend/admin/register/login');
});

Auth::routes();

route::group(['middleware'=>'auth'],function(){

Route::get('/home', 'HomeController@index')->name('home');
route::get('/user','UserManageMentControlelr@userview')->name('userview');
route::get('/profile','UserManageMentControlelr@profile_view')->name('profile_view');
route::post('/profilesave','UserManageMentControlelr@profile_Save')->name('profile_Save');
route::post('/profilimageesave','UserManageMentControlelr@profile_image_Save')->name('profile_image_Save');
route::post('/profilpasschange','UserManageMentControlelr@profile_iPass_Change')->name('profile_iPass_Change');
route::get('/profileinlcview','UserManageMentControlelr@profile_Incl_view')->name('profile_Incl_view');

//...................Supliar Management.................
route::get('supliar','SupliarController@viewSupliar')->name('viewSupliar');
route::post('supliar_save','SupliarController@SaveSupliar')->name('SaveSupliar');
route::get('supliar_ajax','SupliarController@supliarAjax')->name('supliarAjax');
route::get('supliar_ajaxdeactive','SupliarController@supliarAjaxdeactive')->name('supliarAjaxdeactive');
route::get('supliar_ajaxactive','SupliarController@supliarAjaxactive')->name('supliarAjaxactive');
route::get('supliar_ajaxdelete','SupliarController@supliarAjaxdelete')->name('supliarAjaxdelete');
route::post('supliar_ajaxupdate','SupliarController@supliarAjaxupdate')->name('supliarAjaxupdate');
//......................End supiar management....................

//.............................Unti Mnagengemtn..................
route::get('units','UnitController@viewUnits')->name('viewUnits');
route::post('Units_save','UnitController@SaveUnits')->name('SaveUnits');
route::get('unitsviewajax','UnitController@units_view_ajax')->name('units_view_ajax');
route::get('unitsDeactiveajax','UnitController@units_Deactive_ajax')->name('units_Deactive_ajax');
route::get('unitsActiveajax','UnitController@units_Active_ajax')->name('units_Active_ajax');
route::get('unitsDeleteajax','UnitController@units_Delete_ajax')->name('units_Delete_ajax');
route::post('unitsUpdateajax','UnitController@units_Update_ajax')->name('units_Update_ajax');
//..............End units management...................


//.........................Category Management...........................
route::get('category','CategoryController@viewcategory')->name('viewcategory');
route::post('category_save','CategoryController@Savecategory')->name('Savecategory');
route::get('category_ajax','CategoryController@viewcategory_ajax')->name('viewcategory_ajax');
route::get('category_Deacibeajax','CategoryController@Deactivecategory_ajax')->name('Deactivecategory_ajax');
route::get('category_Activeajax','CategoryController@Activecategory_ajax')->name('Activecategory_ajax');
route::get('category_Deleteajax','CategoryController@Deletecategory_ajax')->name('Deletecategory_ajax');
//.........................End Category Management...................

});


//.........socialitecontroller..................

Route::get('login/github', 'socialitecontroller@redirectToProvider')->name('redirectToProvider');
Route::get('login/github/callback', 'socialitecontroller@handleProviderCallback')->name('handleProviderCallback');

//................End Socialites.....................
//................UserManagement.....................
//................End UserManagement.....................