<x-layout></x-layout>

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<div class="p-4 sm:ml-64 mt-9">
    <div class="flex justify-center">
        <div
            class="block max-w-sm p-6 bg-yellow-300 border rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 w-full">
            <h3 class="text-2xl font-bold dark:text-white">Edit FaQ</h3>

            <!-- Form Edit FAQ -->
            <form action="{{ route('admin.update.faq', $data->id) }}" method="post" class="max-w-sm mx-auto pt-6">
                @csrf
                <div class="mb-5">
                    <label for="base-input"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pertanyaan</label>
                    <input type="text" id="base-input" name="tanya" value="{{ $data->tanya }}"
                        class="shadow bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>

                <div class="mb-5">
                    <label for="jawab-input"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jawaban</label>
                    <textarea id="jawab-input" name="jawab"
                        class="shadow bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        rows="5">{{ $data->jawab }}</textarea>
                </div>

                <div class="flex justify-end">
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-900 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                        Edit
                    </button>
                </div>
            </form>

            <!-- SweetAlert Script -->

            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    @if (session('success'))
                        Swal.fire({
                            title: 'Berhasil!',
                            text: '{{ session('success') }}',
                            icon: 'success',
                            confirmButtonText: 'OK',
                            confirmButtonColor: '#3085d6'
                        }).then(() => {
                            window.location.href =
                                "{{ route('admin.tampil.faq') }}"; // Redirect ke halaman tampil FAQ
                        });
                    @endif
                });
            </script>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        </div>
    </div>
</div>

<x-footer></x-footer>
