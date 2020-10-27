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
    return view('front.index');
});

Route::namespace('front')->group(function(){

    Route::get('/' , 'HomeController@index')->name('front.homepage') ;


    Route::get('/allCourses' , 'CourseController@allCourses')->name('front.allCourses') ;
    Route::get('/allCourses/search' , 'CourseController@search')->name('front.allCourses.search');



    Route::get('/cat/{id}' , 'CourseController@cat')->name('front.courseCat') ;
    Route::get('/cat/{id}/course/{c_id}' , 'CourseController@show')->name('front.show') ;

    Route::get('/contact' , 'ContactController@index')->name('front.contact') ;

    Route::post('/messages/newsletter' , 'MessageController@newsletter')->name('front.message.newsletter') ;

    Route::post('/messages/contact' , 'MessageController@contact')->name('front.message.contact') ;

    Route::post('/messages/enroll' , 'MessageController@enroll')->name('front.message.enroll') ;


});


Route::namespace('admin')->prefix('dashboard')->group(function(){

    Route::get('/login' , 'AuthController@login')->name('admin.login') ;
    Route::post('/do-login' , 'AuthController@doLogin')->name('admin.dologin') ;


    Route::get('login/facebook', 'AuthController@redirectToProvider');
    Route::get('login/facebook/callback', 'AuthController@handleProviderCallback');



    Route::middleware('adminAuth:admin')->group(function(){

        Route::get('/logout' , 'AuthController@logout')->name('admin.logout') ;
        Route::get('/' , 'HomeController@index')->name('admin.homepage') ;


        // Categories CRUD

        Route::get('/categories' , 'CategoryController@index')->name('cats') ;
        Route::get('/categories/create' , 'CategoryController@create')->name('cats.create') ;
        Route::post('/categories/store' , 'CategoryController@store')->name('cats.store') ;

        Route::get('/categories/edit/{id}' , 'CategoryController@edit')->name('cats.edit') ;
        Route::post('/categories/update/{id}' , 'CategoryController@update')->name('cats.update') ;

        Route::get('/categories/delete/{id}' , 'CategoryController@delete')->name('cats.delete') ;




        // trainers CRUD

        Route::get('/trainers' , 'TrainerController@index')->name('trainers') ;
        Route::get('/trainers/create' , 'TrainerController@create')->name('trainers.create') ;
        Route::post('/trainers/store' , 'TrainerController@store')->name('trainers.store') ;

        Route::get('/trainers/edit/{id}' , 'TrainerController@edit')->name('trainers.edit') ;
        Route::post('/trainers/update/{id}' , 'TrainerController@update')->name('trainers.update') ;

        Route::get('/trainers/delete/{id}' , 'TrainerController@delete')->name('trainers.delete') ;



        // courses CRUD

        Route::get('/courses' , 'CourseController@index')->name('courses') ;
        Route::get('/courses/create' , 'CourseController@create')->name('courses.create') ;
        Route::post('/courses/store' , 'CourseController@store')->name('courses.store') ;

        Route::get('/courses/edit/{id}' , 'CourseController@edit')->name('courses.edit') ;
        Route::post('/courses/update/{id}' , 'CourseController@update')->name('courses.update') ;

        Route::get('/courses/delete/{id}' , 'CourseController@delete')->name('courses.delete') ;




        // students CRUD

        Route::get('/students' , 'StudentController@index')->name('students') ;
        Route::get('/students/create' , 'StudentController@create')->name('students.create') ;
        Route::post('/students/store' , 'StudentController@store')->name('students.store') ;

        Route::get('/students/edit/{id}' , 'StudentController@edit')->name('students.edit') ;
        Route::post('/students/update/{id}' , 'StudentController@update')->name('students.update') ;

        Route::get('/students/delete/{id}' , 'StudentController@delete')->name('students.delete') ;

        Route::get('/students/showCourses/{id}' , 'StudentController@showCourses')->name('students.showCourses') ;

        Route::get('/students/{id}/courses/{c_id}/approve' , 'StudentController@approveCourse')->name('students.approveCourse') ;
        Route::get('/students/{id}/courses/{c_id}/reject' , 'StudentController@rejectCourse')->name('students.rejectCourse') ;


        Route::get('/students/{id}/addToCourse' , 'StudentController@addToCourse')->name('students.addToCourse') ;
        Route::post('/students/{id}/store' , 'StudentController@storeCourse')->name('students.storeCourse') ;




    });







} );





