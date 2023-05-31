<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/css/app.css">
  <title>Buku Tamu</title>
</head>
<body class="bg-slate-50">
  <div class="container mx-auto min-h-screen relative">
    @include('partials.header')

    <div>
      @yield('container')
    </div>
  </div>
</body>
</html>