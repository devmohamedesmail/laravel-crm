<?php

namespace App\Models;
use App\Models\Branch;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    public function branch(){
        return $this->belongsTo(Branch::class);
    }
    
    // relation with worker
    public function workers(){
        return $this->hasMany(ServiceWorker::class);
    }
}
