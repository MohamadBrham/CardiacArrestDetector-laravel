<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dose extends Model
{
    protected $fillable =[
        'medication_id',
        'time',
        'updated_at'
    ];

    public function medication(){

        return $this->belongsTo(Medication::class);
    }
}
