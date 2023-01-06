<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categorie extends Model
{
    use HasFactory;
    use Sluggable;

    protected $guarded = ['id'];

    public function Products()
    {
        return $this->hasMany(Product::class);
    }



    public function ProductsPromo()
    {
        return $this->hasMany(Promo::class);
    }



    public function Penjual()
    {
        return $this->belongsTo(User::class, 'user_id');
    }



    public function getRouteKeyName()
    {
        return 'slug';
    }



    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'judulCategory'
            ]
        ];
    }
}
