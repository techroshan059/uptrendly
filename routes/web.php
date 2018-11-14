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
    return view('frontend.home');
});

Route::get('{any}', function () {
    return view('frontend.home');
});


Auth::routes();


Route::get('/dashboard', 'Backend\HomeController@index')->name('admin.dashboard');

//for profession - Admin
Route::get('admin/profession','Backend\CmsManagement\ProfessionController@index')->name('admin.profession.index');
Route::get('admin/profession/addnew','Backend\CmsManagement\ProfessionController@create');
Route::post('admin/profession/addnew','Backend\CmsManagement\ProfessionController@store');
Route::get('admin/profession/edit/{id}','Backend\CmsManagement\ProfessionController@edit');
Route::post('admin/profession/edit/{id}','Backend\CmsManagement\ProfessionController@update');
Route::get('admin/profession/delete/{id}','Backend\CmsManagement\ProfessionController@destroy');


//for faqs - Admin
Route::get('admin/faqs','Backend\CmsManagement\FaqsController@index')->name('admin.faqs.index');
Route::get('admin/faqs/addnew','Backend\CmsManagement\FaqsController@create');
Route::post('admin/faqs/addnew','Backend\CmsManagement\FaqsController@store');
Route::get('admin/faqs/edit/{id}','Backend\CmsManagement\FaqsController@edit');
Route::post('admin/faqs/edit/{id}','Backend\CmsManagement\FaqsController@update');
Route::get('admin/faqs/delete/{id}','Backend\CmsManagement\FaqsController@destroy');


//for testimonial - Admin
Route::get('admin/testimonials','Backend\CmsManagement\TestimonialsController@index')->name('admin.Testimonials.index');
Route::get('admin/testimonials/addnew','Backend\CmsManagement\TestimonialsController@create');
Route::post('admin/testimonials/addnew','Backend\CmsManagement\TestimonialsController@store');
Route::get('admin/testimonials/edit','Backend\CmsManagement\TestimonialsController@edit');
Route::post('admin/testimonials','Backend\CmsManagement\TestimonialsController@update');
Route::delete('admin/testimonials/delete/{id}','Backend\CmsManagement\TestimonialsController@destroy');

Route::get('admin/dashboard', 'Backend\HomeController@index')->name('admin.dashboard');

