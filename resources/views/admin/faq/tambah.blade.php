<x-layout></x-layout>

<div class="p-4 sm:ml-64 mt-9">
    <div class="flex justify-center">
        <div
            class="block max-w-sm p-6  bg-yellow-300 border rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 w-full">
            <h3 class="text-2xl font-bold dark:text-white">Tambahkan FaQ</h3>
            <form id="faqForm" action="{{ route('admin.submit.faq') }}" method="post" class="max-w-sm mx-auto pt-6">
                @csrf
                <div class="mb-5">
                    <label for="pertanyaan"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pertanyaan</label>
                    <input type="text" id="pertanyaan" name="tanya"
                        class="shadow bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <p id="errorPertanyaan" class="text-sm text-red-600 mt-1 hidden">Pertanyaan wajib diisi!</p>
                </div>
                <div class="mb-5">
                    <label for="jawaban"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jawaban</label>
                    <textarea id="jawaban" name="jawab"
                        class="shadow bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </textarea>
                    <p id="errorJawaban" class="text-sm text-red-600 mt-1 hidden">Jawaban wajib diisi!</p>
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
                document.getElementById('faqForm').addEventListener('submit', function(e) {
                    e.preventDefault();

                    const pertanyaan = document.getElementById('pertanyaan').value.trim();
                    const jawaban = document.getElementById('jawaban').value.trim();
                    let valid = true;

                    // Validasi form
                    if (!pertanyaan) {
                        document.getElementById('errorPertanyaan').classList.remove('hidden');
                        valid = false;
                    } else {
                        document.getElementById('errorPertanyaan').classList.add('hidden');
                    }

                    if (!jawaban) {
                        document.getElementById('errorJawaban').classList.remove('hidden');
                        valid = false;
                    } else {
                        document.getElementById('errorJawaban').classList.add('hidden');
                    }

                    if (valid) {
                        const form = this;

                        // Kirim form dengan cara biasa (form-urlencoded)
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
                                    throw new Error('Gagal menambahkan FAQ');
                                }
                                return response.text(); // Ambil respons sebagai teks (misalnya, redirect)
                            })
                            .then(() => {
                                Swal.fire({
                                    title: "Berhasil!",
                                    html: "FAQ berhasil ditambahkan", // Tampilkan token baru
                                    icon: "success",
                                    confirmButtonText: "OK",
                                    confirmButtonColor: "#3085d6"
                                }).then(() => {
                                    // Redirect ke halaman setelah tombol OK diklik
                                    window.location.href = "{{ route('admin.tampil.faq') }}";
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
