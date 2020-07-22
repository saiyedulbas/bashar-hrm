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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/documentation', function () {
    return view('documentation');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/attendance/{from_date}/{to_date}','attendancecontroller@attendance');
Route::get('/attendance','attendancecontroller@attendance');
Route::get('/award', 'awardcontroller@award');
Route::get('/test', 'HomeController@test');
Route::get('/take/value', 'awardcontroller@takevalue');

Route::get('/activenotice/{active_id}', 'HomeController@activenotice');
Route::get('/deletenotice/{delete_id}', 'HomeController@deletenotice');
Route::get('/addnotice', 'HomeController@notice');
Route::get('/staff/home', 'staffcontroller@index');
Route::get('/setting/email', 'emailcontroller@settingemail');
Route::get('/setting/language', 'languagecontroller@settinglanguage');
Route::get('/permission/setting', 'HomeController@permissionsetting');
Route::post('/language/change', 'HomeController@languagechange');
Route::post('/attend/add', 'attendancecontroller@attendadd');
Route::post('/role/assign', 'HomeController@roleassign');
Route::post('/role/add', 'HomeController@roleadd');
Route::post('/role/again', 'HomeController@roleagain');
Route::post('/notice/new', 'HomeController@noticenew');
Route::post('/email/change', 'emailcontroller@emailchange');
Route::post('/award/give', 'awardcontroller@awardgive');
Route::post('/ami/jani', 'awardcontroller@amijani');
Route::post('/intervention', 'HomeController@intervention');
Route::resource('/designation', 'designationcontroller');
Route::resource('/employee', 'EmployeeController');

Route::get('/expense/download', 'ExpenseController@expensedownload');
Route::resource('/expense', 'ExpenseController');

Route::post('/getdesignationlist', 'EmployeeController@getdesignationlist');
Route::post('/ajax_practice', 'HomeController@ajaxpractice');
Route::get('login/github', 'githubcontroller@redirectToProvider');
Route::get('login/github/callback', 'githubcontroller@handleProviderCallback');
Route::get('/staff/public/chatroom', 'staffcontroller@staffpublicchatroom');

Route::get('login/google', 'googlecontroller@redirectToProvider');
Route::get('login/google/callback', 'googlecontroller@handleProviderCallback');
Route::get('/expense_list', 'HomeController@expense_list');
Route::post('paypal', 'paypalcontroller@payWithpaypal');
Route::post('/chat/post', 'staffcontroller@chatpost');

Route::get('status', 'paypalcontroller@getPaymentStatus');
Route::get('/get/messages', 'staffcontroller@getmessages');


Route::get('/pusher', 'ChatsController@index');
Route::get('messages', 'ChatsController@fetchMessages');
Route::post('messages', 'ChatsController@sendMessage');
