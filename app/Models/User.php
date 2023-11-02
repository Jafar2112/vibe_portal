<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use function Symfony\Component\Translation\t;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'about',
        'profile_photo'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];
    public function posts()
    {
        return $this->hasMany(Post::class,'user_id','id');
    }

    public function follower()
    {
        return $this->belongsToMany(User::class,'user_follow','following_id','follower_id');
    }
    public function following()
    {
        return $this->belongsToMany(User::class,'user_follow','follower_id','following_id');
    }
    public function following_categories()
    {
        return $this->belongsToMany(VibeCategory::class,'user_follow_categories','user_id','category_id');
    }
    public function likes()
    {
        return $this->belongsToMany(Post::class,'likes','user_id','post_id');
    }
}
