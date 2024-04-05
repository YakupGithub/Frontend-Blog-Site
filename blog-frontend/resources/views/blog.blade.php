<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KLE Blog</title>
    <meta name="author" content="Yakup Gündüz">
    <meta name="description" content="">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link rel="icon" type="public/images/kle.png" href="Kle_logo300x200-1.png" sizes="32x32">
</head>
<body class="bg-white font-family-karla">

    <!-- NavBar -->
    <nav class="w-full py-4 bg-yellow-600 shadow">
        <div class="w-full container mx-auto flex flex-wrap items-center justify-between">

            <nav>
                <ul class="flex items-center justify-between font-bold text-sm text-white uppercase no-underline">
                    <li><a class="hover:text-gray-200 hover:underline px-4" href="/register">kayıt ol</a></li>
                    <li><a class="hover:text-gray-200 hover:underline px-4" href="/login">giriş yap</a></li>
                </ul>
            </nav>

        </div>

    </nav>

    <!-- Text Header -->
    <header class="w-full container mx-auto">
        <div class="flex flex-col items-center py-12">
            <a class="font-bold text-gray-800 uppercase hover:text-gray-700 text-5xl" href="/">
                KLE Blog
            </a>
            <p class="text-lg text-gray-600">
                Blog Sayfamıza Hoşgeldiniz
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
            <div class="w-full container mx-auto flex flex-col sm:flex-row uppercase items-center justify-center text-md font-bold mt-0 px-6 py-2">
                @foreach ($categories as $category)
                    <a href="#" class="hover:text-yellow-400 rounded py-2 px-4 mx-2">{{$category['title']}}</a>
                @endforeach
            </div>
        </div>
        <div class="relative text-gray-600 flex justify-center items-center">
            <input type="search" name="search" placeholder="Ara" class="bg-white h-10 w-1/3 px-5 pr-10 rounded-full text-sm focus:outline-none">
            <button type="submit" class="absolute right-0 top-0 mt-3 mr-4"></button>
        </div>
    </nav>


    <div class="container mx-auto flex flex-wrap py-6">

        <!-- Posts -->
        <section class="w-full md:w-2/3 flex flex-col items-center px-3">
            @foreach ($posts as $post)
            <article class="flex flex-col shadow my-4">

                    <a href="#" class="hover:opacity-75">
                        <img src="{{ $post['thumbnail'] }}">
                    </a>
                    <div class="bg-white flex flex-col justify-start p-6">
                        <a href="{{ route('post', ['id' => $post['id']]) }}" class="text-blue-700 text-sm font-bold uppercase pb-4">{{ $post['category']['title'] }}</a>
                        <a href="{{ route('post', ['id' => $post['id']]) }}" class="text-3xl font-bold hover:text-gray-700 pb-4">{{ $post['title'] }}</a>
                        <p href="{{ route('post', ['id' => $post['id']]) }}" class="text-sm pb-3 text-blue-700 font-semibold hover:text-blue-800">
                        @if ($post['user'])
                            <a href="http://localhost/post" class="font-semibold">{{ $post['user']['name'] }}</a> tarafından
                        @endif
                            </a>{{ \Carbon\Carbon::parse($post['published_at'])->diffForHumans() }} kaydedildi.
                        </p>
                        <p href="{{ route('post', ['id' => $post['id']]) }}" class="pb-6">{{$post['body']}}</p>
                        <a href="{{ route('post', ['id' => $post['id']]) }}" class="uppercase text-gray-800 hover:text-black">DEVAMINI OKU <i class="fas fa-arrow-right"></i></a>
                    </div>
            </article>
            @endforeach

            <div class="flex items-center py-8">
                <a href="" class="h-10 w-10 bg-blue-800 hover:bg-blue-600 font-semibold text-white text-sm flex items-center justify-center">1</a>
                <a href="#" class="h-10 w-10 font-semibold text-gray-800 hover:bg-blue-600 hover:text-white text-sm flex items-center justify-center">2</a>
                <a href="#" class="h-10 w-10 font-semibold text-gray-800 hover:text-gray-900 text-sm flex items-center justify-center ml-3">DAHA FAZLA <i class="fas fa-arrow-right ml-2"></i></a>
            </div>

        </section>

        <aside class="w-full md:w-1/3 flex flex-col items-center px-3">

            <div class="w-full bg-white shadow flex flex-col my-4 p-6">
                <p class="text-xl font-semibold pb-5">En Çok Beğenilenler</p>
                <div class="grid grid-cols-3 gap-3">

                </div>
                <a href="#" class="w-full bg-blue-800 text-white font-bold text-sm uppercase rounded hover:bg-blue-700 flex items-center justify-center px-2 py-3 mt-6">
                    EN ÇOK BEĞENİLEN YAZILARIMIZ
                </a>
            </div>
            <div class="w-full bg-white shadow flex flex-col my-4 p-6">
                <p class="text-xl font-semibold pb-5">Güncel Yazılar</p>
                <div class="grid grid-cols-3 gap-3">
                    
                </div>
                <a href="#" class="w-full bg-blue-800 text-white font-bold text-sm uppercase rounded hover:bg-blue-700 flex items-center justify-center px-2 py-3 mt-6">
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
