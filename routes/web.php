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
    return view('main.home');
});


Route::get('/about', function () {

    return view('main.about');
});

Route::get('/contact', function () {
    return view('main.contact');
});


Route::get('/form', function () {
    return view('main.form');
});



Route::get('/privacy', function () {
    return view('main.privacy');
});

Route::get('/blog', function () {
    return view('main.blog');
});

Route::get('/volunteer', function () {
    return view('main.getinvolved.volunteer');
});

Route::get('/orientation', function () {
    return view('main.getinvolved.orientation');
});


Route::get('/classroom', function () {
    return view('main.programmes.classroom');
});

Route::get('/tutor', function () {
    return view('main.programmes.tutor');
});



Route::get('/blog', 'ArticlesController@index');


Route::get('/admin', 'ArticlesController@blogAdmin');


Route::resource('articles', 'ArticlesController');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');




Route::post('/formInput', 'Controller@formSubmit');










