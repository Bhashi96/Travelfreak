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
    return view('pages.home1');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/map', function () {
    return view('pages.map');
});


Route::get('/login', function () {
    return view('pages.login');
});

Route::get('/threads/forumeqp', function () {
    $threads=App\Thread::paginate(15);
    return view('threads.forumeqp',['threads'=>$threads]);
});

Route::get('/threads/forumall', function () {
    $threads=App\Thread::paginate(15);
    return view('threads.forumall',['threads'=>$threads]);
});

Route::get('/threads/forumvehicle', function () {
    $threads=App\Thread::paginate(15);
    return view('threads.forumvehicle',['threads'=>$threads]);
});
Route::get('/threads/forumothers', function () {
    $threads=App\Thread::paginate(15);
    return view('threads.forumothers',['threads'=>$threads]);
});

Route::get('/threads/forumapart', function () {
    $threads=App\Thread::paginate(15);
    
    return view('threads.forumapart',['threads'=>$threads]);
});

Route::resource('/thread','ThreadController');

Route::get('/registrations/driver', function () {
    return view('pages.registrations.driver_reg');
});

Route::get('/registrations/tourist', function () {
    return view('pages.registrations.tourist_reg');
});

Route::get('/registrations/guide', function () {
    return view('pages.registrations.guide_reg');
});

Route::get('/registrations/eqprovider', function () {
    return view('pages.registrations.eqp_reg');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth','gud']], function(){


    Route::get('/gudhome', function () {
        return view('pages.gudhome');
    });
    
    Route::get('/drvhome', function () {
        return view('pages.drvhome');
    });
    
    Route::get('/eqphome', function () {
        return view('pages.eqphome');
    });

     Route::get('/admin_home', 'AdminController@index');
    
    

});


Route::get('/tourist_delect/{id}','AdminController@tourist_delete');
Route::get('/guide_delect/{id}','AdminController@guide_delete');
Route::get('/driver_delect/{id}','AdminController@driver_delete');
Route::get('/equipment_delect/{id}','AdminController@equipment_delete');



Route::get('/admin_guide_booking_results', 'AdminController@booking_guide');
Route::get('/admin_driver_booking_results', 'AdminController@booking_driver');
Route::get('/booking_equipment', 'AdminController@booking_equipment');

//Route::get('/admin_home', 'AdminController@index');


Route::get('/serviceprovider/drveditdetails', function () {
    return view('serviceprovider.drvedit');
});

Route::get('/serviceprovider/gudeditdetails', function () {
    return view('serviceprovider.gudedit');
});

Route::get('/serviceprovider/eqpeditdetails', function () {
    return view('serviceprovider.eqpedit');
});


Route::get('/driver_home' , function(){
    return view('pages.driver_home');
    
});

Route::get('/driver_profile' , function(){
    return view('pages.driver_profile');
});

//Route::get('/feedback' , function(){
//    return view('tourist.booking_form.feedback');
//});

Route::get('/root', function () {
    return view('pages.home1');
});

/*
Route::get('/search_page' , function(){
    return view('tourist.home.search_page');
}); */

//Route::resource('search','SearchController');
//Route::get('search/{}','SearchController@index');
Route::post('/search_page', 'SearchController@filter');

Route::get('/user_profile', 'ProfileController@index1');

Route::get('/user_profile_edit','ProfileController@index2');
Route::post('/user_profile_edit/{id}','ProfileController@update')->name('update-tourist');


Route::resource('guides','GuidesController');
Route::resource('guidebooking' , 'GuideBookingController');
Route::get('/guidebooks/{id}','GuideBookingController@index2');

Route::resource('drivers','DriversController');
Route::resource('driverbooking' , 'DriverBookingController');
Route::get('/driverbooks/{id}','DriverBookingController@index2');

Route::resource('equipment','EquipmentController');
Route::resource('equipmentbooking' , 'EquipmentBookingController');
Route::get('/equipmentbooks/{id}','EquipmentBookingController@index2');


//Route::get('/status/{id}','FeedbackController@index3')->name('status');
Route::get('/status_guide/{id,id2}','FeedbackGuideController@index2')->name('status_guide');
Route::get('/feedbackmsg_guide/{id}' , 'FeedbackGuideController@index1');
//Route::get('/feedbackmsg/{id}' , 'FeedbackController@index2');
Route::post('/booking_form/feedback_guide' , 'FeedbackGuideController@create');

Route::get('/status_driver/{id}','FeedbackDriverController@index2')->name('status_driver');
Route::get('/feedbackmsg_driver/{id}' , 'FeedbackDriverController@index1');

Route::post('/booking_form/feedback_driver' , 'FeedbackDriverController@create');
// Route::get('/status' , function(){
//     return view('tourist.status.waiting');
// })->name('status'); 

Route::get('/status_equipment/{id}','FeedbackEquipmentController@index2')->name('status_equipment');
Route::get('/feedbackmsg_equipment/{id}' , 'FeedbackEquipmentController@index1');

Route::post('/booking_form/feedback_equipment' , 'FeedbackEquipmentController@create');

