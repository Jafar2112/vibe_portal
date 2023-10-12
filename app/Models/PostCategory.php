<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostCategory extends Model
{
    use HasFactory;
    protected $table='posts_categories';
    protected $guarded=[];

    public function post()
    {
        return $this->belongsTo(Post::class,'post_id');
    }
    public function category()
    {
        return $this->belongsTo(VibeCategory::class,'category_id');
    }
}
