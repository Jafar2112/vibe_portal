<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VibeCategoryRelatedCategory extends Model
{
    use HasFactory;
    protected $table='vibe_categories_related_categories';
    protected $guarded=[];
    public function category()
    {
        return $this->belongsTo(VibeCategory::class ,'related_category_id');
    }
}
