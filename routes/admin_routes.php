<?php



Route::auth();



/*
|--------------------------------------------------------------------------
| Admin Application Routes
|--------------------------------------------------------------------------
*/

$as = "";


Route::group(['as' => $as, 'middleware' => ['auth', 'permission:ADMIN_PANEL']], function () {
	
	/* ================== Dashboard ================== */
	
	Route::get('/admin', 'LA\DashboardController@index');
	Route::get('/dashboard', 'LA\DashboardController@index');
	
	/* ================== Users ================== */
	Route::resource('/users', 'LA\UsersController');
	Route::get('/user_dt_ajax', 'LA\UsersController@dtajax');
	
	/* ================== Uploads ================== */
	Route::resource(config('laraadmin.adminRoute') . '/uploads', 'LA\UploadsController');
	Route::post(config('laraadmin.adminRoute') . '/upload_files', 'LA\UploadsController@upload_files');
	Route::get(config('laraadmin.adminRoute') . '/uploaded_files', 'LA\UploadsController@uploaded_files');
	Route::post(config('laraadmin.adminRoute') . '/uploads_update_caption', 'LA\UploadsController@update_caption');
	Route::post(config('laraadmin.adminRoute') . '/uploads_update_filename', 'LA\UploadsController@update_filename');
	Route::post(config('laraadmin.adminRoute') . '/uploads_update_public', 'LA\UploadsController@update_public');
	Route::post(config('laraadmin.adminRoute') . '/uploads_delete_file', 'LA\UploadsController@delete_file');
	
	/* ================== Roles ================== */
	Route::resource('/roles', 'LA\RolesController');
	Route::get('/role_dt_ajax', 'LA\RolesController@dtajax');
	Route::post('/save_module_role_permissions/{id}', 'LA\RolesController@save_module_role_permissions');
	
	/* ================== Permissions ================== */
	Route::resource(config('laraadmin.adminRoute') . '/permissions', 'LA\PermissionsController');
	Route::get(config('laraadmin.adminRoute') . '/permission_dt_ajax', 'LA\PermissionsController@dtajax');
	Route::post(config('laraadmin.adminRoute') . '/save_permissions/{id}', 'LA\PermissionsController@save_permissions');
	
	/* ================== Departments ================== */
	Route::resource(config('laraadmin.adminRoute') . '/departments', 'LA\DepartmentsController');
	Route::get(config('laraadmin.adminRoute') . '/department_dt_ajax', 'LA\DepartmentsController@dtajax');
	
	/* ================== Employees ================== */
	Route::resource(config('laraadmin.adminRoute') . '/employees', 'LA\EmployeesController');
	Route::get(config('laraadmin.adminRoute') . '/employee_dt_ajax', 'LA\EmployeesController@dtajax');
	Route::post(config('laraadmin.adminRoute') . '/change_password/{id}', 'LA\EmployeesController@change_password');
	
	/* ================== Organizations ================== */
	Route::resource(config('laraadmin.adminRoute') . '/organizations', 'LA\OrganizationsController');
	Route::get(config('laraadmin.adminRoute') . '/organization_dt_ajax', 'LA\OrganizationsController@dtajax');

	/* ================== Backups ================== */
	Route::resource(config('laraadmin.adminRoute') . '/backups', 'LA\BackupsController');
	Route::get(config('laraadmin.adminRoute') . '/backup_dt_ajax', 'LA\BackupsController@dtajax');
	Route::post(config('laraadmin.adminRoute') . '/create_backup_ajax', 'LA\BackupsController@create_backup_ajax');
	Route::get(config('laraadmin.adminRoute') . '/downloadBackup/{id}', 'LA\BackupsController@downloadBackup');

	/* ================== Servicios ================== */
	Route::resource(config('laraadmin.adminRoute') . '/servicios', 'LA\ServiciosController');
	Route::get(config('laraadmin.adminRoute') . '/servicio_dt_ajax', 'LA\ServiciosController@dtajax');

	/* ================== Blogs ================== */
	Route::resource(config('laraadmin.adminRoute') . '/blogs', 'LA\BlogsController');
	Route::get(config('laraadmin.adminRoute') . '/blog_dt_ajax', 'LA\BlogsController@dtajax');

	/* ================== Portafolios ================== */
	Route::resource(config('laraadmin.adminRoute') . '/portafolios', 'LA\PortafoliosController');
	Route::get(config('laraadmin.adminRoute') . '/portafolio_dt_ajax', 'LA\PortafoliosController@dtajax');

	/* ================== Faqs ================== */
	Route::resource(config('laraadmin.adminRoute') . '/faqs', 'LA\FaqsController');
	Route::get(config('laraadmin.adminRoute') . '/faq_dt_ajax', 'LA\FaqsController@dtajax');

	/* ================== Abogados ================== */
	Route::resource(config('laraadmin.adminRoute') . '/abogados', 'LA\AbogadosController');
	Route::get(config('laraadmin.adminRoute') . '/abogado_dt_ajax', 'LA\AbogadosController@dtajax');

	/* ================== Sliders ================== */
	Route::resource(config('laraadmin.adminRoute') . '/sliders', 'LA\SlidersController');
	Route::get(config('laraadmin.adminRoute') . '/slider_dt_ajax', 'LA\SlidersController@dtajax');
});
