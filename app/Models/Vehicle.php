<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'created_at',
        'updated_at',
        'user_id',
        'brand',
        'model',
        'license_plate',
        'kilometers',
        'image'
    ];

    public function repairs()
    {
        return $this->hasMany(Repair::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
