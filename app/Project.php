<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Project extends Model
{
    use Translatable;

    protected $translatable = ['name', 'text'];
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
