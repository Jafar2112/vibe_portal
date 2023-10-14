<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function Symfony\Component\Translation\t;

class UserFollow extends Model
{
    use HasFactory;

    protected $table = 'user_follow';
    protected $guarded = [];

    public function follower()
    {
        return $this->belongsTo(User::class,'follower_id');
    }
    public function following()
    {
        return $this->belongsTo(User::class,'following_id');
    }
}
