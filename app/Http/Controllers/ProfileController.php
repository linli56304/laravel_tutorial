<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    public function index(User $user)
    {
        return view('profiles.index', compact('user')); 
    }

    public function edit(User $user){
        $this->authorize('update', $user->profile);

        return view('profiles.edit', compact('user')); 
    }

    public function update(User $user) {
        $this->authorize('update', $user->profile);
        
        $data = request()->validate([
            'title'=>'required',
            'description'=>'required',
            'url'=>'',
            'image'=>'image',
        ]);

        if (request('image')) {
            $imagePath = request('image')->store('profile', 'public');
            $imageArray = ['image' => $imagePath];
        }

        auth()->user()->profile->update(array_merge(
            $data,
            $imageArray ?? []
        ));

        return redirect("/profile/{$user->id}");
    }
}
