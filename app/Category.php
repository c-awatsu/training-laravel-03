<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function items()
    {
        return $this->hasMany('App\Item');
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public static function listOfOptions()
    {
        $list = self::all()->pluck('name', 'id');

        return $list;
    }
}
