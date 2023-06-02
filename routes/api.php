<?php

use App\Http\Controllers\Api\V1\Admin\AgentApiController;
use App\Http\Controllers\Api\V1\Admin\ClientApiController;
use App\Http\Controllers\Api\V1\Admin\PostApiController;

Route::group(['prefix' => 'v1', 'as' => 'api.', 'middleware' => ['auth:sanctum']], function () {
    // Agent
    Route::apiResource('agents', AgentApiController::class);

    // Client
    Route::apiResource('clients', ClientApiController::class);

    // Post
    Route::post('posts/media', [PostApiController::class, 'storeMedia'])->name('posts.store_media');
    Route::apiResource('posts', PostApiController::class);
});
