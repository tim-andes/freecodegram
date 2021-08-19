<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    
    protected $guarded = [];

    public function profileImage()
    {
        $imagePath =  ($this->image) ? $this->image : 'profile/IKMxBqVAeIBXilBota7yQL3vtrMgGBn9R9Cw3rZv.png';
        return '/storage/' . $imagePath;
    }

    public function follower()
    {
        return $this->belongsToMany(User::class);
    }

    public function user()
    {
       return $this->belongsTo(User::class); 
    }
}
