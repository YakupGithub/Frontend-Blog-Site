<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Sayfasına Giriş Yap</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <section class="bg-gray-800 min-h-screen flex items-center justify-center">
        <div class="bg-gray-300 flex rounded-2xl shadow-lg max-w-3xl p-5 items-center">
          <div class="md:w-1/2 px-8 md:px-16">
            <h2 class="font-bold text-3xl text-[#002D74]">Kle Tech Blog</h2>
            <p class="text-sm mt-3 text-[#002D74]">Kullanıcı bilgilerinizi aşağıdan güncelleyebilirsiniz.</p>

            <form method="POST" action="{{ route('user.update', $user) }}" class="flex flex-col gap-4">
                @csrf
                @method('PUT')
                <input class="p-2 mt-8 rounded-xl border" type="text" value="{{ $user['name'] }}" placeholder="Ad Soyad" name="name">
                <input class="p-2 rounded-xl border w-full" type="email"  value="{{ $user['email'] }}" name="email">
                <button type="submit" class="rounded-xl text-white py-2 hover:scale-105 duration-300 bg-yellow-600">Güncelle</button>
            </form>

            <h1>{{ $userId }}</h1>

            <div class="mt-5 text-xs py-4 text-[#002D74]">
                <a href="/">Anasayfaya dönmek için tıklayın </a>
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
