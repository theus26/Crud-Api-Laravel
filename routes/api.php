<?php

use App\Http\Controllers\Api\AgendaTelefonicaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//Teste
Route::get('HelthCheck', [AgendaTelefonicaController::class, 'HelthCheck']);
//Get
Route::get('get', [AgendaTelefonicaController::class, 'Get']);
//Post
Route::post('post', [AgendaTelefonicaController::class, 'Post']);
//GetId
Route::get('get/{id}', [AgendaTelefonicaController::class, 'GetId']);
//Edit
Route::get('get/{id}/edit', [AgendaTelefonicaController::class, 'Edit']);
Route::put('get/{id}/edit', [AgendaTelefonicaController::class, 'update']);
//Delete
Route::delete('get/{id}/delete', [AgendaTelefonicaController::class, 'Delete']);

