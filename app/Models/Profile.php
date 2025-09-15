<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['first_name', 'sur_name', 'mobile', 'password', 'birth_date', 'gender'];

    protected $hidden = ['first_name', 'sur_name', 'created_at', 'updated_at'];

    protected $appends = ['full_name', 'post_count', 'profile_time_ago'];

    public function getFullNameAttribute() {
        $fullName = $this->first_name . ' ' . $this->sur_name;
        return $fullName;
    }

    // Get Post Count
    public function getPostCountAttribute() {
        return $this->posts()->count();
    }

    // Time Ago
    public function getProfileTimeAgoAttribute() {
        return Carbon::parse($this->created_at)->diffForHumans();
    }
    

    // A profile can have many posts
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }

    
    
}
