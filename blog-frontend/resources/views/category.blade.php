<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KLE Blog</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link rel="icon" type="public/images/kle.png" href="Kle_logo300x200-1.png" sizes="32x32">
</head>
<body class="bg-white font-family-karla">

    <!-- NavBar -->
    @if ($user)
    <nav class="w-full py-4 bg-gray-800 shadow">
        <div class="w-full container mx-auto flex flex-wrap items-center justify-between">
            <div class="flex items-center justify-start font-bold text-sm text-white uppercase no-underline">
                <h1>Hoşgeldin, {{$user}}!</h1>
            </div>
            <ul class="flex items-center justify-end font-bold text-sm text-white uppercase no-underline">
                <li><a class="hover:text-yellow-400 px-4" href="{{ route('user.edit') }}">Profili Düzenle</a></li>
                <li><a class="hover:text-yellow-400 px-4" href="/logout">Çıkış Yap</a></li>
            </ul>
        </div>
    </nav>
    @else
    <nav class="w-full py-4 bg-yellow-600 shadow">
        <div class="w-full container mx-auto flex flex-wrap items-center justify-between">
            <ul class="flex items-center justify-between font-bold text-sm text-white uppercase no-underline">
                <li><a class="hover:text-gray-200 hover:underline px-4" href="/register">kayıt ol</a></li>
                <li><a class="hover:text-gray-200 hover:underline px-4" href="/login">giriş yap</a></li>
            </ul>
        </div>
    </nav>
    @endif


    <!-- Text Header -->
    <header class="w-full container mx-auto">
        <div class="flex flex-col items-center py-12">
            <a class="font-bold text-gray-800 uppercase hover:text-gray-800 text-5xl" href="/">
                KLE Blog
            </a>
            <p class="text-lg text-gray-800">
                Blog Sayfamıza Hoşgeldiniz
            </p>
            <p class="text-xl text-green-500 m-3">
                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif

                @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
            </p>
        </div>
    </header>

    <!-- Category Nav -->
    <nav class="w-full py-4 border-t border-b bg-gray-800 text-white" x-data="{ open: false }">
        <div class="block sm:hidden">
            <a
                href="#"
                class="block md:hidden text-base font-bold uppercase text-center flex justify-center items-center"
                @click="open = !open"
            >
                kategoriler <i :class="open ? 'fa-chevron-down': 'fa-chevron-up'" class="fas ml-2"></i>
            </a>
        </div>
        <div :class="open ? 'block': 'hidden'" class="w-full flex-grow sm:flex sm:items-center sm:w-auto">
            <div class="w-full container mx-auto flex flex-col sm:flex-row uppercase items-center justify-center text-lg font-bold mt-0 px-6 py-2">
                <a class="hover:text-yellow-400 rounded py-2 px-4 mx-2">{{$category['title']}}</a>
            </div>
        </div>
        <div class="relative text-gray-800 flex justify-center items-center">
            <input type="search" name="search" placeholder="Ara" class="bg-white h-10 w-1/3 px-5 pr-10 rounded-full text-sm focus:outline-none">
            <button type="submit" class="absolute right-0 top-0 mt-3 mr-4"></button>
        </div>
    </nav>

<!-- Posts -->
    <div class="container mx-auto flex flex-wrap py-6">
        <section class="w-full md:w-2/3 flex flex-col items-center px-3">
            @foreach ($posts as $post)
            @if ($post['active'] == 1)
            <article class="flex flex-col shadow my-4">
                    <a href="{{ route('post', ['slug' => $post['slug']]) }}"><img src="{{ $post['thumbnail'] }}"></a>
                    <div class="bg-white flex flex-col justify-start p-6">
                        {{-- <a href="{{ route('post', ['id' => $post['id']]) }}" class="text-yellow-600 text-md font-bold uppercase pb-4">{{ $post['category']['title'] }}</a> --}}
                        <a href="{{ route('post', ['slug' => $post['slug']]) }}" class="text-3xl font-bold hover:text-gray-800 pb-4">{{ $post['title'] }}</a>
                        <p href="{{ route('post', ['slug' => $post['slug']]) }}" class="text-sm pb-3 text-yellow-600 font-semibold hover:text-yellow-600">
                        <span class="font-semibold">{{ $post['user_id'] }}</span> tarafından
                        </span>{{ \Carbon\Carbon::parse($post['published_at'])->diffForHumans() }} kaydedildi.
                        </p>
                        <p href="{{ route('post', ['slug' => $post['slug']]) }}" class="pb-6">{{ Illuminate\Support\Str::limit($post['body'], 180) }}</p>
                        <a href="{{ route('post', ['slug' => $post['slug']]) }}" class="uppercase text-sm text-yellow-600  text-gray-800 hover:text-black">DEVAMINI OKU <i class="fas fa-arrow-right"></i></a>
                    </div>
            </article>
            @endif
            @endforeach

            <div class="flex items-center py-8">
                <a href="" class="h-10 w-10 bg-yellow-600 hover:bg-yellow-600 font-semibold text-white text-sm flex items-center justify-center">1</a>
                <a href="#" class="h-10 w-10 font-semibold text-gray-800 hover:bg-yellow-600 hover:text-white text-sm flex items-center justify-center">2</a>
                <a href="#" class="h-10 w-10 font-semibold text-gray-800 hover:text-gray-900 text-sm flex items-center justify-center ml-3">DAHA FAZLA <i class="fas fa-arrow-right ml-2"></i></a>
            </div>

        </section>
<aside class="w-full md:w-1/3 flex flex-col items-center px-3">
    <div class="w-full bg-white shadow flex flex-col my-4 p-6">
        <p class="text-xl font-semibold pb-5">En Çok Beğenilenler</p>
        <div class="grid grid-cols-3 gap-3">

        </div>
        <a href="#" class="w-full bg-yellow-600 text-white font-bold text-sm uppercase rounded hover:bg-yellow-600 flex items-center justify-center px-2 py-3 mt-6">
            EN ÇOK BEĞENİLEN YAZILARIMIZ
        </a>
    </div>
    <div class="w-full bg-white shadow flex flex-col my-4 p-6">
        <p class="text-xl font-semibold pb-5">Güncel Yazılar</p>
        <div class="grid grid-cols-3 gap-3">

        </div>
        <a href="#" class="w-full bg-yellow-600 text-white font-bold text-sm uppercase rounded hover:bg-yellow-600 flex items-center justify-center px-2 py-3 mt-6">
            Güncel blog yazılarımız
        </a>
    </div>
</aside>
</div>

<div class="w-full bg-yellow-600 container-fluid mx-auto flex flex-col items-center py-6">
<div class=" text-white font-semibold">&copy; kleblog.com | Yakup Gündüz - 2024</div>
</div>

<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
</body>
</html>
