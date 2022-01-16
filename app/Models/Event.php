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
        'year',
        'icon_url',
        'background_url',
        'audience',
        'registration_fee',
        'tm_time',
        'tm_method',
        'tm_url',
        'max_slot',
        'register_time',
        'register_close',
        'quotes',
        'desc',
        'blog',
        'status'
    ];


    public function users(){
        return $this->hasMany(UserDetail::class,'id_events');
    }

    public function mentors(){
        return $this->hasMany(Mentor::class);
    }
}
