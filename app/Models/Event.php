<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'event_name',
        'aliases',
        'icon_url',
        'audience',
        'tm_time',
        'tm_method',
        'max_slot',
        'register_time',
        'regiter_close'
    ];

}
