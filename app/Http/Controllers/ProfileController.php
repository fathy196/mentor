<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function edit()
    {
        $user = Auth::user();
        $trainer = null;

        if ($user->role === 'trainer') {
            $trainer = $user->trainer; // Assuming User hasOne Trainer
        }

        return view('profile.edit', compact('user', 'trainer'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();
    
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8|confirmed',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    
        if ($user->role === 'trainer') {
            $rules = array_merge($rules, [
                'specialization' => 'required|string|max:255',
                'bio' => 'nullable|string',
                'experience_years' => 'nullable|integer|min:1',
                'social_links.facebook' => 'nullable|url',
                'social_links.linkedin' => 'nullable|url',
                'social_links.instagram' => 'nullable|url',
                'social_links.twitter' => 'nullable|url',
            ]);
        }
    
        $validated = $request->validate($rules);
    
        // Handle profile image
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('storage/users'), $imageName);
            $user->image = $imageName;
        }
    
        // Update basic user data
        $user->name = $validated['name'];
        $user->email = $validated['email'];
    
        if (!empty($validated['password'])) {
            $user->password = Hash::make($validated['password']);
        }
    
        $user->save();
    
        // Update trainer data if user is a trainer
        if ($user->role === 'trainer') {
            $trainer = $user->trainer;
            if (!$trainer) {
                $trainer = $user->trainer()->create([]);
            }
    
            $trainer->specialization = $validated['specialization'];
            $trainer->bio = $validated['bio'];
            $trainer->experience_years = $validated['experience_years'];
    
            // Get social links from validated data
            $socialLinks = [
                'facebook' => $validated['social_links']['facebook'] ?? null,
                'linkedin' => $validated['social_links']['linkedin'] ?? null,
                'instagram' => $validated['social_links']['instagram'] ?? null,
                'twitter' => $validated['social_links']['twitter'] ?? null,
            ];
    
            // Assign the social links (mutator will handle the formatting)
            $trainer->social_links = $socialLinks;
    
            $trainer->save();
        }
    
        return redirect()->route('profile.edit')->with('status', 'Profile updated successfully!');
    }

    public function destroy()
{
    $user = Auth::user();

    // Optionally, delete the trainer record if trainer
    if ($user->role === 'trainer' && $user->trainer) {
        $user->trainer->delete();
    }

    // Optionally, delete user profile image from storage
    if ($user->image && file_exists(public_path('storage/users/' . $user->image))) {
        unlink(public_path('storage/users/' . $user->image));
    }

    // Logout user
    Auth::logout();

    // Delete user
    $user->delete();

    // Redirect to homepage or login
    return redirect('/')->with('status', 'Account deleted successfully!');
}

}