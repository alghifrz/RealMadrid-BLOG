<a href="#">
    <div class="flex flex-col justify-between h-120 w-100 hover:bg-gray rounded-2xl">
        <img src={{ $img }} alt="" height="50%" class="mb-4 rounded-2xl">
        <p class="text-abu mb-2 text-sm">By <span class="text-biru">{{ $name }} </span> | {{ $date }}</p>
        <p class="text-3xl font-bold mb-4">{{ $title }}</p>
        <p class="text-abu mb-2">{{ $desc }}</p>
    </div>
</a>