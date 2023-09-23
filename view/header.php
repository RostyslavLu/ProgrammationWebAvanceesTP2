<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ path }}assets/css/style.css">
    <title>{{ title }}</title>
</head>
<body>
    <nav>
        <a href="{{ path }}">Accueil</a>
        <div class="menu-deroulant">
            <a href="">Voiture</a>
            <div>
                <a href="{{ path }}voiture">Liste des voitures</a>
                <a href="{{ path }}voiture/create">Ajouter une voiture</a>
            </div>
        </div>
        <div class="menu-deroulant">
            <a href="">Client</a>
            <div>
                <a href="{{ path }}client">Liste des clients</a>
                <a href="{{ path }}client/create">Ajouter un client</a>
            </div>
        </div>
    </nav>