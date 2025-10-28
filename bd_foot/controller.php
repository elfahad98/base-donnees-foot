<?php
session_start();
include("pgsql.php"); // Connexion à PostgreSQL

// --- DÉFINITION DES VARIABLES ---

$css = "gostyle.css";
$squelette = "go.html";
$table = 'joueurs';
$tableau = "";
$message = "";
$details = '<div class="details-box"> Aucun détail à afficher : <br> Cliquez sur la photo d\'un joueur pour voir les détails... </div>';
$rowsPerPage = 7; // Nombre de lignes par page

// --- GESTION DE L'ACTION ---
$action = isset($_POST['action']) ? $_POST['action'] : (isset($_GET['action']) ? $_GET['action'] : "accueil");

// --- SWITCH CASE ---
switch ($action) {

    case "insertion":
        // --- CASE INSERTION ---
        
        $nom = pg_escape_string($_POST['nom']);
        $prenom = pg_escape_string($_POST['prenom']);
        $genre = pg_escape_string($_POST['genre']);
        $age = isset($_POST['age']) ? intval($_POST['age']) : 'NULL';
        $taille = isset($_POST['taille']) ? floatval($_POST['taille']) : 'NULL';
        $poids = isset($_POST['poids']) ? floatval($_POST['poids']) : 'NULL';
        $nationalite = !empty($_POST['nationalite']) ? "'" . pg_escape_string($_POST['nationalite']) . "'" : 'NULL';
        $position = pg_escape_string($_POST['position']);
        $equipe = pg_escape_string($_POST['equipe']);

        $requete = "INSERT INTO $table (nom, prenom, genre, age, taille, poids, nationalite, position, equipe)
                    VALUES ('$nom', '$prenom', '$genre', $age, $taille, $poids, $nationalite, '$position', '$equipe')";
        
        if (pg_query($requete)) {
            $_SESSION['message'] = "<div class='message-container success'>Le joueur a été ajouté avec succès.</div>";
            
            // Aller directement a la page du joueur ajouter
            $totalRowsQuery = "SELECT COUNT(*) FROM $table";
            $totalRowsResult = pg_query($totalRowsQuery);
            $totalRows = pg_fetch_result($totalRowsResult, 0, 0);
            $page = ceil($totalRows / $rowsPerPage);
            header("Location: ?page=$page#player-details");
            exit;
        } else {
            $_SESSION['message'] = "<div class='message-container error'>Erreur d'insertion : " . pg_last_error() . "</div>";
        }
        
        $requete = "SELECT * FROM $table ORDER BY id";
        break;

    case "filtrage":
        // --- CASE FILTRAGE ---
        $conditions = [];
        if (!empty($_POST['nom'])) {
            $conditions[] = "nom ILIKE '%" . pg_escape_string($_POST['nom']) . "%'";
        }
        if (!empty($_POST['prenom'])) {
            $conditions[] = "prenom ILIKE '%" . pg_escape_string($_POST['prenom']) . "%'";
        }
        if (!empty($_POST['position'])) {
            $conditions[] = "position = '" . pg_escape_string($_POST['position']) . "'";
        }
        if (!empty($_POST['equipe'])) {
            $conditions[] = "equipe = '" . pg_escape_string($_POST['equipe']) . "'";
        }
        if (!empty($_POST['genre'])) {
            $conditions[] = "genre = '" . pg_escape_string($_POST['genre']) . "'";
        }

        $whereClause = count($conditions) > 0 ? "WHERE " . implode(" AND ", $conditions) : "";
        $requete = "SELECT * FROM $table $whereClause ORDER BY id";
        break;

    case "suppression":
        // --- CASE SUPPRESSION ---
        $id = intval($_POST['id']);
        $requete = "DELETE FROM $table WHERE id = $id";
        if (pg_query($requete)) {
            $_SESSION['message'] = "<div class='message-container success'>Le joueur a été supprimé avec succès.</div>";
        } else {
            $_SESSION['message'] = "<div class='message-container error'>Erreur lors de la suppression : " . pg_last_error() . "</div>";
        }
        $requete = "SELECT * FROM $table ORDER BY id";
        break;

    case "details":
        // --- CASE DETAILS ---
        $id = intval($_GET['id']);
        $requete = "SELECT * FROM $table WHERE id = $id";
        $resultat = pg_query($requete);

        if ($resultat && pg_num_rows($resultat) > 0) {
            $joueur = pg_fetch_assoc($resultat);

            $photo_path = "images/joueur/" . strtolower(str_replace(' ', '_', $joueur['nom'] . "_" . $joueur['prenom'])) . ".png";
            if (!file_exists($photo_path)) {
                $photo_path = "images/joueur/default_player.png";
            }

            $flag_path = "images/flags/" . strtolower(str_replace(' ', '_', $joueur['nationalite'])) . ".png";
            $nationality_display = file_exists($flag_path)
                ? "{$joueur['nationalite']} <img src='{$flag_path}' alt='{$joueur['nationalite']}' class='flag-icon' width='24' height='16'>"
                : $joueur['nationalite'];

            $details = "
                <div class='player-details-container'>
                    <div class='player-card-container'>
                        <div class='player-card-left'>
                            <img src='{$photo_path}' alt='{$joueur['nom']} {$joueur['prenom']}' class='player-photo'>
                            <h3>{$joueur['prenom']} {$joueur['nom']}</h3>
                            <p><strong>Nationalité :</strong> {$nationality_display}</p>
                            <p><strong>Position :</strong> {$joueur['position']}</p>
                        </div>
                        <div class='player-card-right'>
                            <p><strong>Genre :</strong> {$joueur['genre']}</p>
                            <p><strong>Âge :</strong> {$joueur['age']}</p>
                            <p><strong>Taille :</strong> {$joueur['taille']} cm</p>
                            <p><strong>Poids :</strong> {$joueur['poids']} kg</p>
                            <p><strong>Équipe :</strong> {$joueur['equipe']}</p>
                        </div>
                    </div>
                    <form method='POST' action='' class='delete-form'>
                        <input type='hidden' name='id' value='{$id}'>
                        <input type='hidden' name='action' value='suppression'>
                        <button type='submit' class='delete-btn' onclick='return confirm(\"Voulez-vous vraiment supprimer ce joueur ?\");'>
                            Supprimer le joueur
                        </button>
                    </form>
                </div>";
        } else {
            $details = "<p>Aucun détail trouvé pour ce joueur.</p>";
        }
        break;

    case "getDetails":
        // --- CASE GETDETAILS ---
        $id = intval($_POST['id']);
        $requete = "SELECT * FROM $table WHERE id = $id";
        $resultat = pg_query($requete);

        if ($resultat && pg_num_rows($resultat) > 0) {
            $joueur = pg_fetch_assoc($resultat);
            echo json_encode($joueur);
        } else {
            echo json_encode(["error" => "Aucun détail trouvé."]);
        }
        exit;

    case "accueil":
    default:
        // --- CASE ACCUEIL ---
        $requete = "SELECT * FROM $table ORDER BY id";
        break;
}



