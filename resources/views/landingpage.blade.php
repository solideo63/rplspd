<x-layout></x-layout>
<style>
    body {
        font-family: 'Inter', sans-serif;
        background: linear-gradient(120deg, #fdfbfb 0%, #ebedee 100%);
        color: #333;
    }

    h1 span {
        background: linear-gradient(to right, #e63946, #d72638);
        -webkit-background-clip: text;
        color: transparent;
    }

    .content {
        background: #fff;
        border-radius: 12px;
        padding: 20px;
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
        animation: fadeIn 1s ease-in-out;
    }

    button {
        background: linear-gradient(to right, #e63946, #d72638);
        border: none;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    button:hover {
        transform: scale(1.05);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>
<div class="p-4 sm:ml-64 mt-4">
    <header>
        <div>
            <h1 class="text-4xl font-extrabold text-gray-800">
                Selamat Datang di <span class="text-red-600">SIMPPEL SPD</span>
            </h1>
            <p class="text-lg text-gray-600 mt-2">
                Sistem Pencatatan dan Pelaporan Pelanggaran oleh SPD
            </p>
        </div>
    </header>
    <div class="content mt-8 bg-white p-6 rounded-lg shadow-xl">
        <h2 class="text-3xl font-semibold text-gray-700 mb-4">
            Mudah, Cepat, dan Akurat
        </h2>
        <p class="text-gray-600 text-lg leading-relaxed">
            SIMPPEL SPD hadir untuk mempermudah pencatatan dan pelaporan pelanggaran
            dengan fitur-fitur yang modern dan efisien.
        </p>
        <div class="mt-6">
            <button
                class="bg-gradient-to-r from-red-500 to-red-700 text-white px-6 py-3 rounded-md shadow-lg hover:scale-105 transform transition duration-300 ease-in-out">
                Jelajahi Fitur
            </button>
        </div>
    </div>
</div>

<x-footer></x-footer>
