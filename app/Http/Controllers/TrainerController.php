<?php

namespace App\Http\Controllers;

use App\Http\Requests\TrainerRequest;
use App\Models\Trainer;
use App\Models\User;
use Illuminate\Http\Request;

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trainers = Trainer::with('user')->inRandomOrder()->get();
        // dd($trainers);
        return view('trainer', compact('trainers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $trainers = User::trainers()->get(); // To show users in the dropdown
        return view('trainers.create', compact('trainers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TrainerRequest $request)
    {
        $socialLinks = $request->only(['facebook', 'linkedin', 'instagram', 'twitter']);

        // Create the Trainer record using the validated request data
        Trainer::create([
            'specialization' => $request->specialization,
            'bio' => $request->bio,
            'experience_years' => $request->experience_years ?? 0,
            'social_links' => $socialLinks,  // Mutator will handle processing
            'user_id' => $request->user_id,
        ]);
        return redirect()->route('trainers.index')->with('status', 'Trainer created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $trainer = Trainer::findOrFail($id);
        return view('singleTrainer', compact('trainer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
