<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Academy extends Model
{
    use HasFactory;

    protected $fillable = [
        'academy_type',
        'academy_name',
        'phone',
        'address'
    ];

    public function mentors(){
        return $this->hasMany(Mentor::class);
    }

    public function users(){
        return $this->hasMany(UserDetail::class,'id_academy');
    }


}
