<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Green Connect</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .accueil__container {
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
  <div class="accueil__container">
    <div class="mx-auto max-w-2xl text-center">
      <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Green Connect</h2>
      <p class="mt-2 text-lg leading-8 text-gray-600">Installation Thermostats Connecté 1€</p>
    </div>
    <div class="isolate bg-gray-800/70 px-6 py-24 sm:py-32 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <!-- Left: Questionnaire -->
        <div id="questionnaire" class="mx-auto max-w-xl">
          <form action="{{route('rdvstore')}}" method="POST">
            @csrf

<!-- Step 1: Prénom -->
<div class="step hidden" id="step-1">
  <label for="first-name" class="block text-sm font-semibold leading-6 text-gray-50">Prénom</label>
  <input type="text" name="Name" required class="mt-2.5 block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
  <button type="button" class="mt-4 w-full rounded-md bg-green-500 px-3.5 py-2.5 text-center text-sm font-semibold text-gray-50 shadow-sm hover:bg-green-400 next-step">Suivant</button>
</div>

<!-- Step 2: Nom -->
<div class="step hidden" id="step-2">
  <label for="last-name" class="block text-sm font-semibold leading-6 text-gray-50">Nom</label>
  <input type="text" name="LastName" required class="mt-2.5 block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
  <button type="button" class="mt-4 w-full rounded-md bg-green-500 px-3.5 py-2.5 text-center text-sm font-semibold text-gray-50 shadow-sm hover:bg-green-400 next-step">Suivant</button>
</div>

<!-- Step 3: Adresse -->
<div class="step hidden" id="step-3">
  <label for="adresse" class="block text-sm font-semibold leading-6 text-gray-50">Adresse</label>
  <input type="text" name="Adresse" required class="mt-2.5 block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
  <button type="button" class="mt-4 w-full rounded-md bg-green-500 px-3.5 py-2.5 text-center text-sm font-semibold text-gray-50 shadow-sm hover:bg-green-400 next-step">Suivant</button>
</div>

<!-- Step 4: Email -->
<div class="step hidden" id="step-4">
  <label for="email" class="block text-sm font-semibold leading-6 text-gray-50">Email</label>
  <input type="email" name="Email" required class="mt-2.5 block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
  <button type="button" class="mt-4 w-full rounded-md bg-green-500 px-3.5 py-2.5 text-center text-sm font-semibold text-gray-50 shadow-sm hover:bg-green-400 next-step">Suivant</button>
</div>

<!-- Step 5: Numéro de téléphone -->
<div class="step hidden" id="step-5">
  <label for="telephone" class="block text-sm font-semibold leading-6 text-gray-50">Numéro de téléphone</label>
  <input type="tel" name="Telephone" required class="mt-2.5 block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
  <button type="button" class="mt-4 w-full rounded-md bg-green-500 px-3.5 py-2.5 text-center text-sm font-semibold text-gray-50 shadow-sm hover:bg-green-400 next-step">Suivant</button>
</div>

<!-- Step 6: Energie -->
<div class="step hidden" id="step-6">
  <label for="energie" class="block text-sm font-semibold leading-6 text-gray-50">Energie utilisée</label>
  <select name="Energie" required class="mt-2.5 block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
    <option value="" disabled selected>Choisissez une énergie</option>
    <option value="electricite">Électricité</option>
    <option value="gaz">Gaz</option>
  </select>
  <button type="button" class="mt-4 w-full rounded-md bg-green-500 px-3.5 py-2.5 text-center text-sm font-semibold text-gray-50 shadow-sm hover:bg-green-400 next-step">Suivant</button>
</div>

<!-- Step 7: Superficie -->
<div class="step hidden" id="step-7">
  <label for="superficie" class="block text-sm font-semibold leading-6 text-gray-50">Superficie m²</label>
  <input type="text" name="Superficie" required class="mt-2.5 block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
  <button type="button" class="mt-4 w-full rounded-md bg-green-500 px-3.5 py-2.5 text-center text-sm font-semibold text-gray-50 shadow-sm hover:bg-green-400 next-step">Suivant</button>
</div>

<!-- Step 8: Quantité de radiateur -->
<div class="step hidden" id="step-8">
  <label for="quantite" class="block text-sm font-semibold leading-6 text-gray-50">Nombre de radiateur</label>
  <select name="Quantite" required class="mt-2.5 block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
    <option value="" disabled selected>Choisissez une quantité</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
  </select>
  <button type="button" class="mt-4 w-full rounded-md bg-green-500 px-3.5 py-2.5 text-center text-sm font-semibold text-gray-50 shadow-sm hover:bg-green-400 next-step">Suivant</button>
</div>

<!-- Step 9: Date d'installation -->
<div class="step hidden" id="step-9">
  <label for="date" class="block text-sm font-semibold leading-6 text-gray-50">Date d'installation</label>
  <input type="date" name="Date" required class="mt-2.5 block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
  <button type="button" class="mt-4 w-full rounded-md bg-green-500 px-3.5 py-2.5 text-center text-sm font-semibold text-gray-50 shadow-sm hover:bg-green-400 next-step">Suivant</button>
</div>

<!-- Step 10: Heure d'installation -->
<div class="step hidden" id="step-10">
  <label for="heure" class="block text-sm font-semibold leading-6 text-gray-50">Heure d'installation</label>
  <select name="Heure" required class="mt-2.5 block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
    <option value="" disabled selected>Choisissez un créneau</option>
    <option value="8H">8H</option>
    <option value="9h30">9h30</option>
    <option value="11h">11h</option>
    <option value="14h">14h</option>
    <option value="15h30">15:30</option>
    <option value="17h">17h</option>
  </select>
  <button type="button" class="mt-4 w-full rounded-md bg-green-500 px-3.5 py-2.5 text-center text-sm font-semibold text-gray-50 shadow-sm hover:bg-green-400 next-step">Suivant</button>
</div>


            <!-- Step Final -->
            <div class="step hidden" id="step-final">
              <p class="text-center text-lg font-semibold text-gray-50">Terminé</p>
              <button type="submit" class="mt-6 block w-full rounded-md bg-green-500 px-3.5 py-2.5 text-center text-sm font-semibold text-gray-50 shadow-sm hover:bg-green-400">Confirmer votre rendez-vous</button>
            </div>
          </form>
        </div>

        <!-- Right: Appointment Preview -->
        <div id="appointment-preview" class="bg-gray-50 p-6 rounded-lg shadow-md">
          <h3 class="text-lg font-semibold text-gray-900 mb-4">Résumé du Rendez-vous</h3>
          <ul id="preview-list" class="space-y-2">
            <li><strong>Prénom:</strong> <span id="preview-name">-</span></li>
            <li><strong>Nom:</strong> <span id="preview-lastname">-</span></li>
            <li><strong>Email:</strong> <span id="preview-email">-</span></li>
            <li><strong>Adresse:</strong> <span id="preview-address">-</span></li>
            <li><strong>Numéro de téléphone:</strong> <span id="preview-telephone">-</span></li>
            <li><strong>Superficie:</strong> <span id="preview-superficie">-</span></li>
            <li><strong>Energie utilisée:</strong> <span id="preview-energie">-</span></li>
            <li><strong>Quantité de radiateurs:</strong> <span id="preview-quantite">-</span></li>
            <li><strong>Date:</strong> <span id="preview-date">-</span></li>
            <li><strong>Heure:</strong> <span id="preview-heure">-</span></li>
          </ul>
        </div>

      </div>
    </div>
  </div>

  <script>
    const steps = document.querySelectorAll('.step');
    let currentStep = 0;

    function showStep(index) {
      steps.forEach((step, i) => {
        step.classList.toggle('hidden', i !== index);
      });
    }

    document.querySelectorAll('.next-step').forEach(button => {
      button.addEventListener('click', () => {
        if (currentStep < steps.length - 1) {
          currentStep++;
          showStep(currentStep);
          updatePreview();
        }
      });
    });

    function updatePreview() {
      document.getElementById('preview-name').textContent = document.querySelector('input[name="Name"]').value || '-';
      document.getElementById('preview-lastname').textContent = document.querySelector('input[name="LastName"]').value || '-';
      document.getElementById('preview-email').textContent = document.querySelector('input[name="Email"]').value || '-';
      document.getElementById('preview-telephone').textContent = document.querySelector('input[name="Telephone"]').value || '-';
      document.getElementById('preview-address').textContent = document.querySelector('input[name="Adresse"]').value || '-';
      document.getElementById('preview-superficie').textContent = document.querySelector('input[name="Superficie"]').value || '-';
      document.getElementById('preview-energie').textContent = document.querySelector('select[name="Energie"]').value || '-';
      document.getElementById('preview-quantite').textContent = document.querySelector('select[name="Quantite"]').value || '-';
      document.getElementById('preview-date').textContent = document.querySelector('input[name="Date"]').value || '-';
      document.getElementById('preview-heure').textContent = document.querySelector('select[name="Heure"]').value || '-';
    }

    showStep(currentStep);
  </script>
</body>
</html>
