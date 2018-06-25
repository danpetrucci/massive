<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use SoftDeletes;


class Contact extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['campaign_id',
        'email', 'status'
    ];

    protected $dates = ['deleted_at'];

     public function campaign()
    {
        return $this->belongsTo('App\Campaign');
    }
}
