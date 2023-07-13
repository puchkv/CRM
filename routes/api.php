<?php

use App\Http\Controllers\Api\v1\CategoryController;
use App\Http\Controllers\Api\v1\TeamController;
use App\Http\Controllers\Api\v1\LeadController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;


Route::post('/token', function (Request $request) {

    if (!Auth::attempt($request->only('email', 'password'))) {
        return response([
            'message' => 'Invalid credentials'
        ], Response::HTTP_UNAUTHORIZED);
    }

    $token = $request->user()->createToken('token', [
        'team.get',
        'team.member.view',
        'categories', 
    ]);
    return ['token' => $token->plainTextToken];

});

// IMPORTANTE: API Version 1 routes (Http/Controllers/Api/v1/)
Route::group(['prefix' => 'v1', 'middleware' => 'auth:sanctum'], function() {

    Route::get('/team', [TeamController::class, 'index'])->middleware('permissions:team.get');
    Route::get('/team/member/{id}', [TeamController::class, 'get'])->middleware('permissions:team.member.view');
    
    Route::get('/leads', [LeadController::class, 'index']); // add middleware
    Route::get('/leads/{id}', [LeadController::class, 'get']); // add middleware
    Route::post('/leads/store', [LeadController::class, 'store']); // add middleware
    Route::patch('/leads/{id}/update', [LeadController::class, 'update']); // add middleware
    Route::delete('/leads/{id}/delete', [LeadController::class, 'delete']); // add middleware
    
    Route::apiResource('/categories', CategoryController::class)->middleware('permissions:categories');

});

Route::any('/{var?}', function () {
    
    return response([
        'message' => '404 Page not found'
    ], Response::HTTP_NOT_FOUND);

});