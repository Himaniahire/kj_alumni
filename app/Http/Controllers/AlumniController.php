<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumni;

class AlumniController extends Controller
{
    public function index()
    {
        $alumnis = Alumni::all();
        return view("admin.alumnis.index", compact("alumnis"));
    }

    public function show(Request $request)
    {
        $alumni = Alumni::find($request->id);

    if ($alumni) {
        return response()->json([
            'success' => true,
            'data' => [
                'name' => $alumni->name . ' ' . $alumni->sname,
                'email' => $alumni->email,
                'phone' => $alumni->phone,
                'admission_year' => $alumni->admission_year,
                'passing_year' => $alumni->passing_year,
                'image_url' => $alumni->profile_photo_url ?? 'https://via.placeholder.com/40',
            ]
        ]);
    } else {
        return response()->json([
            'success' => false,
            'message' => 'Alumni not found.'
        ]);
    }
    }

    public function destroy($id)
    {
        $alumni = Alumni::findOrFail($id);
        $alumni->delete();

        return redirect()->route('alumnis.index')->with('success', 'Alumni deleted successfully.');
    }
}
