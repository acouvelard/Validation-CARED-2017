READ ME :

Mise en place d'une vitrine pour exposer des instruments de musique :

Page d'accueil pour présenter le site
Page avec photo des instruments
Page pour laisser un message à l'administrateur
Page accessible à l'administrateur pour lire les messages


Installer le packet pour les formulaires :
./composer.phar require "laravelcollective/html":"^5.3.0"


Les connextions utilisées :
- Utilisateur lambda :
  luffy
  Luffy@pirate.com
  mdp : 000000

- Admin :
  admin
  admin@mail.com
  mdp : 123456

- Usage de FlexBox
- Usage de Jquery, mais je ne savais pas quoi faire avec.
- Utilisation d'une base de donnée Eloquent pour :
  - enregistrer les instruments avec nom, image et type (corde, vent ou percution)
  - enregistrer les utilisateurs
  - enregistrer les messages laissés pas les utilisateurs
- Ajout d'un footer via un template
