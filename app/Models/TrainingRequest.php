<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrainingRequest extends Model
{
    protected $fillable = [
        'employee_id',
        'training_id',
        'status',
        'request_by',
        'workshop_date',
    ];
}
