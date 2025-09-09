<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailTraining extends Model
{
    protected $fillable = [
        'training_id',
    ];

    public function training()
    {
        return $this->belongsTo(Training::class, 'training_id');
    }
}
