<nav class="bg-white shadow-sm py-2 fixed w-full top-0 z-40" x-data="{ isOpen: false }">
    {{-- <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8"> --}}
    <div class="mx-24">
      <div class="flex h-16 items-center justify-between">
        <div class="shrink-0">
          <img class="h-16 w-auto" src="/img/logo.png" alt="Your Company">
          {{-- <img class="h-12 w-auto" src="" alt="Your Company"> --}}
        </div>
        <div class="flex items-center">
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4 justify-end">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              <a href="/" class="px-3 py-2 text-lg font-semibold {{ request()->is('/') ? 'text-biru border-b-2 border-biru' : 'text-abu hover:text-biru' }}" aria-current="page">Home</a>
              <a href="/blog" class="px-3 py-2 text-lg font-semibold {{ request()->is('blog') || request()->is('blog2') || request()->is('blogpost') || request()->is('blog/*') ? 'text-biru border-b-2 border-biru' : 'text-abu hover:text-biru' }}">Blog</a>
              <a href="/about" class="px-3 py-2 text-lg font-semibold {{ request()->is('about')  || request()->is('about/*') ? 'text-biru border-b-2 border-biru' : 'text-abu hover:text-biru' }}">About Us</a>
              <a href="/contact" class="px-3 py-2 text-lg font-semibold {{ request()->is('contact') ? 'text-biru border-b-2 border-biru' : 'text-abu hover:text-biru' }}">Contact Us</a>
              <a href="#" class="rounded-md bg-biru px-6 py-2 text-lg font-semibold text-white hover:bg-biruHover">Subscribe</a>
            </div>
          </div>
        </div>

        <div class="-mr-2 flex md:hidden">
          <!-- Mobile menu button -->
          <button @click="isOpen = !isOpen" type="button" class="relative inline-flex items-center justify-center rounded-md bg-abu p-2 text-white hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
            <span class="absolute -inset-0.5"></span>
            <span class="sr-only">Open main menu</span>
            <!-- Menu open: "hidden", Menu closed: "block" -->
            <svg :class="{'hidden': isOpen, 'block': !isOpen }" class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            <!-- Menu open: "block", Menu closed: "hidden" -->
            <svg :class="{'block': isOpen, 'hidden': !isOpen }" class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
      </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div x-show="isOpen" class="md:hidden" id="mobile-menu">
      <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
        <a href="/" class="block rounded-md px-3 py-2 text-base font-semibold {{ request()->is('/') ? 'text-biru' : 'text-abu hover:text-biru' }}" aria-current="page">Home</a>
        <a href="/blog" class="block rounded-md px-3 py-2 text-base font-semibold {{ request()->is('blog') || request()->is('blog2') || request()->is('blogpost') || request()->is('blog/*') ? 'text-biru' : 'text-abu hover:text-biru' }}">Blog</a>
        <a href="/about" class="block rounded-md px-3 py-2 text-base font-semibold {{ request()->is('about')  || request()->is('about/*') ? 'text-biru' : 'text-abu hover:text-biru' }}">About Us</a>
        <a href="/contact" class="block rounded-md px-3 py-2 text-base font-semibold {{ request()->is('contact') ? 'text-biru' : 'text-abu hover:text-biru' }}">Contact Us</a>
        <a href="#" class="block text-center rounded-md bg-biru px-3 py-2 text-base font-bold text-white hover:bg-biruHover hover:text-white">Subsribe</a>
      </div>
    </div>
  </nav>