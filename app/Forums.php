<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forums extends Model
{
    protected $table = "forums";
    protected $fillable = ['user_id', 'thumbnail', 'content'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function forums_comments()
    {
        return $this->hasMany(CommentsForums::class)->orderBy('created_at', 'desc');
    }
}
