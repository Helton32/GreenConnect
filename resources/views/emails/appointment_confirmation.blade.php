<!DOCTYPE html>
<html>
<head>
    <title>Confirmation de votre rendez-vous</title>
</head>
<body>
    <h1>Bonjour {{ $data['Name'] }},</h1>
    <p>Votre rendez-vous a été confirmé avec succès.</p>
    <p><strong>Détails :</strong></p>
    <ul>
        <li>Nom : {{ $data['LastName'] }}</li>
        <li>Adresse : {{ $data['Adresse'] }}</li>
        <li>Superficie : {{ $data['Superficie'] }} m²</li>
        <li>Énergie : {{ $data['Energie'] }}</li>
        <li>Quantité : {{ $data['Quantite'] }}</li>
        <li>Date d'installation : {{ $data['Date'] }}</li>
        <li>Heure d'installation : {{ $data['Heure'] }}</li>
    </ul>
    <p>Merci de faire confiance à notre service.</p>
</body>
</html>
