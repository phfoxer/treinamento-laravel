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

Route::apiResource("aluno","\App\Modules\Aluno\Controllers\AlunoController");


Route::get("autenticar","Auth@login");

Route::group(['middleware' => ['jwt.auth']], function(){
    Route::get("verificar",function(){
        $user       = JWTAuth::parseToken()->authenticate();
        return ['response'=>'Ok'];
    });

});
