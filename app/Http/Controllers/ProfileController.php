<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profiles = Profile::all();
        return view('pages.index', compact('profiles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Form Validation
        $request->validate([
            'first_name' => 'required|max:100',
            'surname' => 'required|max:100',
            'mobile' => 'required|max:11',
            'password' => 'required',
            'birth_date' => 'required',
            'gender' => 'required',
        ]);

        // Store Data In Database
        Profile::create([
            'first_name' => $request->first_name,
            'sur_name' => $request->surname,
            'mobile' => $request->mobile,
            'password' => $request->password,
            'birth_date' => $request->birth_date,
            'gender' => $request->gender,
        ]);

        return back()->with('success', 'Profile Created Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Profile $profile)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
