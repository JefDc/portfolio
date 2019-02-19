create table about_us
(
  id        int auto_increment
    primary key,
  title     varchar(255) not null,
  content   longtext     not null,
  sub_title varchar(255) not null
)
  collate = utf8mb4_unicode_ci;

INSERT INTO portfolio.about_us (id, title, content, sub_title) VALUES (1, 'La passion du code', '"Lorem ipsum dolor sit amet, consectetur adipising elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."', 'A propos');
create table contact
(
  id        int auto_increment
    primary key,
  phone     varchar(255) not null,
  email     varchar(255) not null,
  text      longtext     not null,
  address   varchar(255) not null,
  title     varchar(255) not null,
  sub_title varchar(255) not null,
  img       longtext     not null
)
  collate = utf8mb4_unicode_ci;

INSERT INTO portfolio.contact (id, phone, email, text, address, title, sub_title, img) VALUES (8, '+33 6 85 77 70 92', 'de.conti.jf@gmail.com', 'Si vous voulez prendre contact avec moi, rien de plus simple ! Soit vous m''envoyer directement un mail a l''adresse si dessous, ou alors remplissez le formulaire a coté.', '7 Rue de la Barre, 71000 Mâcon', 'Jef De CONTI', 'Me contacter', 'd4e3c3374b4bc8c2554dd882d1ef712a-contact.jpeg');
create table extra
(
  id                   int auto_increment
    primary key,
  text_soft_skill      longtext     not null,
  title_soft_skill     varchar(255) not null,
  sub_title_soft_skill varchar(255) not null,
  title_skill          varchar(255) not null,
  github               varchar(255) not null,
  linkedin             varchar(255) not null,
  twitter              varchar(255) not null
)
  collate = utf8mb4_unicode_ci;

INSERT INTO portfolio.extra (id, text_soft_skill, title_soft_skill, sub_title_soft_skill, title_skill, github, linkedin, twitter) VALUES (2, 'Le code c''est bien, mais y as pas que ça dans la vie...', 'Mes passions', 'A propos', 'Compétences', 'https://github.com/JefDc', 'https://www.linkedin.com/in/jef-de-conti-php/', 'https://twitter.com/DeContiJef');
create table intro
(
  id        int auto_increment
    primary key,
  name      varchar(255) not null,
  title     varchar(255) not null,
  sub_title varchar(255) not null,
  img       varchar(255) not null
)
  collate = utf8mb4_unicode_ci;

INSERT INTO portfolio.intro (id, name, title, sub_title, img) VALUES (1, 'Jef De CONTI', 'Développeur web', 'Php / Symfony', '85a96bd37b18653a391dc0c4ee6ed80b-intro.jpeg');
create table message
(
  id      int auto_increment
    primary key,
  name    varchar(255) not null,
  email   varchar(255) not null,
  date    datetime     not null,
  message longtext     not null
)
  collate = utf8mb4_unicode_ci;

INSERT INTO portfolio.message (id, name, email, date, message) VALUES (3, 'Jef De Conti', 'jefdc05@gmail.com', '2019-02-13 16:03:21', 'ggggggg');
create table migration_versions
(
  version     varchar(14) not null
    primary key,
  executed_at datetime    not null comment '(DC2Type:datetime_immutable)'
)
  collate = utf8mb4_unicode_ci;

INSERT INTO portfolio.migration_versions (version, executed_at) VALUES ('20190206232511', '2019-02-06 23:25:25');
INSERT INTO portfolio.migration_versions (version, executed_at) VALUES ('20190208085133', '2019-02-08 08:51:40');
INSERT INTO portfolio.migration_versions (version, executed_at) VALUES ('20190208174956', '2019-02-08 17:50:06');
INSERT INTO portfolio.migration_versions (version, executed_at) VALUES ('20190209073859', '2019-02-09 07:39:07');
INSERT INTO portfolio.migration_versions (version, executed_at) VALUES ('20190209122426', '2019-02-09 12:24:35');
INSERT INTO portfolio.migration_versions (version, executed_at) VALUES ('20190211172010', '2019-02-11 17:20:17');
INSERT INTO portfolio.migration_versions (version, executed_at) VALUES ('20190212104458', '2019-02-12 10:45:06');
INSERT INTO portfolio.migration_versions (version, executed_at) VALUES ('20190212111800', '2019-02-12 11:18:07');
INSERT INTO portfolio.migration_versions (version, executed_at) VALUES ('20190212112101', '2019-02-12 11:21:07');
INSERT INTO portfolio.migration_versions (version, executed_at) VALUES ('20190212121117', '2019-02-12 12:11:36');
INSERT INTO portfolio.migration_versions (version, executed_at) VALUES ('20190212122430', '2019-02-12 12:24:35');
INSERT INTO portfolio.migration_versions (version, executed_at) VALUES ('20190212153133', '2019-02-12 15:31:59');
INSERT INTO portfolio.migration_versions (version, executed_at) VALUES ('20190213121945', '2019-02-13 12:19:53');
INSERT INTO portfolio.migration_versions (version, executed_at) VALUES ('20190215102817', '2019-02-15 10:28:28');
create table portfolio
(
  id        int auto_increment
    primary key,
  link      varchar(255) not null,
  img       varchar(255) not null,
  title     varchar(255) not null,
  sub_title varchar(255) not null
)
  collate = utf8mb4_unicode_ci;

