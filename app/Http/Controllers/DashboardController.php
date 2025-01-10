<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function StatDesk()
    {
        // Data untuk Bar Chart: Proporsi pelanggaran berdasarkan pelanggaran
        $barChartData = DB::table(function ($query) {
            $query->select('pelanggaran', DB::raw('COUNT(*) as total'))
                ->from('operasi_rutin')
                ->groupBy('pelanggaran')
                ->union(
                    DB::table('operasi_umums')
                        ->select('pelanggaran', DB::raw('COUNT(*) as total'))
                        ->groupBy('pelanggaran')
                )
                ->union(
                    DB::table('penindakan_harian')
                        ->select('pelanggaran', DB::raw('COUNT(*) as total'))
                        ->groupBy('pelanggaran')
                );
        }, 'union_table')
            ->select('pelanggaran', DB::raw('SUM(total) as total'))
            ->groupBy('pelanggaran')
            ->get();

        // Data untuk Pie Chart: Persentase dan jumlah pelanggaran per tingkat
        $pieChartData = DB::table(function ($query) {
            $query->select('tingkat', DB::raw('COUNT(*) as total'))
                ->from('operasi_rutin')
                ->groupBy('tingkat')
                ->union(
                    DB::table('operasi_umums')
                        ->select('tingkat', DB::raw('COUNT(*) as total'))
                        ->groupBy('tingkat')
                )
                ->union(
                    DB::table('penindakan_harian')
                        ->select('tingkat', DB::raw('COUNT(*) as total'))
                        ->groupBy('tingkat')
                );
        }, 'union_table')
            ->select('tingkat', DB::raw('SUM(total) as total'))
            ->groupBy('tingkat')
            ->get();

        // Mengembalikan data dalam format JSON
        return response()->json([
            'barChartData' => $barChartData,
            'pieChartData' => $pieChartData,
        ]);
    }
}
