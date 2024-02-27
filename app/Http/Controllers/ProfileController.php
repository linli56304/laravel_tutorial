<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    public function index($id)
    {
        $user = User::find($id);
        return view('home', [
            'user' => $user,
        ]); 
    }
}
