<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;

class AlumniPanelController extends Controller
{
    public function index()
    {
        return view("alumni.index");
    }

    public function profile(Request $request)
    {
        $alumni = Alumni::find(Auth::guard('alumni')->user()->id);
        return view("alumni.profile", compact("alumni"));
    }

    public function update(Request $request, $id)
    {
        $alumni = Alumni::findOrFail($id);

        $request->validate([
            'type_membership' => 'nullable',
            'sname' => 'nullable|string',
            'name' => 'required|string',
            'mname' => 'required|string',
            'profile' => 'nullable|image|mimes:jpg,png|max:2048',
            'password' => 'nullable|string|confirmed',
            'gender' => 'required',
            'dob' => 'required',
            'admission_year' => 'required',
            'passing_year' => 'required',
            'branch' => 'required',
            'other_isntitute' => 'required',
            'email' => 'required|email|unique:alumnis,email,' . $id,
            'phone' => 'required',
            'address' => 'nullable',
            'name_organization' => 'required',
            'year' => 'required',
            'job' => 'required',
            'other_achivements' => 'nullable',
        ]);

        // File upload
        if ($request->hasFile('profile')) {
            // Delete old profile if exists
            if ($alumni->profile && file_exists(public_path('alumni_profile/' . $alumni->profile))) {
                unlink(public_path('alumni_profile/' . $alumni->profile));
            }

            $file = $request->file('profile');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('alumni_profile'), $filename);

            $alumni->profile = $filename; // Save just the file name or path
        }

        // Update password if provided
        if ($request->filled('password')) {
            $alumni->password = Hash::make($request->password);
        }

        // Update other fields
        $alumni->type_membership = $request->type_membership;
        $alumni->sname = $request->sname;
        $alumni->name = $request->name;
        $alumni->mname = $request->mname;
        $alumni->gender = $request->gender;
        $alumni->dob = $request->dob;
        $alumni->admission_year = $request->admission_year;
        $alumni->passing_year = $request->passing_year;
        $alumni->branch = $request->branch;
        $alumni->other_isntitute = $request->other_isntitute;
        $alumni->email = $request->email;
        $alumni->phone = $request->phone;
        $alumni->address = $request->address;
        $alumni->name_organization = $request->name_organization;
        $alumni->year = $request->year;
        $alumni->job = $request->job;
        $alumni->other_achivements = $request->other_achivements;

        $alumni->save();

        return back()->with('success', 'Alumni Updated Successfully.');
    }
}
