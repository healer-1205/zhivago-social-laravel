<?php

namespace App\Models\Users;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use GeneaLabs\LaravelModelCaching\Traits\Cachable;


class Post extends Model
{
    use HasFactory, Cachable;
    protected $cacheCooldownSeconds = 60*30; 

    public function user()
    {
        return $this->belongsTo(User::class , 'user_id');
    }

}
