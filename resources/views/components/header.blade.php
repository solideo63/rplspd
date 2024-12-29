<nav class="fixed top-0 z-50 w-full dark:bg-gray-800 dark:border-gray-700"
    style="background-color: #9F2A32; color: white">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
            <div class="flex items-center justify-start rtl:justify-end">
                <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar"
                    type="button"
                    class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                    <span class="sr-only">Open sidebar</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path clip-rule="evenodd" fill-rule="evenodd"
                            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                        </path>
                    </svg>
                </button>
                <a href="" class="flex ms-2 md:me-24">
                    <img src="img/logospd.png" class="h-8 me-3" alt="Logo SPD" />
                    <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white"
                        style="color:white">SIMPPEL
                        SPD</span>
                </a>
            </div>


            <div class="flex items-center ms-3">
                @auth
                    <button id="dropdownFAQButton" data-dropdown-toggle="dropdownFAQ"
                        class="relative inline-flex items-center text-sm font-medium text-center text-gray-500 hover:text-gray-900 focus:outline-none dark:hover:text-white dark:text-gray-400"
                        type="button">
                        <!-- Ikon Default -->
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 8v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8m18 0-8.029-4.46a2 2 0 0 0-1.942 0L3 8m18 0-9 6.5L3 8" />
                        </svg>

                        <div
                            class="absolute block w-3 h-3 bg-red-500 border-2 border-white rounded-full -top-0.5 start-2.5 dark:border-gray-900">
                        </div>
                    </button>

                    <!-- Dropdown menu -->
                    <div id="dropdownFAQ" data-dropdown-placement="bottom-end"
                        class="z-20 hidden w-full max-w-sm bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-800 dark:divide-gray-700"
                        aria-labelledby="dropdownFAQButton p-10">
                        <div
                            class="block px-4 py-2 font-medium text-center text-gray-700 rounded-t-lg bg-gray-50 dark:bg-gray-800 dark:text-white">
                            Kritik dan Saran
                        </div>
                        <div class="divide-y divide-gray-100 dark:divide-gray-700">

                            <a href="#" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700">
                                <div class="w-full ps-3">
                                    <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400">Kritik dan Saran dari <span
                                            class="font-semibold text-gray-900 dark:text-white">Anonymous</span>: hehe</div>
                                    <div class="text-xs text-blue-600 dark:text-blue-500">2 menit lalu</div>
                                </div>
                            </a>




                        </div>
                        <a href="#"
                            class="block py-2 text-sm font-medium text-center text-gray-900 rounded-b-lg bg-gray-50 hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-white">
                            <div class="inline-flex items-center ">
                                <svg class="w-4 h-4 me-2 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
                                    <path
                                        d="M10 0C4.612 0 0 5.336 0 7c0 1.742 3.546 7 10 7 6.454 0 10-5.258 10-7 0-1.664-4.612-7-10-7Zm0 10a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z" />
                                </svg>
                                Lihat Semua
                            </div>
                        </a>
                        <div data-popper-arrow></div>
                    </div>

                    <div class="flex items-center ms-3">
                        <button id="dropdownNotificationButton" data-dropdown-toggle="dropdownNotification"
                            class="relative inline-flex items-center text-sm font-medium text-center text-gray-500 hover:text-gray-900 focus:outline-none dark:hover:text-white dark:text-gray-400"
                            type="button">
                            <!-- Ikon Default -->
                            <svg class="default-icon w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 5.365V3m0 2.365a5.338 5.338 0 0 1 5.133 5.368v1.8c0 2.386 1.867 2.982 1.867 4.175 0 .593 0 1.292-.538 1.292H5.538C5 18 5 17.301 5 16.708c0-1.193 1.867-1.789 1.867-4.175v-1.8A5.338 5.338 0 0 1 12 5.365ZM8.733 18c.094.852.306 1.54.944 2.112a3.48 3.48 0 0 0 4.646 0c.638-.572 1.236-1.26 1.33-2.112h-6.92Z" />
                            </svg>
                            <!-- Ikon Hover -->
                            <svg class="hover-icon w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 5.365V3m0 2.365a5.338 5.338 0 0 1 5.133 5.368v1.8c0 2.386 1.867 2.982 1.867 4.175 0 .593 0 1.193-.538 1.193H5.538c-.538 0-.538-.6-.538-1.193 0-1.193 1.867-1.789 1.867-4.175v-1.8A5.338 5.338 0 0 1 12 5.365Zm-8.134 5.368a8.458 8.458 0 0 1 2.252-5.714m14.016 5.714a8.458 8.458 0 0 0-2.252-5.714M8.54 17.901a3.48 3.48 0 0 0 6.92 0H8.54Z" />
                            </svg>
                            <div
                                class="absolute block w-3 h-3 bg-red-500 border-2 border-white rounded-full -top-0.5 start-2.5 dark:border-gray-900">
                            </div>
                        </button>

                        <!-- Dropdown menu -->
                        <div id="dropdownNotification"
                            class="hidden w-full max-w-xs p-4 text-gray-900 bg-white rounded-lg shadow
                        dark:bg-gray-800 dark:text-gray-300"
                            role="alert" aria-labelledby="dropdownNotificationButton">
                            <div class="flex items-center mb-3">
                                <span class="mb-1 text-sm font-bold text-gray-900 dark:text-white">Notifikasi</span>
                            </div>
                            <div class="flex items-center">
                                <div class=" text-sm font-normal">
                                    <div class="text-sm font-semibold text-gray-900 dark:text-white">Anda mendapatkan
                                        pelanggaran baru</div> <a href=""><span
                                            class="underline text-xs font-medium text-blue-600 dark:text-blue-500">Lihat
                                            selengkapnya</span></a>
                                </div>
                            </div>
                        </div>

                        <div data-popover id="popover-notification" role="tooltip"
                            class="absolute z-10 invisible inline-block w-64 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-lg opacity-0 dark:text-gray-400 dark:bg-gray-800 dark:border-gray-600">
                            <div class="flex justify-end px-4 pt-4">
                                <div class="flex flex-col items-center pb-10">
                                    <img class="w-24 h-24 mb-3 rounded-full shadow-lg"
                                        src="https://i.pinimg.com/736x/7b/12/d2/7b12d287221c0adf5b4efcdf326c178f.jpg"
                                        alt="Bonnie image" />
                                    <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">
                                        {{ Auth::user()->name }}</h5>
                                    <span
                                        class="text-sm text-gray-500 dark:text-gray-400">{{ Auth::user()->username }}</span>
                                    <div class="flex mt-4 md:mt-6">
                                        <a href="#"
                                            class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-yellow-300 rounded-lg hover:bg-yellow-400 focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 bold">Ganti
                                            Password</a>
                                        <a href="#"
                                            class="py-2 px-4 ms-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 bold">Log
                                            Out</a>
                                    </div>
                                </div>
                            </div>
                            <div data-popper-arrow></div>
                        </div>

                        <div class="flex items-center ms-3">
                            <button data-popover-target="popover-user-profile" type="button"
                                class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                                aria-expanded="false" data-dropdown-toggle="dropdown-user">
                                <span class="sr-only">Open user menu</span>
                                <img class="w-8 h-8 rounded-full"
                                    src="https://i.pinimg.com/736x/7b/12/d2/7b12d287221c0adf5b4efcdf326c178f.jpg"
                                    alt="user photo"></button>

                            <div data-popover id="popover-user-profile" role="tooltip"
                                class="absolute z-10 invisible inline-block w-64 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-lg opacity-0 dark:text-gray-400 dark:bg-gray-800 dark:border-gray-600">
                                <div class="flex justify-end px-4 pt-4">
                                    <div class="flex flex-col items-center pb-10">
                                        <img class="w-24 h-24 mb-3 rounded-full shadow-lg"
                                            src="https://i.pinimg.com/736x/7b/12/d2/7b12d287221c0adf5b4efcdf326c178f.jpg"
                                            alt="Profile Image" />
                                        <h5 class="mb-1 text-xl font-semibold text-center text-gray-900 dark:text-white">
                                            {{ Auth::user()->name }}</h5>
                                        <!-- Nama dengan font-semibold dan teks rata tengah -->
                                        <span
                                            class="text-sm text-gray-500 dark:text-gray-400 text-center">{{ Auth::user()->username }}</span>
                                        <!-- Username rata tengah -->

                                        <!-- Status Badge -->

                                        <!-- @if (Auth::user()->status_badge == 'sudah')
    <h5 class="mb-1 text-m font-medium dark:text-white" style="color:green">Badge sudah kembali</h5>
