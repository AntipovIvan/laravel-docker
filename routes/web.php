<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Common resource routes:
// index - Show all
// show - Show single
// create - Show form to create new
// store - Store new
// edit - Show form to edit
// update - Update listing
// destroy - Delete listing

// All listings
Route::get('/', [ListingController::class, 'index']);

// Show create form
Route::get('/listings/create', [ListingController::class, 'create']);

// Store Listing data
Route::post('/listings', [ListingController::class, 'store']);

// Show edit form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

// Update Listing
Route::put('/listings/{listing}', [ListingController::class, 'update']);

// Delete Listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy']);

// Single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

// Show register/create form
Route::get('/register', [UserController::class, 'create']);

// Create new user
Route::post('/users', [UserController::class, 'store']);

// Log user out
Route::post('/logout', [UserController::class, 'logout']);

// Show login forn
Route::get('/login', [UserController::class, 'login']);

// Log in user
Route::post('/users/authenticate', [UserController::class, 'authenticate']);


// Route::get('/hello', function () {
//     return response('<h1>Hello World</h1>', 200)
//         ->header('Content-Type', 'text/plain')
//         ->header('foo', 'bar');
// });

// Route::get('/posts/{id}', function ($id) {
//     // dd($id); // Die-dump
//     // ddd($id); // Die-dump-debug
//     return response('Post ' . $id);
// })->where('id', '[0-9]+');

// Route::get('/search', function (Request $request) {
//     // search?name=Ivan&city=tokyo
//     return $request->name . ' ' . $request->city;
// });
