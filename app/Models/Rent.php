<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    use HasFactory;
    // relationship with branch
    public function branch(){
        return $this->belongsTo(Branch::class);
    }
}
