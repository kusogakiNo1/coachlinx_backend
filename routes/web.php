<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// すべてのリクエストをroutes/api.phpへ誘導
Route::middleware('api')->group(base_path('routes/api.php'));