# Base de données – Top joueurs de football (PHP + PostgreSQL)

Application web simple pour **gérer une base de joueurs** : ajout, filtrage, détails, suppression, pagination.

- **Démo (hébergée Univ.)** : https://dev-****.users.info.unicaen.fr/BD_Foot/controller.php  
- **Stack** : PHP • PostgreSQL • HTML/CSS  
- **Licence** : MIT

---

## Fonctionnalités

- Ajout d’un joueur (formulaire).
- Recherche/filtrage par **nom, prénom, genre, position, équipe** (combinaisons possibles).
- Table **paginée** avec conservation des filtres.
- Fiche **détaillée** (photo, drapeau, infos) + **suppression**.
- Messages de **feedback** (succès/erreur).

---

## Structure du projet

base-donnees-foot/
├─ public/
│ ├─ controller.php 
│ ├─ go.html
│ ├─ gostyle.css 
│ ├─ images/
│ │ ├─ flags/ # drapeaux (.png)
│ │ ├─ équipe/ # logos d’équipe (.png)
│ │ └─ joueur/ # photos/avatars joueurs (.png)
├─ sql/
│ └─ table.sql # création/jeu d’exemple de la table
├─ .gitignore
├─ LICENSE
└─ README.md


---

## Installation locale (rapide)

1. **Prérequis** : PHP et PostgreSQL .
2. **Base** : créez une base (ex. `foot`) puis exécutez `sql/table.sql`.
3. **Connexion PostgreSQL** : créez **`public/pgsql.php`** (ne pas versionner) :
   ```php
   <?php
   // public/pgsql.php
   $conn = pg_connect("host=localhost dbname=foot user=<user> password=<password>");
   if (!$conn) { die('Connexion PostgreSQL échouée : ' . pg_last_error()); }


php -S localhost:8000 -t public


## Utilisation

Ajouter : remplir le formulaire → + Ajouter un joueur.
Rechercher : renseigner un ou plusieurs critères → Rechercher.
Détails : cliquer sur la photo dans la table.
Supprimer : bouton dans la fiche détaillée.
