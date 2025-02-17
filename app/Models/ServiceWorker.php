<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceWorker extends Model
{
    use HasFactory;
    // relation ship with service
    public function service(){
        return $this->belongsTo(Service::class);
    }
    // relationship with tasks
    public function tasks(){
        return $this->hasMany(Task::class,"service_workers_id");
    }
    
}
