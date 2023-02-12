<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Scope;
use Illuminate\Database\Eloquent\Builder;

class ProductCategory extends Model
{
    use HasFactory;
    protected $table='product-categories';

    public function scopeSearch($query)
    {
        if ($key = request()->key)
        {
            $query = $query->where('name', 'like', '%'.$key.'%');
        }
        return $query;

    }
    public function products()
    {
        return $this->hasMany(Product::class,'category_id','id');
    }
}
