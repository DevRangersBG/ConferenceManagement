<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
// Test for Nofication Email sending 
// author: lgbadluck
// start
//use Notification; // Not needed => we have \Notifications\EmailNotification; below
use App\Notifications\EmailNotification;
// end

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

// Test for Nofication Email sending 
// author: lgbadluck
// start
    public function send() 
    {
        $user = Auth::user();

        $project = [
            'greeting' => 'Hi '.$user->name.',',
            'body' => 'This is the project assigned to you.',
            'thanks' => 'Thank you this is from codeanddeploy.com',
            'actionText' => 'View Project',
            'actionURL' => url('/'),
            'id' => 57
        ];

        //Notification::send($user, new EmailNotification($project));
        //dd('Notification sent!');
        $user->notify(new EmailNotification($project));
        //dd($user->notifications); - breaks trying to update DB notification
        //SELECT * FROM `notifications` WHERE `notifications`.`notifiable_type` = App\Models\USER AND `notifications`.`notifiable_id` = 1 AND `notifications`.`notifiable_id` IS NOT NULL ORDER BY `created_at` DESC
        
        //Return to Dashboard
        return view('dashboard');
    }
// end
}
