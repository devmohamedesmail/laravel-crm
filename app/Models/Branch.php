<?php

namespace App\Models;

use App\Models\Client;
use App\Models\Invoice;
use App\Models\Service;
use App\Models\Department;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Branch extends Model
{
  use HasFactory;

  // relation with invoices
  public function invoices()
  {
    return $this->hasMany(Invoice::class);
  }
  // relation with client
  public function clients()
  {
    return $this->hasMany(Client::class);
  }
  // realtionship with department
  public function departments()
  {
    return $this->hasMany(Department::class);
  }
  // realtion with rents
  public function rents()
  {
    return $this->hasMany(Rent::class);
  }
  // relation with check
  public function checks()
  {
    return $this->hasMany(Check::class);
  }

  // relationship with purchases
  public function purchases(){
    return $this->hasMany(Purchase::class);
  }
   // relationship with service
  public function services(){
    return $this->hasMany(Service::class);
  }

  
}
