<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReplyComments extends Model
{
    protected $table = 'reply_comments_forums';
    protected $fillable = ['comments_forums_id', 'user_id','content'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function coment_forum()
    {
        return $this->belongsTo(CommentsForums::class);
    }
}
