<?php

namespace App\Imports;

use App\Models\Check;
use Maatwebsite\Excel\Concerns\ToModel;

class ChecksImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Check([
            'issuer'    => $row[0] ?? null,
            'amount'    => $row[1] ?? null,
            'statement' => $row[2] ?? null,
            'number'    => $row[3] ?? null,
            'date'      => $row[4] ?? null,
            'credit'    => $row[5] ?? null,
        ]);
    }
}
