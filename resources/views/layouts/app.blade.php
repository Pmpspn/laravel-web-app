<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>

    <!-- Styles -->

    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-image: url({{asset('img/background.png')}});
            background-size: cover;
        }

        .anima-b {
            animation: bounce .01s infinite;
        }

        @keyframes bounce {
            0%, 100% {
                transform: translateY(-50%);
                animation-timing-function: cubic-bezier(0.8, 0, 1, 1);
            }
            50% {
                transform: translateY(0);
                animation-timing-function: cubic-bezier(0, 0, 0.2, 1);
            }
        }

        .anima-p {
            animation: pulse .001s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }



        @keyframes pulse {
            0%, 100% {
                opacity: 1;
            }
            50% {
                opacity: .5;
            }
        }
    </style>
    <script>
        var app = new Vue({
            el: '#app',
            data: {
                isActive: true,
                message: 'Hello Vue !'
            }
        })
    </script>
</head>
<body id="app">
<nav
    class="rounded shadow-xs mx-4 mt-4 flex flex-col text-center content-center sm:flex-row sm:text-left sm:justify-between py-2 px-6 sm:items-baseline">
    <div class="mb-2 sm:mb-0 inner">

        <a class="text-2xl no-underline text-gray-100 font-sans font-bold">Le nom de la team</a><br>
        <span class="text-sm text-gray-100 font-semibold">Eux, c'est les meilleurs ;)</span>

    </div>

    <div class="sm:mb-0 self-center">
        <a href="#" class="text-md font-semibold no-underline text-gray-100 hover:text-red-600 ml-2 px-1">Asi
            Culture</a>
        <a href="#" class="text-md font-semibold no-underline text-gray-100 hover:text-red-600 ml-2 px-1">Bouton en
            trop</a>
        <a href="#" class="text-md font-semibold no-underline text-gray-100 hover:text-red-600 ml-2 px-1">L'équipe</a>
    </div>

    <div class="sm:mb-0 self-center">
        <a href="#" class="text-md font-semibold no-underline text-green-200 hover:text-green-600 ml-2 px-1">Se
            connecter</a>
    </div>
    <!--
        <div class="sm:mb-0 self-center">
            <a href="#" class="text-md font-semibold no-underline text-black hover:text-blue-dark ml-2 px-1">Compte</a>
            <a href="#" class="text-md font-semibold no-underline text-black hover:text-blue-dark ml-2 px-1">Déconnexion</a>
        </div>
        -->
</nav>

@section('content')
@show
</body>
</html>
