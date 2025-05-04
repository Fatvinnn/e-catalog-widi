<nav class="bg-white shadow fixed top-0 inset-x-0 z-50">
    <div class="flex items-center justify-between px-4 py-4 sm:px-6 lg:px-8">
        <!-- Logo -->
        <div class="flex flex-1">
            <a href="/" class="-m-1.5 p-1.5">
                <span class="sr-only">Widi.Phone</span>
                <img class="h-8 w-auto" src="{{ asset('assets/images/logo.png') }}" alt="Widi.Phone Logo">
            </a>
        </div>

        <!-- Desktop Menu -->
        <div class="hidden lg:flex lg:gap-x-12">
            <a href="/products" class="text-sm font-semibold text-gray-900">Product</a>
            <a href="/features" class="text-sm font-semibold text-gray-900">Features</a>
            <a href="/company" class="text-sm font-semibold text-gray-900">Company</a>
        </div>

        <!-- Contact Us on Desktop -->
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
            <a href="https://wa.me/085749266800" class="text-sm font-semibold text-gray-900">Contact Us <span aria-hidden="true">&rarr;</span></a>
        </div>

        <!-- Hamburger for Mobile -->
        <div class="lg:hidden">
            <button id="open-menu" type="button" class="p-2.5 text-gray-700">
                <span class="sr-only">Open main menu</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu (Hidden by Default) -->
    <div id="mobile-menu" class="hidden lg:hidden fixed inset-0 z-40">
        <!-- Overlay -->
        <div class="fixed inset-0 bg-black/50"></div>

        <!-- Slide-in Menu -->
        <div class="fixed inset-y-0 right-0 w-full max-w-sm bg-white px-6 py-6 z-50 overflow-y-auto sm:ring-1 sm:ring-gray-900/10">
            <div class="flex items-center justify-between">
                <a href="/" class="-m-1.5 p-1.5">
                    <img class="h-8 w-auto" src="{{ asset('assets/images/logo.png') }}" alt="Widi.Phone Logo">
                </a>
                <button id="close-menu" type="button" class="p-2.5 text-gray-700">
                    <span class="sr-only">Close menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="mt-6 space-y-4">
                <a href="/products" class="block rounded-lg px-3 py-2 text-base font-semibold text-gray-900 hover:bg-gray-50">Product</a>
                <a href="/features" class="block rounded-lg px-3 py-2 text-base font-semibold text-gray-900 hover:bg-gray-50">Features</a>
                <a href="/company" class="block rounded-lg px-3 py-2 text-base font-semibold text-gray-900 hover:bg-gray-50">Company</a>
                <a href="https://wa.me/085749266800" class="block rounded-lg px-3 py-2.5 text-base font-semibold text-gray-900 hover:bg-gray-50">Contact Us</a>
            </div>
        </div>
    </div>

    <!-- Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const openBtn = document.getElementById('open-menu');
            const closeBtn = document.getElementById('close-menu');
            const mobileMenu = document.getElementById('mobile-menu');

            if (openBtn && mobileMenu) {
                openBtn.addEventListener('click', () => mobileMenu.classList.remove('hidden'));
            }

            if (closeBtn && mobileMenu) {
                closeBtn.addEventListener('click', () => mobileMenu.classList.add('hidden'));
            }
        });
    </script>
</nav>