// --- SECTION PAGINATION ---
$filtres = [
    'nom' => isset($_POST['nom']) ? $_POST['nom'] : (isset($_GET['nom']) ? $_GET['nom'] : ""),
    'prenom' => isset($_POST['prenom']) ? $_POST['prenom'] : (isset($_GET['prenom']) ? $_GET['prenom'] : ""),
    'position' => isset($_POST['position']) ? $_POST['position'] : (isset($_GET['position']) ? $_GET['position'] : ""),
    'equipe' => isset($_POST['equipe']) ? $_POST['equipe'] : (isset($_GET['equipe']) ? $_GET['equipe'] : ""),
    'genre' => isset($_POST['genre']) ? $_POST['genre'] : (isset($_GET['genre']) ? $_GET['genre'] : "")
];

$conditions = [];
foreach ($filtres as $cle => $valeur) {
    if (!empty($valeur)) {
        $conditions[] = "$cle ILIKE '%" . pg_escape_string($valeur) . "%'";
    }
}

$whereClause = count($conditions) > 0 ? "WHERE " . implode(" AND ", $conditions) : "";
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$page = max(1, $page);
$offset = ($page - 1) * $rowsPerPage;

$totalRowsQuery = "SELECT COUNT(*) FROM $table $whereClause";
$totalRowsResult = pg_query($totalRowsQuery);
$totalRows = pg_fetch_result($totalRowsResult, 0, 0);
$totalPages = ceil($totalRows / $rowsPerPage);

$requete = "SELECT * FROM $table $whereClause ORDER BY id LIMIT $rowsPerPage OFFSET $offset";
$resultat = pg_query($requete) or die('<p class="error">Erreur de requête : ' . pg_last_error() . '</p>');

$pagination = '<div class="pagination">';
for ($i = 1; $i <= $totalPages; $i++) {
    $queryParams = array_merge($_GET, $filtres, ['page' => $i]);
    $queryString = http_build_query($queryParams);

    $pagination .= $i == $page
        ? '<a href="?' . $queryString . '" class="active">' . $i . '</a>'
        : '<a href="?' . $queryString . '">' . $i . '</a>';
}
$pagination .= '</div>';

// --- CONDITION POUR LOGO,PHOTO + AFFICHE TABLEAU ---

while ($tuple = pg_fetch_assoc($resultat)) {
    $photo_name = strtolower(str_replace(' ', '_', $tuple['nom'] . "_" . $tuple['prenom']));
    $photo_path = "images/joueur/{$photo_name}.png";
    if (!file_exists($photo_path)) {
        $photo_path = "images/joueur/default_player.png";
    }

    $logo_name = strtolower(str_replace(' ', '_', $tuple['equipe']));
    $logo_path = "images/équipe/{$logo_name}.png";
    if (!file_exists($logo_path)) {
        $logo_path = "images/équipe/default.png";
    }

    $tableau .= "<tr>
        <td><a href='?action=details&id={$tuple['id']}#player-details'>
            <img src='{$photo_path}' alt='Photo de {$tuple['nom']} {$tuple['prenom']}' width='57' height='57'>
        </a></td>
        <td>{$tuple['nom']}</td>
        <td>{$tuple['prenom']}</td>
        <td>{$tuple['age']}</td>
        <td>{$tuple['position']}</td>
        <td><img src='{$logo_path}' alt='{$tuple['equipe']}' width='42' height='42'></td>
    </tr>";
}

if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
    unset($_SESSION['message']);
}

ob_start();
require_once($squelette);
$html = ob_get_clean();
echo $html;
?>
