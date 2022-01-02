<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    use HasFactory;
    protected $fillable = [
        'academy_id',
        'event_id',
        'name',
        'phone',
        'identity_code'
    ];

    public function academy(){
        return $this->belongsTo(Academy::class,'academy_id');
    }

    public function events(){
        return $this->belongsTo(Event::class,'event_id');
    }

}
