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

use Illuminate\Support\Facades\Auth;

Route::get('/', function () {

    return view('main.home');
});

Route::get('/home', function () {

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







Route::resource('articles', 'ArticlesController');


Route::post('/formInput', 'Controller@formSubmit');




Auth::routes();


Route::get('/logout', function() {
    Auth::logout();
    return redirect('/');
});
Route::get('/register', '\App\Http\Controllers\Auth\LoginController@showLoginForm');



Route::get('/volunteer/login', 'Auth\LoginController@showVolunteerLoginForm');
Route::get('/volunteer/register', 'Auth\RegisterController@showVolunteerRegisterForm');


Route::post('/volunteer/login', 'Auth\LoginController@volunteerLogin')->name('volunteerLogin');
Route::post('/volunteer/register', 'Auth\RegisterController@createVolunteer')->name('volunteerRegister');





Route::group(['middleware' => 'auth.volunteer'], function () {
    Route::get('/volunteer/dashboard', function(){
        return view('volunteer.dashboard');
    });
    Route::get('/volunteer/classroom_signup', 'LessonsController@index')->name('lessonsIndex');
    Route::get('volunteer/lessons/signup/{id}', 'LessonsController@signUp');
    Route::get('volunteer/lessons/cancel/{id}', 'LessonsController@cancel');
    Route::get('/volunteer/classroom_show', 'LessonsController@show')->name('lessonsShow');
    Route::get('/volunteer/logout', 'Auth\LoginController@userLogout');
});


Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin', 'ArticlesController@blogAdmin');
    Route::get('/lessons/create', 'LessonsController@create');
    Route::post('/lessons/create', 'LessonsController@store');
    Route::get('/lessons/edit/{id}', 'LessonsController@edit');
    Route::patch('/lessons/edit/{id}', 'LessonsController@update');
    Route::get('/lessons/delete/{id}', 'LessonsController@destroy');
    Route::get('/lessons/list', 'LessonsController@list');

    Route::get('/directory', '\App\Http\Controllers\Auth\LoginController@directory');


    Route::get('/volunteer/directory/getvolunteer/', 'Controller@getVolunteerDetails');
});





