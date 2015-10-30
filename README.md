Rubis Project
=============

Recommandations Installation
============================

Wamp 2.5 : Apache 2.4.9 / PHP 5.5.12 / MYSQL 5.6.17

N'oubliez pas les variables d'environnements Git et PHP => http://sametmax.com/ajouter-un-chemin-a-la-variable-denvironnement-path-sous-windows/

Installation Projet
===================

C:/wamp/www> git clone https://github.com/KeurbyCandy/rubis-ipssi.git
C:/wamp/www> cd rubis-ipssi
C:/wamp/www/rubis-ipssi> composer update

Commandes Symfony
=================

Créer un bundle : app/console generate:bundle
Créer une entité : app/console doctrine:generate:entity
Générer getters/setters des entités d'un bundle : app/console doctrine:generate:entities Bundle
Mettre à jour la base de donnée : app/console doctrine:schema:update --force

Commandes GIT
=============

git init : Initialisation d'un dépot GIT dans un projet

Lorsque vous commencez a travaillé (toujours effectuer cette action):

git pull origin

Lorsque vous avez finis une partie de code:

git commit -m 'Message avec le commit' (Préférez passez par le commit de PHPStorm/Netbeans, plus simple/clair)
git push origin (Préférez passez par Git Bash)

Normes PSR
==========

http://www.php-fig.org/psr/psr-1/fr/

Classes PHP : ClassPhp
Variables PHP : $camelCase
Constantes PHP : CONSTANTE_PHP
Variables MySQL : under_score

