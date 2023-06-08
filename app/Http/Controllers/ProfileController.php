<?php

namespace App\Http\Controllers;
use App\Models\Artist;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

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
    $user = $request->user();
    $user->fill($request->validated());

    if ($request->filled('artist')) {
        // L'utilisateur a déclaré être un artiste
        $user->is_artist = true;

        if ($user->isDirty('is_artist')) {
            $artist = Artist::create([
                'user_id' => $user->id,
                'artist_name'=> $user->login,
            ]);
        }
    } else if ($request->filled('not_artist')) {

        $user->is_artist = false;

        if ($user->isDirty('is_artist')) {
            $user->artist()->delete();
        }
    }

    if ($user->isDirty('email')) {
        $user->email_verified_at = null;
    }

    $user->save();

    return redirect()->route('profile.edit')->with('status', 'profile-updated');
}


    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
