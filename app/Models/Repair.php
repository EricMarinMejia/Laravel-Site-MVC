<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repair extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'created_at',
        'updated_at',
        'vehicle_id',
        'date_start',
        'date_end',
        'description',
        'amount_paid',
        'mechanic',
        'deleted'
    ];
}
