DROP TABLE IF EXISTS joueurs;

CREATE TABLE joueurs (
    id SERIAL PRIMARY KEY, -- Identifiant unique pour chaque joueur
    nom VARCHAR(50) NOT NULL, -- Nom du joueur
    prenom VARCHAR(50) NOT NULL, -- Prenom du joueur
    genre VARCHAR(10) NOT NULL CHECK (genre IN ('Homme', 'Femme')), -- Genre : Homme/Femme
    age INT, -- age du joueur
    taille DECIMAL(5, 2), -- Taille du joueur (en cm)
    poids DECIMAL(5, 2), -- Poids du joueur (en kg)
    nationalite VARCHAR(100), -- Nationalite du joueur
    position VARCHAR(20) NOT NULL, -- Position du joueur (Gardien, Defenseur, etc.)
    equipe VARCHAR(50) NOT NULL -- equipe du joueur
);

INSERT INTO joueurs (nom, prenom, genre, age, taille, poids, nationalite, position, equipe) VALUES
('Messi', 'Lionel', 'Homme', 36, 170.00, 72.00, 'Argentin', 'Attaquant', 'Inter Miami'),
('Ronaldo', 'Cristiano', 'Homme', 39, 187.00, 85.00, 'Portugais', 'Attaquant', 'Real Madrid'),
('Neymar', 'Júnior', 'Homme', 32, 175.00, 68.00, 'Brésilien', 'Attaquant', 'Barcelone'),
('Mbappe', 'Kylian', 'Homme', 25, 178.00, 73.00, 'Français', 'Attaquant', 'Real Madrid'),
('Bonmati', 'Aitana', 'Femme', 25, 164.00, 57.00, 'Espagnole', 'Milieu', 'Barcelone'),
('De Bruyne', 'Kevin', 'Homme', 32, 181.00, 70.00, 'Belge', 'Milieu', 'Manchester City'),
('Mane', 'Sadio', 'Homme', 32, 174.00, 69.00, 'Senegalais', 'Attaquant', 'Liverpool'),
('Renard', 'Wendie', 'Femme', 34, 187.00, 70.00, 'Française', 'Défenseur', 'Lyon'),
('Salah', 'Mohamed', 'Homme', 31, 175.00, 71.00, 'Egyptien', 'Attaquant', 'Liverpool'),
('Son', 'Heung Min', 'Homme', 31, 183.00, 77.00, 'Sud-Coreen', 'Attaquant', 'Tottenham'),
('Dybala', 'Paulo', 'Homme', 30, 177.00, 75.00, 'Argentin', 'Attaquant', 'Roma'),
('Benzema', 'Karim', 'Homme', 36, 185.00, 81.00, 'Français', 'Attaquant', 'Al-Ittihad'),
('Mead', 'Beth', 'Femme', 28, 170.00, 59.00, 'Anglaise', 'Attaquant', 'Arsenal'),
('Morgan', 'Alex', 'Femme', 34, 175.00, 65.00, 'Americaine', 'Attaquante', 'Manchester City'),
('Huerta', 'Sofia', 'Femme', 31, 170.00, 63.00, 'Americaine', 'Défenseur', 'OL Reign'),
('Griezmann', 'Antoine', 'Homme', 32, 176.00, 69.00, 'Français', 'Attaquant', 'Atletico Madrid'),
('Coman', 'Kingsley', 'Homme', 27, 180.00, 75.00, 'Français', 'Attaquant', 'Bayern Munich'),
('Van Dijk', 'Virgil', 'Homme', 33, 193.00, 92.00, 'Neerlandais', 'Défenseur', 'Liverpool'),
('Shaw', 'Khadija', 'Femme', 27, 182.00, 76.00, 'Jamaicaine', 'Attaquant', 'Manchester City'),
('De Jong', 'Frenkie', 'Homme', 26, 180.00, 74.00, 'Neerlandais', 'Milieu', 'Barcelone'),
('Aubameyang', 'Pierre-Emerick', 'Homme', 34, 187.00, 80.00, 'Gabonais', 'Attaquant', 'Marseille'),
('Lavelle', 'Rose', 'Femme', 29, 162.00, 55.00, 'Americaine', 'Milieu', 'OL Reign'),
('Reiten', 'Guro', 'Femme', 29, 165.00, 60.00, 'Norvegienne', 'Milieu', 'Chelsea'),
('Kelly', 'Chloe', 'Femme', 25, 168.00, 58.00, 'Anglaise', 'Attaquant', 'Manchester City'),
('Ozturk', 'Lena', 'Femme', 24, 172.00, 64.00, 'Allemande', 'Défenseur', 'Marseille'),
('Segura', 'Alexia', 'Femme', 23, 170.00, 60.00, 'Espagnole', 'Milieu', 'Leicester'),
('Pilar', 'Maria', 'Femme', 25, 165.00, 55.00, 'sud-coreen', 'Gardien', 'milan'),
('Oberdorf', 'Lena', 'Femme', 22, 174.00, 65.00, 'Allemande', 'Milieu', 'VfL Wolfsburg'),
('Lehmann', 'Alisha', 'Femme', 25, 165.00, 55.00, 'Suisse', 'Attaquant', 'Juventus'),
('Rapinoe', 'Megan', 'Femme', 38, 170.00, 60.00, 'Americaine', 'Attaquante', 'Lyon'),
('Wingate', 'Olivia', 'Femme', 22, 165.00, 58.00, 'Grecque', 'Attaquante', 'OL Reign'),
('Karchaoui', 'Sakina', 'Femme', 27, 160.00, 50.00, 'Française', 'Défenseur', 'Paris Saint-Germain'),
('Beckham', 'David', 'Homme', 48, 180.00, 75.00, 'Anglais', 'Milieu', 'Real Madrid'),
('Pele', 'Edson', 'Homme', 82, 173.00, 70.00, 'Brésilien', 'Attaquant', 'Juventus');


