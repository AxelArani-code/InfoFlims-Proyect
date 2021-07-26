-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-11-2020 a las 00:51:37
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `demo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(40) NOT NULL,
  `detalles` varchar(10000) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `detalles`, `created_at`) VALUES
(1, 'asdsad', '0000-00-00 00:00:00'),
(2, 'asdsad', '0000-00-00 00:00:00'),
(3, 'asdsad', '0000-00-00 00:00:00'),
(4, 'asdsad', '0000-00-00 00:00:00'),
(5, 'asdsad', '0000-00-00 00:00:00'),
(6, 'asdsad', '0000-00-00 00:00:00'),
(7, 'asdsad', '0000-00-00 00:00:00'),
(8, 'asdsad', '0000-00-00 00:00:00'),
(9, 'asdsad', '0000-00-00 00:00:00'),
(10, 'asdsad', '0000-00-00 00:00:00'),
(11, 'asdsad', '0000-00-00 00:00:00'),
(12, 'asdsad', '0000-00-00 00:00:00'),
(13, 'asdsad', '0000-00-00 00:00:00'),
(14, 'asdsad', '0000-00-00 00:00:00'),
(15, 'asdsad', '0000-00-00 00:00:00'),
(16, 'asdsad', '0000-00-00 00:00:00'),
(17, 'asdsad', '0000-00-00 00:00:00'),
(18, 'asdsad', '0000-00-00 00:00:00'),
(19, 'asdsad', '0000-00-00 00:00:00'),
(20, 'asdsad', '0000-00-00 00:00:00'),
(21, 'asdsad', '0000-00-00 00:00:00'),
(22, 'asdsad', '0000-00-00 00:00:00'),
(23, 'asdsad', '0000-00-00 00:00:00'),
(24, 'asdsad', '0000-00-00 00:00:00'),
(25, 'asdsad', '0000-00-00 00:00:00'),
(26, 'asdsad', '0000-00-00 00:00:00'),
(27, 'asdsad', '0000-00-00 00:00:00'),
(28, 'asdsad', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estrenos`
--

