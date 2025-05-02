<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumni;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Auth;

class AlumniRegisterController extends Controller
{
    public function register()
    {
        return view("register");
    }

    public function store(Request $request)
    {
        $request->validate([
            'type_membership' => 'nullable',
            'sname' => 'nullable|string',
            'name' => 'required|string',
            'mname' => 'required|string',
            'profile' => 'nullable|image|mimes:jpg,png|max:2048',
            'password' => 'required|string|confirmed',
            'gender' => 'required',
            'dob' => 'required',
            'admission_year' => 'required',
            'passing_year' => 'required',
            'branch' => 'required',
            'other_isntitute' => 'required',
            'email' => 'required|email|unique:alumnis,email',
            'phone' => 'required',
            'address' => 'nullable',
            'name_organization' => 'required',
            'year' => 'required',
            'job' => 'required',
            'other_achivements' => 'nullable',
        ]);

        // File upload
        $filePath = null;
        if ($request->hasFile('profile')) {
            $file = $request->file('profile');
            $originalName = $file->getClientOriginalName();
            $cleanName = str_replace(' ', '_', $originalName);
            $fileName = $cleanName;
            $file->move(public_path('alumni_profiles'), $fileName);
            $filePath = 'alumni_profiles/' . $fileName;
        }

        Alumni::create([
            'type_membership' => $request->type_membership,
            'sname' => $request->sname,
            'name' => $request->name,
            'mname' => $request->mname,
            'profile' => $filePath,
            'password' => Hash::make($request->password),
            'gender' => $request->gender,
            'dob' => $request->dob,
            'admission_year' => $request->admission_year,
            'passing_year' => $request->passing_year,
            'branch' => $request->branch,
            'other_isntitute' => $request->other_isntitute,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'name_organization' => $request->name_organization,
            'year' => $request->year,
            'job' => $request->job,
            'other_achivements' => $request->other_achivements,
        ]);

        return back()->with('success', 'Alumni Registered Successfully.');
    }

    public function login()
    {
        return view("login");
    }
    public function loginAlumni(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);

    $credentials = [
        'email' => $request->input('email'),
        'password' => $request->input('password')
    ];

    if (Auth::guard('alumni')->attempt($credentials)) {
        return redirect()->route('alumni.index');
    } elseif (Auth::guard('web')->attempt($credentials)) {
        return redirect()->route('admin.index');
    } else {
        return redirect()->back()->with('error', 'Invalid Credentials');
    }
}




}
