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

// Authentication Pages
Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/signin', function () {
    return redirect()->route('login');
});

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/signup', function () {
    return redirect()->route('register');
});

Route::get('/join', function () {
    return redirect()->route('register');
});

Route::get('/reset-password', function () {
    return view('reset-password');
})->name('password.reset');

Route::get('/forgot-password', function () {
    return redirect()->route('password.reset');
});

// Authentication Form Handlers
Route::post('/login', function (Request $request) {
    $request->validate([
        'email' => 'required|email',
        'password' => 'required|min:6',
    ]);

    // Check if user exists
    $user = \App\Models\User::where('email', $request->email)->first();

    if (!$user) {
        return back()->withErrors([
            'email' => 'No account found with this email address. Would you like to register? 💔'
        ])->withInput($request->only('email'));
    }

    // Check if password is correct
    if (!\Illuminate\Support\Facades\Hash::check($request->password, $user->password)) {
        return back()->withErrors([
            'password' => 'Incorrect password. Please try again. 🔒'
        ])->withInput($request->only('email'));
    }

    // Log the user in
    \Illuminate\Support\Facades\Auth::login($user, $request->filled('remember'));
    $request->session()->regenerate();

    return redirect()->intended('/')->with('success', 'Welcome back to DateMaker! 💕');
})->name('login.post');

Route::post('/register', function (Request $request) {
    $request->validate([
        'firstname' => 'required|string|max:50',
        'lastname' => 'required|string|max:50',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6|confirmed',
        'terms' => 'required|accepted',
    ]);

    // Check if email was verified
    if (!session('email_verified') || session('verification_email') !== $request->email) {
        return back()->withErrors(['email' => 'Please verify your email first'])->withInput();
    }

    // Create the user
    $user = \App\Models\User::create([
        'firstname' => $request->firstname,
        'lastname' => $request->lastname,
        'email' => $request->email,
        'password' => \Illuminate\Support\Facades\Hash::make($request->password),
        'bio' => '',
        'pronounce' => null,
        'relationship_status' => false,
        'email_verified_at' => now(),
    ]);

    // Clear verification session data
    session()->forget(['verification_code', 'verification_email', 'verification_expires', 'email_verified']);

    // Log the user in
    \Illuminate\Support\Facades\Auth::login($user);
    $request->session()->regenerate();

    return redirect('/')->with('success', 'Welcome to DateMaker! Your journey to find love begins now! 💖');
})->name('register.post');

Route::post('/password/email', function (Request $request) {
    // Validate the password reset request
    $request->validate([
        'email' => 'required|email',
    ]);

    // TODO: Implement actual password reset email logic
    // For now, just return with status message
    return back()->with('status', 'Password reset link sent to your email! 💌');
})->name('password.email');

// Logout route
Route::post('/logout', function () {
    \Illuminate\Support\Facades\Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();

    return redirect()->route('home')->with('success', 'Successfully logged out. See you soon! 👋');
})->name('logout');

// Email Verification Routes
Route::post('/api/send-verification-code', function (Request $request) {
    // Check if email already exists in database
    $existingUser = \App\Models\User::where('email', $request->email)->first();
    if ($existingUser) {
        return response()->json([
            'success' => false,
            'message' => 'This email is already registered. Please login instead.',
        ], 400);
    }

    $request->validate([
        'email' => 'required|email',
    ]);

    // Generate 6-digit code
    $code = str_pad(random_int(0, 999999), 6, '0', STR_PAD_LEFT);

    // Store code in session with 10 minute expiry
    session([
        'verification_code' => $code,
        'verification_email' => $request->email,
        'verification_expires' => now()->addMinutes(10),
    ]);

    // Send actual email to the user's inputted email address
    try {
        \Illuminate\Support\Facades\Mail::to($request->email)->send(new \App\Mail\VerificationCodeMail($code));

        \Illuminate\Support\Facades\Log::info("Verification code sent to: {$request->email}");

        return response()->json([
            'success' => true,
            'message' => 'Verification code sent to your email! 📧',
        ]);
    } catch (\Exception $e) {
        \Illuminate\Support\Facades\Log::error("Failed to send verification email to {$request->email}: " . $e->getMessage());

        // Fallback: still show code in debug mode if email fails
        return response()->json([
            'success' => false,
            'message' => 'Failed to send email. Please check your email address.',
            'code' => config('app.debug') ? $code : null,
            'error' => config('app.debug') ? $e->getMessage() : null,
        ], 500);
    }
})->name('verification.send');

Route::post('/api/verify-code', function (Request $request) {
    $request->validate([
        'email' => 'required|email',
        'code' => 'required|string|size:6',
    ]);

    $storedCode = session('verification_code');
    $storedEmail = session('verification_email');
    $expires = session('verification_expires');

    if (!$storedCode || !$storedEmail || !$expires) {
        return response()->json([
            'success' => false,
            'message' => 'No verification code found. Please request a new one.',
        ], 400);
    }

    if (now()->isAfter($expires)) {
        session()->forget(['verification_code', 'verification_email', 'verification_expires']);
        return response()->json([
            'success' => false,
            'message' => 'Verification code has expired. Please request a new one.',
        ], 400);
    }

    if ($storedEmail !== $request->email || $storedCode !== $request->code) {
        return response()->json([
            'success' => false,
            'message' => 'Invalid verification code.',
        ], 400);
    }

    // Mark as verified
    session(['email_verified' => true]);

    return response()->json([
        'success' => true,
        'message' => 'Email verified successfully!',
    ]);
})->name('verification.verify');

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

// Social Authentication Routes (for future implementation)
Route::get('/auth/google', function () {
    // TODO: Implement Google OAuth
    return redirect()->route('login')->with('info', 'Google authentication coming soon! 🚀');
})->name('auth.google');

Route::get('/auth/github', function () {
    // TODO: Implement GitHub OAuth
    return redirect()->route('login')->with('info', 'GitHub authentication coming soon! 🚀');
})->name('auth.github');

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
Route::get('/login.html', function () {
    return redirect()->route('login');
});

Route::get('/register.html', function () {
    return redirect()->route('register');
});

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

Route::get('/reset-password.html', function () {
    return redirect()->route('password.reset');
});

// Catch-all route for undefined pages
Route::fallback(function () {
    return view('404')->with('message', 'Oops! This page doesn\'t exist. Let\'s get you back to finding love! 💔➡️💕');
});
