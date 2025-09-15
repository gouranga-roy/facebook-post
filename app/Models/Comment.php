<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\Post;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['post_id', 'profile_id', 'comment_content'];

    protected $appends = ['comment_time_ago'];

    // Time Ago
    public function getCommentTimeAgoAttribute() {
        return Carbon::parse($this->created_at)->diffForHumans();
    }

    // Each post belongs to a Post
    public function post () {
        return $this->belongsTo(Post::class);
    }

    public function profile() {
        return $this->belongsTo(Profile::class);
    }
}
