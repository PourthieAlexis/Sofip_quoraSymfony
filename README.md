# QuoraSymfony

## Description

Ce projet est une plateforme de questions et réponses développée avec Symfony. Les utilisateurs peuvent poser des questions, répondre à des questions existantes, voter pour les meilleures réponses et interagir dans une communauté axée sur le partage de connaissances.

## Fonctionnalités du Projet

### Page de Présentation des Questions

- Affiche une liste des questions posées par les utilisateurs.
- Permet aux utilisateurs de filtrer les questions par catégorie ou par popularité.

### Page de Détails des Questions

- Affiche les détails d'une question spécifique, y compris son contenu, les réponses associées et les votes.

### Page de Création des Questions

- Permet aux utilisateurs de poser de nouvelles questions en fournissant un titre, une catégorie et une description.

### Système de Commentaires / Réponses

- Les utilisateurs peuvent répondre aux questions posées par d'autres utilisateurs.
- Les réponses sont soumises à une validation avant d'être publiées pour maintenir la qualité du contenu.

### Système de Vote pour la Pertinence des Réponses

- Les utilisateurs peuvent voter pour les réponses qu'ils estiment être les plus pertinentes.
- Les réponses sont classées en fonction du nombre de votes qu'elles reçoivent, permettant ainsi de mettre en avant les meilleures réponses.

### Système d'Authentification

- Les utilisateurs peuvent s'inscrire et se connecter pour accéder à l'ensemble des fonctionnalités de la plateforme.
- Les informations personnelles des utilisateurs sont sécurisées et protégées.

### Page de Profil avec Photo

- Chaque utilisateur dispose d'une page de profil personnalisée.
- Les utilisateurs peuvent ajouter une photo de profil pour personnaliser leur compte.

## Installation

1. Assurez-vous d'avoir Symfony installé sur votre système.
2. Clonez ce dépôt en utilisant la commande suivante :

`git clone https://github.com/PourthieAlexis/Sofip_quoraSymfony.git`

3. Accédez au répertoire du projet :
   `cd Sofip_quoraSymfony`
4. Installez les dépendances en exécutant :
   `composer install`

5. Configurez votre base de données dans le fichier `.env`.

## Utilisation

1. Démarrez le serveur Symfony en utilisant la commande :

`symfony server:start`

2. Accédez à l'adresse indiquée dans votre navigateur pour commencer à utiliser l'application.

## Auteur

- Alexis Pourthié
