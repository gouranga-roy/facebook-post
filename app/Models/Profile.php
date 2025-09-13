<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['first_name', 'sur_name', 'mobile', 'password', 'birth_date', 'gender'];


    protected $appends = ['full_name'];

    public function getFullNameAttribute() {
        $fullName = $this->first_name . ' ' . $this->sur_name;
        return $fullName;
    }

    // A profile can have many posts
    public function posts()
    {
        return $this->hasMany(Post::class, 'profile_id', 'id');
    }

    
    
}
