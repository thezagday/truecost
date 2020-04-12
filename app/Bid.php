<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'bids';

    protected $fillable = ['title', 'description', 'user_id', 'level_id', 'category_id'];

    /**
     * Get the user that owns the bid.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Get the order by bid.
     */
    public function order()
    {
        return $this->hasOne('App\Order');
    }

    /**
     * Get the bid level.
     */
    public function level()
    {
        return $this->belongsTo('App\Level');
    }

    /**
     * Get the bid category.
     */
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
