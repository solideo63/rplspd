<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function StatDesk(Request $request)
{
    $filter = $request->query('filter', 'all'); // Default ke 'all'
    $tables = ['operasi_rutin', 'operasi_umums', 'penindakan_harian'];

    if ($filter !== 'all') {
        $tables = [$filter];
    }

    // Mengambil data untuk Bar Chart
    $barChartDataQueries = [];
    foreach ($tables as $table) {
        $query = DB::table($table)
            ->select('pelanggaran', DB::raw('COUNT(*) as total'))
            ->groupBy('pelanggaran');
        $barChartDataQueries[] = $query;
    }

    if (!empty($barChartDataQueries)) {
        $barChartData = array_shift($barChartDataQueries);
        foreach ($barChartDataQueries as $query) {
            $barChartData = $barChartData->union($query);
        }

        $barChartData = DB::table($barChartData, 'union_table')
            ->select('pelanggaran', DB::raw('SUM(total) as total'))
            ->groupBy('pelanggaran')
            ->get();
    } else {
        $barChartData = collect([]);
    }

    // Mengambil data untuk Pie Chart
    $pieChartDataQueries = [];
    foreach ($tables as $table) {
        $query = DB::table($table)
            ->select('tingkat', DB::raw('COUNT(*) as total'))
            ->groupBy('tingkat');
        $pieChartDataQueries[] = $query;
    }

    if (!empty($pieChartDataQueries)) {
        $pieChartData = array_shift($pieChartDataQueries);
        foreach ($pieChartDataQueries as $query) {
            $pieChartData = $pieChartData->union($query);
        }

        $pieChartData = DB::table($pieChartData, 'union_table')
            ->select('tingkat', DB::raw('SUM(total) as total'))
            ->groupBy('tingkat')
            ->get();
    } else {
        $pieChartData = collect([]);
    }

    return response()->json([
        'barChartData' => $barChartData,
        'pieChartData' => $pieChartData,
    ]);
}
}