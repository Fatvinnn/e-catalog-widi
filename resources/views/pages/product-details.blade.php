<x-layout>
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
                            class="font-medium text-gray-500 hover:text-gray-600">{{ $product->name }}</a>
                    </li>
                </ol>
            </nav>

            <!-- Image gallery -->
            <div class="mx-auto mt-6 max-w-2xl sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:gap-x-8 lg:px-8">
                <img src="{{ $product->image ? asset('storage/' . $product->image) : 'https://via.placeholder.com/300' }}"
                    alt="{{ $product->name }}" class="hidden size-full rounded-lg object-cover lg:block">
                <div class="hidden lg:grid lg:grid-cols-1 lg:gap-y-8">
                    @if($product->additional_image)
                        @foreach($product->additional_image as $image)
                            <img src="{{ asset('storage/' . $image) }}" alt="additional Image"
                                class="aspect-3/2 w-full rounded-lg object-cover">
                        @endforeach
                    @else
                        <p>No additional images available.</p>
                    @endif

                </div>

                <div class="hidden lg:grid lg:grid-cols-1 lg:gap-y-8">
                    @if($product->featured_image)
                        <img src="{{ asset('storage/' . $product->featured_image) }}" alt="Additional Image"
                            class="aspect-3/2 w-full rounded-lg object-cover">
                    @else
                        <p>No additional images available.</p>
                    @endif
                </div>
                <!-- <img src="https://via.placeholder.com/300" alt="Featured Image" class="aspect-4/5 size-full object-cover sm:rounded-lg lg:aspect-auto"> -->
            </div>

            <!-- Product info -->
            <div
                class="mx-auto max-w-2xl px-4 pt-10 pb-16 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:grid-rows-[auto_auto_1fr] lg:gap-x-8 lg:px-8 lg:pt-16 lg:pb-24">
                <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
                    <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">{{ $product->name }}</h1>
                </div>

                <!-- Options -->
                <div class="mt-4 lg:row-span-3 lg:mt-0">
                    <h2 class="sr-only">Product information</h2>
                    <p class="text-3xl tracking-tight text-gray-900">Rp.{{ number_format($product->price, 2) }}</p>

                    <!-- Variants -->
                    <div class="mt-10">
                        <div class="flex items-center justify-between">
                            <h3 class="text-sm font-medium text-gray-900">Choose Variant</h3>
                        </div>

                        <fieldset class="mt-4">
                            <div class="grid grid-cols-2 gap-4">
                                @php
                                    $colors = collect($product->variants)->pluck('color')->unique();
                                    $storages = collect($product->variants)->pluck('storage')->unique();
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

                    <div class="mt-10 flex justify-between gap-4">
                        <a href="{{ $product->tokopedia_link ?? 'https://www.tokopedia.com' }}" target="_blank"
                            class="flex-1 rounded-md bg-green-600 px-4 py-2 text-center text-sm font-medium text-white hover:bg-green-700">Tokopedia</a>
                        <a href="{{ $product->shopee_link ?? 'https://www.shopee.co.id' }}" target="_blank"
                            class="flex-1 rounded-md bg-orange-600 px-4 py-2 text-center text-sm font-medium text-white hover:bg-orange-700">Shopee</a>
                        <a href="https://wa.me/085749266800" target="_blank"
                            class="flex-1 rounded-md bg-blue-600 px-4 py-2 text-center text-sm font-medium text-white hover:bg-blue-700">WhatsApp</a>
                    </div>
                </div>

                <div class="py-10 lg:col-span-2 lg:col-start-1 lg:border-r lg:border-gray-200 lg:pt-6 lg:pr-8 lg:pb-16">
                    <!-- Description and details -->
                    <div>
                        <h3 class="sr-only">Description</h3>

                        <div class="space-y-6">
                            <p class="text-base text-gray-900 break-words">{{ $product->description }}</p>
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

            const variants = @json($product->variants);

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
</x-layout>