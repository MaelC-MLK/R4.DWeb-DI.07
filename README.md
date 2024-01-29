# TP Symfony

## Besoins
[Docker Desktop](https://www.docker.com/products/docker-desktop/) doit être installé.

## Mise en route
Commencez par effectuer une copie de ce repository sur votre compte GitHub en cliquant sur le bouton "Fork" en haut à droite de cette page. Vous allez ensuite cloner votre "Fork" en local afin de travaillez dessus. Ouvrez un terminal sur votre machine, positionnez-vous dans un répertoire de travail (par exemple ~/Desktop/work), et faites un clone. Pour rappel, un clone s'effectue en cliquant sur le bouton déroulant "Code", en copiant l'URL du repository (préférez HTTPS au lieu de SSH), et en lnçant la commande `git clone ` suivie de cette URL. Attention à bien copier votre Fork et non le repository original!

Si c'est la première séance, passez directement au TP1 en passant par le lien un peu plus bas. Si vous avez déjà installé votre application Symfony, suivez les instructions suivantes pour lancer votre application.

## Versionner votre travail
Il est très important de versionner vos fichiers régulièrement, afin de pouvoir facilement sauvegarder les différents versions de votre projet. En pratique, cela se traduit par faire des "commits" réguliers grâce à Git, en faisant des "push" sur votre repository GitHub.

**Pensez à commit la version de votre projet au moins une fois en fin de séance!**

Pour faire un commit:
S'il y a besoin, commencez par mettre à jour votre Fork avec les derniers commits du repository de base. Pour cela, allez sur votre repository sur GitHub, puis faites "Sync Fork" -> "Update branch".

Ensuite exécutez ces commandes:
```
# Positionnez-vous dans le répertoire du projet si ce n'est pas déjà fait
cd R4.DWeb-DI.07/

# Faites le commit (vous pouvez personnaliser le message entre guillemets)
git add .
git commit -m "Nouvelle version du projet" 

# Mettez à jour votre repository local avec la dernière version du repository distant (équivalent d'un )
git fetch
git rebase

# Mettez à jour le repository sur GitHub
git push -u
```

## Lancer l'application
Vérifiez que Docker Desktop est lancé en cherchant son icône dans la barre de tâche. Si vous ne la trouvez pas, ouvrez l'application et attendez que tout soit opérationnel.

Lancer l'environnement Docker : installer l'extension "Docker" pour VS Code, faites un clic droit sur le fichier docker-compose.yml, puis "Compose Up". Vous pouvez aussi ouvrir un terminal dans le dossier du projet, et faire un `docker-compose up -d`.

Installer les dépendances nécessaires : ouvrez un terminal dans le conteneur "tp-symfony-php" à partir de VS Code (Icône Docker à gauche, clic droit sur le conteneur, puis "Attach Shell") et faites un `composer install`.

Vérifiez que vous accédez à votre application: [http://localhost:8787](http://localhost:8787).

## Liens
[TP1 : Introduction à Symfony](https://docs.google.com/document/d/1p57bF8mDKqiQ3j7rnpXmQ3zNeGixdrL8mB9-7ei4xPw/edit?usp=sharing)

[TP2 : Doctrine](https://docs.google.com/document/d/1Og8lNe1Afz20ExA_TRfgnvA7vMFhnnEaoDwHnVdpzNk/edit?usp=sharing)

[TP3 : Doctrine #2](https://docs.google.com/document/d/1uHgIVIQJMGPuTIubSbYgccfyh6NRQjEE3leYa9K2bLg/edit?usp=sharing)

[TP4 : EasyAdmin // API Platform](https://docs.google.com/document/d/1RM3viMXUPBVPOztbH1l2mXn8FEh7Xzj-Su74d8yriqg/edit?usp=sharing)
