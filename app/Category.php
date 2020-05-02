<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Models\Post;

class Category extends \TCG\Voyager\Models\Category
{
    public function parent()
    {
        return $this->belongsTo('App\Category', 'parent_id');
    }

    public function children()
    {
        return $this->hasMany('App\Category', 'parent_id');
    }
    public function products()
    {
        return $this->hasMany('App\Product', 'cat_id');
    }

    public function posts()
    {
        return $this->hasMany('\TCG\Voyager\Models\Post', 'category_id');
    }
}
