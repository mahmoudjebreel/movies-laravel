<?php

namespace App\Models;

use Laratrust\Models\LaratrustRole;

class Role extends LaratrustRole
{
    protected $fillable = ['name'];

    public function scopeSearch($query, $keyword)
    {
        return $query->where('name', 'like', '%' . $keyword . '%');
    }

    public function scopeWhereRoleNot($query,$role_name)
    {
        return $query->whereNotIn('name',(array)$role_name);
    }
}
