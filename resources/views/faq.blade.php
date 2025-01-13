<x-layout>{{ $title }}</x-layout>

<div class="p-4 sm:ml-64 mt-9">
    <h2 class="text-3xl font-bold dark:text-white">FAQ</h2>
    <br>
    @foreach ($faqs as $faq)
        <div style="width: 70%;">
            <div class="bg-white rounded-lg shadow dark:bg-gray-800 p-4 md:p-6 w-full">
                <div class="flex justify-between border-gray-200 border-b dark:border-gray-700 pb-3">
                    <dl>
                        <dt class="text-l font-normal text-gray-500 dark:text-gray-400 pb-1">Q:</dt>
                        <dd class="leading-none text-base font-bold text-gray-900 dark:text-white mb-4">
                            {{ $faq['tanya'] }}
                        </dd>
                        <hr>
                        <dt class="text-l font-normal text-gray-500 dark:text-gray-400 pb-1">A:</dt>
                        <dd class="leading-none text-base text-gray-900 dark:text-white mt-4">
                            {{ $faq['jawab'] }}
                        </dd>
                    </dl>
                </div>
            </div>
        </div>
        <br>
    @endforeach
</div>


<x-footer></x-footer>

<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
<script src="{{ asset('js/chartbar.js') }}"></script>
<script src="{{ asset('js/piechart.js') }}"></script>
