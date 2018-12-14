<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

	Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
			Route::get('/', 'IndexController@index');
			Route::post('login', 'IndexController@postLogin');
			Route::get('logout', 'IndexController@logout');
			Route::get('dashboard', 'DashboardController@index');
			Route::get('profile', 'AdminController@profile');
			Route::post('profile', 'AdminController@updateProfile');
			Route::post('profile_pass', 'AdminController@updatePassword');

			Route::get('upworks', 'UpworkController@allupwork_id');
			Route::get('upwork/addnew', 'UpworkController@addupwork_id');
			Route::get('upwork/addnew/{id}', 'UpworkController@edit_upwork');
			Route::post('upwork/addnew', 'UpworkController@addnew');
			Route::get('upwork/delete/{id}', 'UpworkController@deleteupwork_id');
			Route::get('upwork/status/{id}/{status}', 'UpworkController@status');

			Route::get('managers', 'ManagerController@allmanager');
			Route::get('managers/addnew', 'ManagerController@add_manager');
			Route::get('managers/addnew/{id}', 'ManagerController@edit_manager');
			Route::post('managers/addnew', 'ManagerController@addnew');
			Route::get('managers/delete/{id}', 'ManagerController@deletemanager');
			Route::get('managers/status/{id}/{status}', 'ManagerController@status');


			Route::get('bidders', 'BidderController@allbidder');
			Route::get('bidders/addnew', 'BidderController@add_bidder');
			Route::get('bidders/addnew/{id}', 'BidderController@edit_bidder');
			Route::post('bidders/addnew', 'BidderController@addnew');
			Route::get('bidders/delete/{id}', 'BidderController@deletebidder');
			Route::get('bidders/status/{id}/{status}', 'BidderController@status');

			Route::get('leads', 'LeadController@alllead');
			Route::post('leads', 'LeadController@filterallleads');
			Route::get('customers', 'LeadController@allcustomers');
			Route::post('customers', 'LeadController@filterallcustomers');
			Route::get('leads/addnew', 'LeadController@add_lead');
			Route::get('leads/addnew/{id}', 'LeadController@edit_lead');
			Route::post('leads/addnew', 'LeadController@addnew');
			Route::get('leads/delete/{id}', 'LeadController@deletelead');
			Route::get('leads/status/{id}/{status}', 'LeadController@status');
			Route::post('leads/addnote', 'LeadController@addnote');
			Route::get('notes/delete/{id}', 'LeadController@deletenote');

			Route::get('upbms', 'UpbmController@allupbm');
			Route::post('upbms', 'UpbmController@filterallupbm');
			Route::get('getajxadata', 'AjaxController@index');
			Route::get('upbms/addnew', 'UpbmController@add_upbm');
			Route::get('upbms/addnew/{id}', 'UpbmController@edit_upbm');
			Route::post('upbms/addnew', 'UpbmController@addnew');
			Route::get('upbms/delete/{id}', 'UpbmController@deleteupbm');
			Route::get('upbms/status/{id}/{status}', 'UpbmController@status');

			Route::get('employees', 'EmployeeController@allemployee');
			Route::get('employees/developers', 'EmployeeController@developers');
			Route::get('employees/designers', 'EmployeeController@designers');
			Route::get('employees/seo', 'EmployeeController@seo');
			Route::get('employees/writers', 'EmployeeController@writers');
			Route::get('employees/addnew', 'EmployeeController@add_employee');
			Route::get('employees/addnew/{id}', 'EmployeeController@edit_employee');
			Route::post('employees/addnew', 'EmployeeController@addnew');
			Route::get('employees/delete/{id}', 'EmployeeController@deleteemployee');
			Route::get('employees/status/{id}/{status}', 'EmployeeController@status');
			Route::get('employees/status/{id}/{status}', 'EmployeeController@status');
	});

	Route::group(['namespace' => 'Manager', 'prefix' => 'manager'], function () {
			Route::get('/', 'IndexController@index');
			Route::post('login', 'IndexController@postLogin');
			Route::get('logout', 'IndexController@logout');
			Route::get('dashboard', 'DashboardController@index');
			Route::get('profile', 'ManagerController@profile');
			Route::post('profile', 'ManagerController@updateProfile');
			Route::post('profile_pass', 'ManagerController@updatePassword');

			Route::get('upworks', 'UpworkController@allupwork_id');
			Route::get('upwork/addnew', 'UpworkController@addupwork_id');
			Route::get('upwork/addnew/{id}', 'UpworkController@edit_upwork');
			Route::post('upwork/addnew', 'UpworkController@addnew');
			Route::get('upwork/delete/{id}', 'UpworkController@deleteupwork_id');
			Route::get('upwork/status/{id}/{status}', 'UpworkController@status');

			Route::get('bidders', 'BidderController@allbidder');
			Route::get('bidders/addnew', 'BidderController@add_bidder');
			Route::get('bidders/addnew/{id}', 'BidderController@edit_bidder');
			Route::post('bidders/addnew', 'BidderController@addnew');
			Route::get('bidders/delete/{id}', 'BidderController@deletebidder');
			Route::get('bidders/status/{id}/{status}', 'BidderController@status');

			Route::get('leads', 'LeadController@alllead');
			Route::post('leads', 'LeadController@filterallleads');
			Route::get('customers', 'LeadController@allcustomers');
			Route::post('customers', 'LeadController@filterallcustomers');
			Route::get('leads/addnew', 'LeadController@add_lead');
			Route::get('leads/addnew/{id}', 'LeadController@edit_lead');
			Route::post('leads/addnew', 'LeadController@addnew');
			Route::get('leads/delete/{id}', 'LeadController@deletelead');
			Route::get('leads/status/{id}/{status}', 'LeadController@status');
			Route::post('leads/addnote', 'LeadController@addnote');
			Route::get('notes/delete/{id}', 'LeadController@deletenote');
			Route::post('leads/addreminder', 'LeadController@addreminder');
			Route::get('reminders/delete/{id}', 'LeadController@deletereminder');

			Route::get('upbms', 'UpbmController@allupbm');
			Route::post('upbms', 'UpbmController@filterallupbm');
			Route::get('upbms/addnew', 'UpbmController@add_upbm');
			Route::get('upbms/addnew/{id}', 'UpbmController@edit_upbm');
			Route::post('upbms/addnew', 'UpbmController@addnew');
			Route::get('upbms/delete/{id}', 'UpbmController@deleteupbm');
			Route::get('upbms/status/{id}/{status}', 'UpbmController@status');



	});

	Route::group(['namespace' => 'Bidder', 'prefix' => 'bidder'], function () {
			Route::get('/', 'IndexController@index');
			Route::post('login', 'IndexController@postLogin');
			Route::get('logout', 'IndexController@logout');
			Route::get('dashboard', 'DashboardController@index');

			Route::get('leads', 'LeadController@alllead');
			Route::post('leads', 'LeadController@filterallleads');
			/* Route::get('leads/addnew', 'LeadController@add_lead');
			Route::get('leads/addnew/{id}', 'LeadController@edit_lead');
			Route::post('leads/addnew', 'LeadController@addnew');
			Route::get('leads/delete/{id}', 'LeadController@deletelead');
			Route::get('leads/status/{id}/{status}', 'LeadController@status'); */

			Route::get('upbms', 'UpbmController@allupbm');
			Route::post('upbms', 'UpbmController@filterallupbm');
			Route::get('upbms/addnew', 'UpbmController@add_upbm');
			Route::get('upbms/addnew/{id}', 'UpbmController@edit_upbm');
			Route::post('upbms/addnew', 'UpbmController@addnew');
			Route::get('upbms/delete/{id}', 'UpbmController@deleteupbm');
			Route::get('upbms/status/{id}/{status}', 'UpbmController@status');

			Route::get('profile', 'BidderController@profile');
			Route::post('profile', 'BidderController@updateProfile');
			Route::post('profile_pass', 'BidderController@updatePassword');


	});

	 Route::group(['namespace' => 'Front'], function () {
			Route::get('/', 'HomeController@index');
			Route::post('/login', 'HomeController@postLogin');
			Route::get('password/email', 'Auth\PasswordController@getEmail');
			Route::post('password/email', 'Auth\PasswordController@postEmail');
			Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
			Route::post('password/reset', 'Auth\PasswordController@postReset');


	});
	 Route::post('/getmsg','AjaxController@index');