<?php

namespace App\Imports;

use App\Models\Staff;
use Maatwebsite\Excel\Concerns\ToModel;

class StaffImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Staff([
            'department_id' => 1,
            'name'          => $row[2] ?? null,
            'salary'        => $row[3] ?? null,
            'discount'      => $row[4] ?? null,
            'advance'       => $row[5] ?? null,
            'comments'      => $row[6] ?? null,

        ]);
    }
}
