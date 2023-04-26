<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
{
    $request->authenticate();

    $request->session()->regenerate();

    // Check if user's status is 1
    if (Auth::user()->status == 1) {
        // Redirect the user based on their role
        if (Auth::user()->role === 'Admin') {
            return redirect()->route('admin.index');
        } elseif (Auth::user()->role === 'Teacher') {
            return redirect()->route('science.index');
        } elseif (Auth::user()->role === 'Student') {
            return redirect()->route('students.index');
        } else {
            return redirect()->intended(RouteServiceProvider::HOME);
        }
    } else {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login')->withErrors(['status' => 'Your account is not active.']);
    }
}


    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
