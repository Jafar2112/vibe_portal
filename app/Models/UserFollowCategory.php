<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserFollowCategory extends Model
{
    use HasFactory;
    protected $table='user_follow_categories';
    protected $guarded=[];
}

