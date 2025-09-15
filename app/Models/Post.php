<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['profile_id', 'post_content'];

    protected $hidden = ['created_at', 'updated_at'];

    protected $appends = ['post_time_ago', 'comment_count'];

    // Each post belongs to a profile
    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }

    // Time Ago
    public function getPostTimeAgoAttribute() {
        return Carbon::parse($this->created_at)->diffForHumans();
    }

    // Get Comment Count
    public function getCommentCountAttribute() {
        return $this->comments()->count();
    }

}
