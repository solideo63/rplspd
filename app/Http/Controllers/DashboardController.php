<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function StatDesk()
    {
        // Data untuk Bar Chart: Proporsi pelanggaran berdasarkan violation
        $barChartData = DB::table('operasi_rutin')
            ->select('pelanggaran', DB::raw('count(*) as total'))
            ->groupBy('pelanggaran')
            ->get();

        // Data untuk Pie Chart: Persentase dan jumlah pelanggaran per tingkat
        $pieChartData = DB::table('operasi_rutin')
            ->select('tingkat', DB::raw('count(*) as total'))
            ->groupBy('tingkat')
            ->get();

        // Mengembalikan data dalam format JSON
        return response()->json([
            'barChartData' => $barChartData,
            'pieChartData' => $pieChartData,
        ]);
    }
}
