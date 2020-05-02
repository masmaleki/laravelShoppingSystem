<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Module extends Model
{
    use Translatable;

    protected $translatable = ['title', 'subtitle', 'body', 'button1', 'button2'];
    public function pages()
    {
        return $this->belongsToMany(Page::class);
    }
    public function position()
    {
        return $this->belongsTo(Position::class);
    }

    /**
     * Statuses.
     */
    const STATUS_ACTIVE = '1';
    const STATUS_INACTIVE = '0';

    /**
     * List of statuses.
     *
     * @var array
     */
    public static $statuses = [self::STATUS_ACTIVE, self::STATUS_INACTIVE];




    /**
     * Scope a query to only include active pages.
     *
     * @param  $query  \Illuminate\Database\Eloquent\Builder
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeActive($query)
    {
        return $query->where('status', static::STATUS_ACTIVE);
    }
}
