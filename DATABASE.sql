CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(80) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `authKey` varchar(250) NOT NULL,
  `accessToken` varchar(250) NOT NULL,
  `activate` tinyint(1) NOT NULL DEFAULT 1,
    PRIMARY key( `id`)
);

CREATE TABLE `campaing` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_termino` date NOT NULL,
    PRIMARY KEY (`id`),
    FOREIGN KEY (`id_user`) REFERENCES `users` (`id`)
);

CREATE TABLE `adsets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_campaing` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `presupuesto` decimal(14,2) NOT NULL,
   PRIMARY KEY (`id`),
   FOREIGN KEY (`id_campaing`) REFERENCES `campaing` (`id`)
);
