-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : ven. 10 fév. 2023 à 12:25
-- Version du serveur : 8.0.31
-- Version de PHP : 8.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `pokeapi`
--

-- --------------------------------------------------------

--
-- Structure de la table `pokemons`
--

CREATE TABLE `pokemons` (
  `id` int NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `generation` int NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `id_evolution_inf` int DEFAULT NULL,
  `nom_evolution_inf` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `id_evolution_sup` int DEFAULT NULL,
  `nom_evolution_sup` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `pokemons`
--

INSERT INTO `pokemons` (`id`, `nom`, `image`, `generation`, `type`, `id_evolution_inf`, `nom_evolution_inf`, `id_evolution_sup`, `nom_evolution_sup`, `slug`) VALUES
(25, 'Pikachu', 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/25.png', 1, '[{\"name\":\"\\u00c9lectrik\",\"image\":\"https:\\/\\/static.wikia.nocookie.net\\/pokemongo\\/images\\/2\\/2f\\/Electric.png\"}]', NULL, NULL, 26, 'Raichu', 'pikachu'),
(26, 'Raichu', 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/26.png', 1, '[{\"name\":\"\\u00c9lectrik\",\"image\":\"https:\\/\\/static.wikia.nocookie.net\\/pokemongo\\/images\\/2\\/2f\\/Electric.png\"}]', 25, 'Pikachu', NULL, NULL, 'raichu'),
(7, 'Carapuce', 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/7.png', 1, '[{\"name\":\"Eau\",\"image\":\"https:\\/\\/static.wikia.nocookie.net\\/pokemongo\\/images\\/9\\/9d\\/Water.png\"}]', NULL, NULL, 8, 'Carabaffe', 'carapuce'),
(8, 'Carabaffe', 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/8.png', 1, '[{\"name\":\"Eau\",\"image\":\"https:\\/\\/static.wikia.nocookie.net\\/pokemongo\\/images\\/9\\/9d\\/Water.png\"}]', 7, 'Carapuce', 9, 'Tortank', 'carabaffe'),
(9, 'Tortank', 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/9.png', 1, '[{\"name\":\"Eau\",\"image\":\"https:\\/\\/static.wikia.nocookie.net\\/pokemongo\\/images\\/9\\/9d\\/Water.png\"}]', 8, 'Carabaffe', NULL, NULL, 'tortank'),
(5, 'Reptincel', 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/5.png', 1, '[{\"name\":\"Feu\",\"image\":\"https:\\/\\/static.wikia.nocookie.net\\/pokemongo\\/images\\/3\\/30\\/Fire.png\"}]', 4, 'Salamèche', 6, 'Dracaufeu', 'reptincel'),
(4, 'Salamèche', 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/4.png', 1, '[{\"name\":\"Feu\",\"image\":\"https:\\/\\/static.wikia.nocookie.net\\/pokemongo\\/images\\/3\\/30\\/Fire.png\"}]', NULL, NULL, 5, 'Reptincel', 'salameche'),
(6, 'Dracaufeu', 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/6.png', 1, '[{\"name\":\"Vol\",\"image\":\"https:\\/\\/static.wikia.nocookie.net\\/pokemongo\\/images\\/7\\/7f\\/Flying.png\"},{\"name\":\"Feu\",\"image\":\"https:\\/\\/static.wikia.nocookie.net\\/pokemongo\\/images\\/3\\/30\\/Fire.png\"}]', 5, 'Reptincel', NULL, NULL, 'dracaufeu'),
(255, 'Poussifeu', 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/255.png', 3, '[{\"name\":\"Feu\",\"image\":\"https:\\/\\/static.wikia.nocookie.net\\/pokemongo\\/images\\/3\\/30\\/Fire.png\"}]', NULL, NULL, 256, 'Galifeu', 'poussifeu'),
(450, 'Hippodocus', 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/450.png', 4, '[{\"name\":\"Sol\",\"image\":\"https:\\/\\/static.wikia.nocookie.net\\/pokemongo\\/images\\/8\\/8f\\/Ground.png\"}]', 449, 'Hippopotas', NULL, NULL, 'hippodocus'),
(340, 'Barbicha', 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/340.png', 3, '[{\"name\":\"Sol\",\"image\":\"https:\\/\\/static.wikia.nocookie.net\\/pokemongo\\/images\\/8\\/8f\\/Ground.png\"},{\"name\":\"Eau\",\"image\":\"https:\\/\\/static.wikia.nocookie.net\\/pokemongo\\/images\\/9\\/9d\\/Water.png\"}]', 339, 'Barloche', NULL, NULL, 'barbicha'),
(339, 'Barloche', 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/339.png', 3, '[{\"name\":\"Sol\",\"image\":\"https:\\/\\/static.wikia.nocookie.net\\/pokemongo\\/images\\/8\\/8f\\/Ground.png\"},{\"name\":\"Eau\",\"image\":\"https:\\/\\/static.wikia.nocookie.net\\/pokemongo\\/images\\/9\\/9d\\/Water.png\"}]', NULL, NULL, 340, 'Barbicha', 'barloche'),
(256, 'Galifeu', 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/256.png', 3, '[{\"name\":\"Combat\",\"image\":\"https:\\/\\/static.wikia.nocookie.net\\/pokemongo\\/images\\/3\\/30\\/Fighting.png\"},{\"name\":\"Feu\",\"image\":\"https:\\/\\/static.wikia.nocookie.net\\/pokemongo\\/images\\/3\\/30\\/Fire.png\"}]', 255, 'Poussifeu', 257, 'Braségali', 'galifeu');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
