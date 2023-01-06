<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    use Sluggable;

    protected $guarded = ['id'];

    public function Category()
    {
        return $this->belongsTo(Categorie::class, 'categorie_id');
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
                'source' => 'judulProduct'
            ]
        ];
    }
}
