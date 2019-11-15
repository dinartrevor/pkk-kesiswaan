<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComentsArticle extends Model
{
    protected $table = 'coments_articles';
    protected $fillable = ['artikel_id','user_id','content'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function article()
    {
        return $this->belongsTo(Artikel::class);
    }
}
