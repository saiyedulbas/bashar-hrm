<?php

use Illuminate\Http\Request;

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
    // return $request->user();
// });

Route::middleware('auth:api')->get('total_expense','apicontroller@total_expense');
Route::post('expense_insert','apicontroller@expense_insert');
Route::get('expense/{id}','apicontroller@individual_expense');
Route::get('expense','apicontroller@all');
Route::get('userall','apicontroller@userall');

