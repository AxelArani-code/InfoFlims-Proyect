##Base de datos, creacion de tablas 
##code 
##-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

##Instalaciones de jquery 
1.npm install jquery
2.yarn add jquery

##Para ver el código más con detalles el link
https://github.com/AxelArani-code/Proyecto-de-Pra-Profecionalizante

##La finalidad de este proyecto es, mejorar una buena información al usuario con las tendencias de películas y series en la actualidad. Y un mejor entretenimiento para ello.
##Los lenguajes utilizados son: html, bootstrap, php, Jquery.

##Mi Cv es: 
