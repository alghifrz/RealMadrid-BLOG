<x-headeranak>UEFA Super Cup</x-headeranak>
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
                        <x-listview img="https://publish-p47754-e237306.adobeaemcloud.com/adobe/dynamicmedia/deliver/dm-aid--0184f979-a7cf-43a3-8bfe-84145764fc2a/_5_HE11339.app.webp?preferwebp=true&width=480" comp="LaLiga" title="Wasit kontroversial tolak kemenangan Madrid" detail="Rayo unggul 2-0, tim membalikkan keadaan dengan gol-gol dari Valverde, Bellingham dan Rodrygo dan, dengan hasil imbang tiga arah, baik Martínez Munuera maupun VAR tidak memberikan penalti dari Mumin kepada Vini Jr."/>
                        <x-listview img="https://publish-p47754-e237306.adobeaemcloud.com/adobe/dynamicmedia/deliver/dm-aid--5d262288-4c01-4415-8f52-ff2b7303bb24/_5_AV12798.app.webp?preferwebp=true&width=480" comp="UEFA Champions League" title="Real Madrid raih kemenangan besar di Bergamo" detail="Gol dari Mbappé, Vini Jr. dan Bellingham membawa Madrid menang atas Atalanta pada pertandingan keenam Liga Champions."/>
                        <x-listview img="https://publish-p47754-e237306.adobeaemcloud.com/adobe/dynamicmedia/deliver/dm-aid--44cab34c-70b2-4e96-ae74-7f2ba490a9ac/ND_SORTEO_MUNDIAL_CLUBES_2025_01__2187756601.app.webp?preferwebp=true&width=1440" comp="FIFA Club World Cup" title="Jadwal pertandingan Real Madrid untuk Piala Dunia Antarklub 2025" detail="The Whites akan memulai pertandingan pada hari Rabu, 18 Juni, melawan Al Hilal di Miami (pukul 9 malam CET)."/>
                        <x-listview img="https://publish-p47754-e237306.adobeaemcloud.com/adobe/dynamicmedia/deliver/dm-aid--4adbe730-44b3-4250-ba61-d2593cba26e3/ND_SORTEO_COPA_REY_3.app.webp?preferwebp=true&width=1440" comp="Copa del Rey" title="Deportiva Minera-Real Madrid di babak 32 besar Copa del Rey" detail="Real Madrid akan menghadapi Deportiva Minera di babak 32 besar Copa del Rey setelah pengundian di markas besar Federasi Sepak Bola Kerajaan Spanyol. Pertandingan satu kali ini akan berlangsung pada tanggal 5 atau 6 Januari di kandang lawan."/>
                    </div>
                    <div class="w-1/4 ml-8">
                        <div class="mb-20">
                            <h3 class="text-4xl font-bold mb-4 pb-6">Categories</h3>
                            <x-categoriesblog link="/blog/uefa-champions-league" img="/img/ucl.png" name="UEFA Champions League" />
                            <x-categoriesblog link="/blog/fifa-club-world-cup" img="/img/fcwc.png" name="FIFA Club World Cup" />
                            <x-categoriesblog link="/blog/laliga" img="/img/ll.png" name="LaLiga" />
                            <x-categoriesblog link="/blog/copa-del-rey" img="/img/cdr.png" name="Copa del Rey" />
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