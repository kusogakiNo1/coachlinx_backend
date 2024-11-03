<?php

use Illuminate\Support\Facades\Route;

// ヘルスチェック
Route::get('/', function () {
    return response()->json(['status' => 'ok']);
});