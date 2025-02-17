<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StaffReport extends Model
{
    use HasFactory;

    // realtionship with staff
    public function staff(){
        return $this->belongsTo(Staff::class);
    }
}
