<?php

namespace App\Models;
use App\Models\Invoice;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
    use HasFactory;


    protected $casts = [
      'worker' => 'array', // Automatically cast the worker JSON column to an array
    ];

      // relation with invoice
      public function invoice(){
        return $this->belongsTo(Invoice::class);
    }
}
