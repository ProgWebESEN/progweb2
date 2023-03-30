# Les transactions PDO (Chapitre 4)

Nous souhaitons créer un système de gestion bancaire pour une banque locale. Nous disposons donc d'une table nommée "compte" contenant les informations sur les comptes bancaires des clients. La table possède les colonnes suivantes : id (identifiant unique pour chaque compte), nom (nom du titulaire du compte), solde (solde actuel du compte).

Nous voulons ensuite créer une page PHP qui permettra de transférer de l'argent d'un compte à un autre.

## Téléchargement et configuration

1. Téléchargez le projet sur votre machine.

2. Décompressez le dossier téléchargé.

3. Déplacez le dossier décompressé dans votre répertoire de travail (dossier `htdocs`) et changez son nom pour `banque`.

## Configuration de la base de données

1. Dans votre navigateur, ouvrez l'adresse `127.0.0.1/phpmyadmin` et créez une base de données avec le nom `banque`.

2. Par la suite, dans le menu en haut, cliquez sur l'option `Importer`, puis dans **Fichier à importer** choisissez le fichier `banque.sql` (déjà inlut dans ce projet). Cliquez enfin sur le boutton **Importer**.

![Importer DB](https://www.nassimbahri.ovh/docs/php/importer_db_banque.png)

3. Ouvrez l'adresse `127.0.0.1/banque` (ou `localhost/banque`) dans votre navigateur.

<ins>PS : N'oubliez pas de démarrer Apache et MySQL.</ins>
## License

Ce projet est sous licence [Apache 2.0](https://choosealicense.com/licenses/apache-2.0/). 