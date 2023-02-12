<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostsCategory extends Model
{
    use HasFactory;
    protected $table='posts-categories';
    public function scopeSearch($query)
    {
        if ($key = request()->key) {
            $query = $query->where('name', 'like', '%' . $key . '%')
                ->orwhere('information', 'like', '%' . $key . '%')
                ->orwhere('price', 'like', '%' . $key . '%');
        }
        return $query;
    }

}
