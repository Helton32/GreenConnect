
<!DOCTYPE html>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GreenConnect - Rendez-Vous</title>
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
                    <p class="text-4xl font-bold text-gray-50/70 " style="line-height: 1.3em;">Rendez vous confirmé 

                    <p class="text-4xl font-bold text-gray-50/70 " style="line-height: 1.3em;"><span class="text-green-500 text-5xl">Green Connect</span></p>
                    <p class="text-5xl text-justify font-semibold text-gray-50 "style="line-height: 1.3em;"><FONT size="5">

                       <span class="text-green-500 text-6xl"></span></p></font>
                </div>
                <br><br><br><br><br><br><br>
                <div class="text-4xl font-bold text-gray-50/70 flex-auto  ">
                    
                    <p>Pour Mr , Mme {{$rdv->Name}} , {{$rdv->LastName}}</p>


                    Information du rendez vous :
                        

                    <p> Votre numero de telephone : {{$rdv->Telephone}}</p>

                    <p> Votre adresse : {{$rdv->Adresse}}</p>
                
                    <p>Vous recevrez un mail a l'adresse suivante : {{$rdv->Email}}</p>
                </div>
               
             

                <div class="grid grid-cols-2">
                {{-- cee --}}
                <div style="width: 60%; line-height: 3em;" class=" px-3 py-5 flex items-center justify-start">
                    <h2 class="text-gray-50 font-medium">Dispositif pris en charge par Thermostat Coup de pouce</h2>
                    <img src="/images/logo.png" alt="logo-CEE" width="20%">
                </div>
                
            {{-- logo --}}
            <section class="flex flex-auto">            
                <div class=" w-2/5 flex flex-right  items-end px-11 p-11 ">
                <div class="relative">
                    <button class="text-4xl font-bold text-gray-50/70 " style="line-height: 1.3em;"><a href="/acceuil">Retour a l'acceuil<img src="/images/lignes-cycle-feuille.png" class="" alt="logo-GreenConnect" width="80%">
                    </a></button></p>
                </section>

                </div>
                </div>
            </div>
        </div>
    </div>
   
</body>
</html>