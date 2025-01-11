<x-layout>{{ $title }}</x-layout>
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

@if (session('success'))
    <script>
        alert("{{ session('success') }}");
    </script>
@endif

<div class="p-4 sm:ml-64 mt-4">
    <h2 class="text-4xl ml-4 mb-4 font-bold dark:text-white">Selamat datang, {{ Auth::user()->name }}</h2>
    <br>
    <!-- Filter Section -->
    <div class="mb-4">
        <label for="filter" class="block text-sm font-medium text-gray-700">Pilih Data Operasi:</label>
        <select id="filter" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="all">Semua Operasi</option>
            <option value="operasi_rutin">Operasi Rutin</option>
            <option value="operasi_umums">Operasi Umum</option>
            <option value="penindakan_harian">Penindakan Harian</option>
        </select>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 p-4">
        <!-- Bar Chart Section -->
        <div class="bg-white shadow-md rounded-lg p-4">
            <h2 class="text-xl font-bold mb-4">Bar Chart: Laporan Pelanggaran</h2>
            <div id="bar-chart-container">
                <canvas id="bar-chart" style="max-height: 300px;"></canvas>
                <p id="bar-chart-empty" class="text-center text-gray-500 hidden">Tidak ada data untuk ditampilkan.</p>
            </div>
        </div>

        <!-- Pie Chart Section -->
        <div class="bg-white shadow-md rounded-lg p-4">
            <h2 class="text-xl font-bold mb-4">Pie Chart: Laporan Pelanggaran</h2>
            <div id="pie-chart-container">
                <canvas id="pie-chart" style="max-height: 300px;"></canvas>
                <p id="pie-chart-empty" class="text-center text-gray-500 hidden">Tidak ada data untuk ditampilkan.</p>
            </div>
        </div>
    </div>

<script>
    const filterElement = document.getElementById('filter');
    let barChartInstance = null;
    let pieChartInstance = null;

    function fetchAndRenderCharts(filter) {
        fetch(`/dashboard/data?filter=${filter}`)
            .then(response => {
                if (!response.ok) {
                    throw new Error(`HTTP error! status: ${response.status}`);
                }
                return response.json();
            })
            .then(data => {
                // Mengelompokkan data untuk Bar Chart
                const groupedBarData = data.barChartData.reduce((acc, item) => {
                    acc[item.pelanggaran] = (acc[item.pelanggaran] || 0) + item.total;
                    return acc;
                }, {});

                const barChartLabels = Object.keys(groupedBarData);
                const barChartValues = Object.values(groupedBarData);

                // Bersihkan Bar Chart sebelumnya (jika ada)
                if (barChartInstance) {
                    barChartInstance.destroy();
                }

                // Tampilkan atau sembunyikan Bar Chart
                if (barChartLabels.length === 0) {
                    document.getElementById("bar-chart").style.display = "none";
                    document.getElementById("bar-chart-empty").classList.remove("hidden");
                } else {
                    document.getElementById("bar-chart").style.display = "block";
                    document.getElementById("bar-chart-empty").classList.add("hidden");

                    // Membuat Bar Chart baru
                    const barChartCtx = document.getElementById("bar-chart").getContext("2d");
                    barChartInstance = new Chart(barChartCtx, {
                        type: "bar",
                        data: {
                            labels: barChartLabels,
                            datasets: [{
                                label: "Jumlah Pelanggaran",
                                data: barChartValues,
                                backgroundColor: "rgba(255, 165, 0, 0.4)",
                                borderColor: "rgba(255, 165, 0, 0.6)",
                                borderWidth: 1
                            }]
                        },
                        options: {
                            responsive: true,
                            plugins: {
                                legend: {
                                    display: false
                                }
                            },
                            scales: {
                                y: {
                                    beginAtZero: true,
                                    ticks: {
                                        stepSize: 1,
                                        callback: function(value) {
                                            return Number.isInteger(value) ? value : null;
                                        }
                                    }
                                }
                            }
                        }
                    });
                }

                // Mengelompokkan data untuk Pie Chart
                const pieChartLabels = data.pieChartData.map(item => `Tingkat ${item.tingkat}`);
                const pieChartValues = data.pieChartData.map(item => item.total);

                // Bersihkan Pie Chart sebelumnya (jika ada)
                if (pieChartInstance) {
                    pieChartInstance.destroy();
                }

                // Tampilkan atau sembunyikan Pie Chart
                if (pieChartLabels.length === 0) {
                    document.getElementById("pie-chart").style.display = "none";
                    document.getElementById("pie-chart-empty").classList.remove("hidden");
                } else {
                    document.getElementById("pie-chart").style.display = "block";
                    document.getElementById("pie-chart-empty").classList.add("hidden");

                    // Membuat Pie Chart baru
                    const pieChartCtx = document.getElementById("pie-chart").getContext("2d");
                    pieChartInstance = new Chart(pieChartCtx, {
                        type: "pie",
                        data: {
                            labels: pieChartLabels,
                            datasets: [{
                                data: pieChartValues,
                                backgroundColor: [
                                    "rgba(54, 162, 235, 0.6)",
                                    "rgba(75, 192, 192, 0.6)",
                                    "rgba(255, 206, 86, 0.6)",
                                    "rgba(153, 102, 255, 0.6)"
                                ]
                            }]
                        },
                        options: {
                            responsive: true,
                            plugins: {
                                legend: {
                                    position: "right"
                                }
                            }
                        }
                    });
                }
            })
            .catch(error => {
                console.error("Error fetching data:", error);
                alert("Terjadi kesalahan saat memuat data. Silakan coba lagi.");
            });
    }

    // Render charts on filter change
    filterElement.addEventListener('change', () => {
        const filterValue = filterElement.value;
        fetchAndRenderCharts(filterValue);
    });

    // Initial render
    fetchAndRenderCharts('all');
</script>

</div>

<x-footer></x-footer>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="{{ asset('js/chartbar.js') }}"></script>
<script src="{{ asset('js/piechart.js') }}"></script>
