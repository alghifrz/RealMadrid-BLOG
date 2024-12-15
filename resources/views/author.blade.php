<x-headeranak>Author</x-headeranak>

<body>

    <div class="min-h-full z-20">    
    
        {{-- navbar --}}
        <x-navbaranak></x-navbaranak>

        <main class="relative">
            <div class="bg-gray-200 pt-32 pb-16">
                <div class="mx-80 px-50 flex justify-center items-center gap-16">
                    <img src=/img/alghif.png alt="" width="30%" class="bg-gray-100 rounded-full">
                    <div>
                        <h3 class="font-semibold text-2xl mb-2">Hello gengs,</h3>
                        <h3 class="font-semibold text-5xl mb-4">Saya <span class="font-extrabold text-biru">Alghifari Rasyid Zola</span>,</h3>
                        <h3 class="font-medium text-xl mb-2 leading-snug">Selamat Datang di Blog Saya</h3>
                        <p class="mb-8 text-abu">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex deleniti, temporibus quos dicta ad, voluptatem quae corporis sint nemo vero saepe aut. Consequatur deleniti facere fuga nemo pariatur recusandae esse.</p>
                        <div class="flex justify-left">
                            <x-socmed></x-socmed>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex w-full overflow-hidden">
                <div class="bg-gray-200 px-40 py-2"></div>
                <div class="bg-biru px-64 py-4"></div>
                <div class="bg-biru px-40 py-4"></div>
                <div class="bg-biruMuda px-56 py-4"></div>
                <div class="bg-gray-200 px-40 py-2"></div>
            </div>
            <div class="mt-32 mx-80">
                <h3 class="text-4xl font-bold mb-12">My Posts</h3>
                <x-listview img="https://publish-p47754-e237306.adobeaemcloud.com/adobe/dynamicmedia/deliver/dm-aid--0184f979-a7cf-43a3-8bfe-84145764fc2a/_5_HE11339.app.webp?preferwebp=true&width=480" comp="LaLiga" title="Wasit kontroversial tolak kemenangan Madrid" detail="Rayo unggul 2-0, tim membalikkan keadaan dengan gol-gol dari Valverde, Bellingham dan Rodrygo dan, dengan hasil imbang tiga arah, baik Martínez Munuera maupun VAR tidak memberikan penalti dari Mumin kepada Vini Jr."/>
                <x-listview img="https://publish-p47754-e237306.adobeaemcloud.com/adobe/dynamicmedia/deliver/dm-aid--5d262288-4c01-4415-8f52-ff2b7303bb24/_5_AV12798.app.webp?preferwebp=true&width=480" comp="UEFA Champions League" title="Real Madrid raih kemenangan besar di Bergamo" detail="Gol dari Mbappé, Vini Jr. dan Bellingham membawa Madrid menang atas Atalanta pada pertandingan keenam Liga Champions."/>
            </div>

            






            {{-- footer --}}
            <x-footeranak></x-footeranak>

        </main>
    </div>


</body>