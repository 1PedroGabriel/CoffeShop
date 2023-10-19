<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Coffee') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>

    <footer>  


        <table>
            <thead>
              <tr>
                <th>Sobre nós</th>
                <th>Github's</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><a href="#">Nossa empresa</a></td>
                <td><a href="#">Ailton Barem</a></td>
              </tr>
              <tr>
                <td><a href="#">Nosso café</a></td>
                <td><a href="#">Rennan Tavares</a></td>
              </tr>
            </tbody>
            <tfoot>
              <tr>
                <td></td>
                <td><a href="https://github.com/1PedroGabriel" target="blank">Pedro Gabriel</td>
              </tr>
            </tfoot>
          </table>
          © 2023 CoffeShop. Todos os direitos reservados.
    </footer>
</html>
