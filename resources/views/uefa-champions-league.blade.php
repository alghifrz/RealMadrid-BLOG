<x-headeranak>UEFA Champions League</x-headeranak>
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
                        <x-listview img="https://publish-p47754-e237306.adobeaemcloud.com/adobe/dynamicmedia/deliver/dm-aid--5d262288-4c01-4415-8f52-ff2b7303bb24/_5_AV12798.app.webp?preferwebp=true&width=480" comp="UEFA Champions League" title="Real Madrid raih kemenangan besar di Bergamo" detail="Gol dari Mbappé, Vini Jr. dan Bellingham membawa Madrid menang atas Atalanta pada pertandingan keenam Liga Champions."/>
                        <x-listview img="https://publish-p47754-e237306.adobeaemcloud.com/adobe/dynamicmedia/deliver/dm-aid--5d262288-4c01-4415-8f52-ff2b7303bb24/_5_AV12798.app.webp?preferwebp=true&width=480" comp="UEFA Champions League" title="Real Madrid raih kemenangan besar di Bergamo" detail="Gol dari Mbappé, Vini Jr. dan Bellingham membawa Madrid menang atas Atalanta pada pertandingan keenam Liga Champions."/>
                        <x-listview img="https://publish-p47754-e237306.adobeaemcloud.com/adobe/dynamicmedia/deliver/dm-aid--5d262288-4c01-4415-8f52-ff2b7303bb24/_5_AV12798.app.webp?preferwebp=true&width=480" comp="UEFA Champions League" title="Real Madrid raih kemenangan besar di Bergamo" detail="Gol dari Mbappé, Vini Jr. dan Bellingham membawa Madrid menang atas Atalanta pada pertandingan keenam Liga Champions."/>
                        <x-listview img="https://publish-p47754-e237306.adobeaemcloud.com/adobe/dynamicmedia/deliver/dm-aid--5d262288-4c01-4415-8f52-ff2b7303bb24/_5_AV12798.app.webp?preferwebp=true&width=480" comp="UEFA Champions League" title="Real Madrid raih kemenangan besar di Bergamo" detail="Gol dari Mbappé, Vini Jr. dan Bellingham membawa Madrid menang atas Atalanta pada pertandingan keenam Liga Champions."/>
                    </div>
                    <div class="w-1/4 ml-8">
                        <div class="mb-20">
                            <h3 class="text-4xl font-bold mb-4 pb-6">Categories</h3>
                            <x-categoriesblog link="/blog/fifa-club-world-cup" img="/img/fcwc.png" name="FIFA Club World Cup" />
                            <x-categoriesblog link="/blog/uefa-super-cup" img="/img/usc.png" name="UEFA Super Cup" />
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