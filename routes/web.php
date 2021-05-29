<?php

use App\Http\Controllers\WhyhomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', 'FrontendController@index')->name('index');
Route::get('about', 'FrontendController@about')->name('about');
Route::get('testimonial', 'FrontendController@testimonial')->name('testimonial');
Route::get('faq', 'FrontendController@faq')->name('faq');
Route::post('visitor/message/post', 'FrontendController@visitormessagepost')->name('visitormessagepost');
Route::post('subscriber/email', 'FrontendController@subscriberemail')->name('subscriberemail');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
Route::get('user/delete/{user_id}', 'HomeController@userdelete')->name('user.delete');
Route::get('visitor/messages', 'HomeController@visitormessages')->name('visitormessages');
Route::post('visitor/messages/delete/{id}', 'HomeController@visitormessagedelete')->name('visitormessagedelete');
Route::get('subscribers', 'HomeController@subscribers')->name('subscribers');
Route::post('subscribers/delete/{id}', 'HomeController@subscribersdelete')->name('subscribersdelete');
Route::get('about/btn/link', 'HomeController@aboutbtnlink')->name('aboutbtnlink');
Route::get('about/btn/link/update/{id}', 'HomeController@aboutbtnlinkupdate')->name('aboutbtnlinkupdate');
Route::post('about/btn/link/update/{id}', 'HomeController@aboutbtnlinkupdatepost')->name('aboutbtnlinkupdatepost');
Route::get('logo', 'HomeController@logo')->name('logo');
Route::get('logo/update/{id}', 'HomeController@logoupdate')->name('logoupdate');
Route::post('logo/update/post/{id}', 'HomeController@logoupdatepost')->name('logoupdatepost');
Route::get('home/about/banner', 'HomeController@homeaboutbanner')->name('homeaboutbanner');
Route::get('home/about/banner/update/{id}', 'HomeController@homeaboutbannerupdate')->name('homeaboutbannerupdate');
Route::post('home/about/banner/update/post/{id}', 'HomeController@homeaboutbannerupdatepost')->name('homeaboutbannerupdatepost');

// Profile controller route start
Route::resource('profile','ProfileController');
Route::post('profile/name/post', 'ProfileController@profilenamechange')->name('profile.name.post');
Route::post('profile/photo/post', 'ProfileController@profilephotopost')->name('profile.photo.post');
Route::post('profile/password/post', 'ProfileController@profilepasswordpost')->name('profile.password.post');


//home banner controller route
Route::get('deshboard/home/banner', 'HomebannerController@index')->name('home.bannner.index');
Route::post('deshboard/home/banner/update', 'HomebannerController@update')->name('home.bannner.update');

//home banner controller route
Route::get('deshboard/home/about', 'HomeaboutController@index')->name('home.about.index');
Route::post('deshboard/home/about/update', 'HomeaboutController@update')->name('home.about.update');

//home banner controller route
Route::get('deshboard/home/social', 'HomesocialController@index')->name('home.social.index');
Route::post('deshboard/home/social/store', 'HomesocialController@store')->name('home.social.store');
Route::get('deshboard/home/social/delete/{id}', 'HomesocialController@delete')->name('home.social.delete');
Route::post('deshboard/home/social/update/{id}', 'HomesocialController@update')->name('home.social.update');
Route::get('deshboard/home/social/show/{id}', 'HomesocialController@show')->name('home.social.show');

// TestimonialController route
Route::get('deshboard/testimonial', 'TestimonialController@index')->name('home.tesi.index');
Route::post('deshboard/testimonial/store', 'TestimonialController@store')->name('home.testi.store');
Route::get('deshboard/testimonial/delete/{id}', 'TestimonialController@delete')->name('home.testi.delete');
Route::post('deshboard/testimonial/update/{id}', 'TestimonialController@update')->name('home.testi.update');
Route::get('deshboard/testimonial/show/{id}', 'TestimonialController@show')->name('home.testi.show');

// AboutserviceController route
Route::get('deshboard/about/service', 'AboutserviceController@index')->name('aboutservice.index');
Route::post('deshboard/about/service/store', 'AboutserviceController@store')->name('aboutservice.store');
Route::get('deshboard/about/service/delete/{id}', 'AboutserviceController@delete')->name('aboutservice.delete');
Route::post('deshboard/about/service/update/{id}', 'AboutserviceController@update')->name('aboutservice.update');
Route::get('deshboard/about/service/show/{id}', 'AboutserviceController@show')->name('aboutservice.show');

