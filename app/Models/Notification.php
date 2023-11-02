<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Notification extends Model
{
    use HasFactory;
    protected $table='notifications';
    protected $guarded=[];
    public function from_user()
    {
        return $this->belongsTo(User::class,'from_user_id','id');
    }
    public function to_user()
    {
        return $this->belongsTo(User::class,'to_user_id','id');
    }
    public function post()
    {
        return $this->belongsTo(Post::class,'post_id','id');
    }
    public static function auth_user_get()
    {
        return Notification::where('to_user_id',Auth::id())->get();
    }
    public function type()
    {
        return $this->belongsTo(NotificationType::class,'type_id','id');
    }
}
