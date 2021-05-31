<?php

namespace App\Exports;

use App\Models\Post as Models;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PostExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings(): array
    {
        return [
            'Id',
            'title',
            'body',
            'create at',
            'update at'
        ];
    }

    public function collection()
    {
        return Models::all();
    }
}