// AboutmethodController route
Route::get('deshboard/about/method', 'AboutmethodController@index')->name('about.method.index');
Route::post('deshboard/about/method/store', 'AboutmethodController@store')->name('about.method.store');
Route::get('deshboard/about/method/delete/{id}', 'AboutmethodController@delete')->name('about.method.delete');
Route::post('deshboard/about/method/update/{id}', 'AboutmethodController@update')->name('about.method.update');
Route::get('deshboard/about/method/show/{id}', 'AboutmethodController@show')->name('about.method.show');

//hwy home controller route is here
Route::get('deshboard/home/whynewb', 'WhyhomeController@index')->name('why.newb.index');
Route::post('deshboard/home/whynewb/store', 'WhyhomeController@store')->name('why.newb.store');
Route::post('deshboard/home/whynewb/update/{id}', 'WhyhomeController@update')->name('why.newb.update');
Route::get('deshboard/home/whynewb/show/{id}', 'WhyhomeController@show')->name('why.newb.show');
Route::get('deshboard/home/whynewb/delete/{id}', 'WhyhomeController@delete')->name('why.newb.delete');

//hwy RoadmapController route is here
Route::get('deshboard/home/roadmap', 'RoadmapController@index')->name('why.roadmap.index');
Route::post('deshboard/home/roadmap/store', 'RoadmapController@store')->name('why.roadmap.store');
Route::post('deshboard/home/roadmap/update/{id}', 'RoadmapController@update')->name('why.roadmap.update');
Route::get('deshboard/home/roadmap/show/{id}', 'RoadmapController@show')->name('why.roadmap.show');
Route::post('deshboard/home/roadmap/delete/{id}', 'RoadmapController@delete')->name('why.roadmap.delete');


//hwy RiskController route is here
Route::get('deshboard/home/risk/disclosure', 'RiskController@index')->name('why.risk.index');
Route::post('deshboard/home/risk/disclosure/store', 'RiskController@store')->name('why.risk.store');
Route::get('deshboard/home/risk/disclosure/update', 'RiskController@update')->name('why.risk.update');
Route::get('deshboard/home/risk/disclosure/show/{id}', 'RiskController@show')->name('why.risk.show');
Route::get('deshboard/home/risk/disclosure/delete/{id}', 'RiskController@delete')->name('why.risk.delete');

//FaqheaderController route is here
Route::get('deshboard/home/faq/header', 'FaqheaderController@index')->name('why.faq.header.index');
Route::post('deshboard/home/faq/header/store', 'FaqheaderController@store')->name('why.faq.header.store');
Route::get('deshboard/home/faq/header/update', 'FaqheaderController@update')->name('why.faq.header.update');
Route::get('deshboard/home/faq/header/show/{id}', 'FaqheaderController@show')->name('why.faq.header.show');
Route::get('deshboard/home/faq/header/delete/{id}', 'FaqheaderController@delete')->name('why.faq.header.delete');

//FaqheaderController route is here
Route::get('deshboard/home/faq/list', 'FaqquestionController@index')->name('why.faq.list.index');
Route::post('deshboard/home/faq/list/store', 'FaqquestionController@store')->name('why.faq.list.store');
Route::post('deshboard/home/faq/list/update/{id}', 'FaqquestionController@update')->name('why.faq.list.update');
Route::get('deshboard/home/faq/list/show/{id}', 'FaqquestionController@show')->name('why.faq.list.show');
Route::get('deshboard/home/faq/list/delete/{id}', 'FaqquestionController@delete')->name('why.faq.list.delete');

//FaqheaderController route is here
Route::get('deshboard/home/team/header', 'TeamheaderController@index')->name('team.header.index');
Route::post('deshboard/home/team/header/store', 'TeamheaderController@store')->name('team.header.store');




//TeamController

Route::resource('home/team', 'TeamController');
Route::get('home/team/heading/update/{id}', 'TeamController@teamheadingupdate')->name('teamheadingupdate');
Route::post('home/team/heading/update/post/{id}', 'TeamController@teamheadingupdatepost')->name('teamheadingupdatepost');