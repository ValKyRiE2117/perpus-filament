<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\LoansController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\AuthorsController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('/members', MemberController::class);
Route::get('/member-with-loans', [MemberController::class, 'memberWithLoans']);
Route::post('/member', [MemberController::class, 'show']);

Route::apiResource('/loans', LoansController::class);

Route::apiResource('/books', BooksController::class);

Route::apiResource('/authors', AuthorsController::class);
