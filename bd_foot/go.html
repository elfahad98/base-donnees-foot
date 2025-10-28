<!--
=========================================================
Projet : Base de données - Top Joueurs de Football
Auteur : COMBO El-Fahad
Université de Caen - 2024
=========================================================
--->

<!DOCTYPE html>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Joueurs de Football</title>
    <link rel="stylesheet" href="gostyle.css">
    <link type="text/css" media="screen" rel="stylesheet" href="<?php echo $css; ?>" />
</head>

<body>

    <!-- Barre de navigation -->
    <header class="navbar">
        <h1>Top Joueurs de Football</h1>
        <nav>
            <ul>
                <li><a href="https://dev-combo211.users.info.unicaen.fr/BD_Foot/controller.php">Accueil</a></li>
                <li><a href="#Stats joueurs">Stats Joueurs</a></li>
                <li><a href="#search-player">Ajouter un joueur</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- Section de présentation -->
    <section id="home" class="intro-section">
        <h2>Bienvenue dans la base de données des Top Joueurs du Football</h2>
        <p>Découvrez les meilleurs joueurs de football avec leurs statistiques détaillées</p>
    </section>

    <!-- Conteneur pour la disposition en deux colonnes -->
    <div class="main-content">
        <!-- Section d'ajout de joueur -->
        <section id="add-player" class="add-container"> 
            <h2>Ajouter un joueur</h2>
            <form class="add-form" action="controller.php" method="POST">
                <input type="hidden" name="action" value="insertion">
                <!-- Les champs pour ajoutez un joueur -->

                <!-- NOM ET PRENOM -->
                <div class="name-container">
                    <div class="field">
                        <label for="nom">Nom</label>
                        <input type="text" id="nom" name="nom" placeholder="Nom" required pattern="[A-Za-zÀ-ÖØ-öø-ÿ\s-]+" title="Le nom ne peut contenir que des lettres, espaces et tirets">
                    </div>
                    <div class="field">
                        <label for="prenom">Prénom</label>
                        <input type="text" id="prenom" name="prenom" placeholder="Prénom" pattern="[A-Za-zÀ-ÖØ-öø-ÿ\s-]+" title="Le Prénom ne peut contenir que des lettres, espaces et tirets" required>
                    </div>
                </div>
                
                <!-- Genre -->
				<label>Genre </label>
				<div class="gender-options">
					<input type="radio" id="male" name="genre" value="Homme" required>
					<label for="male">Homme</label>
					<input type="radio" id="female" name="genre" value="Femme">
					<label for="female">Femme</label>
				</div>
					
				<!-- Âge -->
				<label for="age">Age </label>
				<input type="number" id="age" name="age" min="1" max="99" placeholder=" 25" required>
				
				
				<!-- Nationalité -->
				<label for="nationalite">Nationalité </label>
				<select id="nationalite" name="nationalite"  required>
					<option value="" disabled selected>Choisir une option</option>
					<option value="Palestinien">Palestinien</option>
					<option value="Anglais">Anglais</option>
					<option value="Americain">Americain</option>
					<option value="Français">Français</option>
					<option value="Marocain">Marocain</option>
					<option value="Algérien">Algérien</option>
					<option value="portugais">Portugais</option>
					<option value="Espagnol">Espagnol</option>
					<option value="italien">Italien</option>
					<option value="Comorien">Comorien</option>
					<option value="Camrounais">Camrounais</option>
					<option value="Brésilien">Brésilien</option>
					<option value="Syrien">Syrien</option>
				</select>
				
				
				
				 <!-- Taille -->
				<label for="size">Taille (cm) </label>
				<div class="size-input">
					<input type="number" id="taille" name="taille" min="50" max="250" value="170">
				</div>

				<!-- Poids -->
				<label for="weight">Poids (kg) </label>
				<div class="weight-input">
					<input type="number" id="poids" name="poids" min="20" max="200" value="70">
				</div>
				
				
						
				<!-- Position -->
                <label for="position">Position</label>
                <select id="position" name="position" required>
                    <option value="" disabled selected>Choisir une option</option>
                    <option value="Gardien">Gardien</option>
                    <option value="Défenseur">Défenseur</option>
                    <option value="Milieu">Milieu</option>
                    <option value="Attaquant">Attaquant</option>
                </select>
                
                <!-- Équipe -->
                <label for="equipe">Équipe</label>
                <select id="equipe" name="equipe" required>
                    <option value="" disabled selected>Choisir une option</option>
                    <option value="Barcelone">Barcelone</option>
                    <option value="Bayern Munich">Bayern Munich</option>
                    <option value="Chelsea">Chelsea FC</option>
                    <option value="Juventus">Juventus FC</option>
                    <option value="Liverpool">Liverpool FC</option>
                    <option value="Lyon">Olympique Lyonnais</option>
                    <option value="Marseille">Olympique de Marseille</option>
                    <option value="Manchester City">Manchester City</option>
                    <option value="Real Madrid">Real Madrid</option>
                    <option value="Paris Saint-Germain">Paris Saint-Germain</option>
                </select>
                <div class="buttons">
                    <button type="submit" class="submit-btn">+ Ajouter un joueur</button>
                </div>
            </form>
        </section>
    
        <!-- Table des joueurs -->
        <div class="content-wrapper">
            <section id="players-table" class="players-table">
                <table>
                    <thead>
                        <tr>
							<th></th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Age</th>
                            <th>Position</th>
                            <th>Équipe</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php echo $tableau; ?> 
                    </tbody>
                </table>
                <!-- Liens de pagination -->
				<?php echo $pagination; ?>
            </section>
            
        </div>
    
        <!-- Section recherche joueur -->
        <section id="search-player" class="search-container">
            <h2>Recherche de Joueur</h2>
            <form class="search-form" action="controller.php" method="POST">
                <input type="hidden" name="action" value="filtrage">
                <!-- Les champs pour rechercher un joueur -->
                
                <!-- NOM ET PRENOM -->
                <div class="name-container">
                    <div class="field">
                        <label for="first-name">Nom</label>
                        <input type="text" id="first-name" name="nom" placeholder="Nom">
                    </div>
                    <div class="field">
                        <label for="last-name">Prénom</label>
                        <input type="text" id="last-name" name="prenom" placeholder="Prénom">
                    </div>
                </div>
                
                
                <!-- Genre -->
				<label>Genre </label>
				<div class="gender-options">
					<input type="radio" id="male" name="genre" value="Homme" >
					<label for="male">Homme</label>
					<input type="radio" id="female" name="genre" value="Femme">
					<label for="female">Femme</label>
				</div>
					
                
                <!-- Position -->

                <label for="position-search">Position</label>
                <select id="position-search" name="position">
                    <option value="" disabled selected>Choisir une option</option>
                    <option value="Gardien">Gardien</option>
                    <option value="Défenseur">Défenseur</option>
                    <option value="Milieu">Milieu</option>
                    <option value="Attaquant">Attaquant</option>
                </select>
                
                
				<!-- Equipe -->
   
                <label for="team-search">Équipe</label>
                <select id="team-search" name="equipe">
                    <option value="" disabled selected>Choisir une option</option>
					<option value="Barcelone">Barcelone</option>
                    <option value="Bayern Munich">Bayern Munich</option>
                    <option value="Chelsea">Chelsea FC</option>
                    <option value="Juventus">Juventus FC</option>
                    <option value="Liverpool">Liverpool FC</option>
                    <option value="Lyon">Olympique Lyonnais</option>
                    <option value="Marseille">Olympique de Marseille</option>
                    <option value="Manchester City">Manchester City</option>
                    <option value="Real Madrid">Real Madrid</option>
                    <option value="Paris Saint-Germain">Paris Saint-Germain</option>
                </select>
                
                <!-- Button -->
                <div class="buttons">
                    <button type="submit" class="search-btn">Rechercher</button>
                </div>
                
            </form>
        </section>
    </div>
    
  

    <section id="Stats joueurs" class="intro-section">
        <h2>Statistiques Détaillées</h2>
        <p>Cliquez sur une photo pour découvrir les détails des performances des joueurs.</p>
    </section>
    
    <div class="test">
    
		<!-- Section pour afficher les détails d'un joueur -->
		<section id="player-details" class="player-details-section">
			<?php echo $details; ?>
		</section>

		<div class="message-container">
			<?php if (!empty($message)) echo $message; ?>
		</div>
    </div>



	<!-- Section de contact -->
    <section id="contact" class="contact-section">
        <h2>Contactez-nous</h2>
        <p>Pour plus d'informations, envoyez-nous un email à <a href="mailto:el-fahad.combo@etu.unicaen.fr">el-fahad.combo@etu.unicaen.fr</a>.</p>
    </section>


</body>
</html>

