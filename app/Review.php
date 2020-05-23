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

    protected $fillable = ['title', 'body', 'user_id', 'deal_id'];

    /**
     * Get the based deal.
     */
    public function deal()
    {
        return $this->belongsTo('App\Deal');
    }

    /**
     * Get user.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
