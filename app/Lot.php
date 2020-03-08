<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lot extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'lots';

    /**
     * Get the based order.
     */
    public function order()
    {
        return $this->belongsTo('App\Order');
    }

    /**
     * Get the deal by lot.
     */
    public function deal()
    {
        return $this->hasOne('App\Deal');
    }
}
