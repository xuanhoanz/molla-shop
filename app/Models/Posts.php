<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;


class Posts extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;
    protected $table='posts';
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
