<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use App\Models\Staff;
use App\Models\Salary;
use Illuminate\Console\Command;

class CalculateSalaries extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:calculate-salaries';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Calculate and store salaries for each worker';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // get the curent month
        $month = Carbon::now()->format('Y-m');

        // Get all workers
        $staff = Staff::all();


        foreach ($staff as $worker) {
            // Calculate the salary for the worker
            $calculatedSalary = $worker->calculateSalary($month);

            // Check if a salary record for this month already exists
            $existingSalary = Salary::where('staff_id', $worker->id)
                ->where('month', $month)
                ->first();

            if ($existingSalary) {
                // Update existing record
                $existingSalary->update(['calculated_salary' => $calculatedSalary]);
            } else {
                // Create new record
                Salary::create([
                    'staff_id' => $worker->id,
                    'month' => $month,
                    'calculated_salary' => $calculatedSalary,
                ]);
            }
        }

        $this->info('Salaries calculated and stored successfully!');

    }
}
