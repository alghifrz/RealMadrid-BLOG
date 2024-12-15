<x-header>Contact Us</x-header>

<body>
    
    <div class="min-h-full z-20">    
    
        {{-- navbar --}}
        <x-navbaranak></x-navbaranak>

        <main class="relative">
            <div class="mt-32 text-center mx-80 px-20">
                <p class="font-semibold text-lg mb-4 tracking-widest text-abu">CONTACT US</p>
                <h3 class="text-4xl font-bold mb-8">Let’s Start a Conversation</h3>
                <p class="font-regular text-lg mb-16 tracking-widest text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis ex explicabo recusandae cupiditate nobis magnam nesciunt assumenda eum maiores. Harum facilis eaque non ullam ea veritatis mollitia id eos sit!</p>
                
                <div class="bg-biruMuda p-16 text-left rounded-2xl mb-12">
                    <div class="flex justify-between gap-6">
                        <div>
                            <p class="text-abu mb-8 border-b border-gray-400 pb-6 pr-80">Working Hours</p>
                            <h3 class="text-2xl font-bold mb-2">Monday To Friday</h3>
                            <h3 class="text-2xl font-bold mb-2">9:00 AM to 8:00 PM </h3>
                            <p class="text-abu text-sm">Our Support Team is available 24/7</p>
                        </div>
                        <div>
                            <p class="text-abu mb-8 border-b border-gray-400 pb-6 pr-80">Contact Us</p>
                            <h3 class="text-2xl font-bold mb-2">+62 821 7277 2394</h3>
                            <p class="text-abu text-sm">alghifarirasyidzola@gmail.com</p>
                        </div>
                    </div>
                </div>

                <form action="" class="flex flex-col">
                    <input type="text" name="name" id="name" class="mb-4 rounded-2xl border border-gray-300 pl-10 px-20 py-4 text-lg font-regular text-black" placeholder="Full Name" required>
                    <input type="email" name="email" id="email" class="mb-4 rounded-2xl border border-gray-300 pl-10 px-20 py-4 text-lg font-regular text-black" placeholder="Your Email" required>
                    <select name="status" id="status" class="mb-4 rounded-2xl border border-gray-300 pl-10 pr-10 py-4 text-lg font-regular text-black">
                        <option value="status" disabled selected>Status</option>
                        <option value="programmer">Programmer</option>
                        <option value="dosen">Dosen</option>
                        <option value="mahasiswa">Mahasiswa</option>
                        <option value="umum">Umum</option>
                    </select>
                    <textarea name="message" id="message" class="mb-4 rounded-2xl border border-gray-300 pl-10 px-20 py-4 text-lg font-regular text-black h-48" placeholder="Message" required></textarea>
                    <button type="submit" class="mb-32 rounded-2xl bg-biru px-12 py-4 text-lg font-medium text-white hover:bg-biruHover">Send Message</button>
                    

                </form>

            </div>

        
            {{-- footer --}}
            <x-footer></x-footer>
        </main>
    </div>
</body>