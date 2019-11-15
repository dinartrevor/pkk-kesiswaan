<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentsForums extends Model
{
    protected $table = 'comments_forums';
    protected $fillable = ['user_id','forums_id','content'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function forums()
    {
        return $this->belongsTo(Forums::class);
    }
    public function reply_comments()
    {
        return $this->hasMany(ReplyComments::class);
    }
}
