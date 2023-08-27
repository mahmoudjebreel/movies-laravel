<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

//    public function scopeSearch($query, $keyword)
//    {
//        return $query->where('name', 'like', '%' . $keyword . '%');
//    }

    public function movies()
    {
        return $this->belongsToMany(Movie::class,'movie_categories','category_id','movie_id','id','id');
    }
}
