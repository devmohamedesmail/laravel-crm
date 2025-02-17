<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Check extends Model
{
    use HasFactory;
    protected $fillable = ["branch_id","issuer","amount","statement","number","date","credit"];
    // relationship with branch
    public function branch(){
        return $this->belongsTo(Branch::class);
    }
}
