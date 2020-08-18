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

//Home page AKA index page
Route::get('/', 'PageController@welcome')->name('welcome');

// Route to authentication system
Auth::routes();


//Posts Routes
Route::resource('post', 'PostController');

//Category Routes
Route::resource('category', 'CategoryController');

/*COMMENTS CONTROLLER*/
Route::name('lecture.')->group(function (){
    Route::resource('lecture/comment', 'Comment\LectureCommentController', ['except' => ['create']]);
});

Route::name('supervisor.')->group(function (){
    Route::resource('supervisor/comment', 'Comment\SupervisorCommentsController', ['except', ['create']]);
});

Route::name('assistance-lecture.')->group(function (){
    Route::resource('assistance-lecture/comment', 'Comment\AssistanceCommentsController', ['except', ['create']]);
});

Route::name('tutorial-assistance.')->group(function (){
    Route::resource('tutorial-assistance/comment', 'Comment\TutorialCommentsController', ['except', ['create']]);
});


Route::name('lecture.')->group(function (){
    Route::resource('lecture/objectives', 'Lecture\LectureObjectiveController');
});


//Tags Route
Route::resource('tags', 'TagController');

//Mark Route
Route::resource('mark', 'Lecture\MarksController');

//Admin Add Users Lecture Route
Route::resource('admin/lecture', 'Admin\AddUsers\LectureController');

//Admin Add Users supervisor Route
Route::resource('admin/supervisor', 'Admin\AddUsers\SupervisorController');

//Admin Add Users Assistance lecture Route
Route::resource('admin/assistance_lecture', 'Admin\AddUsers\AssistanceLectureController');

//Admin Add Users Assistance lecture Route
Route::resource('admin/tutorial_assistance', 'Admin\AddUsers\TutorialAssistanceController');



// Redirect to registered users page
Route::get('/home', 'HomeController@index')->name('home');

//Admin Loginv10 Controller
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function (){
    Route::get('/login', 'AdminLoginController@showLoginForm')->name('login');
    Route::post('/login', 'AdminLoginController@login')->name('login.user');
    Route::get('/dashboard', function (){
        return view('admin/dashboard');
    })->name('dashboard')->middleware('auth:admin');
});

//Pages Routes
Route::get('/pages/contact', 'PageController@contact')->name('pages.contact');
Route::get('/pages/about', 'PageController@about')->name('pages.about');
Route::get('/pages/index', 'PageController@index')->name('pages.index');


//Lectures Controller
Route::namespace('Lecture')->prefix('lecture')->name('lecture.')->group(function () {
    Route::get('/login', 'LectureauthController@showLoginForm')->name('login');
    Route::post('/login', 'LectureauthController@login')->name('login-post');
    Route::get('/start', 'LecturePagesController@startPage')->name('start-page');
    Route::get('/showLectureObjectives', 'LecturePagesController@showLectObject')->name('object.show');
    Route::get('/lectureRevised', 'LecturePagesController@revised')->name('revised');
    Route::get('/reportView','LecturePagesController@reportView')->name('reportView');
});

//Assistance lecture Routes
Route::namespace('AssistanceLecture')->prefix('assistance-lecture')->name('assistance-lecture.')->group(function () {
    Route::get('/login', 'AssistanceLectureAuthController@showLoginForm')->name('login');
    Route::post('/login', 'AssistanceLectureAuthController@login')->name('login-post-two');
    Route::get('/start', 'AssistanceLecturePagesController@startPage')->name('start');
});


//Assistance Tutorial Routes
Route::namespace('AssistanceTutorial')->prefix('assistance-tutorial')->name('assistance-tutorial.')->group(function () {
    Route::get('/login', 'AssistanceTutorialAuthController@showLoginForm')->name('login');
    Route::post('/login', 'AssistanceTutorialAuthController@login')->name('login-post-two');
    Route::get('/start', 'AssistanceTutorialPagesController@startPage')->name('start');
    Route::post('/changePassword', 'AssistanceTutorialPagesController@changePassword')->name('changePassword');
    Route::get('/createPassword', 'AssistanceTutorialPagesController@createPassword')->name('createPassword');
});

//Assistance Supervisor Routes
Route::namespace('Supervisor')->prefix('supervisor')->name('supervisor.')->group(function () {
    Route::get('/login', 'SupervisorAuthController@showLoginForm')->name('login');
    Route::post('/login', 'SupervisorAuthController@login')->name('login-post-two');
    Route::get('/start', 'SupervisorPagesController@startPage')->name('start');
    Route::get('/section_one', 'SupervisorPagesController@section_one')->name('section_one');
    Route::get('/all_lectures', 'SupervisorPagesController@allUsers')->name('all_lectures');
    Route::get('/lecture_view/{id}', 'SupervisorPagesController@lecture_view')->name('lecture_view');
    Route::resource('attributes', 'AttributesController');
    Route::resource('/marks', 'MarksController', ['except' => ['show', 'index', 'create', 'edit', 'store', 'destroy']]);
});

Route::namespace('Lecture')->name('lecture.target.')->group(function (){
    Route::get('lectureStore/targets', 'StoreObjectiveController@create')->name('create');
    Route::post('lectureStore/targets/', 'StoreObjectiveController@storeData')->name('store');
});


Route::resource('attributes', 'Lecture\Attributes');

Route::resource('/adminReport', 'Admin\UserReportController');

