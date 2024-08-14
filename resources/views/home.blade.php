<!DOCTYPE html>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GreenConnect - Accueil</title>
    @vite('resources/css/app.css')
    <style>
        .accueil__container{
            background-image: url("/images/colleagues-working-together-environment-project.jpg");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            width: 100%;
            height: 100vh;
        }
    </style>
</head>
<body>
    <div  class="accueil__container">
        <div class="w-full h-screen flex bg-gray-800/70">
            <div class="w-3/5 h-screen flex flex-col justify-center items-center">
                {{-- text --}}
                <div style="width: 60%; line-height: 5em;" class=" py-5 ">
                    <p class="text-4xl font-bold text-gray-50/70 " style="line-height: 1.3em;">Bonjour</p>
                    <p class="text-4xl font-bold text-gray-50/70 " style="line-height: 1.3em;">avec <span class="text-green-500 text-5xl">Green Connect</span></p>
                    <p class="text-5xl text-justify font-semibold text-gray-50 " style="line-height: 1.3em;">Profitez de l'installation d'un thermostat connecté pour <span class="text-green-500 text-6xl"> 1€</span></p>
                </div>
                {{-- cee --}}
                <div style="width: 60%; line-height: 3em;" class=" py-5 flex items-center justify-between">
                    <h2 class="text-gray-50 font-medium">Dispositif pris en charge par Thermostat Coup de pouce</h2>
                    <img src="/images/logo.png" alt="logo-CEE" width="20%">
                </div>
                {{-- buttons --}}
                <div style="width: 60%; line-height: 3em;" class=" py-5 flex items-center justify-between gap-3 ">
                    <a href="rdv" class="py-5 px-20 text-xl text-gray-50 font-medium rounded-lg bg-green-500 hover:bg-green-400 border-2 border-green-500 hover:border-green-400">Prendre rendez-vous</a>
                    <a href="services" class="py-5 px-20 text-xl text-gray-700 font-medium  rounded-lg bg-white/70 hover:bg-green-400 border-2 border-green-500 hover:border-green-400">Nos services</a>
                </div>
            </div>
            {{-- logo --}}
            <div class=" w-2/5 flex justify-center items-center p-11">
                <div class="relative">
                    <img src="/images/lignes-cycle-feuille.png" class="" alt="logo-GreenConnect" width="80%">
                </div>
            </div>
        </div>
    </div>
@include('layouts.footer')
</body>
</html>