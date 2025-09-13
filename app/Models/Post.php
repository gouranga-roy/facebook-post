<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['profile_id', 'post_content'];

    // Each post belongs to a profile
    public function profile()
    {
        return $this->belongsTo(Profile::class, 'profile_id', 'id');
    }

}
