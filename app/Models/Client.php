<?php

namespace App\Models;

use App\Models\Branch;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model
{
    use HasFactory;
    protected $casts = [
      'carInfo'=>'json',
    ];
     // relation with branch
     public function branch(){
      return $this->belongsTo(Branch::class);
    }
}
