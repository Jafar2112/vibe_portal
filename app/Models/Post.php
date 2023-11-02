<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table='posts';
    protected $fillable=[
        'title',
        'content',
        'user_id',
        'view_count',
    ];
    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function images()
    {
        return $this->hasMany(PostImage::class,'post_id','id');
    }
    public function category()
    {
        return $this->belongsToMany(VibeCategory::class,'posts_categories','post_id','category_id');
    }
    public static function user_id($id)
    {
        return Post::where('user_id',$id);
    }
    public function comments()
    {
        return $this->morphMany(Comment::class,'commentable');
    }

}
