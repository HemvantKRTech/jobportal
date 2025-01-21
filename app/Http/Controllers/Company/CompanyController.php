<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    public function showRegistrationForm()
    {
        return view('company.auth.companyRegister');
    }
    public function dashboard()
    {
        return view('company.dashboard');
    }
    public function companyloginlogin()
    {
        // dd('helo');
        return view('company.auth.login');
    }
    public function companylogin(Request $request)
{
    $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);
    $remember_me = $request->has('remember_me') ? true : false;
    if (Auth::guard('company')->attempt([
        'email' => $request->email,
        'password' => $request->password,
    ], $remember_me)) {
        $company = Auth::guard('company')->user();
        if ($company->email_verified_at === null) {
            Auth::guard('company')->logout();
            return response()->json([
                'class' => 'bg-warning',
                'error' => true,
                'message' => 'Please verify your email before logging in.',
            ]);
        }
        return response()->json([
            'class' => 'bg-success',
            'error' => false,
            'message' => 'Login Successfully',
        ]);
    }
    $company = Company::where('email', $request->email)->first();

    if ($company) {
            
        if ($company->email_verified_at === null) {
            return response()->json([
                'class' => 'bg-warning',
                'error' => true,
                'message' => 'Please verify your email before logging in.',
            ]);
        }
    }
    return response()->json([
        'class' => 'bg-danger',
        'error' => true,
        'message' => 'These credentials do not match our records.',
    ]);
}

public function logout(Request $request)
{
    // Check if the user is authenticated via the company guard
    if (Auth::guard('company')->check()) {
        // Logout the user
        Auth::guard('company')->logout();

        // Invalidate the session to prevent re-login using old session data
        $request->session()->invalidate();

        // Regenerate the CSRF token for added security
        $request->session()->regenerateToken();

        return redirect()->route('company.login')->with([
            'class' => 'bg-success',
            'message' => 'Logged out successfully.',
        ]);
    }

    // If no user is authenticated, return an error
    return response()->json([
        'class' => 'bg-danger',
        'error' => true,
        'message' => 'No user is currently logged in.',
    ]);
}

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'email' => 'required|email|unique:companies,email',
            'password' => 'required|string|min:8|confirmed',
            'mobile' => 'nullable|string|max:20',
            'website' => 'nullable|url',
            'location' => 'nullable|string|max:255',
        ]);

        $company = Company::create([
            'name' => $request->name,
            'company_name' => $request->company_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'mobile' => $request->mobile,
            'website' => $request->website,
            'location' => $request->location,
        ]);
        event(new Registered($company));

        return redirect()->back()->with('status', 'We have sent you an email verification link!');
    }
    public function redirect($provider)
    {
        if (!in_array($provider, ['facebook', 'google'])) {
            return redirect()->route('login');
        }
        return Socialite::driver($provider)->redirect();
    }
    public function callback($provider)
    {
        if (!in_array($provider, ['facebook', 'google'])) {
            return redirect()->route('login'); 
        }
        $user = Socialite::driver($provider)->user();
        $company = Company::firstOrCreate(
            ['email' => $user->getEmail()],
            [
                'name' => $user->getName(),
                'email' => $user->getEmail(),
                'company_name'=>$user->getName(),
                'password' => Hash::make('12345678'), 
            ]
        );
        Auth::guard('company')->login($company);
        return redirect()->route('company.dashboard');
    }
}