CREATE TABLE `estrenos` (
  `info_id` int(11) NOT NULL,
  `imagenes` varchar(500) NOT NULL,
  `title` varchar(100) NOT NULL,
  `descriptions` varchar(10000) NOT NULL,
  `dates` varchar(100) NOT NULL,
  `trailer` varchar(400) NOT NULL,
  `genero` varchar(40) NOT NULL,
  `audio` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estrenos`
--

INSERT INTO `estrenos` (`info_id`, `imagenes`, `title`, `descriptions`, `dates`, `trailer`, `genero`, `audio`) VALUES
(1, '1604188857-artemis-fowl-el-mundo-subterraneo.jpg', 'Artemis Fowl: El mundo subterráneo', '	\r\nArtemis Fowl es un niño prodigio de 12 años y descendiente de un largo linaje de mentes criminales. Pronto se encuentra a sí mismo en una épica batalla en contra de una raza de poderosas hadas subterráneas, que podrían estar detrás de la desaparición de su padre.', 'Full HD', 'https://www.youtube.com/embed/XQqRLim8o1s', 'Aventura | Familiar | Fantasía', 'Latino e Inglés subtitulada'),
(2, '1604198269-ahi-te-encargo.jpg', 'Ahí te encargo', 'Alex, un creativo de publicidad quiere ser un padre a cualquier costo, pero su esposa es una abogada que está muy concentrada en su carrera, y ser una madre no forma parte de sus planes. Entonces un huésped inesperado pondrá a prueba su amor.', 'Full HD', 'https://www.youtube.com/embed/MbQoLJe76pc', 'Comedia | Romance', 'Latino e Inglés subtitulada'),
(3, '1604198362-apollo-11.jpg', 'Apollo 11: Primeros pasos', '	\r\nLos eventos de la misión espacial Apollo 11 son presentados usando únicamente imágenes de archivo y fotografías asociadas con la misión. Los eventos van desde la onceava hora de preparaciones para el lanzamiento hasta el aterrizaje de la cápsula con sus tres astronautas: Neil Armstrong, Buzz Aldr', 'Full HD', 'https://www.youtube.com/embed/tpLrp0SW8yg', 'Historia | Documental', 'Latino e Inglés subtitulada'),
(4, '1602212299-corazon-loco.jpg', 'Corazón loco', 'Fernando Ferro es un reconocido doctor, un hombre de familia con una vida casi perfecta, pero en realidad tiene dos. Media semana su mujer es Paula, y la otra es Vera.', 'Full HD', 'https://www.youtube.com/embed/uRPdBGoLGjs', 'Comedia', 'Latino e Inglés subtitulada'),
(5, '1602212339-body-cam.jpg', 'Cámara policial', 'Cuando una parada de tránsito de rutina resulta en la inexplicable y espeluznante muerte de su colega, una policía se da cuenta que las imágenes del incidente solo reproducirán frente a sus ojos.', 'Full HD', 'https://www.youtube.com/embed/uPmcLZTJ47I', 'Terror | Misterio | Suspenso', 'Latino e Inglés subtitulada'),
(6, '1602212381-Enola-Holmes-Bluray-Audio-Latino-Mediafire.jpg', 'Enola Holmes', 'Cuando su madre desaparece, la joven Enola descubre que sus hermanos, Sherlock y Mycroft, no son de gran ayuda. Pero ella es una auténtica Holmes y resolverá el caso.\r\n', 'Full HD', 'https://www.youtube.com/embed/bxG9VN9RrVs', 'Aventura | Crimen | Drama', 'Latino e Inglés subtitulada'),
(7, '1602212663-Grandes-Espias-Bluray-Audio-Latino-1080p.jpg', 'Grandes Espías', 'Sophie, una niña de nueve años, atrapa a JJ, un rudo agente de la CIA, espiando a su familia durante una operación de vigilancia.', 'Full HD', 'https://www.youtube.com/embed/xGAeGn86Sr0', 'Comedia, Acción', 'Latino e Inglés subtitulada'),
(8, '1602212702-Pelicula-Mulan-2020-Bluray-Audio-Latino-1080p-Mediafire.jpg', ' Mulan', 'El Emperador de China emite un decreto para reclutar a un varón por cada familia que deberá servir en el Ejército Imperial para defender al país de los invasores del Norte.\r\n', 'Full HD', 'https://www.youtube.com/embed/1dnaQjFL67k', 'Acción, Fantasía, Drama', 'Latino e Inglés subtitulada'),
(9, '1602212736-Bill-y-Ted-Salvando-el-Universo-Bluray-Poster-Latino.jpg', ' Bill y Ted: Salvando el Universo', 'En esta nueva cinta, estos dos mejores amigos se embarcan en una nueva aventura en busca de la canción que mejorará su mundo y traerá armonía al universo.', 'Full HD', 'https://www.youtube.com/embed/cxnKc3zXMcc', 'Comedia, Aventura, Ciencia Ficción', 'Latino e Inglés subtitulada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `information`
--

CREATE TABLE `information` (
  `info_id` int(11) NOT NULL,
  `imagenes` varchar(500) NOT NULL,
  `title` varchar(100) NOT NULL,
  `descriptions` varchar(10000) NOT NULL,
  `dates` varchar(100) NOT NULL,
  `trailer` varchar(400) NOT NULL,
  `genero` varchar(40) NOT NULL,
  `audio` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `information`
--

INSERT INTO `information` (`info_id`, `imagenes`, `title`, `descriptions`, `dates`, `trailer`, `genero`, `audio`) VALUES
(1, '1604186623-evil-eye.jpg', 'Mal de ojo', 'Un romance aparentemente perfecto se convierte en algo sombrío cuando una madre se convence de que el nuevo novio de su hija tiene una siniestra conexión con su propio pasado. Ella está convencida que él es la reencarnación de un hombre que intentó matarla hace 30 años.', 'Full HD', 'https://www.youtube.com/embed/c-e4_oQ3HOs', 'Terror | Misterio | Suspenso', 'Latino e Inglés subtitulada'),
(2, '1604186980-black-box.jpg', 'La caja negra', 'Un padre soltero está luchando por recuperar su memoria después de sobrevivir un trágico accidente de auto. Desesperado para regresar a su yo anterior mientras intenta criar a su hija, recibe un tratamiento experimental que lo ayuda a sondear su pasado, el cual repentinamente se siente demasiado osc', 'Full HD', 'https://www.youtube.com/embed/Qrc8wQqnl0g', 'Terror | Misterio | Ciencia ficción', 'Latino e Inglés subtitulada'),
(3, '1604079991-happy-halloween-scooby-doo.jpg', '¡Feliz Halloween, Scooby Doo!', 'El feriado favorito de Scooby Doo y Shaggy llega! Con monstruos falsos y dulces - Halloween es el paraíso para estos golosos que van puerta a puerta. Pero, este año, su dulce festividad se agria cuando las calabazas del vecindario son infectadas, creando jack-o-lanterns por todas partes y un líder c', 'Full HD', 'https://www.youtube.com/embed/lxy0FN6nvNM', 'Animación | Aventura | Comedia', 'Latino e Inglés subtitulada'),
(4, '1604187073-the-boys-in-the-band.jpg', 'Los chicos de la banda', '	\r\nLo que comienza como una velada de tragos y risas durante una fiesta de cumpleaños en Nueva York en 1968, deja a siete amigos gays con sentimientos callados y verdades enterradas luego de que aparezca un invitado sorpresa.', 'Full HD', 'https://www.youtube.com/embed/1lHz2MPJqIM', 'Drama', 'Latino e Inglés subtitulada'),
(5, '1602197360-come-to-daddy.jpg', 'Come to Daddy', 'La vida de Norval ha sido difícil. Actualmente viviendo con su madre, el agobiado joven está saliendo de problemas con el alcohol. Así que cuando recibe una carta inesperada de su padre alejado, Norval toma un autobús hasta el hogar recluído', '19 DIC', 'https://www.youtube.com/embed/_PITkX6Ymqo', 'Comedia | Terror | Misterio', 'Latino e Inglés subtitulada'),
(6, '1604079675-nocturne.jpg', 'Nocturno', 'Las hermanas gemelas Juliet y Vivian adoran tocar el piano. Para cuando es tiempo de graduarse de colegio, los logros de Vivian han eclipsado cualquier esperanza o aspiraciones que Juliet pudiera tener. Así que ella hace un trato con el diablo para superar a su hermana en una prestigiosa institución', 'Full HD', 'https://www.youtube.com/embed/7AoGu5WxduM', 'Terror | Misterio | Suspenso', 'Latino e Inglés subtitulada'),
(7, '1602197723-9082023d4d9880e2c00beba4ec6bade2.jpg', 'El diablo a todas horas', 'En Knockemstiff, Ohio, personajes siniestros convergen alrededor de Arvin Russell, un joven dedicado a protegerse a sí mismo.', '13 AGOS', 'https://www.youtube.com/embed/KtN6fpjRSHs', 'Crimen | Drama | Suspenso', 'Latino e Inglés subtitulada'),
(8, '1602197773-1602027134-la-vieja-guardia.jpg', 'La vieja guardia', 'Un grupo secreto de mercenarios con la misteriosa inhabilidad de morir han luchado por siglos. Pero cuando sus extraordinarias habilidades del equipo son repentinamente expuestas.', '21 MAY', 'https://www.youtube.com/embed/OCDhMOrCEoc', 'Acción | Aventura | Fantasía', 'Latino e Inglés subtitulada'),
(9, '1604186745-hubie-halloween.jpg', 'El Halloween de Hubie', 'El excéntrico voluntario de la comunidad Hubie Dubois se encuentra en el centro de un caso real de asesinato en la noche de Halloween. A pesar de su devoción por su ciudad natal de Salem y sus legendarias celebraciones de Halloween, Hubie es una figura de burla tanto para niños como adultos.', 'Full HD', 'https://www.youtube.com/embed/atsyZcjMpsI', 'Comedia | Fantasía | Misterio', 'Latino e Inglés subtitulada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `netflix`
--

CREATE TABLE `netflix` (
  `info_id` int(11) NOT NULL,
  `imagenes` varchar(500) NOT NULL,
  `title` varchar(100) NOT NULL,
  `descriptions` varchar(10000) NOT NULL,
  `dates` varchar(100) NOT NULL,
  `trailer` varchar(400) NOT NULL,
  `genero` varchar(200) NOT NULL,
  `audio` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `netflix`
--

INSERT INTO `netflix` (`info_id`, `imagenes`, `title`, `descriptions`, `dates`, `trailer`, `genero`, `audio`) VALUES
(1, '1602352192-Narcos-Mexico-696x928.jpg', 'Narcos: México', 'La historia del surgimiento del cártel de la droga en Guadalajara, México, mientras un agente de la DEA investiga el mundo de los narcotraficantes.', 'Full HD', 'https://www.youtube.com/embed/eHdRMOAT-Lc', 'Serie de TV. Thriller. Acción. Drama | Basado en hechos reales. Secuela. Drogas. Policíaco. Años 80. Crimen. Mafia', 'Latino e Inglés subtitulada'),
(2, '1602216156-O_Mecanismo_official_artwork.jpg', 'El mecanismo', 'José Padilha (director de Tropa de élite y Narcos) es responsable de El Mecanismo, que retrata la operación Lava Jato, el mayor escándalo de corrupción de la historia de Brasil.', 'Full HD', 'https://www.youtube.com/embed/rXg9diXxlFk', 'Dramas de TV sobre drimen, Series de politica', 'Latino e Inglés subtitulada'),
(3, '1602214432-La_ley_de_los_audaces_Serie_de_TV-326951061-large.jpg', 'La Ley de los Audaces', 'Este drama legal es una serie favorita y no sólo de los abogados. Sobre todo si pensamos que uno de los personajes centrales, Mike, trabaja en uno de los bufetes más importantes de Nueva York sin haberse titulado.', 'Full HD', 'https://www.youtube.com/embed/zA_ArpyNaZM', 'Dramas de TV, Comedias de TV, Series de EE.UU', 'Latino e Inglés subtitulada'),
(5, '1602214812-Emily_en_Par_s_Serie_de_TV-243023667-large.jpg', 'Emily en París', 'Emily en Paris es la flamante producción de Darren Star, el creador de la famosa Sex and the City. Sin embargo, a diferencia de aquella serie coral -aunque podríamos debatirlo-, en este caso hay una protagonista excluyente: la Emily del título interpretada por Lily Collins. ', 'Full HD', 'https://www.youtube.com/embed/HvYcfmPPows', 'Dramas de TV románticos, Comedias de TV románticas, Dramas de TV ', 'Latino e Inglés subtitulada'),
(6, '1602214847-Gambito_de_reina_Miniserie_de_TV-906552919-large.jpg', 'Gambito de reina', 'La producción de la dupla Allan Scott-Scott Frank consta de siete capítulos que finalmente pudieron filmarse tras numerosos intentos de adquirir los derechos de la obra y de llevarla a buen puerto.', 'Full HD', 'https://www.youtube.com/embed/lbleRbyGKL4', 'Series basadas en libros, Dramas sociales de TV, Dramas de TV', 'Latino e Inglés subtitulada'),
(7, '1602214883-The_Alienist_Angel_of_Darkness_Miniserie_de_TV-717432322-large.jpg', 'The alienist', 'En esta oportunidad, los protagonistas deberán investigar un caso perturbador: la desaparición de una niña. Asimismo, la veremos a Sara (Fanning) dando un importante paso en su carrera con la apertura de su propia agencia de detectives.\r\n', 'Full HD', 'https://www.youtube.com/embed/YtzgFRBvRy8', 'Dramas de TV sobre crimen, Series basadas en libros, Ambientadas en otra época', 'Latino e Inglés subtitulada'),
(8, '1602214921-81Lq44yDCDL._SL1500_.jpg', 'La maldición de BLY MANOR', 'La recepción fue tan buena, que la plataforma de streaming decidió proseguir a través del formato de antología. Así fue cómo nació La maldición de Bly Manor, nuevamente con el talentoso Flanagan como showrunner.', 'Full HD', 'https://www.youtube.com/embed/ME_tm0QC6pQ', 'Series basadas en libros, Miesterios para TV, Dramas de  TV', 'Latino e Inglés subtitulada'),
(11, '1602214991-friends-1.jpg', 'Friends', 'Las aventuras de seis jóvenes neoyorquinos unidos por una divertida amistad. Entre el amor, el trabajo y la familia, comparten sus alegrías y preocupaciones en el Central Perk, su café favorito.', 'Full HD', 'https://www.youtube.com/embed/oqDSrMK_Gyg', 'Sitcoms, Comedias de TV, Series De EE.UU', 'Latino e Inglés subtitulada'),
(12, '1602215899-AAAABe_RL_xtqpmGLKgQpt_8tQscesQQ-YqjKa0MWlutMOe-uGq2_WSND3sZ5JKJHQ2jX1paAWwbc6H58-liFU1e9HBw3gTG.jpg', 'Secreto bien guardado', 'En ese contexto conoce y se enamora de Marthin Müller (Victorio D-Alessandro), un abogado alemán nazi que se hospeda en el mismo lugar junto a un grupo de diplomáticos. La atracción entre ambos no tardará en surgir.', 'Full HD', 'https://www.youtube.com/embed/4dB0Ba7HRKY', 'Dramas de TV románticos, Series basadas en libros, TV argentina', 'Latino e Inglés subtitulada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reciente`
--

CREATE TABLE `reciente` (
  `id` int(11) NOT NULL,
  `imagenes` varchar(500) NOT NULL,
  `titles` varchar(120) NOT NULL,
  `descriptions` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registered`
--

CREATE TABLE `registered` (
  `info_id` int(11) NOT NULL,
  `imagenes` varchar(500) NOT NULL,
  `title` varchar(100) NOT NULL,
  `descriptions` varchar(10000) NOT NULL,
  `dates` varchar(100) NOT NULL,
  `trailer` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registered`
--

INSERT INTO `registered` (`info_id`, `imagenes`, `title`, `descriptions`, `dates`, `trailer`) VALUES
(1, '1602181701-body-cam.jpg', 'Come to Daddy', 'La vida de Norval ha sido difícil. Actualmente viviendo con su madre, el agobiado joven está saliendo de problemas con el alcohol. Así que cuando recibe una carta inesperada de su padre alejado, Norval toma un autobús hasta el hogar recluído.', '27 JUL', 'https://www.youtube.com/watch?v=XLPxuqcEVso'),
(2, '.././assets/img/index/9082023d4d9880e2c00beba4ec6bade2.jpg', 'El diablo a todas horas', 'En Knockemstiff, Ohio, personajes siniestros convergen alrededor de Arvin Russell, un joven dedicado a protegerse a sí mismo.', '28 NOVB', 'https://youtu.be/KtN6fpjRSHs'),
(3, '.././assets/img/index/body-cam.jpg', 'Cámara policial', 'Cuando una parada de tránsito de rutina resulta en la inexplicable y espeluznante muerte de su colega, una policía se da cuenta que las imágenes del incidente solo reproducirán frente a sus ojos. Mientras los ataques aumentan, ella debe acelerar el paso para descubrir la fuerza sobrenatural por detr', '05 NOVB', 'https://youtu.be/lt1hodBObHw'),
(4, '.././assets/img/index/pets-united.jpg', 'Mascotas unidas ', 'Un grupo de mascotas consentidas y egoístas lideradas por la glamorosa gata Belle quedan atrapadas en su lujoso lugar \"Mascotas Mimadas\" cuando las máquinas que mantienen Robo City, la hipermoderna metrópolis en la que viven, enloquecen y asumen el control. Ahora Roger, un perro callejero, y Belle, ', '17 ABRI', 'https://youtu.be/BMnT6YNC2Z8'),
(5, '.././assets/img/index/come-to-daddy.jpg', 'Come to Daddy', 'La vida de Norval ha sido difícil. Actualmente viviendo con su madre, el agobiado joven está saliendo de problemas con el alcohol. Así que cuando recibe una carta inesperada de su padre alejado, Norval toma un autobús hasta el hogar recluído', '09 MAY', 'https://youtu.be/_PITkX6Ymqo'),
(6, '.././assets/img/index/aves-de-presa-y-la-fantabulosa-emancipacion-de-harley-quinn-4k (1).jpg', 'Aves de presa', 'Cuando el nefasto villano de Gotham, Roman Sionis, y su mano derecha, Zsasz, piden una recompensa por una joven llamada Cass, toda la ciudad comienza a buscarla.', '28 OCT', 'https://youtu.be/xthGgPbyhD4'),
(7, '.././assets/img/index/bad-boys-for-life-4k (1).jpg', 'Bad Boys para siempre', 'Marcus y Mike deben confrontar cambios de carrera y crisis de edad media, cuando se unen a un equipo de élite recién creado del departamento de policía de Miami para capturar al implacable Armando Armas, líder de un cartel de drogas.', '18 NOV', 'https://youtu.be/HxbngF7jz3w'),
(8, '.././assets/img/index/star-wars-the-rise-of-skywalker-4k (1).jpg', 'El ascenso de Skywalker', 'Los miembros sobrevivientes de la resistencia se enfrentan a la Primera Orden una vez más, y el legendario conflicto entre los Jedi y los Sith alcanza su punto máximo llevando la saga Skywalker a su fin.', '19 ENR', 'https://youtu.be/AXRAdmJvzcs'),
(9, '.././assets/img/index/la-vieja-guardia.jpg', 'La vieja guardia', 'Un grupo secreto de mercenarios con la misteriosa inhabilidad de morir han luchado por siglos. Pero cuando sus extraordinarias habilidades del equipo son repentinamente expuestas.', '06 FEBR', 'https://youtu.be/OCDhMOrCEoc');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rool`
--

CREATE TABLE `rool` (
  `id` int(11) NOT NULL,
  `profile_image` varchar(400) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rool`
--

INSERT INTO `rool` (`id`, `profile_image`, `username`, `password`, `created_at`) VALUES
(4, '', 'Admin', '$2y$10$3623JvAXBSzS5fwU..twr.MnStgd3iwCdQFxFhFlEKUuKvK2rhJme', '2020-10-29 19:24:22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `series`
--

CREATE TABLE `series` (
  `info_id` int(11) NOT NULL,
  `imagenes` varchar(500) NOT NULL,
  `title` varchar(100) NOT NULL,
  `descriptions` varchar(10000) NOT NULL,
  `dates` varchar(100) NOT NULL,
  `trailer` varchar(400) NOT NULL,
  `genero` varchar(200) NOT NULL,
  `audio` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `series`
--

INSERT INTO `series` (`info_id`, `imagenes`, `title`, `descriptions`, `dates`, `trailer`, `genero`, `audio`) VALUES
(1, '1603545182-agents_of_chaos-853286523-large.jpg', 'Agentes del caos', 'Documental que explora las interferencias de Rusia en las elecciones presidenciales de Estados Unidos en 2016 que llevaron a Donald Trump a la Casa Blanca. (FILMAFFINITY)', 'Full HD', 'https://www.youtube.com/embed/M-OA7H8DoJM', 'Documental. Serie de TV | Miniserie de TV. Política', 'Latino e Inglés subtitulada'),
(2, '1603545233-patria-826127407-large.jpg', 'Patria ', 'Miniserie de 8 episodios basada en la novela homónima de Fernando Aramburu, que abarca 30 años del conflicto vasco y estudia el impacto del mismo sobre la gente común, como la viuda de un hombre asesinado a tiros por la banda terrorista ETA, que vuelve a su pueblo natal tras el alto el fuego de 2011', 'Full HD', 'https://www.youtube.com/embed/K5eCmq5WhGA', 'Serie de TV. Drama | Miniserie de TV. Terrorismo. ETA', 'Latino e Inglés subtitulada'),
(3, '1603545281-escenario_0_hermanas_tv-601934737-large.jpg', 'Escenario 0: Hermanas', 'Primer episodio de una serie de 6, en este caso sobre un texto del dramaturgo francés Pascal Rambert sobre un grave conflicto entre dos hermanas. Un momento de reproche y de amor.', 'Full HD', 'https://www.youtube.com/embed/83_ltNB1FnM', 'Drama | Teatro. Telefilm', 'Latino e Inglés subtitulada'),
(4, '1603545320-por_h_o_por_b_tv_series-409827720-large.jpg', 'Por H o por B', 'Con el madrileño barrio de Malasaña convertido en un personaje más, contará la historia de Hache y Belén, dos amigas de Parla que, tras años sin hablarse, se reencuentran en su nueva vida en el centro de la ciudad. El inevitable choque cultural entre los dos mundos dará lugar a una catástrofe de div', 'Full HD', 'https://www.youtube.com/embed/CpCQbFA-RO8', 'Serie de TV. Comedia', 'Latino e Inglés subtitulada'),
(5, '1603545379-the_third_day_tv_series-845979865-large.jpg', 'El tercer día ', '6 episodios. La línea entre la realidad y la fantasía comienza a desdibujarse para un hombre que visita una misteriosa isla frente a la costa británica.', 'Full HD', 'https://www.youtube.com/embed/T43V6z9wYyE', 'Serie de TV. Drama', 'Latino e Inglés subtitulada'),
(6, '1603545425-i_may_destroy_you-140314219-large.jpg', 'Podría destruirte', 'Arabella Essiuedu (Michaela Coel) es una joven escritora fácilmente distraída, descomprometida y despreocupada que, tras escribir un exitoso texto que atrajo mucha atención en internet, se encuentra proclamada como la ‘voz de su generación’.', 'Full HD', 'https://www.youtube.com/embed/VnSQD7RKQs0', 'Serie de TV. Drama | Miniserie de TV. Abusos sexuales. Feminismo', 'Latino e Inglés subtitulada'),
(7, '1603545465-3204909.jpg-r_1920_1080-f_jpg-q_x-xxyxx.jpg', 'Perry Mason ', 'Ambientada en Los Ángeles en 1932, Perry Mason toma el caso más importante de toda su vida en este remake del clásico de la CBS que se emitió entre 1957 y 1966.', 'Full HD', 'https://www.youtube.com/embed/_5O3cMmg3JQ', 'Serie de TV. Drama | Remake. Drama judicial. Crimen. Años 30', 'Latino e Inglés subtitulada'),
(8, '1603545522-bully_coward_victim_the_story_of_roy_cohn-264630327-large.jpg', 'La historia de Roy Cohn', 'Una mirada a la vida y carrera del famoso abogado neoyorquino Roy M. Cohn, cuya carrera fue conocida principalmente por ser el brazo derecho del Senador Joseph McCarthy ', 'Full HD', 'https://www.youtube.com/embed/wvpCDJ1seVs', 'Documental', 'Latino e Inglés subtitulada'),
(9, '1603545562-doom2.jpg', 'Doom Patrol', 'Reimaginación de uno de los grupos de superhéroes más emblemáticos de DC: Robotman, Negative Man, Elasti-Girl y Crazy Jane, liderados por el científico loco Dr. Niles Caulder. Los miembros de esta peculiar patrulla rememoran las circunstancias que les llevaron a obtener sus habilidades sobrehumanas,', 'Full HD', 'https://www.youtube.com/embed/6tTM9nbRk5A', 'Serie de TV. Acción. Fantástico | Crimen. Superhéroes. Cómic. DC Comics', 'Latino e Inglés subtitulada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `profile_image` varchar(400) NOT NULL,
  `background` varchar(400) NOT NULL,
  `bio` text NOT NULL,
  `nombre` text NOT NULL,
  `apellido` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `genero` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `profile_image`, `background`, `bio`, `nombre`, `apellido`, `email`, `telefono`, `genero`, `username`, `password`, `created_at`) VALUES
(10, '', '', '', '', '', '', '', '', 'Axel', '$2y$10$pOy404.1lT5Bla2jDRuFMOheXodhONX4Yq2i6PazzwSeZHOBb1dxu', '2020-10-24 09:13:01'),
(11, '', '', '', '', '', '', '', '', 'Vero', '$2y$10$DUCFCjW6OPXoJJLGCFI89esY6.GzBazGn2NNWimequHDolR11O5ga', '2020-11-01 19:30:31'),
(12, '', '', '', '', '', '', '', '', 'aranibar', '$2y$10$skwepSFNiKwreR7VOHxove80g1D0CQT1dJXcJNl.olGI4T.lmPisS', '2020-11-03 12:15:13');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estrenos`
--
ALTER TABLE `estrenos`
  ADD PRIMARY KEY (`info_id`);

--
-- Indices de la tabla `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`info_id`);

--
-- Indices de la tabla `netflix`
--
ALTER TABLE `netflix`
  ADD PRIMARY KEY (`info_id`);

--
-- Indices de la tabla `reciente`
--
ALTER TABLE `reciente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registered`
--
ALTER TABLE `registered`
  ADD PRIMARY KEY (`info_id`);

--
-- Indices de la tabla `rool`
--
ALTER TABLE `rool`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `series`
--
ALTER TABLE `series`
  ADD PRIMARY KEY (`info_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `estrenos`
--
ALTER TABLE `estrenos`
  MODIFY `info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `information`
--
ALTER TABLE `information`
  MODIFY `info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `netflix`
--
ALTER TABLE `netflix`
  MODIFY `info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `reciente`
--
ALTER TABLE `reciente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `registered`
--
ALTER TABLE `registered`
  MODIFY `info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `rool`
--
ALTER TABLE `rool`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `series`
--
ALTER TABLE `series`
  MODIFY `info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
