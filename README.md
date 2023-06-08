# Ping


## Ressources nécessaires

Wamp : https://www.wampserver.com/
Composer: https://getcomposer.org/download/

Tutoriel : https://www.youtube.com/watch?v=VAG_suGmVsk

## Procesus d'installation

 - Télécharger Wamp :  https://www.wampserver.com/
 - Télecharger Composer :  https://getcomposer.org/download/
    choisir la derniere version de php (au moins 8.0.26)
    ```composer update```
    ne pas oublier d'ajouter le chemin de composer dans les variables d'environnement (fermer et re-ouvrir visual Studio code)

- Créer un dossier (par ex "ping") dans dans "C:/wamp64/www/" 
- Allez dans ce dossier et clonez le projet "git init, git clone, etc..."

- Ensuite il faut faire quelque commande
    ```C:\wamp64\www\ping>composer update```
    ```C:\wamp64\www\ping>php artisan migrate ```
    ````yes```

- Il faut s'assurer que le fichier ".env.example"  soit renomé ".env" (il se trouve a la racine du projet)

- Enfin Lancement du projet : ```php artisan serve```

- Aller sur le localhost puis Il faut generer un clé "Generate Key" puis aller sur l'url suivante : http://127.0.0.1:8000/register 

## Après chaque "pull"

- Si modification de la BDD : ```php artisan migrate```
- A faire dans tous les cas : ```composer dump-autoload```
- Lancement du server : ```php artisan serve```


## Problèmes rencontrés

Problèmes possibles :
- "commande php non reconnue" : https://openclassrooms.com/forum/sujet/php-n-est-pas-reconnu-en-tant-que-commande-interne-20117
- "Syntax error or access violation: 1071 La clé est trop longue" : https://www.patrickjunod.dev/blog/corriger-lerreur-syntax-error-or-access-violation-1071-la-cle-est-trop-longue-longueur-maximale-1000
- "'php artisan migrate' Error:Class 'App\Providers\Schema' not found" : https://laracasts.com/discuss/channels/laravel/php-artisan-migrate-errorclass-appprovidersschema-not-found?page=1


 