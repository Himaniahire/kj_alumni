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
        return view('admin.alumnis.show', compact('alumni'));
    }

    public function destroy($id)
    {
        $alumni = Alumni::findOrFail($id);
        $alumni->delete();

        return redirect()->route('alumnis.index')->with('success', 'Alumni deleted successfully.');
    }
}
