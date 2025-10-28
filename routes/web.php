<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| DateMaker Web Routes
|--------------------------------------------------------------------------
|
| Here are all the web routes for the DateMaker dating application.
| These routes handle all the main pages and functionality.
|
*/

// Main Pages
Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/home', function () {
    return redirect()->route('home');
});

Route::get('/index', function () {
    return redirect()->route('home');
});

Route::get('/features', function () {
    return view('features');
})->name('features');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/about-us', function () {
    return redirect()->route('about');
});

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/help', function () {
    return redirect()->route('faq');
});

Route::get('/pricing', function () {
    return view('pricing');
})->name('pricing');

Route::get('/plans', function () {
    return redirect()->route('pricing');
});



// API Routes for JavaScript interactions
Route::prefix('api')->group(function () {
    Route::post('/contact', function (Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string|max:1000',
        ]);

        // TODO: Handle contact form submission
        return response()->json(['success' => true, 'message' => 'Thank you for contacting us! 💕']);
    })->name('api.contact');

    Route::post('/newsletter', function (Request $request) {
        $request->validate([
            'email' => 'required|email',
        ]);

        // TODO: Handle newsletter subscription
        return response()->json(['success' => true, 'message' => 'Successfully subscribed to our newsletter! 📧']);
    })->name('api.newsletter');
});



// Static Pages
Route::get('/privacy', function () {
    return view('privacy');
})->name('privacy');

Route::get('/terms', function () {
    return view('terms');
})->name('terms');

Route::get('/cookies', function () {
    return view('cookies');
})->name('cookies');

Route::get('/community', function () {
    return view('community');
})->name('community');

// Handle .html extensions - redirect to proper routes
Route::get('/index.html', function () {
    return redirect()->route('home');
});

Route::get('/features.html', function () {
    return redirect()->route('features');
});

Route::get('/about.html', function () {
    return redirect()->route('about');
});

Route::get('/faq.html', function () {
    return redirect()->route('faq');
});

Route::get('/pricing.html', function () {
    return redirect()->route('pricing');
});

// Catch-all route for undefined pages
Route::fallback(function () {
    return view('404')->with('message', 'Oops! This page doesn\'t exist. Let\'s get you back to finding love! 💔➡️💕');
});