@elseif(Auth::user()->status_badge == 'belum')
    <h5 class="mb-1 text-m font-medium dark:text-white" style="color:red">Badge belum kembali</h5>
@else
    <h5 class="mb-1 text-m font-medium dark:text-white" style="color:red">Badge sudah di BAAK</h5>
    @endif -->

                                        <div class="flex mt-4 md:mt-6">
                                            <a href="/ubah-password"
                                                class="inline-flex items-center px-4 py-2 text-sm font-semibold text-center text-white bg-yellow-300 rounded-lg hover:bg-yellow-400 focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Ganti
                                                Password</a>
                                            <a href="/logout"
                                                class="py-2 px-4 ms-2 text-sm font-semibold text-center text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Log
                                                Out</a>
                                        </div>
                                    </div>
                                </div>
                                <div data-popper-arrow></div>
                            </div>
                        </div>
                    </div>
                @endauth
                <div class="flex items-center ms-3">
                    <!-- Cek apakah pengguna belum login -->
                    @if (Auth::guest())
                        <div class="flex items-center lg:order-2">
                            <a href="/login"style="background-color: #FCBE11;"
                                class="text-white hover:opacity-90 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 focus:outline-none">
                                Log in </a>
                        </div>
                    @endif
                </div>

            </div>
        </div>
    </div>
</nav>
