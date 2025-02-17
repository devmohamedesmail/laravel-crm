<?php

namespace App\Models;

use App\Models\Staff;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Task extends Model
{
    use HasFactory;
    
    // relationship with ServiceWorker
    public function worker(){
        return $this->belongsTo(ServiceWorker::class);
    }

}
