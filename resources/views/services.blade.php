<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GreenConnect - Services</title>
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
              <div class="mx-auto">
              <div class="mx-auto max-w-2xl lg:text-center ">
                  <h2 class="text-base font-semibold leading-7 text-green-600 ">Green Connect</h2>
                  <p class="mt-2 text-3xl font-bold tracking-tight text-white sm:text-4xl">Nos services</p>
                  <p class="mt-6 text-lg leading-8 text-white ">Chez Green Connect, notre mission est de contribuer activement à la réduction des émissions de carbone et à la promotion d'une énergie plus verte et durable. Ensemble, faisons un pas de plus vers un avenir énergétique responsable</p>
                    
                    <br>
                    <button class=" rounded-2xl bg-green-600 text-lg font-bold text-white">
                     <a href="{{'rdv'}}">Prendre rendez-vous</a>
                    </button>
              
                </div>
              </div>
              <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-4xl">
                  <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-10 lg:max-w-none lg:grid-cols-2 lg:gap-y-16">
                    <div class="relative pl-16">
                      <dt class="text-base font-semibold leading-7 text-white">
                        <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-green-600">
                          <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 16.5V9.75m0 0l3 3m-3-3l-3 3M6.75 19.5a4.5 4.5 0 01-1.41-8.775 5.25 5.25 0 0110.233-2.33 3 3 0 013.758 3.848A3.752 3.752 0 0118 19.5H6.75z" />
                          </svg>
                        </div>
                        Installation de thermostats connectés
                      </dt>
                      <dd class="mt-2 text-base leading-7 text-white"> Nous installons des systèmes de gestion thermique intelligents qui permettent une optimisation en temps réel de la consommation énergétique.</dd>
                    </div>
                    <div class="relative pl-16">
                      <dt class="text-base font-semibold leading-7 text-white">
                        <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-green-600">
                          <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                          </svg>
                        </div>
                        Conseil en transition énergétique
                      </dt>
                      <dd class="mt-2 text-base leading-7 text-white">Nous offrons des services de conseil pour aider nos clients à naviguer dans les nouvelles réglementations et à bénéficier des dispositifs de soutien de l'État.</dd>
                    </div>
                    <div class="relative pl-16">
                      <dt class="text-base font-semibold leading-7 text-white">
                        <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-green-600">
                          <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                          </svg>
                        </div>
                        Solutions sur mesure
                      </dt>
                      <dd class="mt-2 text-base leading-7 text-white">Chaque client est unique, et nous élaborons des solutions personnalisées qui répondent spécifiquement à leurs besoins énergétiques.</dd>
                    </div>
                    <div class="relative pl-16">
                      <dt class="text-base font-semibold leading-7 text-white">
                        <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-green-600">
                          <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M7.864 4.243A7.5 7.5 0 0119.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 004.5 10.5a7.464 7.464 0 01-1.15 3.993m1.989 3.559A11.209 11.209 0 008.25 10.5a3.75 3.75 0 117.5 0c0 .527-.021 1.049-.064 1.565M12 10.5a14.94 14.94 0 01-3.6 9.75m6.633-4.596a18.666 18.666 0 01-2.485 5.33" />
                          </svg>
                        </div>
                        Suivi et maintenance
                      </dt>
                      <dd class="mt-2 text-base leading-7 text-white">Nous assurons un suivi régulier et une maintenance proactive de tous les systèmes installés pour garantir leur efficacité à long terme.</dd>
                     </div>
                    
                  </dl>
                  
                </div>
                
              </div>
              {{-- logo --}}
            <div class=" w-2/5 flex justify-center items-center p-11">
              <div class="relative">
                  <img src="/images/lignes-cycle-feuille.png" class="" alt="logo-GreenConnect" width="80%">
              </div>
          </div>
              </div>
            
              @include('layouts.footer')
                
         
                
            </div>
        </div>
    </div>
   
</body>
</html>