<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'categories';

    protected $fillable = ['title', 'description'];

    /**
     * Get all bids by category.
     */
    public function bids()
    {
        return $this->belongsTo('App\Bid');
    }
}
