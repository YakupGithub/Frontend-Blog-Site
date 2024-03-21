<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">

</head>
<body style="background-color: rgb(240, 240, 240)">
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="mr-4 mt-2 text-center text-1xl font-bold leading-9 tracking-tight text-gray-900">
            <a href="/">ANA SAYFA </a>
        </div>
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
          <img class="mx-auto h-12 w-auto" style="width: 150px; height:150px;" src="https://www.kletech.com/wp-content/uploads/2020/03/Kle_logo300x200-1.png" alt="Your Company">
          <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Blog Sayfası Giriş Ekranı</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
          <form class="space-y-6" action="#" method="POST">
            <div>
              <label for="email" class="block text-sm font-medium leading-6 text-gray-900">E-posta Adresi</label>
              <div class="mt-2">
                <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-2 border-gray-300 py-1.5 pl-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:border-transparent sm:text-sm sm:leading-6">
              </div>
            </div>

            <div>
              <div class="flex items-center justify-between">
                <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Şifre</label>
              </div>
              <div class="mt-2">
                <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-2 border-gray-300 py-1.5 pl-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:border-transparent sm:text-sm sm:leading-6">
              </div>
            </div>

            <div>
              <button type="submit" class="flex w-full justify-center rounded-md bg-yellow-400 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-yellow-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-yellow-500">Giriş Yap</button>
            </div>
          </form>

          <p class="mt-10 text-center text-sm text-gray-500">
            Daha önce hesap açmadınız mı?
            <a href="http://localhost/register" class="font-semibold leading-6 text-yellow-400 hover:text-yellow-500">Hesap Aç</a>
          </p>
        </div>
      </div>

</body>
</html>
