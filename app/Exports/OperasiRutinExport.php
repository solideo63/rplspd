<?php

namespace App\Exports;

use Illuminate\Contracts\Support\Responsable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

class OperasiRutinExport implements FromCollection, WithHeadings, WithCustomStartCell, WithEvents
{
    protected $data;
    protected $tanggal;

    public function __construct($data, $tanggal)
    {
        $this->data = $data->map(function ($item) {
            unset($item['nama_pencatat']); // Hilangkan kolom Nama Pencatat
            return $item;
        });
        $this->tanggal = $tanggal;
    }

    public function collection()
    {
        return $this->data;
    }

    public function headings(): array
    {
        // Sesuaikan dengan kolom di database tanpa Nama Pencatat
        return [
            'ID',
            'NIM',
            'Nama Mahasiswa',
            'Tingkat',
            'Pelanggaran'
        ];
    }

    public function startCell(): string
    {
        // Mulai tabel dari cell A3
        return 'A3';
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {
                $sheet = $event->sheet->getDelegate();

                // Tambahkan informasi tanggal di atas tabel
                $sheet->setCellValue('A1', 'Data Operasi Rutin - Tanggal: ' . $this->tanggal);
                $sheet->mergeCells('A1:E1'); // Sesuaikan range dengan jumlah kolom
                $sheet->getStyle('A1')->getFont()->setBold(true); // Buat teks tanggal tebal
            },
        ];
    }
}