<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image',
        'year',
        'rating',
    ];


    public function categories()
    {
        return $this->belongsToMany(Category::class,'movie_categories','movie_id','category_id','id','id');
    }

}
