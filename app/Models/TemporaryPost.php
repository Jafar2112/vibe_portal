<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class TemporaryPost extends Model
{
    use HasFactory;
    protected $table='temporary_posts';
    protected $guarded=['id'];

    public static function auth_user_and_id($id)
    {
        return TemporaryPost::where(['user_id'=>Auth::id(),'id'=>$id])->firstOrFail();
    }
    public function images()
    {
        return $this->hasMany(TemporaryImage::class,'post_id','id');
    }
}
