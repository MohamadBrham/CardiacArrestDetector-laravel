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
    return view('welcome');
});


Route::resource('doses','DosesController');
Route::resource('medications','MedicationsController');
Route::resource('users','UsersController');
Route::resource('beloveds','BelovedsController');


Route::resource('data','DataController');

Route::get('/medicationdoses/{id}', function($id)
    {
        $doses = \App\Dose::latest()->where("medication_id",$id)->get();
        return $doses;
    }
    );
Route::get('/usermedications/{id}', function($id)
{
    $doses = \App\Medication::latest()->where("user_id",$id)->get();
    return $doses;
}
);



