<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GreenConnect - Rendez-Vous</title>
    @vite('resources/css/app.css')
    <style>
        .accueil__container {
            background-image: url("/images/colleagues-working-together-environment-project.jpg");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            width: 100%;
            height: 100vh;
        }

        .bottom-left {
            position: absolute;
            bottom: 10px;
            left: 10px;
        }

        .bottom-right {
            position: absolute;
            bottom: 10px;
            right: 10px;
        }

        .content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100%;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="accueil__container">
        <div class="w-full h-screen flex bg-gray-800/70">
            <div class="content">
                {{-- Section textuelle --}}
                <div style="width: 60%; line-height: 1.3em;" class="py-5">
                    <p class="text-4xl font-bold text-gray-50/70">Rendez-vous confirmé</p>
                    <p class="text-5xl font-semibold text-gray-50"> <span class="text-green-500 text-6xl">Green Connect</span></p>
                </div>

                <div class="mt-8 text-4xl font-bold text-gray-50/70">
                    <p>Pour M. / Mme {{$rdv->Name}} {{$rdv->LastName}},</p>
                    <p>Informations du rendez-vous :</p>
                    <p>Votre numéro de téléphone : {{$rdv->Telephone}}</p>
                    <p>Votre adresse : {{$rdv->Adresse}}</p>
                    <p>Vous recevrez un mail à l'adresse suivante : {{$rdv->Email}}</p>
                </div>

                {{-- Section CEE en bas à gauche --}}
                <div class="bottom-left flex items-center">
                    <h2 class="text-gray-50 font-medium">Dispositif pris en charge par Thermostat Coup de pouce</h2>
                    <img src="/images/logo.png" alt="logo-CEE" width="20%" class="ml-3">
                </div>

                {{-- Bouton retour à l'accueil en bas à droite --}}
                <div class="bottom-right">
                    <a href="/acceuil">
                        <button class="text-4xl font-bold text-gray-50/70 flex items-center">
                            Retour à l'accueil
                            <img src="/images/lignes-cycle-feuille.png" alt="logo-GreenConnect" width="80%" class="ml-3">
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
