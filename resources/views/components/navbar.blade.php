<nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
    <div class="flex lg:flex-1">
        <a href="/" class="-m-1.5 p-1.5">
            <span class="sr-only">Widi.Phone</span>
            <img class="h-8 w-auto"
                src="{{ asset('assets/images/logo.png') }}" alt="Deskripsi Gambar">
        </a>
    </div>
    <div class="flex lg:hidden">
        <button type="button"
            class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
            <span class="sr-only">Open main menu</span>
            <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                aria-hidden="true" data-slot="icon">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </button>
    </div>
    <div class="hidden lg:flex lg:gap-x-12">
        <a href="/products" class="text-sm/6 font-semibold text-gray-900">Product</a>
        <a href="/features" class="text-sm/6 font-semibold text-gray-900">Features</a>
        <a href="/company" class="text-sm/6 font-semibold text-gray-900">Company</a>
    </div>
    <div class="hidden lg:flex lg:flex-1 lg:justify-end">
        <a href="https://wa.me/085749266800" class="text-sm/6 font-semibold text-gray-900">Contact Us <span
                aria-hidden="true">&rarr;</span></a>
    </div>
</nav>