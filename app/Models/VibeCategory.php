<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VibeCategory extends Model
{
    use HasFactory;
    protected $table='vibe_categories';
    protected $guarded=[];

    public function post()
    {
        return $this->belongsToMany(Post::class,'posts_categories');
    }
}
