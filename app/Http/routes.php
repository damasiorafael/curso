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

Route::get('/', function () {
    return view('welcome');
});

Route::group([''], function () {

    Route::controller('institucional', 'InstitucionalController', [
        'getSobre' => 'sobre',
        'getContato' => 'contato',
        'postContato' => 'contato'
    ]);

});

Route::get('volunteer', function(){
	$volunteer = App\Volunteer::find(1);
    
    $volunteer->phone = null;
    $volunteer->save();
    
    return $volunteer;
});

Route::get('volunteer/telefone/{phone?}', function($phone = null){
	$volunteer = App\Volunteer::find(1);
    $volunteer->phone = $phone;    
    $volunteer->save();
    
    return $volunteer;
});

Route::get('volunteer/create', function(){
	$volunteer = App\Volunteer::create([
        
    ]);
    
    $volunteer->name = 'Lucas Teste';
    $volunteer->phone = '(43) 9090-9090';
    $volunteer->email = 'lucas_teste@hotmail.com';
    $volunteer->save();
    
    return $volunteer;
});

Route::post('volunteer', ['as' => 'volunteer.send', function(){
	return Request::all();
}]);