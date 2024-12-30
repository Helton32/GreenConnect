<!DOCTYPE html>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GreenConnect - Qui sommes nous</title>
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
                    <p class="text-4xl font-bold text-gray-50/70 " style="line-height: 1.3em;">Qui sommes nous ?</p>
                    <p class="text-4xl font-bold text-gray-50/70 " style="line-height: 1.3em;"><span class="text-green-500 text-5xl">Green Connect</span></p>
                    <section class="texte1"><p class="text-5xl text-justify font-semibold text-gray-50 "style="line-height: 1.3em;"><FONT size="4">
                        Spécialisés dans la transition énergétique, chez Green Connect, nous accompagnons les entreprises et les particuliers dans l'ensemble des changements et obligations liés aux nouvelles mesures visant à sortir des énergies fossiles et à réduire notre impact carbone. Nous nous engageons à offrir des solutions innovantes et personnalisées pour chaque client, en installant des thermostats connectés pour optimiser la gestion de l'énergie et en fournissant des conseils et des services complets pour une transition énergétique réussie.
                      Notre expertise couvre tous les aspects de la transition énergétique, des audits énergétiques détaillés à la mise en œuvre de dispositifs subventionnés par l'État. Que vous soyez un particulier souhaitant améliorer l'efficacité énergétique de votre domicile ou une entreprise cherchant à se conformer aux réglementations environnementales, Green Connect est votre partenaire de confiance. <span class="text-green-500 text-6xl"></span></p></font>
                </div>

                {{-- cee --}}
                <div style="width: 60%; line-height: 3em;" class=" py-5 flex items-center justify-between">
                    <h2 class="text-gray-50 font-medium">Dispositif pris en charge par Thermostat Coup de pouce</h2>
                    <img src="/images/logo.png" alt="logo-CEE" width="20%">
                </div>
                {{-- buttons --}}
                <div style="width: 60%; line-height: 3em;" class=" py-5 flex items-center justify-between gap-4 ">
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
   
</body>
</html>