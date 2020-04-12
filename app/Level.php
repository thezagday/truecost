<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'levels';

    protected $fillable = ['title', 'description'];

    /**
     * Get all bids by level.
     */
    public function bids()
    {
        return $this->hasMany('App\Bid');
    }
}
