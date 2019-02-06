<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medication extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'start',
        'end'
    ];

    public function user(){

        return $this->belongsTo(User::class);
    }
    public function doses(){

        return $this->hasMany(Dose::class);
    }
}
