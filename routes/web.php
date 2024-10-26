<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/terms_and_services', function () {
    return view('terms_and_condition.index');
});

Route::get('/privacy', function () {
    return view('privacy.index');
});

Route::get('/security-privacy', function () {
    return view('security_privacy.index');
});


Route::get('/contact_us', function () {
    return view('contact_us.index');
});

Route::get('/about_us', function () {
    return view('about_us.index');
});

Route::get('/', function () {
    return view('home.index');
});

Route::get('/services', function () {
    return view('services.index');
});

Route::get('/services/details', function () {
    return view('services.details.index');
});

Route::get('/blogs', function () {
    return view('blogs.index');
});

Route::get('/blogs/details', function () {
    return view('blogs.details.index');
});
