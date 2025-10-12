<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    <div class="sticky top-0 z-70">
       <livewire:navigation/>
    </div>

    {{ $slot }}
    <x-footer/>
</body>
</html>