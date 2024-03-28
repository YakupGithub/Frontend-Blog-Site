<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Sayfasına Kaydol</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <section class="bg-gray-200 min-h-screen flex items-center justify-center">
        <div class="bg-gray-300 flex rounded-2xl shadow-lg max-w-3xl p-5 items-center">
          <div class="md:w-1/2 px-8 md:px-16">
            <h2 class="font-bold text-3xl text-[#002D74]">Kle Tech Blog</h2>
            <p class="text-xs mt-3 text-[#002D74]">Öncelikle kayıt olmalısınız...</p>

            <form method="POST" action="{{ route('user.register') }}" class="flex flex-col gap-4">
                @csrf
                <br>
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
              <input class="p-2 rounded-xl border" type="name" name="name" placeholder="Ad Soyad">
              <div class="relative">
                <input class="p-2 rounded-xl border w-full" type="email" name="email" placeholder="E-Posta">
              </div>
              <div class="relative">
                <input class="p-2 rounded-xl border w-full" type="password" name="password" placeholder="Şifre">
              </div>
              <div class="relative">
                <input class="p-2 rounded-xl border w-full" type="password" name="password_confirmation" placeholder="Şifre Tekrar">
              </div>
              <button style="background-color: rgb(15 23 42);" class="rounded-xl text-white py-2 hover:scale-105 duration-300">Kaydol</button>
            </form>


            <div class="mt-5 text-xs border-b border-[#002D74] py-4 text-[#002D74]">
                <a href="/">Kayıt olmadan devam etmek için tıklayın!</a>
            </div>

            <div class="mt-3 text-xs flex justify-between items-center text-[#002D74]">
                <p>Hesabınız var mı?</p>
                <a href="/login">
                    <button class="py-2 px-5 bg-white border rounded-xl hover:scale-110 duration-300">Giriş Yap</button>
                </a>
            </div>
          </div>

          <!-- image -->
          <div class="md:block hidden w-1/2">
            <img class="rounded-2xl" src="https://images.unsplash.com/photo-1616606103915-dea7be788566?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1887&q=80">
          </div>
        </div>
      </section>
</body>
</html>
