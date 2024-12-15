<x-headeranak>LaLiga</x-headeranak>
<body>
    
    <div class="min-h-full z-20">    
    
        {{-- navbar --}}
        <x-navbaranak></x-navbaranak>

        <main class="relative">
            <div class="bg-gray-200 pt-32 pb-12">
                <div class="mx-80 px-80 flex justify-center items-center text-center flex-col">
                    <img src={{ $image }} alt="" width="70px">
                    <h3 class="font-extrabold text-4xl mb-4 leading-snug">{{ $key }}</h3>
                    <p class="mb-8 text-abu">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex deleniti, temporibus quos dicta ad, voluptatem quae corporis sint nemo vero saepe aut. Consequatur deleniti facere fuga nemo pariatur recusandae esse.</p>
                    <p class="font-medium mb-4 leading-snug text-black">BLOG > {{ $keyK }}</p>
                </div>
            </div>
            <div class="mt-24 mx-24">
                <div class="flex justify-between gap-32">
                    <div class="w-3/4">
                        <x-listview img="https://publish-p47754-e237306.adobeaemcloud.com/adobe/dynamicmedia/deliver/dm-aid--4adbe730-44b3-4250-ba61-d2593cba26e3/ND_SORTEO_COPA_REY_3.app.webp?preferwebp=true&width=1440" comp="Copa del Rey" title="Deportiva Minera-Real Madrid di babak 32 besar Copa del Rey" detail="Real Madrid akan menghadapi Deportiva Minera di babak 32 besar Copa del Rey setelah pengundian di markas besar Federasi Sepak Bola Kerajaan Spanyol. Pertandingan satu kali ini akan berlangsung pada tanggal 5 atau 6 Januari di kandang lawan."/>
                        <x-listview img="https://publish-p47754-e237306.adobeaemcloud.com/adobe/dynamicmedia/deliver/dm-aid--4adbe730-44b3-4250-ba61-d2593cba26e3/ND_SORTEO_COPA_REY_3.app.webp?preferwebp=true&width=1440" comp="Copa del Rey" title="Deportiva Minera-Real Madrid di babak 32 besar Copa del Rey" detail="Real Madrid akan menghadapi Deportiva Minera di babak 32 besar Copa del Rey setelah pengundian di markas besar Federasi Sepak Bola Kerajaan Spanyol. Pertandingan satu kali ini akan berlangsung pada tanggal 5 atau 6 Januari di kandang lawan."/>
                        <x-listview img="https://publish-p47754-e237306.adobeaemcloud.com/adobe/dynamicmedia/deliver/dm-aid--4adbe730-44b3-4250-ba61-d2593cba26e3/ND_SORTEO_COPA_REY_3.app.webp?preferwebp=true&width=1440" comp="Copa del Rey" title="Deportiva Minera-Real Madrid di babak 32 besar Copa del Rey" detail="Real Madrid akan menghadapi Deportiva Minera di babak 32 besar Copa del Rey setelah pengundian di markas besar Federasi Sepak Bola Kerajaan Spanyol. Pertandingan satu kali ini akan berlangsung pada tanggal 5 atau 6 Januari di kandang lawan."/>
                        <x-listview img="https://publish-p47754-e237306.adobeaemcloud.com/adobe/dynamicmedia/deliver/dm-aid--4adbe730-44b3-4250-ba61-d2593cba26e3/ND_SORTEO_COPA_REY_3.app.webp?preferwebp=true&width=1440" comp="Copa del Rey" title="Deportiva Minera-Real Madrid di babak 32 besar Copa del Rey" detail="Real Madrid akan menghadapi Deportiva Minera di babak 32 besar Copa del Rey setelah pengundian di markas besar Federasi Sepak Bola Kerajaan Spanyol. Pertandingan satu kali ini akan berlangsung pada tanggal 5 atau 6 Januari di kandang lawan."/>
                    </div>
                    <div class="w-1/4 ml-8">
                        <div class="mb-20">
                            <h3 class="text-4xl font-bold mb-4 pb-6">Categories</h3>
                            <x-categoriesblog link="/blog/uefa-champions-league" img="/img/ucl.png" name="UEFA Champions League" />
                            <x-categoriesblog link="/blog/fifa-club-world-cup" img="/img/fcwc.png" name="FIFA Club World Cup" />
                            <x-categoriesblog link="/blog/uefa-super-cup" img="/img/usc.png" name="UEFA Super Cup" />
                            <x-categoriesblog link="/blog/laliga" img="/img/ll.png" name="LaLiga" />
                        </div>
                        <x-alltags></x-alltags>
                    </div>
                </div>
            </div>
        

            {{-- footer --}}
            <x-footeranak></x-footeranak>

        </main>
    
    </div>


</body>