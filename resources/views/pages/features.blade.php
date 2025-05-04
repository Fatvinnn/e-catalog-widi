<x-layout>
    <div class="bg-white space-y-40">
        @php
            $features = App\Models\Feature::all();
        @endphp

        @foreach ($features as $feature)
            <section>
                <div id="carouselExample{{ $loop->index }}" class="relative w-full h-[32rem] overflow-hidden group rounded-xl">
                    <div class="carousel-inner flex transition-transform duration-700 ease-in-out w-full h-full">
                        @foreach ($feature->carousel_images as $image)
                            <div class="carousel-item w-full h-full flex-shrink-0">
                                <img src="{{ asset('storage/' . $image) }}" alt="Feature Image"
                                     class="w-full h-full object-cover" />
                            </div>
                        @endforeach
                    </div>

                    <!-- Prev Button -->
                    <button data-carousel-prev type="button"
                        class="absolute top-1/2 left-4 z-10 -translate-y-1/2 bg-white/80 hover:bg-white text-gray-800 rounded-full p-2 hidden group-hover:block transition">
                        ◀
                    </button>

                    <!-- Next Button -->
                    <button data-carousel-next type="button"
                        class="absolute top-1/2 right-4 z-10 -translate-y-1/2 bg-white/80 hover:bg-white text-gray-800 rounded-full p-2 hidden group-hover:block transition">
                        ▶
                    </button>
                </div>

                <div class="max-w-5xl mx-auto px-4 py-12">
                    <h1 class="text-3xl font-bold text-center mb-2">{{ $feature->title }}</h1>
                    <p class="text-center text-gray-600 max-w-2xl mx-auto">
                        {{ $feature->description }}
                    </p>
                </div>

                <div class="max-w-6xl mx-auto px-4 grid grid-cols-1 md:grid-cols-3 gap-8 text-sm text-gray-800">
                    <div class="border-t border-gray-200 pt-4">
                        <h3 class="font-semibold text-gray-900">Grade</h3>
                        <p class="mt-1 text-gray-600">{{ $feature->grade }}</p>
                    </div>
                    <div class="border-t border-gray-200 pt-4">
                        <h3 class="font-semibold text-gray-900">Garansi</h3>
                        <p class="mt-1 text-gray-600">{{ $feature->set }}</p>
                    </div>
                    <div class="border-t border-gray-200 pt-4">
                        <h3 class="font-semibold text-gray-900">Signal</h3>
                        <p class="mt-1 text-gray-600">{{ $feature->signal }}</p>
                    </div>
                    <div class="border-t border-gray-200 pt-4">
                        <h3 class="font-semibold text-gray-900">Kelengkapan</h3>
                        <p class="mt-1 text-gray-600">{{ $feature->completeness }}</p>
                    </div>
                    <div class="border-t border-gray-200 pt-4">
                        <h3 class="font-semibold text-gray-900">Sparepart</h3>
                        <p class="mt-1 text-gray-600">{{ $feature->sparepart }}</p>
                    </div>
                    <div class="border-t border-gray-200 pt-4">
                        <h3 class="font-semibold text-gray-900">Originality</h3>
                        <p class="mt-1 text-gray-600">{{ $feature->originality }}</p>
                    </div>
                </div>
            </section>
        @endforeach
    </div>

    <!-- Carousel JS -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('.carousel-inner').forEach(inner => {
                const items = inner.querySelectorAll('.carousel-item');
                let index = 0;

                function updateCarousel() {
                    const offset = -index * inner.clientWidth;
                    inner.style.transform = `translateX(${offset}px)`;
                }

                function next() {
                    index = (index + 1) % items.length;
                    updateCarousel();
                }

                function prev() {
                    index = (index - 1 + items.length) % items.length;
                    updateCarousel();
                }

                const parent = inner.closest('.relative');
                parent.querySelector('[data-carousel-next]')?.addEventListener('click', next);
                parent.querySelector('[data-carousel-prev]')?.addEventListener('click', prev);

                setInterval(next, 5000); 

                window.addEventListener('resize', updateCarousel);
                updateCarousel(); 
            });
        });
    </script>
</x-layout>
