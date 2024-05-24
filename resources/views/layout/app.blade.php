<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:ital,wght@0,100..800;1,100..800&display=swap" rel="stylesheet">
  @vite('resources/css/app.css')
</head>
<body>
    <div class="bg-slate-200 h-screen w-screen">
        @include('components.navbar')
        @include('components.heroSection')
    </div>
</body>
</html>