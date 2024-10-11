<!DOCTYPE html>
<html>
<head>
    <title>Confirmation de rendez-vous</title>
</head>
<body>
    <h1>Confirmation de votre rendez-vous</h1>
    <p>Bonjour ,</p>
    <p>Votre rendez-vous a été confirmé pour le {{ $rdv->Date }} à {{ $rdv->Heure }}.</p>
    <p>Adresse: {{ $rdv->Adresse }}</p>
    <p>Merci d'avoir choisi Green Connect !</p>
</body>
</html>
