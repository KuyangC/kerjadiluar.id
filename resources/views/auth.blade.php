<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KerjaDiluar.id | {{ $title }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 font-sans">
    <div class="min-h-screen flex flex-col justify-center py-12 sm:px-6 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <h2 class="mt-6 text-center text-3xl font-extrabold text-maroon-600">{{ $title }}</h2>
            @isset($subtitle)
                <p class="mt-2 text-center text-sm text-gray-600">
                    {{ $subtitle }}
                </p>
            @endisset
        </div>

        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
                @if($mode === 'login')
                    <x-auth.login />
                @else
                    <x-auth.register />
                @endif
            </div>
        </div>
    </div>
</body>
</html>