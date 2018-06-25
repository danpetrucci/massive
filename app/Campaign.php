<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use SoftDeletes;

class Campaign extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id',
        'name', 'type', 'subject','image_url','footer','status'
    ];

    protected $dates = ['deleted_at'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function contact()
    {
        return $this->hasMany('App\Contact');
    }
}
