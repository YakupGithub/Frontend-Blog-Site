<!DOCTYPE html>
<html lang="en">
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
                    <li><a class="hover:text-gray-200 hover:underline px-4" href="/register">KAYIT OL</a></li>
                    <li><a class="hover:text-gray-200 hover:underline px-4" href="/login">GİRİŞ YAP</a></li>
                </ul>
            </nav>

        </div>

    </nav>

    <!-- Text Header -->
    <header class="w-full container mx-auto">
        <div class="flex flex-col items-center py-12">
            <a class="font-bold text-gray-800 uppercase hover:text-gray-600 text-5xl" href="/">
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
                KATEGORİLER <i :class="open ? 'fa-chevron-down': 'fa-chevron-up'" class="fas ml-2"></i>
            </a>
        </div>
        <div :class="open ? 'block': 'hidden'" class="w-full flex-grow sm:flex sm:items-center sm:w-auto">
            <div class="w-full container mx-auto flex flex-col sm:flex-row items-center justify-center text-sm font-bold uppercase mt-0 px-6 py-2">
                <a href="#" class="hover:text-yellow-400 rounded py-2 px-4 mx-2">TEKNOLOJİ</a>
                <a href="#" class="hover:text-yellow-400 rounded py-2 px-4 mx-2">OTOMOTİV</a>
                <a href="#" class="hover:text-yellow-400 rounded py-2 px-4 mx-2">FİNANS</a>
                <a href="#" class="hover:text-yellow-400 rounded py-2 px-4 mx-2">SEYAHAT</a>
                <a href="#" class="hover:text-yellow-400 rounded py-2 px-4 mx-2">SPOR</a>
            </div>
        </div>
        <div class="relative text-gray-600 flex justify-center items-center">
            <input type="search" name="search" placeholder="Ara" class="bg-white h-10 w-1/3 px-5 pr-10 rounded-full text-sm focus:outline-none">
            <button type="submit" class="absolute right-0 top-0 mt-3 mr-4"></button>
        </div>
    </nav>


    <div class="container mx-auto flex flex-wrap py-6">

        <!-- Post Section -->
        <section class="w-full md:w-2/3 flex flex-col items-center px-3">

            <article class="flex flex-col shadow my-4">
                <a href="#" class="hover:opacity-75">
                    <img src="https://source.unsplash.com/collection/1346951/1000x600?sig=1">
                </a>
                <div class="bg-white flex flex-col justify-start p-6">
                    <a href="#" class="text-yellow-600 text-sm font-bold uppercase pb-4">TEKNOLOJİ</a>
                    <a href="#" class="text-3xl font-bold hover:text-gray-600 pb-4">Lorem Ipsum Dolor Sit Amet Dolor Sit Amet</a>
                    <p href="#" class="text-sm pb-8">
                        By <a href="#" class="font-semibold hover:text-gray-600">Yakup Gündüz</a>, Kaydedilme Tarihi 10 Mart 2024
                    </p>
                    <h1 class="text-2xl font-bold pb-3">Introduction</h1>
                    <p class="pb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vel neque non libero suscipit suscipit eu eu urna. Proin bibendum urna mattis ante malesuada ultrices. Etiam in turpis vitae elit dictum aliquet. Donec mattis risus in turpis dapibus, eget tempus sem tincidunt. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In est enim, imperdiet sed ornare quis, pellentesque vel risus. Nunc vitae vestibulum turpis. Quisque eget eleifend urna. Etiam et vulputate purus, ut egestas sem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis quis neque non urna venenatis mollis et at massa. Pellentesque sem lacus, malesuada vel hendrerit molestie, mollis vel elit.</p>
                    <h1 class="text-2xl font-bold pb-3">Heading</h1>
                    <p class="pb-3">Vivamus nec facilisis elit, quis congue justo. In non augue ex. Aenean pretium facilisis hendrerit. Sed sed imperdiet dui. Etiam faucibus a diam sed vehicula. Nullam commodo lacus tincidunt, tincidunt orci sed, dapibus leo. Vivamus vulputate quis risus a ultricies. Aliquam luctus id tellus non condimentum. Aenean maximus viverra ipsum eget vestibulum. Morbi ut tincidunt sem, efficitur volutpat tortor. Donec scelerisque, ipsum eu efficitur semper, neque turpis sodales quam, in aliquam elit lacus varius lorem. Ut ut diam id leo efficitur malesuada eget in velit. Pellentesque tristique orci nunc, vitae fermentum nibh luctus eu. Mauris condimentum justo sed ipsum egestas varius.</p>
                    <p class="pb-3">Sed sagittis odio a volutpat feugiat. Cras aliquam varius justo, a rhoncus ante bibendum id. Nulla maximus nisl sed enim maximus, ut dictum lectus hendrerit. Fusce venenatis tincidunt eros. Phasellus quis augue vulputate ipsum pellentesque fringilla. Morbi nec tempor felis. Maecenas sollicitudin pellentesque dui, sit amet scelerisque mauris elementum nec. Cras ante metus, mattis in malesuada in, fermentum a nunc. Suspendisse potenti. Sed tempor lacus sed commodo dignissim. Quisque dictum, dolor auctor iaculis cursus, ipsum urna porttitor ex, sed consequat nisi tellus eget ante. Duis molestie mollis eros, eu sollicitudin mauris lobortis quis.</p>
                    <p class="pb-3">Vivamus sed neque nec massa scelerisque imperdiet eget id sapien. Fusce elementum mi id malesuada luctus. Proin quis lorem id leo porta interdum non ac nisl. Integer nulla sem, ultrices sed neque eget, blandit condimentum metus. Aliquam eget malesuada sapien. Curabitur aliquet orci sit amet ex tincidunt convallis. Mauris urna mi, consequat mattis mollis a, dignissim eget sem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nam facilisis sem diam, viverra consequat metus consequat vel. Cras a mi eu ex luctus malesuada quis eu ante. Aliquam erat volutpat.</p>
                    <h1 class="text-2xl font-bold pb-3">Conclusion</h1>
                    <p class="pb-3">Donec vulputate auctor leo lobortis congue. Sed elementum pharetra turpis. Nulla at condimentum odio. Vestibulum ullamcorper enim eget porttitor bibendum. Proin eros nibh, maximus vitae nisi a, blandit ultricies lectus. Vivamus eu maximus lacus. Maecenas imperdiet iaculis neque, vitae efficitur felis vestibulum sagittis. Nunc a eros aliquet, egestas tortor hendrerit, posuere diam. Proin laoreet, ligula non eleifend bibendum, orci nulla luctus ipsum, dignissim convallis quam dolor et nulla.</p>
                </div>
            </article>

            <section class="bg-white dark:bg-gray-900 py-8 lg:py-16 antialiased">
                <div class="max-w-2xl mx-auto px-4">
                    <div class="flex justify-between items-center mb-6">
                      <h2 class="text-lg lg:text-2xl font-bold text-gray-900 dark:text-white">Yorumlar (20)</h2>
                  </div>
                  @if($comment && count($comment) > 0)
                  <form class="mb-6">
                      <div class="py-2 px-4 mb-4 bg-white rounded-lg rounded-t-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                          <label for="comment" class="sr-only">Your comment</label>
                          <textarea id="comment" rows="6"
                              class="px-0 w-full text-sm text-gray-900 border-0 focus:ring-0 focus:outline-none dark:text-white dark:placeholder-gray-400 dark:bg-gray-800"
                              placeholder="Yorum yaz..." required></textarea>
                      </div>
                      <button type="submit"
                          class="inline-flex bg-yellow-600 items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                          Gönder
                      </button>
                  </form>
                  @foreach($comment as $comment)
                  <article class="p-6 text-base bg-white rounded-lg dark:bg-gray-900">
                      <footer class="flex justify-between items-center mb-2">
                          <div class="flex items-center">
                              <p class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white font-semibold"><img
                                      class="mr-2 w-6 h-6 rounded-full"
                                      src="https://flowbite.com/docs/images/people/profile-picture-2.jpg"
                                      alt="Michael Gough">{{ $comment['user_id'] }}</p>
                              <p class="text-sm text-gray-600 dark:text-gray-400"><time pubdate datetime="2022-02-08"
                                      title="February 8th, 2022">Şub. 8, 2024</time></p>
                          </div>
                          <button id="dropdownComment1Button" data-dropdown-toggle="dropdownComment1"
                              class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 dark:text-gray-400 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:bg-gray-900 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                              type="button">
                              <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
                                  <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
                              </svg>
                              <span class="sr-only">Comment settings</span>
                          </button>

                          <div id="dropdownComment1"
                              class="hidden z-10 w-36 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                              <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                  aria-labelledby="dropdownMenuIconHorizontalButton">
                                  <li>
                                      <a href="#"
                                          class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                  </li>
                                  <li>
                                      <a href="#"
                                          class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Remove</a>
                                  </li>
                                  <li>
                                      <a href="#"
                                          class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Report</a>
                                  </li>
                              </ul>
                          </div>
                      </footer>
                      <p class="text-gray-500 dark:text-gray-400">{{ $comment['content'] }}</p>
                      <div class="flex items-center mt-4 space-x-4">
                      </div>
                  </article>
                    @endforeach

                    @else
                        <p class="mt-3">Yorum yapmak ve diğer kullanıcıların yorumlarını görmek için öncelikle giriş yapmanız gerekiyor. Eğer hesabınız yoksa kayıt olabilirsiniz..</p>
                        <a href="/register">Kaydol</a><br>
                        <a href="/login">Giriş Yap</a>
                    @endif


                  <article class="p-6 mb-3 text-base bg-white border-t border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                      <footer class="flex justify-between items-center mb-2">
                          <div class="flex items-center">
                              <p class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white font-semibold"><img
                                      class="mr-2 w-6 h-6 rounded-full"
                                      src="https://flowbite.com/docs/images/people/profile-picture-3.jpg"
                                      alt="Bonnie Green">Ahmet Flutter</p>
                              <p class="text-sm text-gray-600 dark:text-gray-400"><time pubdate datetime="2022-03-12"
                                      title="March 12th, 2022">Mar. 12, 2024</time></p>
                          </div>
                          <button id="dropdownComment3Button" data-dropdown-toggle="dropdownComment3"
                              class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 dark:text-gray-40 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:bg-gray-900 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                              type="button">
                              <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
                                  <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
                              </svg>
                              <span class="sr-only">Comment </span>
                          </button>
                          <!-- Dropdown menu -->
                          <div id="dropdownComment3"
                              class="hidden z-10 w-36 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                              <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                  aria-labelledby="dropdownMenuIconHorizontalButton">
                                  <li>
                                      <a href="#"
                                          class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                  </li>
                                  <li>
                                      <a href="#"
                                          class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Remove</a>
                                  </li>
                                  <li>
                                      <a href="#"
                                          class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Report</a>
                                  </li>
                              </ul>
                          </div>
                      </footer>
                      <p class="text-gray-500 dark:text-gray-400">The article covers the essentials, challenges, myths and stages the UX designer should consider while creating the design strategy.</p>
                      <div class="flex items-center mt-4 space-x-4">
                      </div>
                  </article>
                  <article class="p-6 text-base bg-white border-t border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                      <footer class="flex justify-between items-center mb-2">
                          <div class="flex items-center">
                              <p class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white font-semibold"><img
                                      class="mr-2 w-6 h-6 rounded-full"
                                      src="https://flowbite.com/docs/images/people/profile-picture-4.jpg"
                                      alt="Helene Engels">Emrecan Kle</p>
                              <p class="text-sm text-gray-600 dark:text-gray-400"><time pubdate datetime="2022-06-23"
                                      title="June 23rd, 2022">Oca. 23, 2024</time></p>
                          </div>
                          <button id="dropdownComment4Button" data-dropdown-toggle="dropdownComment4"
                              class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 dark:text-gray-40 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:bg-gray-900 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                              type="button">
                              <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
                                  <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
                              </svg>
                          </button>

                          <!-- Dropdown menu -->
                          <div id="dropdownComment4"
                              class="hidden z-10 w-36 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                              <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                  aria-labelledby="dropdownMenuIconHorizontalButton">
                                  <li>
                                      <a href="#"
                                          class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                  </li>
                                  <li>
                                      <a href="#"
                                          class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Remove</a>
                                  </li>
                                  <li>
                                      <a href="#"
                                          class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Report</a>
                                  </li>
                              </ul>
                          </div>
                      </footer>
                      <p class="text-gray-500 dark:text-gray-400">Thanks for sharing this. I do came from the Backend development and explored some of the tools to design my Side Projects.</p>
                      <div class="flex items-center mt-4 space-x-4">

                      </div>
                  </article>
                </div>
              </section>

            <div class="w-full flex pt-6">
                <a href="#" class="w-1/2 bg-white shadow hover:shadow-md text-left p-6">
                    <p class="text-lg text-yellow-600 font-bold flex items-center"><i class="fas fa-arrow-left pr-1"></i> GERİ</p>
                    <p class="pt-2">Lorem Ipsum Dolor Sit Amet Dolor Sit Amet</p>
                </a>
                <a href="#" class="w-1/2 bg-white shadow hover:shadow-md text-right p-6">
                    <p class="text-lg text-yellow-600 font-bold flex items-center justify-end">İLERİ <i class="fas fa-arrow-right pl-1"></i></p>
                    <p class="pt-2">Lorem Ipsum Dolor Sit Amet Dolor Sit Amet</p>
                </a>
            </div>

            <div class="w-full flex flex-col text-center md:text-left md:flex-row shadow bg-white mt-10 mb-10 p-6">
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
            </div>

        </section>

        <aside class="w-full md:w-1/3 flex flex-col items-center px-3">

            <div class="w-full bg-white shadow flex flex-col my-4 p-6">
                <p class="text-xl font-semibold pb-5">En Çok Beğenilenler</p>
                <div class="grid grid-cols-3 gap-3">
                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=1">
                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=2">
                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=3">
                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=4">
                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=5">
                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=6">
                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=7">
                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=8">
                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=9">
                </div>
                <a href="#" class="w-full bg-yellow-600 text-white font-bold text-sm uppercase rounded hover:bg-yellow-600 flex items-center justify-center px-2 py-3 mt-6">
                    EN ÇOK BEĞENİLEN YAZILARIMIZ
                </a>
            </div>
            <div class="w-full bg-white shadow flex flex-col my-4 p-6">
                <p class="text-xl font-semibold pb-5">Güncel Yazılar</p>
                <div class="grid grid-cols-3 gap-3">
                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=1">
                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=2">
                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=3">
                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=4">
                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=5">
                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=6">
                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=7">
                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=8">
                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=9">
                </div>
                <a href="#" class="w-full bg-yellow-600 text-white font-bold text-sm uppercase rounded hover:bg-yellow-600 flex items-center justify-center px-2 py-3 mt-6">
                    Güncel blog yazılarımız
                </a>
            </div>
        </aside>
    </div>
    <div class="w-full container mx-auto flex flex-col items-center">
        <div class="uppercase pb-6">&copy; kleblog.com | Yakup GÜNDÜZ 2024</div>
    </div>

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
</body>
</html>
