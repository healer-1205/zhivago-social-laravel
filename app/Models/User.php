<?php

namespace App\Models;

use App\Models\Users\Post;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

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
     * @var string[]
     * 
     * 
     */
    public function getRouteKeyName()
    {
        return 'username';
    }

    public function post()
    {
        return $this->hasMany(Post::class, 'post_id');
    }


    protected $fillable = [
        'name',
        'email',
        'password',
        'DOB',
        'accountType',
        'username',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
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
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function setAccountTypeAttribute($value)
    {
        $this->attributes['accountType'] = json_encode($value);
    }

    public function getAccountTypeAttribute($value)
    {
        return $this->attributes['accountType'] = json_decode($value);
    }
}
