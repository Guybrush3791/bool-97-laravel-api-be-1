<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\ApiController;

Route :: prefix('/v1') -> group(function() {

    Route :: get('/test-api', [ApiController::class, 'testApi']);

    Route :: get('/rabbit-index', [ApiController::class, 'rabbitIndex']);

    Route :: get('/rabbit-show/{id}', [ApiController::class, 'rabbitShow']);
});

