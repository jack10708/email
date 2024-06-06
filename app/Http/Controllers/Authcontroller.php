<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function login()
    {
        return view('Auth.login');
    }

    public function login_user(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('dashboard');
        }

        return redirect()->route('login')->withErrors(['emailPassword' => 'Email address or password is incorrect.']);
    }

    public function register()
    {
        return view('Auth.register');
    }

    public function register_user(Request $request)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6|confirmed',
    ]);

    $data = $request->all();
    $data['password'] = Hash::make($data['password']);
    $data['verification_token'] = Str::random(40);
    $user = User::create($data);

    // Send the verification email
    $this->sendVerificationEmail($user);

    return redirect()->route('login')->with('success', 'Verification link sent to your email!');
}



protected function sendVerificationEmail($user)
{
    $verificationUrl = route('verify', $user->verification_token);
    Mail::send('emails.verify', ['user' => $user, 'url' => $verificationUrl], function ($message) use ($user) {
        $message->to($user->email)
            ->subject('Verify Your Email Address');
    });
}


    public function verify($token)
    {
        $user = User::where('verification_token', $token)->first();

        if ($user) {
            $user->email_verified_at = now();
            $user->verification_token = null;
            $user->save();

            // Optionally, log the user in automatically
            Auth::login($user);

            return redirect('/')->with('success', 'Your email has been verified!');
        }

        return redirect('/')->with('error', 'Invalid verification token.');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
