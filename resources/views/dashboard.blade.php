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
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 p-4">
        <!-- Bar Chart Section -->
        <div class="bg-white shadow-md rounded-lg p-4">
            <h2 class="text-xl font-bold mb-4">Bar Chart: Laporan Pelanggaran</h2>
            <canvas id="bar-chart" style="max-height: 300px;"></canvas>
        </div>

        <!-- Pie Chart Section -->
        <div class="bg-white shadow-md rounded-lg p-4">
            <h2 class="text-xl font-bold mb-4">Pie Chart: Laporan Pelanggaran</h2>
            <canvas id="pie-chart" style="max-height: 300px;"></canvas>
        </div>
    </div>


    <script>
        // Fetch data from Laravel API
        fetch('/dashboard/data')
            .then(response => response.json())
            .then(data => {
                // Mengelompokkan data untuk Bar Chart
                const groupedBarData = data.barChartData.reduce((acc, item) => {
                    if (acc[item.pelanggaran]) {
                        acc[item.pelanggaran] += item.total;
                    } else {
                        acc[item.pelanggaran] = item.total;
                    }
                    return acc;
                }, {});


                // Mengonversi ke format yang dapat digunakan oleh Chart.js
                const barChartLabels = Object.keys(groupedBarData);
                const barChartValues = Object.values(groupedBarData);

                // Membuat Bar Chart
                new Chart(document.getElementById("bar-chart"), {
                    type: "bar",
                    data: {
                        labels: barChartLabels,
                        datasets: [{
                            label: "Jumlah Pelanggaran",
                            data: barChartValues,
                            backgroundColor: "rgba(75, 192, 192, 0.6)",
                            borderColor: "rgba(75, 192, 192, 1)",
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
                                    stepSize: 1, // Langkah interval bilangan bulat
                                    callback: function(value) {
                                        if (Number.isInteger(value)) {
                                            return value; // Hanya tampilkan bilangan bulat
                                        }
                                        return null;
                                    }
                                }
                            }
                        }
                    }
                });


                // Membuat Pie Chart
                const pieChartLabels = data.pieChartData.map(item => "Tingkat " + item.tingkat);
                const pieChartValues = data.pieChartData.map(item => item.total);

                new Chart(document.getElementById("pie-chart"), {
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
            })
            .catch(error => console.error("Error fetching data:", error));
    </script>

    {{-- <div>
        <div class="flex justify-center">
            <h3 class="text-3xl font-bold dark:text-white pl-4 items-center">Peraturan Terkait</h3>
        </div>
        <div class="flex justify-center items-center w-full p-4">
            <div
                class="max-w-sm w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 p-4 md:p-6">
                <a href="#">
                    <img class="rounded-t-lg" src="img/perdir003.png" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            Peraturan
                            Direktur Politeknik Statistika Nomor 003 Tahun </h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"> Tentang Kode Etik dan Tata
                        Tertib
                        Mahasiswa Politeknik Statistika STIS</p>
                    <a href="https://drive.google.com/file/d/187H0ji_Rn0sYYO2yfx_NgQTN5Yetb14I/view?usp=sharing"
                        target="_blank"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Baca Lebih Lanjut
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div> --}}


    {{-- <div>
        <h3 class="text-3xl font-bold dark:text-white pl-4">Ketentuan Berseragam</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 w-full gap-4 p-4">
            <div id="indicators-carousel" class="relative w-full" data-carousel="static">
                <!-- Carousel wrapper -->
                <div class="relative h-0 pb-full overflow-hidden rounded-lg md:h-96" style="padding-bottom: 100%;">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                        <img src="img/perdir003/1.jpg"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="img/perdir003/2.jpg"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="img/perdir003/3.jpg"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <!-- Item 4 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="img/perdir003/4.jpg"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <!-- Item 5 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="img/perdir003/5.jpg"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="img/perdir003/6.jpg"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="img/perdir003/7.jpg"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="img/perdir003/8.jpg"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                </div>
                <!-- Slider indicators -->
                <div class="absolute z-30 flex -translate-x-1/2 space-x-3 rtl:space-x-reverse bottom-5 left-1/2">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                        data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                        data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                        data-carousel-slide-to="2"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                        data-carousel-slide-to="3"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                        data-carousel-slide-to="4"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                        data-carousel-slide-to="4"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                        data-carousel-slide-to="4"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                        data-carousel-slide-to="4"></button>

                </div>
                <!-- Slider controls -->
                <button type="button"
                    class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </div>
    </div> --}}
</div>


<x-footer></x-footer>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="{{ asset('js/chartbar.js') }}"></script>
<script src="{{ asset('js/piechart.js') }}"></script>
