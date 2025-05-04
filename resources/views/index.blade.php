@extends('components.layout')

            @section('content')
            <div class="bg-white">
        <header class="absolute inset-x-0 top-0 z-50 bg-white shadow">
            @include('components.navbar') {{-- Panggil komponen navbar --}}
        </header>


            <div class="relative isolate px-6 pt-14 lg:px-8">
                <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80"
                    aria-hidden="true">
                    <div class="relative left-[calc(50%-11rem)] aspect-1155/678 w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
                        style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                    </div>
                </div>
                <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
                    <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                        <div
                            class="relative rounded-full px-3 py-1 text-sm/6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
                            Ingin tau lebih banyak tentang toko kami. <a href="/company" class="font-semibold text-indigo-600"><span
                                    class="absolute inset-0" aria-hidden="true"></span>Selengkapnya <span
                                    aria-hidden="true">&rarr;</span></a>
                        </div>
                    </div>
                    <div class="text-center">
                        <h1 class="text-5xl font-semibold tracking-tight text-balance text-gray-900 sm:text-7xl">Karena teknologi hebat tak harus selalu baru.</h1>
                        <p class="mt-8 text-lg font-medium text-pretty text-gray-500 sm:text-xl/8">Di Widi iPhone, kami percaya bahwa perangkat Apple bekas pun masih bisa memberikan performa terbaik tanpa harus menguras dompet.
                            Setiap produk kami telah melalui pengecekan, siap pakai, dan tetap layak untuk gaya hidup modernmu.
                        </p>
                        <div class="mt-10 flex items-center justify-center gap-x-6">
                            <a href="#"
                                class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get
                                started</a>
                            <a href="#" class="text-sm/6 font-semibold text-gray-900">Learn more <span
                                    aria-hidden="true">→</span></a>
                        </div>
                    </div>
                </div>
                <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]"
                    aria-hidden="true">
                    <div class="relative left-[calc(50%+3rem)] aspect-1155/678 w-[36.125rem] -translate-x-1/2 bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]"
                        style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white">
            <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
                <h2 class="sr-only">Products</h2>

                <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                    <a href="{{ route('products', ['category' => 'iphone']) }}" class="group">
                        <img src="{{ asset('assets/images/group1.jpg') }}" alt="Deskripsi Gambar"
                            class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-7/8">
                        <h3 class="mt-4 text-sm text-gray-700">Iphone</h3>
                        <p class="mt-1 text-lg font-medium text-gray-900">Mulai dari 1 Jutaan</p>
                    </a>
                    <a href="{{ route('products', ['category' => 'macbook']) }}" class="group">
                        <img src="{{ asset('assets/images/group2.jpg') }}" alt="Deskripsi Gambar"
                            class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-7/8">
                        <h3 class="mt-4 text-sm text-gray-700">Macbook</h3>
                        <p class="mt-1 text-lg font-medium text-gray-900">Mulai dari 3 Jutaan</p>
                    </a>
                    <a href="{{ route('products', ['category' => 'iwatch']) }}" class="group">
                        <img src="{{ asset('assets/images/group3(1).jpg') }}" alt="Deskripsi Gambar"
                            class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-7/8">
                        <h3 class="mt-4 text-sm text-gray-700">Iwatch</h3>
                        <p class="mt-1 text-lg font-medium text-gray-900">Mulai dari 1 Jutaan</p>
                    </a>
                    <a href="{{ route('products', ['category' => 'ipad']) }}" class="group">
                        <img src="{{ asset('assets/images/group4.jpg') }}" alt="Deskripsi Gambar"
                            class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-7/8">
                        <h3 class="mt-4 text-sm text-gray-700">Ipad</h3>
                        <p class="mt-1 text-lg font-medium text-gray-900">Mulai dari 2 Jutaan</p>
                    </a>
                </div>
            </div>
        </div>

        <div class="bg-white">
            <div class="pt-6">
                <!-- Breadcrumb -->
                <nav aria-label="Breadcrumb">
                    <ol role="list" class="mx-auto flex max-w-2xl items-center space-x-2 px-4 sm:px-6 lg:max-w-7xl lg:px-8">
                        <li>
                            <div class="flex items-center">
                                <a href="/products" class="mr-2 text-sm font-medium text-gray-900">Products</a>
                                <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" aria-hidden="true"
                                    class="h-5 w-4 text-gray-300">
                                    <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
                                </svg>
                            </div>
                        </li>
                        <li class="text-sm">
                            <a href="#" aria-current="page"
                                class="font-medium text-gray-500 hover:text-gray-600">{{ $latestProduct->name }}</a>
                        </li>
                    </ol>
                </nav>

                <!-- Image gallery -->
                <div class="mx-auto mt-6 max-w-2xl sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:gap-x-8 lg:px-8">
                    <img src="{{ $latestProduct->image ? asset('storage/' . $latestProduct->image) : 'https://via.placeholder.com/300' }}"
                        alt="{{ $latestProduct->name }}" class="hidden size-full rounded-lg object-cover lg:block">
                    <div class="hidden lg:grid lg:grid-cols-1 lg:gap-y-8">
                        @if($latestProduct->additional_image)
                            @foreach($latestProduct->additional_image as $image)
                                <img src="{{ asset('storage/' . $image) }}" alt="additional Image"
                                    class="aspect-3/2 w-full rounded-lg object-cover">
                            @endforeach
                        @else
                            <p>No additional images available.</p>
                        @endif

                    </div>

                    <div class="hidden lg:grid lg:grid-cols-1 lg:gap-y-8">
                        @if($latestProduct->featured_image)
                            <img src="{{ asset('storage/' . $latestProduct->featured_image) }}" alt="Additional Image"
                                class="aspect-3/2 w-full rounded-lg object-cover">
                        @else
                            <p>No additional images available.</p>
                        @endif
                    </div>
                </div>

                <!-- Product info -->
                <div
                    class="mx-auto max-w-2xl px-4 pt-10 pb-16 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:grid-rows-[auto_auto_1fr] lg:gap-x-8 lg:px-8 lg:pt-16 lg:pb-24">
                    <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
                        <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">{{ $latestProduct->name }}</h1>
                    </div>

                    <!-- Options -->
                    <div class="mt-4 lg:row-span-3 lg:mt-0">
                        <h2 class="sr-only">Product information</h2>
                        <p class="text-3xl tracking-tight text-gray-900">${{ number_format($latestProduct->price, 2) }}</p>

                        <!-- Variants -->
                        <div class="mt-10">
                            <div class="flex items-center justify-between">
                                <h3 class="text-sm font-medium text-gray-900">Choose Variant</h3>
                            </div>

                            <fieldset class="mt-4">
                                <div class="grid grid-cols-2 gap-4">
                                    @php
                                        $colors = collect($latestProduct->variants)->pluck('color')->unique();
                                        $storages = collect($latestProduct->variants)->pluck('storage')->unique();
                                    @endphp

                                    <div>
                                        <label for="color" class="block text-sm font-medium text-gray-700">Color</label>
                                        <select id="color" name="color"
                                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                            @foreach ($colors as $color)
                                                <option value="{{ $color }}">{{ $color }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div>
                                        <label for="storage" class="block text-sm font-medium text-gray-700">Storage</label>
                                        <select id="storage" name="storage"
                                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                            @foreach ($storages as $storage)
                                                <option value="{{ $storage }}">{{ $storage }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </fieldset>

                            <div class="mt-4">
                                <p id="stock-info" class="text-sm text-gray-500">Select a color and storage to see stock
                                    availability.</p>
                            </div>
                        </div>

                        <form class="mt-10">
                            <div class="mt-10 flex justify-between gap-4">
                                <a href="{{ $latestProduct->tokopedia_link ?? '#' }}" target="_blank"
                                    class="flex-1 rounded-md bg-green-600 px-4 py-2 text-center text-sm font-medium text-white hover:bg-green-700">Tokopedia</a>
                                <a href="{{ $latestProduct->shopee_link ?? '#' }}" target="_blank"
                                    class="flex-1 rounded-md bg-orange-600 px-4 py-2 text-center text-sm font-medium text-white hover:bg-orange-700">Shopee</a>
                                <a href="https://wa.me/6285749266800" target="_blank"
                                    class="flex-1 rounded-md bg-blue-600 px-4 py-2 text-center text-sm font-medium text-white hover:bg-blue-700">WhatsApp</a>
                            </div>
                        </form>
                    </div>

                    <div class="py-10 lg:col-span-2 lg:col-start-1 lg:border-r lg:border-gray-200 lg:pt-6 lg:pr-8 lg:pb-16">
                        <!-- Description and details -->
                        <div>
                            <h3 class="sr-only">Description</h3>

                            <div class="space-y-6">
                                <p class="text-base text-gray-900 break-words">{{ $latestProduct->description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const colorSelect = document.getElementById('color');
                const storageSelect = document.getElementById('storage');
                const stockInfo = document.getElementById('stock-info');

                const variants = @json($latestProduct->variants);

                function updateStockInfo() {
                    const selectedColor = colorSelect.value;
                    const selectedStorage = storageSelect.value;

                    const matchingVariant = variants.find(variant => variant.color === selectedColor && variant.storage === selectedStorage);

                    if (matchingVariant) {
                        stockInfo.textContent = `Stock: ${matchingVariant.stock}`;
                    } else {
                        stockInfo.textContent = 'Stock: 0';
                    }
                }

                function initializeDefaultVariant() {
                    if (variants.length > 0) {
                        const defaultVariant = variants[0];
                        colorSelect.value = defaultVariant.color;
                        storageSelect.value = defaultVariant.storage;
                        updateStockInfo();
                    }
                }

                colorSelect.addEventListener('change', updateStockInfo);
                storageSelect.addEventListener('change', updateStockInfo);

                initializeDefaultVariant();
            });
        </script>

    @endsection
