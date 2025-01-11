<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function StatDesk(Request $request)
    {
        $filter = $request->query('filter', 'all'); // Default ke 'all'
        $timeFilter = $request->query('time_filter', null); // Default null
        $tables = ['operasi_rutin', 'operasi_umums', 'penindakan_harian'];

        if ($filter !== 'all') {
            $tables = [$filter];
        }

        // Apply Time Filter
        $timeConstraint = [];
        if ($timeFilter === 'today') {
            $timeConstraint = ['created_at', '>=', now()->startOfDay()];
        } elseif ($timeFilter === 'this_month') {
            $timeConstraint = ['created_at', '>=', now()->startOfMonth()];
        } elseif ($timeFilter === 'this_year') {
            $timeConstraint = ['created_at', '>=', now()->startOfYear()];
        }

        // Mengambil data untuk Bar Chart
        $barChartDataQueries = [];
        foreach ($tables as $table) {
            $query = DB::table($table)
                ->select('pelanggaran', DB::raw('COUNT(*) as total'))
                ->when($timeConstraint, function ($q) use ($timeConstraint) {
                    return $q->where(...$timeConstraint);
                })
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
                ->when($timeConstraint, function ($q) use ($timeConstraint) {
                    return $q->where(...$timeConstraint);
                })
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

        // Koleksi Quotes
        $quotes = [
            "The best way to predict the future is to create it. - Peter Drucker",
            "Success usually comes to those who are too busy to be looking for it. - Henry David Thoreau",
            "Don’t be afraid to give up the good to go for the great. - John D. Rockefeller",
            "I find that the harder I work, the more luck I seem to have. - Thomas Jefferson",
            "Success is not in what you have, but who you are. - Bo Bennett"
        ];

        // Pilih random quotes
        $randomQuote = $quotes[array_rand($quotes)];

        return response()->json([
            'barChartData' => $barChartData,
            'pieChartData' => $pieChartData,
            'quote' => $randomQuote,
        ]);
    }
}
