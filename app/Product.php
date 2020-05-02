<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Product extends Model
{
    use Translatable;

    protected $translatable = ['name', 'text', 'price', 'currency', 'description'];
    public function Gallery()
    {
        return $this->belongsTo(Gallery::class,'gallery_id');
    }
    public function Category()
    {
        return $this->belongsTo(Category::class, 'cat_id');
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
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
    public static function listStatus()
    {

        return [
            self::STATUS_ACTIVE    => 'Available',
            self::STATUS_INACTIVE    => 'Out Of Stock',

        ];
    }
    public function statusLabel()
    {
        $list = self::listStatus();

        // little validation here just in case someone mess things
        // up and there's a ghost status saved in DB
        return isset($list[$this->status])
            ? $list[$this->status]
            : $this->status;
    }
}
