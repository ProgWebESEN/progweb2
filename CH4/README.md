# CRUD table livre (Chapitre 4)

Dans cet exercice, nous souhaitons implémenter le CRUD (Create, Read, Update, Delete) relatif à la table "livre" de la base de données "biblio_esen" La table possède les colonnes suivantes : id_livre (identifiant unique pour chaque livre), titre (titre du livre), annee_appatition (année d'appatition du livre).

## Téléchargement et configuration

1. Téléchargez le projet sur votre machine.

2. Décompressez le dossier téléchargé.

3. Déplacez le dossier décompressé dans votre répertoire de travail (dossier `htdocs`) et changez son nom pour `biblio_esen`.

## Configuration de la base de données

1. Dans votre navigateur, ouvrez l'adresse `127.0.0.1/phpmyadmin` et créez une base de données avec le nom `biblio_esen`.

2. Par la suite, dans le menu en haut, cliquez sur l'option `Importer`, puis dans **Fichier à importer** choisissez le fichier `biblio_esen.sql` (déjà inlut dans ce projet). Cliquez enfin sur le boutton **Importer**.

![Importer DB](https://www.nassimbahri.ovh/docs/php/importer_db_biblio.png)

3. Ouvrez l'adresse `127.0.0.1/biblio_esen` (ou `localhost/biblio_esen`) dans votre navigateur.

<ins>PS : N'oubliez pas de démarrer Apache et MySQL.</ins>
## License

Ce projet est sous licence [Apache 2.0](https://choosealicense.com/licenses/apache-2.0/). 