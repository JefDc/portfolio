-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Client :  db773471853.hosting-data.io
-- Généré le :  Sam 11 Mai 2019 à 09:21
-- Version du serveur :  5.5.60-0+deb7u1-log
-- Version de PHP :  7.0.33-0+deb9u3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `db773471853`
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `about_us`
--

INSERT INTO `about_us` (`id`, `title`, `content`, `sub_title`, `cv`) VALUES
(1, 'La passion du code', 'A 37 ans, j’ai décidé de changer de vie et de me reconvertir dans le développement. \r\nPassionné depuis toujours d’informatique et de hack, j’ai entrepris une formation de développeur web, en Php Symfony.', 'À propos', 'cv De CONTI.pdf');

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
-- Contenu de la table `contact`
--

INSERT INTO `contact` (`id`, `phone`, `email`, `text`, `address`, `title`, `sub_title`, `img`) VALUES
(1, '+33 6 85 77 70 92', 'de.conti.jf@gmail.com', 'J\'ai titillé votre curiosité ? Alors deux options s\'offrent à vous, m\'envoyer un mail ou le formulaire.', '7 Rue de la Barre, 71000 Mâcon', 'Jef De CONTI', 'Me contacter', 'd4e3c3374b4bc8c2554dd882d1ef712a-contact.jpeg');

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
-- Contenu de la table `extra`
--

INSERT INTO `extra` (`id`, `text_soft_skill`, `title_soft_skill`, `sub_title_soft_skill`, `title_skill`, `github`, `linkedin`, `twitter`) VALUES
(1, 'Le code c\'est bien mais ce n\'est pas tout, dans ma vie il y a aussi :', 'Mes passions', 'A propos', 'Compétences', 'https://github.com/JefDc', 'https://www.linkedin.com/in/jef-de-conti-php/', 'https://twitter.com/DeContiJef');

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
-- Contenu de la table `intro`
--

INSERT INTO `intro` (`id`, `name`, `title`, `sub_title`, `img`) VALUES
(1, 'Jef De CONTI', 'Développeur web', 'Php / Symfony', '85a96bd37b18653a391dc0c4ee6ed80b-intro.jpeg');

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `mail_admin_setting`
--

INSERT INTO `mail_admin_setting` (`id`, `object`, `mail_send`, `domaine`, `mail_reception`, `name_admin`) VALUES
(1, 'Vous avez un nouveau message', 'contact@jef-dc.com', 'jef-dc.com', 'de.conti.jf@gmail.com', 'Jef Dc');

-- --------------------------------------------------------

--
-- Structure de la table `mail_content_admin`
--

CREATE TABLE `mail_content_admin` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `mail_content_admin`
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `mail_content_user`
--

INSERT INTO `mail_content_user` (`id`, `title`, `content`, `img`, `link`) VALUES
(1, 'Merci de m\'avoir contacté !', 'Ce portfolio a était réalisé par mes soins, en quelques jours. C\'est un site vitrine qui montre une partie de mon savoir-faire acquis en tout juste 5 mois de formation. \r\nJe suis disponible pour un stage d\'une durée de 4 mois afin d\'achever mon cursus et monter en compétences. \r\nJe vous re-contacts au plus tôt.\r\nBonne journée.', '1f6aa50cbcbb4f2dbc61e5d183967c88-img.png', 'jef-dc.com');

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `mail_setting`
--

INSERT INTO `mail_setting` (`id`, `host`, `port`, `encryption`, `username`, `password`) VALUES
(1, 'smtp.ionos.fr', 25, 'tls', 'contact@jef-dc.com', 'mAc&BellaDc81');

-- --------------------------------------------------------

--
-- Structure de la table `mail_user_setting`
--

