# Images du projet png 

Ce dossier contient les images utilisées par l'application.  
Trois sous-dossiers sont attendus :


## Règles de nommage (pour que `controller.php` retrouve les fichiers)

- Remplacement des espaces par `_`
- Tout en **minuscules**
- **Extension `.png`**

### Joueurs
Format: `nom_prenom.png`  
Exemples: `mbappe_kylian.png`, `ronaldo_cristiano.png`

### Équipes
Format: `nom_du_club.png`  
Exemples: `real_madrid.png`, `paris_saint-germain.png`  
>  Le code attend le dossier **`images/équipe/`** .

### Drapeaux (nationalités)
Format: `nationalite.png`  
Exemples: `francais.png`, `bresilien.png`, `marocain.png`  
> Si le nom exact ne correspond pas, l'app affichera un **fallback**.

## Fichiers de secours (placeholders)
- `images/joueur/default_player.png` (affiché si la photo du joueur manque)
- `images/equipe/default.png` (affiché si le logo d'équipe manque)

## Taille/poids recommandés
- 128–256 px (carré)
- < 30 Ko / image
- Format PNG (ou WebP si tu adaptes le code)

## Droits / licences
- **Flags** : généralement domaine public ->ok.
- **Logos d'équipes / photos de joueurs** : souvent protégés.  

