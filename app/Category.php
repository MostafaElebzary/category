<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name', 'category_id',
    ];

//    public function categories()
//    {
//        return $this->hasOne(Category::class);
//    }

    public function childrenCategories()
    {
        return $this->hasMany(Category::class)->with('childrenCategories');
    }
    public function scopeRoot($query)
    {
        return $query->where('category_id', null);
    }

}
