<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Event;
use App\Models\Trainer;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        // $courses = Course::with(['trainer', 'category'])->get();
        $trainers = Trainer::inRandomOrder()->take(3)->get(); // Get 3 random trainers

        $popularCourses = Course::popular(3)->get(); // Fetch top 2 popular courses
        // dd($popularCourses);

        $userCount = User::where('role', 'student')->count();
        // dd($userCount);
        // $trainerCount = User::where('role', 'trainer')->count();
        $trainerCount = Trainer::count();
        $courseCount = Course::count();
        $eventCount = Event::where('event_date', '>=', now('Africa/Cairo'))->count();
        return view('home', compact(['trainers', 'popularCourses', 'userCount', 'trainerCount', 'courseCount', 'eventCount']));
    }
    public function about()
    {
        return view('about');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
