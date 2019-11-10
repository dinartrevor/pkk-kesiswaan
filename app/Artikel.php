<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Artikel extends Model
{
    use Sluggable;

    protected $table = "artikel";
    protected $fillable = ['judul','slug','thumbnail','konten','user_id', 'kategori_id','status'];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'judul'
            ]
        ];
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
     public function comments_article()
     {
         return $this->hasMany(CommentArticle::class);
     }
}
