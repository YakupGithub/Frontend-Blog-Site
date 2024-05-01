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

    @if (isset($user))
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
                {{-- @foreach ($categories as $category)
                    <a  class="hover:text-yellow-400 rounded py-2 px-4 mx-2">{{$category['title']}}</a>
                @endforeach --}}
            </div>
        </div>
        <div class="relative text-gray-800 flex justify-center items-center">
            <input type="search" name="search" placeholder="Ara" class="bg-white h-10 w-1/3 px-5 pr-10 rounded-full text-sm focus:outline-none">
            <button type="submit" class="absolute right-0 top-0 mt-3 mr-4"></button>
        </div>
    </nav>

<div class="container mx-auto flex flex-wrap py-6">

        <section class="w-full md:w-2/3 flex flex-col items-center px-3">

            <article class="flex flex-col shadow my-4">
                @if (isset($user))
                <p><img src="{{ $posts['post']['thumbnail'] }}"></p>
                <div class="bg-white flex flex-col justify-start p-6">
                    <a class="text-yellow-600 text-md font-bold uppercase pb-4">{{ $posts['post']['category']['title'] }}</a>
                    <p class="text-3xl font-bold pb-4">{{ $posts['post']['title'] }}</p>
                    <p class="text-sm text-yellow-600 font-semibold pb-4">{{ $posts['post']['user']['name'] }} tarafından
                        {{ \Carbon\Carbon::parse($posts['post']['published_at'])->diffForHumans() }} kaydedildi.
                    </p>
                    <p class="pb-3 ">{{ $posts['post']['body'] }}</p>
                </div>
            </article>

            <section class="bg-white dark:bg-gray-900 py-8 lg:py-16 antialiased">
                <div class="max-w-2xl mx-auto px-4">
                    <div class="flex justify-between items-center mb-6">
                      <h2 class="text-xl lg:text-2xl font-bold text-gray-900 dark:text-white">Yorumlar</h2>
                  </div>
                  {{-- @if($comment && count($comment) > 0) --}}
                  <form class="mb-6" method="post">
                    @csrf
                    <div class="py-2 px-4 mb-4 bg-white rounded-lg rounded-t-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                        <label for="comment" class="sr-only">Your comment</label>
                        <textarea name="content" id="content" rows="6"
                            class="px-0 w-full text-sm text-gray-900 border-0 focus:ring-0 focus:outline-none dark:text-white dark:placeholder-gray-400 dark:bg-gray-800"
                            placeholder="Yorum yaz..." required></textarea>
                    </div>
                    <button type="submit"
                        class="inline-flex bg-yellow-600 items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                        Gönder
                    </button>
                </form>

                  {{-- @foreach($comment as $comment) --}}

                      {{-- <p class="text-gray-500 dark:text-gray-400">{{ $comment['content'] }}</p> --}}
                      <div class="flex items-center mt-4 space-x-4">
                      </div>
                  </article>
                    {{-- @endforeach --}}

                    {{-- @else
                        <p class="mt-3">Yorum yapmak ve diğer kullanıcıların yorumlarını görmek için öncelikle giriş yapmanız gerekiyor. Eğer hesabınız yoksa kayıt olabilirsiniz..</p>
                        <a href="/register">Kaydol</a><br>
                        <a href="/login">Giriş Yap</a>
                    @endif --}}


                  <article class="p-6 mb-3 text-base bg-white border-t border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                      <footer class="flex justify-between items-center mb-2">
                          <div class="flex items-center">
                              <p class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white font-semibold">
                                <i class="fa-regular fa-user w-6 ounded-full"></i>Dara Kemaloğlu</p>
                              <p class="text-sm text-gray-600 dark:text-gray-400"><time pubdate datetime="2022-03-12"
                                      title="March 12th, 2022">Mar. 12, 2024</time></p>
                          </div>
                      </footer>
                      <p class="text-gray-500 dark:text-gray-400">The article covers the essentials, challenges, myths and stages the UX designer should consider while creating the design strategy.</p>
                  </article>
                </div>
              </section>

            @else
                <h1 class="text-lg text-red-700 font-bold p-3">Bu yazının devamını okumak için lütfen giriş yapın!</h1>
            @endif


            {{-- <div class="w-full flex flex-col text-center md:text-left md:flex-row shadow bg-white mt-10 mb-10 p-6">
                <div class="w-full md:w-1/5 flex justify-center md:justify-start pb-4">
                    <img src="https://source.unsplash.com/collection/1346951/150x150?sig=1" class="rounded-full shadow h-32 w-32">
                </div>
                <div class="flex-1 flex flex-col justify-center md:justify-start">
                    <p class="font-semibold text-2xl">Yakup</p>
                    <p class="pt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vel neque non libero suscipit suscipit eu eu urna.</p>
                    <div class="flex items-center justify-center md:justify-start text-2xl no-underline text-yellow-600 pt-4">
                        <a class="" href="#">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a class="pl-4" href="#">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="pl-4" href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="pl-4" href="#">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </div>
                </div>
            </div> --}}

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
