<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Http\Models\User;

Route::get('/', 'Auth\AuthController@getLogin');
Route::post('/login', 'Auth\AuthController@postLogin');
Route::get('/logout', 'Auth\AuthController@getLogout');

Route::group(['middleware' => ['csrf', 'auth']], function()
{
	Route::group(['middleware' => 'role:adminpusat', 'prefix' => 'admin'], function()
	{
		Route::get('/beranda', 'AdminController@index');
		Route::get('/roles', 'AdminController@roles');
		Route::post('/roles/tambah', 'AdminController@createrole');
		Route::delete('/roles/hapus/{id}', 'AdminController@removerole');
		Route::get('/pengguna/provinsi', 'AdminController@manageadminprovinsi');
		Route::post('/pengguna/provinsi/tambah', 'AdminController@tambahadminprovinsi');
		Route::get('/provinsi/{id}', 'AdminController@provinsi');
	});

	Route::group(['middleware' => 'role:operatorinstansi'], function()
	{
		Route::get('/beranda', 'OperatorController@index');
		Route::get('/pasien', 'OperatorController@daftarpasien');
		Route::get('/registrasi/pasien', 'OperatorController@registrasipasien');
		Route::post('/registrasi/pasien', 'OperatorController@store');
		Route::get('/pendaftaran/pasien', 'OperatorController@pendaftaran');
		Route::get('/pendaftaran/pasien/{id}', 'OperatorController@caripendaftaran');
		Route::get('/rekam-medis/pasien', 'OperatorController@rekamedis');
		Route::get('/rekam-medis/input-data', 'OperatorController@inputrekamedis');
	});
});

Route::get('cari-kabupaten/{id}', 'AdminController@carikabupaten');
Route::get('cari-kecamatan/{id}', 'AdminController@carikecamatan');

Route::post('oauth/access_token', function() {
    return Response::json(Authorizer::issueAccessToken());
});

Route::get('/profil', ['middleware' => 'oauth', function() {

    $data = User::find(Authorizer::getResourceOwnerId());

    return Response::json(['error' => false, 'data' => $data]);
}]);