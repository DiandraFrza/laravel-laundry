<?php
namespace App\Exports;

use App\Models\DataPesanan;
use Maatwebsite\Excel\Concerns\WithHeadings;

class OrdersExport
{
    public function collection()
    {
        return DataPesanan::all();
    }

    public function headings(): array
    {
        return [
            'ID',
            'Nama Pemesan',
            'Nomor Telepon', 
            'Total Berat (KG)',
            'Total Harga',
            'Status',
            'Tanggal Dibuat',
            'Tanggal Diupdate'
        ];
    }
}