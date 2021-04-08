<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('/', 'BlueciateController@index')->name('home');
Route::get('/cloud', 'BlueciateController@cloud')->name('cloud');
Route::get('/products', 'BlueciateController@products')->name('products');
Route::get('/consulting', 'BlueciateController@consulting')->name('consulting');
Route::get('/app-store', 'BlueciateController@login')->name('app-store');
Route::get('/application-integration', 'BlueciateController@applicationIntegration')->name('application-integration');
Route::get('/internet-of-things', 'BlueciateController@internetOfThings')->name('internet-of-things');
Route::get('/Services/Website-development', 'BlueciateController@websiteDevelopment')->name('website-development');
Route::get('/Services/Staffing', 'BlueciateController@staffing')->name('staffing');
Route::get('/small-business', 'BlueciateController@smallBusiness')->name('small-business');
Route::get('/analytics', 'BlueciateController@analytics')->name('analytics');
Route::get('/cloud-apps-api', 'BlueciateController@cloudAppsApi')->name('cloud-apps-api');
Route::get('/monitoring', 'BlueciateController@monitoring')->name('monitoring');
Route::get('/Policies/Privacy-Policy', 'BlueciateController@privacyPolicy')->name('privacy-policy');
Route::get('/Policies/Refund-Policy', 'BlueciateController@refundPolicy')->name('refund-policy');
Route::get('/Policies/Terms-Conditions', 'BlueciateController@termsConditions')->name('terms-conditions');
Route::get('/Policies/EULA', 'BlueciateController@eula')->name('eula');
Route::get('/about-us', 'BlueciateController@aboutUs')->name('about-us');
Route::get('/contact-us', 'BlueciateController@contactUs')->name('contact-us');
Route::post('/contact-us', 'BlueciateController@contactUsMail')->name('contact-us');
Route::get('/clients', 'BlueciateController@clients')->name('clients');
Route::get('/partnerships', 'BlueciateController@partnerships')->name('partnerships');
Route::get('/bpm', 'BlueciateController@bpm')->name('bpm');
Route::get('/crm', 'BlueciateController@crm')->name('crm');
Route::get('/bpms-webinar', 'BlueciateController@bpmsWebinar')->name('bpmsWebinar');
Route::post('/bpms-webinar', 'BlueciateController@bpmsWebinarMail')->name('bpmsWebinarMail');
Route::get('/bpms-ready', 'BlueciateController@bpmsReady')->name('bpmsReady');
Route::post('/bpms-ready', 'BlueciateController@bpmsReadyMail')->name('bpmsReadyMail');
Route::get('/univergeblue', 'BlueciateController@univergeBlue')->name('univerge-blue');
Route::get('/remote-work', 'BlueciateController@remoteWork')->name('remote-work');
Route::post('/remote-work-mail', 'BlueciateController@remoteWorkMail')->name('remote-work-mail');
Route::get('/cloud-digital', 'BlueciateController@cloudDigital')->name('cloud-digital');
Route::get('/iot', 'BlueciateController@iot')->name('iot');