INSERT INTO portfolio.portfolio (id, link, img, title, sub_title) VALUES (2, 'https://wildcodeschool.github.io/lyon-0918-portfolio/page3.html', '17b04f07e7c6c74e35c8f5556682941a-portfolio.jpeg', 'DEvelopers on DEmand', '09/18 - 10/18 Wild Code School');
INSERT INTO portfolio.portfolio (id, link, img, title, sub_title) VALUES (3, 'http://blog.fafachena.com/', 'f809483ac7402f2c287edcef9c5242c4-portfolio.jpeg', 'Wild Blog', '10/18 - 11/18 Wild Code School');
INSERT INTO portfolio.portfolio (id, link, img, title, sub_title) VALUES (5, 'www.chapo-clac.fr', '8d36c901ee8e11356b734a5572aa0227-portfolio.jpeg', 'Chapo Chac', '11/18 - 01/19 Wild Code School');
create table skill
(
  id    int auto_increment
    primary key,
  title varchar(255) not null,
  img   varchar(255) not null
)
  collate = utf8mb4_unicode_ci;

INSERT INTO portfolio.skill (id, title, img) VALUES (1, 'Symfony', '068899c7f12cbf7e61a60d7823acb898skill.png');
INSERT INTO portfolio.skill (id, title, img) VALUES (2, 'Php', '07abcb1eae1a41e905220332ab828208skill.png');
INSERT INTO portfolio.skill (id, title, img) VALUES (3, 'MySQL', '80a68c23b509bdf462264e72b1418b7cskill.png');
INSERT INTO portfolio.skill (id, title, img) VALUES (4, 'Docker', '0373280efa774a3c11939d4a3ddeab1cskill.png');
INSERT INTO portfolio.skill (id, title, img) VALUES (5, 'Git', '705b3c1bdf2cfcf6020dbea2953a20f9-skill.png');
INSERT INTO portfolio.skill (id, title, img) VALUES (6, 'Html', '6ec020e698c254750225eb5027deb740skill.png');
INSERT INTO portfolio.skill (id, title, img) VALUES (7, 'Css', '4a6bf4b8eb3921e2c37fe941eb57f50e-skill.png');
INSERT INTO portfolio.skill (id, title, img) VALUES (9, 'Scrumm', '91d34467423defc46b5caf4a011b43e4-skill.png');
create table soft_skill
(
  id      int auto_increment
    primary key,
  title   varchar(255) not null,
  content longtext     not null,
  img     varchar(255) not null
)
  collate = utf8mb4_unicode_ci;

INSERT INTO portfolio.soft_skill (id, title, content, img) VALUES (1, 'Musique', 'Dj  & passionné depuis plus de 20 ans, organisateur des soirées Eight Ball', '94c4554301ac08111b3fb5a35f4bebd7-softSkill-png');
INSERT INTO portfolio.soft_skill (id, title, content, img) VALUES (2, 'High Tech', 'Passionné par les nouvelles technologies depuis toujours', 'be7b94f28b8360e74479342e2d2084ae-softSkill-png');
INSERT INTO portfolio.soft_skill (id, title, content, img) VALUES (3, 'Jeux video', 'Gamer depuis toujours', '8300e04840284d635fbea63af7e0870f-softSkill.png');
INSERT INTO portfolio.soft_skill (id, title, content, img) VALUES (4, 'Apéro', 'Le vendredi soir, c''est apéro !!!', '50553725b6f1466dd93851857959d978-softSkill.png');
create table user
(
  id       int auto_increment
    primary key,
  name     varchar(255) not null,
  password longtext     not null,
  roles    varchar(255) not null,
  img      varchar(255) not null
)
  collate = utf8mb4_unicode_ci;

INSERT INTO portfolio.user (id, name, password, roles, img) VALUES (1, 'root', '$2y$13$KeJUwNXUX1PESexz4ifVXeN0tN3E2WMGh6oDnpuZ/9sdvwVKx0riK', '["ROLE_ADMIN"]', 'a5a9e45369a6b6838cf6679205636383-user.jpeg');