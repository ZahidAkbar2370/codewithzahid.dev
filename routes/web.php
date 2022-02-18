<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\SuperAdminRoleCheck;
use App\Http\Controllers\GoogleController;


//Tutorial
Route::get("tutorial/{language_id}","App\TutorialController@byLanguage");
Route::get("documentation/{id}","App\TutorialController@byTutorial");

//Home
    Route::get("/", "App\HomeController@homePage");


//lectures
Route::get("lectures", "App\LectureController@index");
Route::get("lecture-detail/{id}", "App\LectureController@lectureDetail");

Route::get("pdf-courses","App\PdfCourseController@index");
//contact us
Route::get("contact-us","App\ContactUsController@create");
Route::post("save-contact-us","App\ContactUsController@store");

Route::get('about-me', function () {
    return view('App.Page.about_me');
});

Route::get('registration', function () {
    return view('App.Page.course_registration');
});
Route::post("registration","App\RegistrationController@store");

Route::get('test', function () {
    return view('test');
});
Route::get('post/{id}', function () {
    return view('post');
});

//login with google
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);


Route::middleware([SuperAdminRoleCheck::class])->group(function(){
    
        Route::get('admin', function () {
            return view('Admin.layout');
        });

    // Route::prefix('admin')->group(function() {

        //User
        Route::get("add-user","Admin\UserController@create");
        Route::post("save-user","Admin\UserController@store");
        Route::get("view-users","Admin\UserController@index");
        Route::get("edit-user/{id}","Admin\UserController@edit");
        Route::post("update-user/{id}","Admin\UserController@update");
        Route::get("delete-user/{id}","Admin\UserController@destroy");
        Route::get("active-user/{id}","Admin\UserController@active");
        Route::get("inactive-user/{id}","Admin\UserController@inactive");

        //Language
        Route::get("add-language","Admin\LanguageController@create");
        Route::post("save-language","Admin\LanguageController@store");
        Route::get("view-languages","Admin\LanguageController@index");
        Route::get("edit-language/{id}","Admin\LanguageController@edit");
        Route::post("update-language/{id}","Admin\LanguageController@update");
        Route::get("delete-language/{id}","Admin\LanguageController@destroy");

        //Lecture
        Route::get("add-lecture","Admin\LectureController@create");
        Route::post("save-lecture","Admin\LectureController@store");
        Route::get("view-lectures","Admin\LectureController@index");
        Route::get("edit-lecture/{id}","Admin\LectureController@edit");
        Route::post("update-lecture/{id}","Admin\LectureController@update");
        Route::get("delete-lecture/{id}","Admin\LectureController@destroy");
        Route::get("active-lecture/{id}","Admin\LectureController@active");
        Route::get("inactive-lecture/{id}","Admin\LectureController@inactive");

        //Interview
        Route::get("add-interview","Admin\InterviewController@create");
        Route::post("save-interview","Admin\InterviewController@store");
        Route::get("view-interviews","Admin\InterviewController@index");
        Route::get("edit-interview/{id}","Admin\InterviewController@edit");
        Route::post("update-interview/{id}","Admin\InterviewController@update");
        Route::get("delete-interview/{id}","Admin\InterviewController@destroy");
        Route::get("active-interview/{id}","Admin\InterviewController@active");
        Route::get("inactive-interview/{id}","Admin\InterviewController@inactive");

        //PDF Course
        Route::get("add-pdf-course","Admin\PdfCourseController@create");
        Route::post("save-pdf-course","Admin\PdfCourseController@store");
        Route::get("view-pdf-courses","Admin\PdfCourseController@index");
        Route::get("edit-pdf-course/{id}","Admin\PdfCourseController@edit");
        Route::post("update-pdf-course/{id}","Admin\PdfCourseController@update");
        Route::get("delete-pdf-course/{id}","Admin\PdfCourseController@destroy");
        Route::get("active-pdf-course/{id}","Admin\PdfCourseController@active");
        Route::get("inactive-pdf-course/{id}","Admin\PdfCourseController@inactive");

        //PDF Course
        Route::get("add-documentation","Admin\DocumentationController@create");
        Route::post("save-documentation","Admin\DocumentationController@store");
        Route::get("view-documentations","Admin\DocumentationController@index");
        Route::get("edit-documentation/{id}","Admin\DocumentationController@edit");
        Route::post("update-documentation/{id}","Admin\DocumentationController@update");
        Route::get("delete-documentation/{id}","Admin\DocumentationController@destroy");
        Route::get("active-documentation/{id}","Admin\DocumentationController@active");
        Route::get("inactive-documentation/{id}","Admin\documentationController@inactive");

        //Message
        Route::get("view-messages","Admin\MessageController@index");
        Route::get("delete-message/{id}","Admin\MessageController@destroy");

        //Email
        Route::get("composer-email","Admin\EmailController@create");
        Route::post("send-email","Admin\EmailController@store");

        //Registration
        Route::get("view-registrations","Admin\RegistrationController@index");

        //SMS
        Route::get("send-sms","Admin\SMSController@create");
        Route::post("send-sms","Admin\SMSController@sendSMS");

    // });
    
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
