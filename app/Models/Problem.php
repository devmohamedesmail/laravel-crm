<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Problem extends Model
{
    use HasFactory;

    // relation with invoice
    public function invoice(){
        return $this->belongsTo(Invoice::class);
    }
}
