<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_users',
        'id_academy',
        'id_events',
        'identity_code',
        'edu_stage',
        'birth_date',
        'phone',
        'gender',
        'department',
        'adress'
    ];

    public function events(){
        return $this->belongsTo(Event::class,'id');
    }
}
