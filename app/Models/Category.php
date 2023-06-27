<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
    
    public function scopeSearch($query, $keyword)
    {
        return $query->where('name', 'like', '%' . $keyword . '%');
    }
}
