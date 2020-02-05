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


Route::get('/',function(){
	return view('welcome');

});

Route::resource('listTeam', 'HomeController@listTeam');


Route::resource('teams', 'TeamController');
Route::get('teams/create', 'TeamController@create');
Route::post('teams/store', 'TeamController@store');
Route::post('teams/storeFile', 'TeamController@storeFile');

Route::get('rules', 'TeamController@rulesSubmission');



//Route::get('createAdm', 'Auth\RegisterController@createAdm');
//Route::resource('SeminarWorkshop','SeminarController');
Route::get('SeminarWorkshop/createWorkshop','SeminarController@createWorkshop');
Route::get('SeminarWorkshop/createSeminar','SeminarController@createSeminar');
Route::post('SeminarWorkshop/storeSeminar','SeminarController@storeSeminar');
Route::post('SeminarWorkshop/storeWorkshop','SeminarController@storeWorkshop');

Route::resource('universities', 'UniversityController');
Route::resource('participants', 'ParticipantController');
Route::post('participant/store', 'ParticipantController@store');

//Route::get('participants/{id}/edit', 'TeamController@edit');
Route::get('pay', 'TeamController@pay');
Route::post('paid', 'TeamController@paidreg');

Route::resource('administrations', 'AdministrationController');
Route::get('administrations/{id}/verification', 'AdministrationController@verification');
Route::get('registeredTeam', 'AdministrationController@registeredTeam');
Route::get('verifiedTeam', 'AdministrationController@verifiedTeam');
Route::get('verifiedBusinesssPlan', 'AdministrationController@verifiedBusinesssPlan');
Route::get('verifiedDesign', 'AdministrationController@verifiedDesign');
Route::get('verifiedProgramming', 'AdministrationController@verifiedProgramming');
Route::get('verifiedRobotic', 'AdministrationController@verifiedRobotic');
Route::get('verifiedSecurity', 'AdministrationController@verifiedSecurity');
Route::get('trashTeam', 'AdministrationController@trashTeam');
Route::get('destroyTeam/{id}', 'AdministrationController@destroyTeam');
Route::get('participants/{id}', 'AdministrationController@listParticipant');
//Route::get('participant/create', 'ParticipantController@create');
Auth::routes();

Route::get('register/verify/{token}', 'Auth\RegisterController@verify'); 

Route::get('BPregister', 'RegisterTeamController@BPregister');
Route::get('CPregister', 'RegisterTeamController@CPregister');
Route::get('CTFregister', 'RegisterTeamController@CTFregister');
Route::get('ROregister', 'RegisterTeamController@ROregister');
Route::get('Essregister', 'RegisterTeamController@Essregister');
Route::get('UIregister', 'RegisterTeamController@UIregister');

//route untuk authentication
Route::group(['namespace' => 'auth'],function(){

    Route::post('/logout',function(){
        Auth::logout();
        return redirect('/');
    })->name('logout');

    
});

Route::get('/downloadRulebook/{file}', 'DownloadController@getDownload');

Route::get('download/infoTransportasi', 'DownloadController@getInfoTransportasi');
Route::get('download/infoPenginapan', 'DownloadController@getInfoPenginapan');
Route::get('download/rundownAcara', 'DownloadController@getRundownAcara');


Route::get('download/finalisProgramming', 'DownloadController@getFinalisProgramming');
Route::get('download/finalisSecurity', 'DownloadController@getFinalisSecurity');
Route::get('download/finalisBusiness', 'DownloadController@getFinalisBusiness');
Route::get('download/finalisDesign', 'DownloadController@getFinalisDesign');
Route::get('download/finalisRobotic', 'DownloadController@getFinalisRobotic');


Route::any('{catchall}', function() { 
      return redirect('/');
})->where('catchall', '.*');
