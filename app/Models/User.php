<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, Sluggable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



    public function Postingan()
    {
        return $this->hasMany(tb_FeaturedProduct::class);
    }



    public function banners()
    {
        return $this->hasMany(tb_BannerBegin::class);
    }



    public function categories()
    {
        return $this->hasMany(tb_Categorie::class);
    }



    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }



    public function jumbotrons()
    {
        return $this->hasMany(tb_jumbotron::class);
    }



    public function promo()
    {
        return $this->hasMany(tb_PromoProduk::class);
    }



    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'username'
            ]
        ];
    }
}
