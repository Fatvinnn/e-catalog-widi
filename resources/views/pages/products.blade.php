<x-layout>
    <div class="w-full min-h-screen bg-white">
        <div class="container mx-auto py-12">
            <h1 class="text-4xl font-bold mb-6">Our Products</h1>
            
            <!-- Category Selection Section -->
            @php
                $selectedCategory = request('category_id');
            @endphp

            <div class="mb-8">
                <h2 class="text-2xl font-semibold mb-4">Choose a Category</h2>
                <div class="flex flex-wrap gap-4">
                    <a href="{{ url('/products') }}" class="px-4 py-2 rounded {{ $selectedCategory ? 'bg-indigo-600 text-white shadow-md' : 'bg-indigo-600 text-white hover:bg-indigo-700' }}">All</a>
                    <a href="{{ url('/products?category_id=iphone') }}" class="px-4 py-2 rounded {{ $selectedCategory === 'iphone' ? 'bg-indigo-600 text-white shadow-lg' : 'bg-indigo-600 text-white hover:bg-indigo-700' }}">iPhone</a>
                    <a href="{{ url('/products?category_id=macbook') }}" class="px-4 py-2 rounded {{ $selectedCategory === 'macbook' ? 'bg-indigo-600 text-white shadow-lg' : 'bg-indigo-600 text-white hover:bg-indigo-700' }}">MacBook</a>
                    <a href="{{ url('/products?category_id=iwatch') }}" class="px-4 py-2 rounded {{ $selectedCategory === 'iwatch' ? 'bg-indigo-600 text-white shadow-lg' : 'bg-indigo-600 text-white hover:bg-indigo-700' }}">iWatch</a>
                    <a href="{{ url('/products?category_id=ipad') }}" class="px-4 py-2 rounded {{ $selectedCategory === 'ipad' ? 'bg-indigo-600 text-white shadow-lg' : 'bg-indigo-600 text-white hover:bg-indigo-700' }}">iPad</a>
                </div>
            </div>

            <!-- Product List Section -->
            <div class="mb-8">
                <h2 class="text-2xl font-semibold mb-4 text-center">Product List</h2>
                <div class="space-y-4 mt-6">
                    @foreach ($products->filter(fn($product) => !$selectedCategory || $product->category_id === $selectedCategory) as $product)
                        <div class="flex items-center justify-between bg-white shadow-md rounded-lg p-4">
                            <div>
                                <h3 class="text-lg font-semibold">{{ $product->name }}</h3>
                                <p class="text-gray-600">Category: {{ ucfirst($product->category_id) }}</p>
                                <img src="{{ $product->image ? asset('storage/' . $product->image) : 'https://via.placeholder.com/150' }}" alt="{{ $product->name }}" class="w-full h-48 object-cover">
                            </div>
                            <div class="text-right">
                                <p class="text-gray-900 font-bold">${{ number_format($product->price, 2) }}</p>
                                <div class="mt-4">
                                    <a href="{{ route('product.details', ['id' => $product->id]) }}" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">View Details</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-layout>
