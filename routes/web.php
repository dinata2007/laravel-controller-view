<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteController;

// 1. Pengalihan dari halaman awal ke menu routing
Route::redirect('/', '/routing');

// 2. Halaman Menu Utama Routing
Route::get('/routing', function () {
    return view('routing');
});

// 3. Praktik Basic Routing
Route::get('/basic_routing', function () {
    return 'Hello World';
});

// 4. Praktik View Route
Route::view('/view_route', 'view_route', ['name' => 'Dinata']);

// 5. Praktik Controller Route
Route::get('/controller_route', [RouteController::class, 'index']);

// 4.5 Route Parameter (Required Parameter)
Route::get('/user/{id}', function ($id) {
    return "User Id: " . $id;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return "Post Id: " . $postId . ", Comment Id: " . $commentId;
});

// 4.6 Route Parameter (Optional Parameter)
Route::get('username/{name?}', function ($name = null) {
    return 'Username: ' . $name;
});

// 4.7 Route With Regular Expression Constraints
Route::get('/title/{title}', function ($title) {
    return "Title: " . $title;
})->where('title', '[A-Za-z]+');

// 4.8 Named Route
Route::get('/profile/{profileId}', [RouteController::class, 'profile'])->name('profileRouteName');

// 4.9 Route Priority
Route::get('/route_priority/{rpId}', function ($rpId) {
    return "This is Route One";
});
Route::get('/route_priority/user', function () {
    return "This is Route 1";
});
Route::get('/route_priority/user', function () {
    return "This is Route 2";
});

// 4.10 Fallback Routes
Route::fallback(function () {
    return 'This is Fallback Route';
});

// 4.11 Route Groups (Route Prefixes & Route Name Prefixes)
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return "This is admin dashboard";
    })->name('dashboard');

    Route::get('/users', function () {
        return "This is user data on admin page";
    })->name('users');

    Route::get('/items', function () {
        return "This is item data on admin page";
    })->name('items');
});

// Tugas Praktikum (Modul 9) - Website Bootstrap Portofolio
Route::view('/portofolio', 'portofolio');
