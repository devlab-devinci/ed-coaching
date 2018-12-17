* php 7.2.1
* bdd MySQL
* node v10.13.0
* yarn 1.9.4

# Guide d'installation

**ATTENTION:** Ce repository est à pull dans le dossier *wp-content/themes* d'un projet Wordpress configuré au préalable (WordPress 4.9.9).



### Installation après récupération des fichiers

1. Installation des composants nodeJS avec Yarn
<pre>yarn install</pre>

2. Précompilation des assets avec Gulp
<pre>gulp</pre>

3. Sélection du thème depuis le back-office Wordpress

Après activation du thème, la homepage du Wordpress doit afficher une page entièrement dénuée de contenu et de style.


### Commandes utilisables après installation

* Compilation des fichiers JS uniquement
<pre>gulp scripts</pre>

* Compilation des fichiers SCSS uniquement
<pre>gulp scss</pre>

* Suppression des fichiers compilés
<pre>gulp clean</pre>

* Activation du stream pour compilation continue
<pre>gulp watch</pre>



# Informations relatives au Wordpress

Ce thème est entièrement détaché de son parent *twentyseventeen* bien que source de son arborescence.
