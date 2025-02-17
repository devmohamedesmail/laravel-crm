<?php

namespace App\Models;

use App\Models\Task;
use App\Models\Salary;
use App\Models\Cartask;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Staff extends Model
{
    use HasFactory;
    protected $fillable = ["department_id","name","salary","discount","advance","comments"];

    // relationship with department
    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    // realtionship with reports
    public function reports()
    {
        return $this->hasMany(Staff::class);
    }

    // relationship with salaries
    public function salaries()
    {
        return $this->hasMany(Salary::class);
    }

    // relationship with tasks
    public function tasks()
    {
        return $this->belongsToMany(Cartask::class);
    }

    // function to calculate salaries
    public function calculateSalary($month)
    {
        $salary = $this->salary;
        $discount = $this->discount;
        $advance = $this->advance;

        // Calculate the salary after applying the fixed discount and any advance
        $calculatedSalary = $salary - $discount - $advance;

        // Ensure the salary is not negative
        $calculatedSalary = max($calculatedSalary, 0);

        return $calculatedSalary;
    }
}
