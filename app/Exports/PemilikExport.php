<?php

namespace App\Exports;

use App\Pemilik;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PemilikExport implements FromCollection, WithMapping, WithHeadings 
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Pemilik::all();
    }

    public function map($pemilik): array
    {
        return [
            $pemilik->id,
            $pemilik->name,
            $pemilik->phone,
            $pemilik->address,
            $pemilik->email,
        ];
    }

    public function headings(): array
    {
        return [
            'ID Pemilik',
            'Nama',
            'No Telp',
            'Alamat',
            'Email',
        ];
    }
}
