<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ $title }} - Pagina de series..</title>
  @vite('resources/css/app.css')
</head>
<body>
  <x-header></x-header>
  
  <main class="h-full">
    {{ $slot }}
  </main>

  <x-footer>
    <p class="font-semibold text-xl">Footer...</p>
  </x-footer>

</body>
</html>