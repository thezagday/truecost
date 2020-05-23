<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'deals';

    protected $fillable = ['status', 'lot_id', 'executor_id'];

    /**
     * Get the based lot.
     */
    public function lot()
    {
        return $this->belongsTo('App\Lot');
    }

    /**
     * Get the reviews for the deal.
     */
    public function reviews()
    {
        return $this->hasMany('App\Review');
    }
}
