<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'orders';

    /**
     * Get the based bid.
     */
    public function bid()
    {
        return $this->belongsTo('App\Bid');
    }

    /**
     * Get the lot by order.
     */
    public function lot()
    {
        return $this->hasOne('App\Lot');
    }
}
