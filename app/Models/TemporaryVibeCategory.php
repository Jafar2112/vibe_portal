<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class TemporaryVibeCategory extends Model
{
    use HasFactory;
    protected $table='temporary_vibe_categories';
    protected $guarded=[];
    public static function auth_user_and_id($id)
    {
        return TemporaryVibeCategory::where(['user_id'=>Auth::id(),'id'=>$id])->firstOrFail();
    }
    public function images()
    {
        return $this->hasMany(TemporaryVibeCategoryImage::class,'category_id','id');
    }
}
