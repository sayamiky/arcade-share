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

Route::get('/', 'WelcomeController@index', function () {
    return view('welcome');
})->name('welcome');

//Route::get('/welcome', 'WelcomeController@index')->name('welcome');

// Route::get('/', function () {
//     return view('auth.loginadmin');
// });

//login admin
// Route::get('/loginadmin','AuthController@login');
// Route::post('/proseslogin','AuthController@proseslogin');

//login owner
// Route::get('/loginowner','AuthController@login');
// Route::get('/logout','AuthController@logout');

//User
Auth::routes();
//home menu
Route::get('/home', 'HomeController@index')->name('home');
//room menu
Route::get('/room', 'RoomController@index')->name('ruangan');
Route::get('/room/{id_ruangan}/detail', 'RoomController@detail')->name('room.detail');
//blog menu
Route::get('/blogs','WelcomeController@blogs')->name('blogs');
Route::get('/blogs/{id}/detail','WelcomeController@detail')->name('blog.detail');
//portfolio menu
Route::get('/portfolios','WelcomeController@portfolio')->name('portfolios');
//contact us
Route::get('/contactus','WelcomeController@contactus')->name('contactus');
Route::get('/aboutus','WelcomeController@aboutus')->name('aboutus');

//penyewaan
// Route::get('/tender', 'TransactionController@index')->name('tender');
Route::get('/tender/{id_ruangan}/detail','TransactionController@tender')->name('tender');
Route::post('/tender/create','TransactionController@create')->name('tender.create');
//transaksi
Route::get('/transaction/{id_transaksi}','TransactionController@transaction')->name('transaction');
Route::post('/transaction/{id_transaksi}/update','TransactionController@transactionUpdate')->name('transaction.update');
Route::get('/transaction/{id_transaksi}/extra','TransactionController@transactionExtra')->name('transaction.extra');
Route::post('/transaction/{id}/extrasbook','TransactionController@extrasBook')->name('transaction.book');
Route::post('/finish', function(){
    return redirect()->route('welcome');
})->name('transaction.finish');

Route::post('/notification/handler', 'TransactionController@notificationHandler')->name('notification.handler');

//profile user
Route::get('/profile/{id}','ProfileController@index')->name('profile');
Route::get('/profile/{id}/confirm','ProfileController@confirm')->name('profile.confirm');
Route::get('/profile/{id}/cancel','ProfileController@cancel')->name('profile.cancel');
Route::get('/profile/{id}/edit','ProfileController@edit')->name('profile.edit');
Route::post('/profile/{id}/update','ProfileController@update')->name('profile.update');


