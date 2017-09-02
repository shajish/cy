<?php

use Illuminate\Http\Request;

$api = app('Dingo\Api\Routing\Router');


$api->version('v1', function ($api) {
    $api->get('test',function(){
        echo "test";
    });
});

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// /* REGISTER */
// /* VIEW */
// /*Route::group(['middleware' => 'jwt.auth', 'user'], function ()*/ /*{*/

//     Route::get('userlist', 'RegisterController@userlist');
//     Route::get('/view/{id}', 'RegisterController@view');

// /*});*/

// Route::post('register', 'RegisterController@register');


// /*Route::group(['middleware'=>'jwt.auth'],function(){*/

// Route::get('/viewEducation/{user_id}', 'RegisterController@viewEducation');
// Route::get('/viewProfession/{user_id}', 'RegisterController@viewProfession');
// Route::get('/viewContact/{user_id}', 'RegisterController@viewContact');
// Route::get('/viewInterest/{user_id}', 'RegisterController@viewInterest');
// Route::get('/viewBusiness/{user_id}', 'RegisterController@viewBusiness');
// Route::get('/viewExperience/{user_id}', 'RegisterController@viewExperience');
// /*});*/


// /*  DELETE */
// Route::middleware(['jwt.auth', 'admin'])->group(function () {

//     Route::delete('/delete/{user_id}', 'RegisterController@deleteUser');
//     Route::delete('/delete/user/{user_id}/education/{education_id}', 'RegisterController@deleteEducation');
//     Route::delete('/delete/user/{user_id}/profession/{profession_id}', 'RegisterController@deleteProfession');
//     Route::delete('/delete/user/{user_id}/contact/{contact_id}', 'RegisterController@deleteContact');
//     Route::delete('/delete/user/{user_id}/interest/{interest_id}', 'RegisterController@deleteInterest');
//     Route::delete('/delete/user/{user_id}/business/{business_id}', 'RegisterController@deleteBusiness');
//     Route::delete('/delete/user/{user_id}/experience/{experience_id}', 'RegisterController@deleteExperience');

// });

// /* UPDATE */
// Route::put('/update/user/{id}', 'RegisterController@updateUser');
// Route::put('/update/user/{user_id}/education/{education_id}', 'RegisterController@updateEducation');
// Route::put('/update/user/{user_id}/profession/{profession_id}', 'RegisterController@updateProfession');
// Route::put('/update/user/{user_id}/interest/{interest_id}', 'RegisterController@updateInterest');
// Route::put('/update/user/{user_id}/business/{business_id}', 'RegisterController@updateBusiness');
// Route::put('/update/user/{user_id}/contact/{contact_id}', 'RegisterController@updateContact');
// Route::put('/update/user/{user_id}/experience/{experience_id}', 'RegisterController@updateExperience');

// /* INSERT */
// Route::post('/insert/user/{user_id}/profession', 'RegisterController@insertProfession');
// Route::post('/insert/user/{user_id}/education', 'RegisterController@insertEducation');
// Route::post('/insert/user/{user_id}/contact', 'RegisterController@insertContact');
// Route::post('/insert/user/{user_id}/interest', 'RegisterController@insertInterest');
// Route::post('/insert/user/{user_id}/business', 'RegisterController@insertBusiness');
// Route::post('/insert/user/{user_id}/experience', 'RegisterController@insertExperience');

// /* Auth */
// Route::post('auth/login', 'AuthController@login');
// Route::get('/authuser', 'AuthController@getAuthUser');

// /* COMMUNITY */
// Route::post('/verify/user', ['uses' => 'CommunityController@verifyGuestToMember']);
// Route::post('/registercommunity', 'CommunityController@register');

// /* list */
// Route::get('/listcommunity', 'CommunityController@listcommunity');

// /* view delete update */
// Route::get('/viewcommunity/{id}', 'CommunityController@view');
// Route::delete('/deletecommunity/{id}', 'CommunityController@delete');
// Route::post('/updatecommunity/community/{id}', 'CommunityController@update');


// /* SEARCH */

// Route::post('/search', 'SearchController@Search');


// //EventController
// //Route::post('/verify/user', ['uses' => 'CommunityController@verifyGuestToMember']);
// Route::post('insert/user/{user_id}/registerevent', 'EventController@register');
// Route::get('/listevent', 'EventController@list');
// Route::get('/viewevent/{id}', 'EventController@view');
// Route::delete('/deleteevent/{id}', 'EventController@delete');
// Route::post('/updateevent/event/{id}', 'EventController@update');


// /* News */
// Route::post('insert/user/{user_id}/registernews', 'NewsController@register');
// Route::get('/listnews', 'NewsController@list');
// Route::get('/viewnews/{id}', 'NewsController@view');
// Route::delete('/deletenews/{id}', 'NewsController@delete');
// Route::post('/updatenews/news/{id}', 'NewsController@update');


// /* Location */
// /*$api->group(['prefix' => 'address'], function($api){

//     $api->get('/country', ['uses' => 'AddressController@getCountries']);

//     $api->get('/province/{id}', ['uses' => 'AddressController@getProvinceByCountry']);
//     $api->get('/provinces/{country}', ['uses' => 'AddressController@getProvinceByCountryName']);
//     $api->get('/province', ['uses' => 'AddressController@getProvince']);

//     $api->get('/zone/{id}', ['uses' => 'AddressController@getZoneByCountry']);
//     $api->get('/zones/{country}', ['uses' => 'AddressController@getZoneByCountryName']);
//     $api->get('/zone', ['uses' => 'AddressController@getZones']);

//     $api->get('/district/{id}', ['uses' => 'AddressController@getDistrictByZone']);
//     $api->get('/districts/{zone}', ['uses' => 'AddressController@getDistrictByZoneName']);
//     $api->get('/district', ['uses' => 'AddressController@getDistricts']);

//     $api->get('/city/{id}', ['uses' => 'AddressController@getCityByDistrict']);
//     $api->get('/cities/{district}', ['uses' => 'AddressController@getCityByDistrictName']);
//     $api->get('/city', ['uses' => 'AddressController@getCities']);

// });*/


