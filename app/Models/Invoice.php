<?php

namespace App\Models;
use App\Models\Branch;
use App\Models\Problem;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Invoice extends Model
{
    use HasFactory;
    protected $fillable =[
        'branch_id',
        'invoiceType',
        'invoiceNumber',
        'name',
        'phone',
        'address',
        'carNo',
        'carType',
        'carService',
        'price',
        'description',
        'note',
        'percent',
        'Ddate',
        'Rdate',
        'paidMethod',
        'carStatus',
        'carInfo',
        'sales'];
    protected $casts = [
        'carInfo' => 'json'
    ];
    // relation with branch
    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }

    // problems 
    public function problems(){
        return $this->hasMany(Problem::class);
    }

    public function stages(){
        return $this->hasMany(Stage::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($invoice) {
            $invoice->invoiceNumber = self::generateInvoiceNumber();
        });
    }

    public static function generateInvoiceNumber()
    {
        // Define your prefix
        $prefix = 'Akh-';

        // Use a transaction to handle concurrency
        return DB::transaction(function () use ($prefix) {
            do {
                // Get the last invoice number
                $lastInvoice = self::latest('id')->first();

                if ($lastInvoice) {
                    // Extract the numeric part and increment it
                    $lastNumber = (int) substr($lastInvoice->invoiceNumber, strlen($prefix));
                    $newNumber = $lastNumber + 1;
                } else {
                    // Start with 1 if no invoices exist
                    $newNumber = 1;
                }

                // Format the number (e.g., zero-padded to 6 digits)
                $formattedNumber = str_pad($newNumber, 6, '0', STR_PAD_LEFT);
                $invoiceNumber = $prefix . $formattedNumber;

                // Check if the invoice number already exists
                $exists = self::where('invoiceNumber', $invoiceNumber)->exists();
            } while ($exists);

            return $invoiceNumber;
        });
    }
}
