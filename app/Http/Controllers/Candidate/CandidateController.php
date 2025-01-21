<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Candidate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;


class CandidateController extends Controller
{
    public function showRegistrationForm(){
        return view('candidate.auth.candidateRegister');

    }
    public function register(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:candidates,email'],
            'phone' => ['nullable', 'string', 'max:15'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'gender' => ['required', 'in:male,female,other'],
            'eligibility' => ['nullable', 'string', 'max:500'],
        ]);
        $candidate = Candidate::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'gender' => $request->gender,
            'eligibility' => $request->eligibility,
        ]);
        event(new Registered($candidate));

        return redirect()->route('candidate.dashboard')->with([
            'class' => 'bg-success',
            'message' => 'Registration successful. Welcome to your dashboard!',
        ]);
    }
    public function dashboard()
    {
        return view('candidate.dashboard'); 
    }
}
