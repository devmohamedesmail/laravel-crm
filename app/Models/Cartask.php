<?php

namespace App\Models;

use App\Models\Staff;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cartask extends Model
{
    use HasFactory;

    protected $casts = [
        'worker' => 'array', 
    ];

    public function staff()
    {
        return $this->belongsToMany(Staff::class);
    }
}
