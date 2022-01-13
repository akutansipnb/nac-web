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
        'adress',
        'validation_status'
    ];

    public function events(){
        return $this->belongsTo(Event::class,'id_events');
    }

    public function users(){
        return $this->belongsTo(User::class,'id_users');
    }

    public function academy(){
        return $this->belongsTo(Academy::class,'id_academy');
    }
}
