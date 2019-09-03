<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function user() {
        
        return $this->belongsTo(User::class);
    }

    public function profileImage() {
        $imagePath = ($this->image) ? $this->image : 'profile/5j3sN6znuLXwVyDLXb5AFuc2tiu5NmCxerYO859q.png';
        return  '/storage/' . $imagePath;
    }
}
