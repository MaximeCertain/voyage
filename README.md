Procédure d'installation du projet : 
1/git clone https://github.com/MaximeCertain/voyage 
2/créer la base de données "voyage"  et importer le script "database.sql" provenant de la racine du projet
3/lancer un composer update pour installer les dépendances
4/sur votre navigateur accèder  à l'application en renseignant l'url :
 localhost/voyage/index.php  
 
Pour se connecter en tant qu'administrateur cliquer sur "Connexion administrateur" et renseignez : 
Email : georges.homere@gmail.com
Mot de Passe: password
l'administrateur peut créer/modifier/supprimer les villes et les voyages et peut mettre à jour la température des villes grâce à une API
 
 
Utilisation de l'API
Pour utiliser l'api renseignez sur votre navigateur : 
GET Villes => accèder à la liste des villes =>  localhost/voyage/api.php/villes
GET Continents => accèder à la liste des continents =>  localhost/voyage/api.php/continents
GET mois => accèder à la liste des mois =>  localhost/voyage/api.php/mois
GET types => accèder à la liste des types =>  localhost/voyage/api.php/types