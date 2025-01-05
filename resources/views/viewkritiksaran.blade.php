<x-layout></x-layout>

<div class="p-4 sm:ml-64 mt-4">

    <section class="bg-white py-8 antialiased dark:bg-gray-900 md:py-16">
        <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
            <div class="flex items-center gap-2">
                <h2 class="text-2xl font-semibold text-gray-900 dark:text-white">Kritik dan Saran</h2>
            </div>

            <div class="mt-6 ">
                @foreach ($kritiksaran as $item)
                    <article class="mb-6 pb-4">
                        <!-- Menambahkan jarak antar kritik dan saran -->
                        <div class="flex items-center mb-4">
                            <img class="w-10 h-10 me-4 rounded-full"
                                src="https://i.pinimg.com/236x/18/b5/b5/18b5b599bb873285bd4def283c0d3c09.jpg"
                                alt="">
                            <div class="font-medium dark:text-white">
                                <p>{{ $item->nama }} <time datetime="2014-08-16 19:00"
                                        class="block text-sm text-gray-500 dark:text-gray-400">{{ \Carbon\Carbon::parse($item->created_at)->setTimezone('Asia/Jakarta')->format('F d, Y \\a\\t H:i') }}</time>
                                </p>
                            </div>
                        </div>

                        <p class="text-base font-normal text-gray-900 dark:text-gray-400">
                            {{ $item->kritiksaran }}
                        </p>
                    </article>
                    <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
                @endforeach
            </div>
        </div>

    </section>
</div>

<x-footer></x-footer>
