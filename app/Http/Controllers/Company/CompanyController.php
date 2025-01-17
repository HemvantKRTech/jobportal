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