Route::group(['prefix' => 'admin'], function(){
    //login & logout
    Route::get('/login','Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login','Admin\LoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('dashboard.index');
    Route::get('/logout', 'Admin\LoginController@logout')->name('admin.logout');
    Route::get('/password/reset', 'Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset/{token}', 'Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
    Route::post('/password/reset', 'Admin\ResetPasswordContoller@reset');
    //profile admin
    Route::get('/{id}/profile','DashboardController@editProfile')->name('dashboard.editProfile');
    Route::post('/{id}/profile','DashboardController@updateProfile')->name('dashboard.updateProfile');
    //change password admin
    Route::get('/{id}/password','DashboardController@editPass')->name('dashboard.editPass');
    Route::post('/{id}/password','DashboardController@updatePass')->name('dashboard.updatePass');

    //menu
    // Route::get('/dashboards','DashboardController@index')->name('dashboards');

    Route::get('/kategori','KategoriController@kategori')->name('kategori.index');
    Route::post('/kategori/create','KategoriController@create')->name('kategori.create');
    Route::get('/kategori/{id_kategori}/edit','KategoriController@edit')->name('kategori.edit');
    Route::post('/kategori/{id_kategori}/update','KategoriController@update')->name('kategori.update');
    Route::get('/kategori/{id_kategori}/delete','KategoriController@delete')->name('kategori.delete');
    
    Route::get('/ruangan','RuanganController@ruangan')->name('ruangan.index');
    Route::post('/ruangan/create','RuanganController@create')->name('ruangan.create');
    Route::get('/ruangan/{id_ruangan}/edit','RuanganController@edit')->name('ruangan.edit');
    Route::post('/ruangan/{id_ruangan}/update','RuanganController@update')->name('ruangan.update');
    Route::get('/ruangan/{id_ruangan}/delete','RuanganController@delete')->name('ruangan.delete');

    Route::get('/ulasan','UlasanController@ulasan')->name('ulasan.index');
    Route::post('/ulasan/create','UlasanController@create')->name('ulasan.create');
    Route::get('/ulasan/{id_ulasan}/edit','UlasanController@edit')->name('ulasan.edit');
    Route::post('/ulasan/{id_ulasan}/update','UlasanController@update')->name('ulasan.update');
    Route::get('/ulasan/{id_ulasan}/delete','UlasanController@delete')->name('ulasan.delete');

    Route::get('/administrator','AdminController@admin')->name('administrator.index');
    Route::post('/administrator/create','AdminController@store')->name('administrator.create');
    Route::get('/administrator/{id}/edit','AdminController@edit')->name('administrator.edit');
    Route::post('/administrator/{id}/update','AdminController@up')->name('administrator.update');
    Route::get('/administrator/{id}/delete','AdminController@delete')->name('administrator.delete');

    Route::get('/pemilik','PemilikController@pemilik')->name('pemilik.index');
    Route::post('/pemilik/create','PemilikController@store')->name('pemilik.create');
    Route::get('/pemilik/{id}/edit','PemilikController@edit')->name('pemilik.edit');
    Route::post('/pemilik/{id}/update','PemilikController@up')->name('pemilik.update');
    Route::get('/pemilik/{id}/delete','PemilikController@delete')->name('pemilik.delete');
    Route::get('/pemilik/exportexcel','PemilikController@exportExcel')->name('pemilik.excel');
    Route::get('/pemilik/exportpdf','PemilikController@exportPdf')->name('pemilik.pdf');

    Route::get('/user','UserController@user')->name('user.index');
    // Route::post('/user/create','UserController@create')->name('user.create');
    Route::get('/user/{id}/edit','UserController@edit')->name('user.edit');
    Route::post('/user/{id}/update','UserController@update')->name('user.update');
    Route::get('/user/{id}/delete','UserController@delete')->name('user.delete');

    // dropdown
    // Route::get('/myform',array('as'=>'myform','uses'=>'DependController@myform'));
    // Route::get('/myform/ajax/{id}',array('as'=>'myform.ajax','uses'=>'DependController@myformAjax'));
    // Route::get('/myform/sub/{id}',array('as'=>'myform.sub','uses'=>'DependController@myformAjaxsub'));
    Route::get('/dropdownlist','DropdownController@index');
    Route::get('/get-state-list','DropdownController@getStateList');
    Route::get('/get-city-list','DropdownController@getCityList');

    Route::get('/blog','BlogController@blog')->name('blog.index');
    Route::post('/blog/create','BlogController@create')->name('blog.create');
    Route::get('/blog/{id}/edit','BlogController@edit')->name('blog.edit');
    Route::post('/blog/{id}/update','BlogController@update')->name('blog.update');
    Route::get('/blog/{id}/delete','BlogController@delete')->name('blog.delete');

    Route::get('/portfolio','PortfolioController@port')->name('portfolio.index');
    Route::post('/portfolio/create','PortfolioController@create')->name('portfolio.create');
    Route::get('/portfolio/{id}/edit','PortfolioController@edit')->name('portfolio.edit');
    Route::post('/portfolio/{id}/update','PortfolioController@update')->name('portfolio.update');
    Route::get('/portfolio/{id}/delete','PortfolioController@delete')->name('portfolio.delete');

    Route::get('/upevent/{id_transaksi}/detail','TransaksiController@tenderDetail')->name('tender.detail');
    Route::post('/upevent/{id_transaksi}/update','TransaksiController@update')->name('tender.update');

    Route::get('/transaksisewa','TransaksiController@index')->name('transaksisewa.index');
    Route::post('/transaksisewa/{id_transaksi}/approve','TransaksiController@approve')->name('transaksisewa.approve');
    Route::post('/transaksisewa/{id_transaksi}/update','TransaksiController@update')->name('transaksisewa.update');
    Route::post('/transaksisewa/{id_transaksi}/decline','TransaksiController@decline')->name('transaksisewa.decline');
    Route::post('/transaksisewa/{id_transaksi}', 'TransaksiController@completedUpdate')->name('completedUpdate');

    Route::get('/extra','ExtraController@extra')->name('extra.index');
    Route::post('/extra/create','ExtraController@create')->name('extra.create');
    Route::get('/extra/{id}/edit','ExtraController@edit')->name('extra.edit');
    Route::post('/extra/{id}/update','ExtraController@update')->name('extra.update');
    Route::get('/extra/{id}/delete','ExtraController@delete')->name('extra.delete');
});