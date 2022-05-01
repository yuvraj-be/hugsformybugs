<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Title_en','slug','Content_en','image','Days','Hours','Minutes','Address','FinishTime','StartTime'
    ];
}
