<?php

use App\Models\Route;
use App\Controllers\ApiPastebinController;

Route::set('index.php', function () {
    ApiPastebinController::listing();
});

Route::set('create', function () {
    ApiPastebinController::createView('create');
});

Route::set('store', function () {
    ApiPastebinController::store();
});

Route::set('destroy', function () {
    ApiPastebinController::destroy();
});

Route::set('get', function () {
    ApiPastebinController::get();
});