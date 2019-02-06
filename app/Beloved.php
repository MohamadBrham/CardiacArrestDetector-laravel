<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beloved extends Model
{
    protected $fillable = [
        'phone',
        'name',
        'status',
        'user_id'
    ];
    public function user(){

        return $this->belongsTo(User::class);
    }
}
