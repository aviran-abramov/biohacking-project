<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $metaTitle }} | My Longevity Protocols</title>
    @vite('resources/css/app.css')
</head>
<body>
    <header class="border-b border-b-slate-300">
        <x-nav />
    </header>

    <main>
        <div class="max-w-[1100px] m-auto">
            {{ $slot }}
        </div>
    </main>
</body>
</html>
