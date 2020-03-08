<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'reviews';

    /**
     * Get the based deal.
     */
    public function deal()
    {
        return $this->belongsTo('App\Deal');
    }
}
