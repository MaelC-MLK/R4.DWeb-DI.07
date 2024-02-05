-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : mysql
-- Généré le : dim. 28 jan. 2024 à 00:10
-- Version du serveur : 8.3.0
-- Version de PHP : 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `lego_store`
--

-- --------------------------------------------------------

--
-- Structure de la table `lego`
--

CREATE TABLE `lego` (
  `id` int NOT NULL,
  `name` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL,
  `pieces` int NOT NULL,
  `imagebox` varchar(256) NOT NULL,
  `imagebg` varchar(256) NOT NULL,
  `collection` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `lego`
--

INSERT INTO `lego` (`id`, `name`, `description`, `price`, `pieces`, `imagebox`, `imagebg`, `collection`) VALUES
(10252, 'La coccinelle Volkwagen', 'Construis une réplique LEGO® Creator Expert de l\'automobile la plus populaire au monde. Ce magnifique modèle LEGO est plein de détails authentiques qui capturent le charme et la personnalité de la voiture, notamment un coloris bleu ciel, des ailes arrondies, des jantes blanches avec des enjoliveurs caractéristiques, des phares ronds et des clignotants montés sur les ailes.', 94.99, 1167, 'LEGO_10252_Box.png', 'LEGO_10252_Main.jpg', 'Creator Expert'),
(10262, 'James Bond Aston Martin DB5', 'Get a license to build with the awesome LEGO® Creator Expert 10262 James Bond™ Aston Martin DB5. This impressive replica model captures the elegance and timeless sophistication of Agent 007’s iconic 1964 sports car, and comes with a wealth of authentic details and functioning gadgetry. ', 149.99, 1295, 'LEGO_10262_Box.jpg', 'LEGO_10262_Main.jpg', 'Creator Expert'),
(31046, 'La voiture rapide', 'Prends la route avec cette splendide voiture de sport, avec des coloris jaune, blanc et noir, un énorme aileron, des jantes élégantes avec des pneus profil bas, un capot qui s\'ouvre et un moteur détaillé. Ouvre les portes ciseaux, mets-toi au volant, ouvre le toit et profite du soleil !', 19.99, 222, 'LEGO_31046_Box.png', 'LEGO_31046_Main.jpg', 'Creator'),
(31062, 'Le robot explorateur', 'Impressionne tes amis avec ce modèle génial ! Ce robot explorateur comprend des coloris bleu, noir et gris, des yeux vert vif, des chenilles qui fonctionnent, une tête et un corps qui tournent, et des bras mobiles avec des pinces et un projecteur qui fonctionnent.', 19.99, 205, 'LEGO_31062_Box.png', 'LEGO_31062_Main.jpg', 'Creator'),
(31064, 'Les aventures sur l\'île', 'Trouve une carte dans une bouteille et aventure-toi vers une île tropicale lointaine à bord de l’hydravion avec ses flotteurs d’atte rrissage et ses coloris jaune vif, blanc et bleu foncé. Charge le compartiment à marchandises, ouvre le cockpit et monte à bord, puis fais tourner l\'énorme hélice et envole-toi dans les airs. Utilise tes talents de pilote pour localiser l\'île', 29.99, 359, 'LEGO_31064_Box.png', 'LEGO_31064_Main.jpg', 'Creator'),
(31065, 'La maison de ville', 'Monte les marches vers la porte bleue de cette charmante maison à trois étages. Tu découvriras à l’intérieur de nombreuses fonctions, notamment un salon confortable avec une télé à écran plat et un canapé, plus une chambre avec une cheminée et une cuisine détaillée. Prends l\'escalier vers le deuxième étage et tu trouveras une chambre confortable.', 54.99, 566, 'LEGO_31065_Box.png', 'LEGO_31065_Main.jpg', 'Creator'),
(71043, 'Le château Poudlard', 'La magie prend vie avec LEGO® Harry Potter™ 71043 château Poudlard™ ! Cet ensemble LEGO Harry Potter de collection très détaillé comprend plus de 6 000 pièces et offre une expérience de construction enrichissante. Il comprend de nombreux points clés de la série Harry Potter, et tu pourras découvrir des tours, des tourelles, des chambres, des salles de classe, des créatures...', 419.99, 6020, 'LEGO_71043_Box.jpg', 'LEGO_71043_Main.jpg', 'Harry Potter'),
(75102, 'Poe\'s X-Wing Fighter', 'Lutte contre les forces du Premier Ordre avec le X-Wing Fighter de Poe. Ce starfighter personnalisé est plein de fonctions, avec notamment 4 fusils à ressorts, 2 fusils à tenons, un train d\'atterrissage rétractable, des ailes qui s\'ouvrent, un cockpit qui s\'ouvre avec de la place pour une figurine, et de la place derrière pour le droïde astromech BB-8.', 89.99, 717, 'LEGO_75102_Box.png', 'LEGO_75102_Main.jpg', 'Star Wars'),
(75192, 'Millenium Falcon', 'Ce nouveau modèle LEGO® Star Wars Millennium Falcon est le plus grand et le plus détaillé jamais conçu. En réalité, avec ses 7 500 pièces, c’est tout simplement l’un des plus grands modèles LEGO ! Cette fantastique version LEGO de l’inoubliable cargo Corellien de Han Solo présente les moindres détails dont rêvent tous les fans de Star Wars, quel que soit leur âge.\r\n        ', 799.99, 7541, 'LEGO_75192_Box.jpg', 'LEGO_75192_Main.png', 'Star Wars'),
(76391, 'Icônes de Poudlard', 'Le set LEGO® Harry Potter Icônes de Poudlard - Édition Collector est une reproduction des objets les plus mémorables de la série, réunis dans une pièce d’exposition anniversaire conçue pour les adultes passionnés de l’univers Harry Potter.', 249.99, 3010, 'LEGO_76391_Box.jpg', 'LEGO_76391_Main.png', 'Harry Potter');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `lego`
--
ALTER TABLE `lego`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
