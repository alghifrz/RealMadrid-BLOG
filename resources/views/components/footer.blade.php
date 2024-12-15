<div class="mt-32 bg-gelap z-40 py-10" x-data="{ isOpen: false }">
    <div class="mx-24">
      <div class="flex h-16 items-center justify-between">
        <div class="shrink-0">
          <img class="h-16 w-auto" src="img/logoWhite.png" alt="Your Company">
          {{-- <img class="h-12 w-auto" src="" alt="Your Company"> --}}
        </div>
        <div class="flex items-center">
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-10 justify-end">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              <a href="/" class="rounded-md py-2 text-lg font-medium {{ request()->is('/') ? 'text-white' : 'text-white hover:text-gray-200' }}" aria-current="page">Home</a>
              <a href="/blog" class="rounded-md py-2 text-lg font-medium {{ request()->is('blog') || request()->is('blog2') || request()->is('blogpost') ? 'text-white' : 'text-white hover:text-gray-200' }}">Blog</a>
              <a href="/about" class="rounded-md py-2 text-lg font-medium {{ request()->is('about') || request()->is('about/*') ? 'text-white' : 'text-white hover:text-gray-200' }}">About Us</a>
              <a href="/contact" class="rounded-md py-2 text-lg font-medium {{ request()->is('contact') ? 'text-white' : 'text-white hover:text-gray-200' }}">Contact Us</a>
              <a href="/privacy-policy" class="rounded-md py-2 text-lg font-medium {{ request()->is('privacy-policy') ? 'text-white' : 'text-white hover:text-gray-200' }}">Privacy Policy</a>
            </div>
          </div>
        </div>

        <div class="-mr-2 flex md:hidden">
          <!-- Mobile menu button -->
          <button @click="isOpen = !isOpen" type="button" class="relative inline-flex items-center justify-center rounded-md bg-white p-2 text-abu hover:bg-gray-200  focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
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
      <div class="space-y-1 px-0 py-3 sm:px-3">
        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
        <a href="/" class="block rounded-md px-3 py-2 text-base font-semibold {{ request()->is('/') ? 'text-white' : 'text-white hover:bg-gray-200 hover:text-gelap' }}" aria-current="page">Home</a>
        <a href="/blog" class="block rounded-md px-3 py-2 text-base font-semibold {{ request()->is('blog') || request()->is('blog2') || request()->is('blogpost') ? 'text-white' : 'text-white hover:bg-gray-200 hover:text-gelap' }}">Blog</a>
        <a href="/about" class="block rounded-md px-3 py-2 text-base font-semibold {{ request()->is('about') || request()->is('about/*') ? 'text-white' : 'text-white hover:bg-gray-200 hover:text-gelap' }}">About Us</a>
        <a href="/contact" class="block rounded-md px-3 py-2 text-base font-semibold {{ request()->is('contact') ? 'text-white' : 'text-white hover:bg-gray-200 hover:text-gelap' }}">Contact Us</a>
        <a href="/privacy-policy" class="block rounded-md px-3 py-2 text-base font-semibold {{ request()->is('privacy-policy') ? 'text-white' : 'text-white hover:bg-gray-200 hover:text-gelap' }}">Privacy Policy</a>
      </div>
    </div>

    <div class="my-10 mx-24 bg-agakgelap px-16 py-16">
      <div class="flex justify-between">
        <h3 class="text-4xl font-bold mb-6 max-w-lg leading-snug text-white">
          Subscribe to our news letter to get latest updates and news
        </h3>
        <div class="flex">
          <form action="#">
            <div class="flex">
              <input type="email" name="email" id="email" class="rounded-md bg-agakgelap border border-gray-300 pl-4 px-20 py-3 text-lg font-regular text-white" placeholder="Your Email Address">
              <button class="ml-4 rounded-md bg-biru px-12 py-3 text-lg font-medium text-white hover:bg-biruHover">
                Subscribe
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
    
    <div class="mx-24">
      <div class="flex justify-between">
        <div>
          <p class="mb-1 text-gray-400">¡Hala Madrid!</p>          
          <p class="text-gray-400">Alghif Rz © 2024. All rights reserved.</p>                 
        </div>
        <div>
          <x-socmedfoot></x-socmedfoot>
        </div>
      </div>
    </div>

  </div>