<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function Symfony\Component\Translation\t;

class VibeCategory extends Model
{
    use HasFactory;

    protected $table = 'vibe_categories';
    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function related_category()
    {
        return $this->belongsToMany(VibeCategory::class,'vibe_categories_related_categories');
    }

    public function post()
    {
        return $this->belongsToMany(Post::class, 'posts_categories');
    }

    public function images()
    {
        return $this->hasMany(VibeCategoryImages::class, 'category_id', 'id');
    }
}
