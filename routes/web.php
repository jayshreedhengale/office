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
    return redirect('/login');
});
Route::get('/thanks', function () {
    return view('pages.thanks');
});
Route::get('/otp', function () {
    return view('pages.otp');
});
Auth::routes();
Route::group(['prefix' => '/',  'middleware' => 'auth'], function()
{
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/add-employee', 'EmployeeController@employeeForm');
Route::get('/employee-details', 'EmployeeController@employeeDetails');
Route::get('/add-holiday', 'HolidayController@holidayForm');
Route::get('/add-leave', 'LeaveController@leaveForm');
Route::get('/add-ticket', 'TicketController@ticketForm');
Route::get('/add-news', 'NewsController@newsForm');
Route::get('department', 'EmployeeController@getDepartmentDetail');
Route::get('/employee-admin', 'EmployeeadminController@employeeAdmin');
Route::get('/lead', 'LeadController@leadForm');

Route::post('/employee', 'EmployeeController@store');
Route::post('/holiday', 'HolidayController@store');
Route::post('/leave', 'LeaveController@store');
Route::post('/tickets', 'TicketController@store');
Route::post('/news', 'NewsController@store');
Route::post('/empladm','EmployeeadminController@store');
Route::post('/commet','LeadController@store');

Route::get('/holiday', 'HolidayController@allHolidays');
Route::get('/leaves', 'LeaveController@allLeave');
Route::get('/ticket', 'TicketController@allTickets');
Route::get('/employee', 'EmployeeController@allEmployee');
Route::get('/news', 'NewsController@allNews');

Route::get('/edit-employee/{id}','EmployeeController@edit');
Route::get('/edit-holiday/{id}','HolidayController@edit');
Route::get('/edit-leave/{id}','LeaveController@edit');
Route::get('/edit-news/{id}','NewsController@edit');

Route::post('/employ', 'EmployeeController@update');
Route::post('/holidays', 'HolidayController@update');
Route::post('/leavess', 'LeaveController@update');
Route::post('/new', 'LeaveController@update');

Route::get('destroy/{id}','HolidayController@destroy');
Route::get('destroy/{id}','EmployeeController@destroy');
Route::get('destroy/{id}','LeaveController@destroy');
Route::get('destroy/{id}','NewsController@destroy');

Route::resource('employ','EmployeeController');
Route::resource('leavess','LeaveController');
Route::resource('holidays','HolidayController');
Route::resource('tickets','TicketController');
Route::resource('new','NewsController');
Route::resource('admin','EmployeeadminController');
Route::resource('comme','LeadController');

});