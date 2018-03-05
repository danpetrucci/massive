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
    protected $fillable = [
        'name', 'type', 'subject','image_url','footer','status'
    ];

    protected $dates = ['deleted_at'];
}
