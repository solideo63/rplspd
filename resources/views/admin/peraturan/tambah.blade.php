<x-layout></x-layout>

<div class="p-4 sm:ml-64 mt-9">
    <div class="flex justify-center">
        <div
            class="block max-w-sm p-6  bg-yellow-300 border rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 w-full">
            <h3 class="text-2xl font-bold dark:text-white">Tambahkan Peraturan</h3>
            <form id="peraturanForm" action="{{ route('admin.submit.peraturan') }}" method="post"
                class="max-w-sm mx-auto pt-6">
                @csrf
                <div class="mb-5">
                    <label for="nama"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                    <input type="text" id="nama" name="nama"
                        class="shadow bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <p id="errorNama" class="text-red-500 text-sm hidden">Nama peraturan tidak boleh kosong</p>
                </div>
                <div class="mb-5">
                    <label for="deskripsi"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                    <textarea id="deskripsi" name="deskripsi"
                        class="shadow bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                    <p id="errorDeskripsi" class="text-red-500 text-sm hidden">Deskripsi tidak boleh kosong</p>
                </div>
                <div class="mb-5">
                    <label for="link" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Link
                        Peraturan</label>
                    <input type="text" id="link" name="link"
                        class="shadow bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <p id="errorLink" class="text-red-500 text-sm hidden">Link peraturan tidak boleh kosong</p>
                </div>
                <div class="flex justify-end">
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-900 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                        Tambah
                    </button>
                </div>
            </form>

            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script>
                document.getElementById('peraturanForm').addEventListener('submit', function(e) {
                    e.preventDefault();

                    const nama = document.getElementById('nama').value.trim();
                    const deskripsi = document.getElementById('deskripsi').value.trim();
                    const link = document.getElementById('link').value.trim();
                    let valid = true;

                    // Validasi nama
                    if (!nama) {
                        document.getElementById('errorNama').classList.remove('hidden');
                        valid = false;
                    } else {
                        document.getElementById('errorNama').classList.add('hidden');
                    }

                    // Validasi deskripsi
                    if (!deskripsi) {
                        document.getElementById('errorDeskripsi').classList.remove('hidden');
                        valid = false;
                    } else {
                        document.getElementById('errorDeskripsi').classList.add('hidden');
                    }

                    // Validasi link
                    if (!link) {
                        document.getElementById('errorLink').classList.remove('hidden');
                        valid = false;
                    } else {
                        document.getElementById('errorLink').classList.add('hidden');
                    }

                    if (valid) {
                        const form = this;

                        // Kirim form dengan fetch
                        fetch(form.action, {
                                method: form.method,
                                headers: {
                                    "X-CSRF-TOKEN": document.querySelector('input[name="_token"]').value,
                                    "Content-Type": "application/x-www-form-urlencoded",
                                },
                                body: new URLSearchParams(new FormData(form))
                            })
                            .then(response => {
                                if (!response.ok) {
                                    throw new Error('Gagal menambahkan peraturan');
                                }
                                return response.text();
                            })
                            .then(() => {
                                Swal.fire({
                                    title: "Berhasil!",
                                    text: "Peraturan berhasil ditambahkan",
                                    icon: "success",
                                    confirmButtonText: "OK",
                                    confirmButtonColor: "#3085d6"
                                }).then(() => {
                                    // Redirect ke halaman tujuan
                                    window.location.href = "{{ route('admin.tampil.peraturan') }}";
                                });
                            })
                            .catch(error => {
                                Swal.fire("Error!", error.message, "error");
                            });
                    }
                });
            </script>
        </div>
    </div>
</div>

<x-footer></x-footer>
