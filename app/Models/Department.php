<?php

namespace App\Models;

use App\Models\Staff;
use App\Models\Branch;
use App\Models\Purchase;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Department extends Model
{
    use HasFactory;

    // relationship with branches
    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }

    // relationship with staff
    public function staff()
    {
        return $this->hasMany(Staff::class);
    }
    // relationship with purchases
    public function purchases()
    {
        return $this->hasMany(Purchase::class);
    }
}