CREATE TABLE `mail_user_setting` (
  `id` int(11) NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail_send` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `domaine` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `mail_user_setting`
--

INSERT INTO `mail_user_setting` (`id`, `subject`, `mail_send`, `domaine`) VALUES
(1, 'Merci de votre intérêt !', 'contact@jef-dc.com', 'jef-dc.com');

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
-- Contenu de la table `message`
--

INSERT INTO `message` (`id`, `name`, `email`, `date`, `message`) VALUES
(14, 'FLORENCE', 'florence.sivadier@gmail.com', '2019-02-17 15:15:43', 'Bravo pour le cv original. Je sors de La Loupe ;)\r\nje me permets de t\'écrire pour t\'encourager à corriger les quelques fautes présentes sur cette page :)\r\n\r\n\"Soit vous m\'envoyez directement un mail à l\'adresse ci dessous, ou alors remplissez le formulaire à coté.\"\r\n\r\nbon courage !'),
(17, 'Sanchez', 'manonsanchez025@gmail.com', '2019-02-20 09:24:35', 'Je voulais voir ce que ça donne quand on remplit le formulaire'),
(21, 'Jef De conti', 'jefdc05@gmail.com', '2019-02-21 15:33:09', '15h'),
(26, 'Fontaine Mélanie', 'melanie.fontaine71@gmail.com', '2019-02-21 23:58:29', 'Coucou mon chéri ! Tu es trop fort ! Je t\'aime'),
(30, 'Jef De conti', 'jefdc05@gmail.com', '2019-03-04 13:24:56', '13H31'),
(31, 'Jef De conti', 'jefdc05@gmail.com', '2019-03-04 13:59:20', '14H'),
(32, 'felix Tuff', 'felix.tuffreaud@laposte.net', '2019-03-05 00:04:17', 'eight ball party .  bravo !!\r\nhttps://www.dictionary.com/e/slang/8-ball/\r\nhttps://www.youtube.com/watch?v=YVt6XMCLbE8\r\n\r\nje me demandais de quoi ils parlaient, apparemment de pillave eux.\r\n\r\ntu me diras si tu as bien reçu ce jolie mail.\r\nbonne nuit');

-- --------------------------------------------------------

--
-- Structure de la table `migration_versions`
--

CREATE TABLE `migration_versions` (
  `version` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `executed_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `migration_versions`
--

INSERT INTO `migration_versions` (`version`, `executed_at`) VALUES
('20190206232511', '2019-02-06 23:25:25'),
('20190208085133', '2019-02-08 08:51:40'),
('20190208174956', '2019-02-08 17:50:06'),
('20190209073859', '2019-02-09 07:39:07'),
('20190209122426', '2019-02-09 12:24:35'),
('20190211172010', '2019-02-11 17:20:17'),
('20190212104458', '2019-02-12 10:45:06'),
('20190212111800', '2019-02-12 11:18:07'),
('20190212112101', '2019-02-12 11:21:07'),
('20190212121117', '2019-02-12 12:11:36'),
('20190212122430', '2019-02-12 12:24:35'),
('20190212153133', '2019-02-12 15:31:59'),
('20190213121945', '2019-02-13 12:19:53');

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
-- Contenu de la table `portfolio`
--

INSERT INTO `portfolio` (`id`, `link`, `img`, `title`, `sub_title`) VALUES
(2, 'wildcodeschool.github.io/lyon-0918-portfolio/page3.html', '59db8a5f6c7810a9d3a9ec9f1afd1a16-portfolio.jpeg', 'DEvelopers on DEmand', '09/18 - 10/18 Wild Code School'),
(3, 'blog.fafachena.com/', 'bc884a28e3b383ccb916566071238fd4-portfolio.jpeg', 'Wild Blog', '10/18 - 11/18 Wild Code School'),
(5, 'www.chapo-clac.fr', 'f8b7cbf5ae7d811b5c3e6411ead59351-portfolio.jpeg', 'Chapo Chac', '11/18 - 01/19 Wild Code School');

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
-- Contenu de la table `skill`
--

INSERT INTO `skill` (`id`, `title`, `img`) VALUES
(1, 'Symfony', '068899c7f12cbf7e61a60d7823acb898skill.png'),
(2, 'Php', '07abcb1eae1a41e905220332ab828208skill.png'),
(3, 'MySQL', '80a68c23b509bdf462264e72b1418b7cskill.png'),
(4, 'Docker', '0373280efa774a3c11939d4a3ddeab1cskill.png'),
(5, 'Git', '705b3c1bdf2cfcf6020dbea2953a20f9-skill.png'),
(6, 'Html', '6ec020e698c254750225eb5027deb740skill.png'),
(7, 'Css', '4a6bf4b8eb3921e2c37fe941eb57f50e-skill.png'),
(9, 'Scrum', '7f83e1e26615d08c50379a1647762280-skill.png');

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
-- Contenu de la table `soft_skill`
--

INSERT INTO `soft_skill` (`id`, `title`, `content`, `img`) VALUES
(1, 'Musique', 'Dj  & passionné depuis plus de 20 ans, organisateur des soirées Eight Ball.', '94c4554301ac08111b3fb5a35f4bebd7-softSkill-png'),
(2, 'High Tech', 'Passionné par les nouvelles technologies depuis toujours.', 'be7b94f28b8360e74479342e2d2084ae-softSkill-png'),
(3, 'Jeux video', 'Gamer depuis ma tendre enfance.', '8300e04840284d635fbea63af7e0870f-softSkill.png'),
(4, 'Apéro', 'Le vendredi soir, c\'est apéro !!!', '50553725b6f1466dd93851857959d978-softSkill.png');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `name`, `password`, `roles`, `img`) VALUES
(1, 'JefDcitmix81', '$2y$13$REEpCwJ43uawebtrMVKIGOdEA17OtSRdaPEoRq9bM6kuMkJ9UAl4K', '[\"ROLE_ADMIN\"]', '1162592916e5bb2347a4c62cf224fd14-user.jpeg');

--
-- Index pour les tables exportées
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
-- Index pour la table `migration_versions`
--
ALTER TABLE `migration_versions`
  ADD PRIMARY KEY (`version`);

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
-- AUTO_INCREMENT pour les tables exportées
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
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
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
