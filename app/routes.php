<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::group(array('prefix' => 'v1'), function()
{

    Route::get('/activity/{id?}', function($id = null)
    {
            $list = CoffeeActivity::getActivity($id);
            return Response::json($list);
    });
    
    Route::post('/activity', function()
    {
            $coffee_activity = new CoffeeActivity();
            $coffee_activity->user_id = 'CHEUNGD';
            $coffee_activity->added_on = date('Y-m-d H:i:s');
            $coffee_activity->save();
            return Response::json($coffee_activity);
    });
});