<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];  

    function profileImage() {
        $imagePath = ($this->image) ? $this->image : 'profile/LB0P3N9LDc9NTTOyWX1BsROFuoNxMpe1jX4AgoTH.png';
        return '/storage/' . $imagePath;
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
