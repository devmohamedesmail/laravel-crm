<?php

namespace App\Imports;

use App\Models\Invoice;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class InvoicesImport implements ToModel,WithHeadingRow
{
    use Importable;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
   
        return new Invoice([
            'branch_id' => $row[0] ?? null,
            'invoiceType' => $row[1] ?? null,
            'invoiceNumber' => $row[2] ?? null,
            'name' => $row[3] ?? null,
            'phone' => $row[4] ?? null,
            'address' => $row[5] ?? null,
            'carNo' => $row[6] ?? null,
            'carType' => $row[7] ?? null,
            'carService' => $row[8] ?? null,
            'price' => $row[9] ?? null,
            'description' => $row[10] ?? null,
            'note' => $row[11] ?? null,
            'percent' => $row[12] ?? null,
            'Ddate' => \Carbon\Carbon::parse($row[13]) ?? null,
            'Rdate' => \Carbon\Carbon::parse($row[14]) ?? null,
            'paidMethod' => $row[15] ?? null,
            'carInfo' => $row[16] ?? null,
            'sales' => $row[17] ?? null,
        ]);
    }
}
