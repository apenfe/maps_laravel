<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommerceSearchController;

Route::redirect('/', '/commerce/search');

Route::prefix('commerce')->group(function () {
    Route::get('search', CommerceSearchController::class)->name('commerce.search');
});
