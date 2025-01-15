<x-layout></x-layout>

<div class="p-4 sm:ml-64 mt-9">
    <div class="flex justify-center">
        <div
            class="block max-w-sm p-6 bg-yellow-300 border rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 w-full">
            <h3 class="text-2xl font-bold dark:text-white">Buat Token Harian</h3>
            <br><br>
            <div id="wadah-token"
                class="max-w-sm p-6 bg-yellow-100 rounded-lg dark:bg-gray-800 dark:border-gray-700 w-full justify-center">

                <h1 class="text-xl font-bold" style="text-align: center; color:#666;">
                    Token belum dibuat
                </h1>

            </div>
            <div class="flex justify-end mt-4">
                <button onclick="buatToken()"
                    class="text-white bg-blue-700 hover:bg-blue-900 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                    Buat
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Untuk token dipencet dulu baru muncul -->
<!-- <script>
    function buatToken() {
        fetch('/generate-token')
            .then(response => {
                if (!response.ok) {
                    throw new Error('Gagal membuat token');
                }
                return response.json();
            })
            .then(data => {
                // Menampilkan token di dalam wadah-token
                const wadahToken = document.getElementById('wadah-token');
                wadahToken.innerHTML = `
                    <h1 class="text-xl font-bold" style="text-align: center; color:#666;">
                        <span style="color: #666;">${data.token}</span>
                    </h1>
                `;
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Terjadi kesalahan. Silakan coba lagi.');
            });
    }
</script> -->

<script>
    function buatToken() {
        fetch('/generate-token')
            .then(response => {
                if (!response.ok) {
                    throw new Error('Gagal membuat token');
                }
                return response.json();
            })
            .then(data => {
                const wadahToken = document.getElementById('wadah-token');

                if (data.status === 'exists') {
                    // Jika token sudah ada
                    alert(data.message);
                    wadahToken.innerHTML = `
                        <h1 class="text-xl font-bold" style="text-align: center; color:#666;">
                            <span style="color: #666;">${data.token}</span>
                        </h1>
                    `;
                } else if (data.status === 'created') {
                    // Jika token berhasil dibuat
                    alert(data.message);
                    wadahToken.innerHTML = `
                        <h1 class="text-xl font-bold" style="text-align: center; color:#666;">
                            <span style="color: #666;">${data.token}</span>
                        </h1>
                    `;
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Terjadi kesalahan. Silakan coba lagi.');
            });
    }
</script>

<!-- Untuk token baru masuk halaman langsung muncul -->
<!-- <script>
    function buatToken() {
        fetch('/generate-token')
            .then(response => {
                if (!response.ok) {
                    throw new Error('Gagal membuat token');
                }
                return response.json();
            })
            .then(data => {
                const wadahToken = document.getElementById('wadah-token');
                wadahToken.innerHTML = `
                    <h1 class="text-xl font-bold" style="text-align: center; color:#666;">
                        <span style="color: #666;">${data.token}</span>
                    </h1>
                `;
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Terjadi kesalahan. Silakan coba lagi.');
            });
    }
    document.addEventListener('DOMContentLoaded', () => {
        fetch('/generate-token')
            .then(response => {
                if (!response.ok) {
                    throw new Error('Gagal memuat token');
                }
                return response.json();
            })
            .then(data => {
                const wadahToken = document.getElementById('wadah-token');
                wadahToken.innerHTML = `
                    <h1 class="text-xl font-bold" style="text-align: center; color:#666;">
                        <span style="color: #666;">${data.token}</span>
                    </h1>
                `;
            })
            .catch(error => {
                console.error('Error:', error);
            });
    });
</script> -->


<x-footer></x-footer>
