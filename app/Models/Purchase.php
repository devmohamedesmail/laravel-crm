<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    // realtionwith branch
    public function branch(){
        return $this->belongsTo(Branch::class);
    }
    // realtionwith branch
    public function department(){
        return $this->belongsTo(Department::class);
    }
}
