<?php
use Illuminate\Http\Request;
$api = app('Dingo\Api\Routing\Router');

$api->version('v1',['namespace' => "App\Http\Controllers"], function ($api) {
	/* Checked --*/
	$api->post('register', 'UserController@register');

	/* SEARCH */
	$api->post('/search', 'SearchController@Search');

	/* INSERT */
	$api->post('/insert/user/{user_id}/profession' , 'UserController@insertProfession');
	$api->post('/insert/user/{user_id}/education'  , 'UserController@insertEducation');
	$api->post('/insert/user/{user_id}/contact'    , 'UserController@insertContact');
	$api->post('/insert/user/{user_id}/interest'   , 'UserController@insertInterest');
	$api->post('/insert/user/{user_id}/business'   , 'UserController@insertBusiness');
	$api->post('/insert/user/{user_id}/experience' , 'UserController@insertExperience');

	/* COMMUNITY */
	$api->post('/verify/user'       , 'CommunityController@verifyGuestToMember');
	$api->post('/registercommunity' , 'CommunityController@register');
	/* view delete update */
	$api->get('/viewcommunity/{id}'              , 'CommunityController@view');
	$api->delete('/deletecommunity/{id}'         , 'CommunityController@delete');
	$api->post('/updatecommunity/community/{id}' , 'CommunityController@update');

	/* list */
	$api->get('/listcommunity', 'CommunityController@listcommunity');

	/* News */
	$api->post('insert/user/{user_id}/registernews' , 'NewsController@register');
	$api->get('/listnews'                           , 'NewsController@list');
	$api->get('/viewnews/{id}'                      , 'NewsController@view');
	$api->delete('/deletenews/{id}'                 , 'NewsController@delete');
	$api->post('/updatenews/news/{id}'              , 'NewsController@update');
	
	/*EventController*/
	$api->post('insert/user/{user_id}/registerevent' , 'EventController@register');
	$api->get('/listevent'                           , 'EventController@list');
	$api->get('/viewevent/{id}'                      , 'EventController@view');
	$api->delete('/deleteevent/{id}'                 , 'EventController@delete');
	$api->post('/updateevent/event/{id}'             , 'EventController@update');

	/* Location */
	$api->group(['prefix' => 'address'], function($api){
		$api->get('/country'             , ['uses' => 'AddressController@getCountries']);
		$api->get('/province/{id}'       , ['uses' => 'AddressController@getProvinceByCountry']);
		$api->get('/provinces/{country}' , ['uses' => 'AddressController@getProvinceByCountryName']);
		$api->get('/province'            , ['uses' => 'AddressController@getProvince']);

		$api->get('/zone/{id}'       , ['uses' => 'AddressController@getZoneByCountry']);
		$api->get('/zones/{country}' , ['uses' => 'AddressController@getZoneByCountryName']);
		$api->get('/zone'            , ['uses' => 'AddressController@getZones']);

		$api->get('/district/{id}'    , ['uses' => 'AddressController@getDistrictByZone']);
		$api->get('/districts/{zone}' , ['uses' => 'AddressController@getDistrictByZoneName']);
		$api->get('/district'         , ['uses' => 'AddressController@getDistricts']);

		$api->get('/city/{id}'         , ['uses' => 'AddressController@getCityByDistrict']);
		$api->get('/cities/{district}' , ['uses' => 'AddressController@getCityByDistrictName']);
		$api->get('/city'              , ['uses' => 'AddressController@getCities']);
	});

	$api->group(['middleware' => 'jwt.auth'], function ($api) {
		$api->get('/viewEducation/{user_id}'  , 'UserController@viewEducation');
		$api->get('/viewProfession/{user_id}' , 'UserController@viewProfession');
		$api->get('/viewContact/{user_id}'    , 'UserController@viewContact');
		$api->get('/viewInterest/{user_id}'   , 'UserController@viewInterest');
		$api->get('/viewBusiness/{user_id}'   , 'UserController@viewBusiness');
		$api->get('/viewExperience/{user_id}' , 'UserController@viewExperience');

		/* UPDATE */
		$api->put('/update/user/{id}'                                 , 'UserController@updateUser');
		$api->put('/update/user/{user_id}/education/{education_id}'   , 'UserController@updateEducation');
		$api->put('/update/user/{user_id}/profession/{profession_id}' , 'UserController@updateProfession');
		$api->put('/update/user/{user_id}/interest/{interest_id}'     , 'UserController@updateInterest');
		$api->put('/update/user/{user_id}/business/{business_id}'     , 'UserController@updateBusiness');
		$api->put('/update/user/{user_id}/contact/{contact_id}'       , 'UserController@updateContact');
		$api->put('/update/user/{user_id}/experience/{experience_id}' , 'UserController@updateExperience');

		/*admin auth*/
		$api->group(['middleware'=>'admin'],function($api){
			$api->delete('/delete/{user_id}'                                 , 'UserController@deleteUser');
			$api->delete('/delete/user/{user_id}/education/{education_id}'   , 'UserController@deleteEducation');
			$api->delete('/delete/user/{user_id}/profession/{profession_id}' , 'UserController@deleteProfession');
			$api->delete('/delete/user/{user_id}/contact/{contact_id}'       , 'UserController@deleteContact');
			$api->delete('/delete/user/{user_id}/interest/{interest_id}'     , 'UserController@deleteInterest');
			$api->delete('/delete/user/{user_id}/business/{business_id}'     , 'UserController@deleteBusiness');
			$api->delete('/delete/user/{user_id}/experience/{experience_id}' , 'UserController@deleteExperience');
		});

		/* VIEW */
		$api->group(['middleware'=> 'user'],function($api){
			$api->get('userlist'   , 'UserController@userlist');
			$api->get('/view/{id}' , 'UserController@view');
		});
	});

});


// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


// /* Auth */
 Route::post('/auth/login', 'AuthController@login');
 Route::get('/authuser', 'AuthController@getAuthUser');