-- phpMyAdmin SQL Dump
-- version 5.0.0-dev
-- https://www.phpmyadmin.net/
--
-- Hôte : 192.168.30.23
-- Généré le :  lun. 04 mars 2019 à 18:45
-- Version du serveur :  8.0.3-rc-log
-- Version de PHP :  7.2.14-1+0~20190113100742.14+stretch~1.gbpd83c69

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `portfolio`
--

-- --------------------------------------------------------

--
-- Structure de la table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `about_us`
--

INSERT INTO `about_us` (`id`, `title`, `content`, `sub_title`, `cv`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipising elit', '\"Lorem ipsum dolor sit amet, consectetur adipising elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', 'xxxxxxx', 'xxxxx.pdf');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `phone`, `email`, `text`, `address`, `title`, `sub_title`, `img`) VALUES
(1, 'xx xx xx xx xx', 'xxxxx@xxxx.com', '\"Lorem ipsum dolor sit amet, consectetur adipising elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', '120 Rue de la Garde, 13000 Marseille', 'Jef De CONTI', 'Me contacter', 'd4e3c3374b4bc8c2554dd882d1ef712a-contact.jpeg');

-- --------------------------------------------------------

--
-- Structure de la table `extra`
--

CREATE TABLE `extra` (
  `id` int(11) NOT NULL,
  `text_soft_skill` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_soft_skill` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title_soft_skill` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_skill` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `github` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `extra`
--

INSERT INTO `extra` (`id`, `text_soft_skill`, `title_soft_skill`, `sub_title_soft_skill`, `title_skill`, `github`, `linkedin`, `twitter`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipising elit, sed do eiusmod tempor incididunt ...', 'xxxxxxxxx', 'xxxxxxxxx', 'xxxxxxxxx', 'https://github.com/xxxx', 'https://www.linkedin.com/in/xxxxxx/', 'https://twitter.com/xxxxxxx');

-- --------------------------------------------------------

--
-- Structure de la table `intro`
--

CREATE TABLE `intro` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `intro`
--

INSERT INTO `intro` (`id`, `name`, `title`, `sub_title`, `img`) VALUES
(1, 'xxxxxxxxx', 'xxxxxxxxxx', 'xxxxxxxxxx', '85a96bd37b18653a391dc0c4ee6ed80b-intro.jpeg');

-- --------------------------------------------------------

--
-- Structure de la table `mail_admin_setting`
--

CREATE TABLE `mail_admin_setting` (
  `id` int(11) NOT NULL,
  `object` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail_send` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `domaine` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail_reception` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_admin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `mail_admin_setting`
--

INSERT INTO `mail_admin_setting` (`id`, `object`, `mail_send`, `domaine`, `mail_reception`, `name_admin`) VALUES
(1, 'Vous avez un nouveau message', 'contact@xxxxxx.com', 'xxxxx.com', 'xxxxxxx@xxxx.com', 'xxxxxxx');

-- --------------------------------------------------------

--
-- Structure de la table `mail_content_admin`
--

CREATE TABLE `mail_content_admin` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `mail_content_admin`
--

INSERT INTO `mail_content_admin` (`id`, `title`) VALUES
(1, 'Vous avez un nouveau message !');

-- --------------------------------------------------------

--
-- Structure de la table `mail_content_user`
--

CREATE TABLE `mail_content_user` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `mail_content_user`
--

INSERT INTO `mail_content_user` (`id`, `title`, `content`, `img`, `link`) VALUES
(1, 'Merci de m\'avoir contacté !', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'xxxx-img.png', 'xxxxx.com');

-- --------------------------------------------------------

--
-- Structure de la table `mail_setting`
--

CREATE TABLE `mail_setting` (
  `id` int(11) NOT NULL,
  `host` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `port` int(11) NOT NULL,
  `encryption` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `mail_setting`
--

INSERT INTO `mail_setting` (`id`, `host`, `port`, `encryption`, `username`, `password`) VALUES
(1, 'xxx.xxxx.fr', 587, 'tls', 'contact@xxx.com', 'xxxxxxxxxx');

-- --------------------------------------------------------

--
-- Structure de la table `mail_user_setting`
--

CREATE TABLE `mail_user_setting` (
  `id` int(11) NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail_send` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `domaine` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `mail_user_setting`
--

INSERT INTO `mail_user_setting` (`id`, `subject`, `mail_send`, `domaine`) VALUES
(1, 'Merci de votre intérêt !', 'contact@xxx.com', 'xxxxx.com');

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`id`, `name`, `email`, `date`, `message`) VALUES
(10, 'John', 'xxxx@gmail.com', '2019-02-21 12:43:06', 'hello Word !');

-- --------------------------------------------------------

--
-- Structure de la table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `portfolio`
--

INSERT INTO `portfolio` (`id`, `link`, `img`, `title`, `sub_title`) VALUES
(2, 'https://google.com', '17b04f07e7c6c74e35c8f5556682941a-portfolio.jpeg', 'Google', '09/18 - 10/18 Google'),
(3, 'http://google.com', 'f809483ac7402f2c287edcef9c5242c4-portfolio.jpeg', 'Google', '10/18 - 11/18 Google'),
(5, 'google.fr', '8d36c901ee8e11356b734a5572aa0227-portfolio.jpeg', 'Google', '11/18 - 01/19 Wild Google');

-- --------------------------------------------------------

--
-- Structure de la table `skill`
--

CREATE TABLE `skill` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `skill`
--

INSERT INTO `skill` (`id`, `title`, `img`) VALUES
(1, 'Symfony', '068899c7f12cbf7e61a60d7823acb898skill.png'),
(2, 'Php', '07abcb1eae1a41e905220332ab828208skill.png'),
(3, 'MySQL', '80a68c23b509bdf462264e72b1418b7cskill.png'),
(4, 'Docker', '0373280efa774a3c11939d4a3ddeab1cskill.png'),
(5, 'Git', '705b3c1bdf2cfcf6020dbea2953a20f9-skill.png'),
(6, 'Html', '6ec020e698c254750225eb5027deb740skill.png'),
(7, 'Css', '4a6bf4b8eb3921e2c37fe941eb57f50e-skill.png'),
(9, 'Scrumm', '91d34467423defc46b5caf4a011b43e4-skill.png');

-- --------------------------------------------------------

--
-- Structure de la table `soft_skill`
--

CREATE TABLE `soft_skill` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `soft_skill`
--

INSERT INTO `soft_skill` (`id`, `title`, `content`, `img`) VALUES
(1, 'Musique', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco', '94c4554301ac08111b3fb5a35f4bebd7-softSkill-png'),
(2, 'High Tech', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ', 'be7b94f28b8360e74479342e2d2084ae-softSkill-png'),
(3, 'Jeux video', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure ', '8300e04840284d635fbea63af7e0870f-softSkill.png'),
(4, 'Apéro', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco ', '50553725b6f1466dd93851857959d978-softSkill.png');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `name`, `password`, `roles`, `img`) VALUES
(1, 'root', '$2y$13$KeJUwNXUX1PESexz4ifVXeN0tN3E2WMGh6oDnpuZ/9sdvwVKx0riK', '[\"ROLE_ADMIN\"]', 'a5a9e45369a6b6838cf6679205636383-user.jpeg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `extra`
--
ALTER TABLE `extra`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `intro`
--
ALTER TABLE `intro`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `mail_admin_setting`
--
ALTER TABLE `mail_admin_setting`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `mail_content_admin`
--
ALTER TABLE `mail_content_admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `mail_content_user`
--
ALTER TABLE `mail_content_user`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `mail_setting`
--
ALTER TABLE `mail_setting`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `mail_user_setting`
--
ALTER TABLE `mail_user_setting`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `soft_skill`
--
ALTER TABLE `soft_skill`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `extra`
--
ALTER TABLE `extra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `intro`
--
ALTER TABLE `intro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `mail_admin_setting`
--
ALTER TABLE `mail_admin_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `mail_content_admin`
--
ALTER TABLE `mail_content_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `mail_content_user`
--
ALTER TABLE `mail_content_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `mail_setting`
--
ALTER TABLE `mail_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `mail_user_setting`
--
ALTER TABLE `mail_user_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT pour la table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `skill`
--
ALTER TABLE `skill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `soft_skill`
--
ALTER TABLE `soft_skill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
