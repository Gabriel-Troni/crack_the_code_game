-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Nov-2023 às 20:08
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_crack_code`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipes`
--

CREATE TABLE `equipes` (
  `idEquipe` int(11) NOT NULL,
  `nomeEquipe` varchar(60) NOT NULL,
  `senhaEquipe` varchar(200) NOT NULL,
  `admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `equipes`
--

INSERT INTO `equipes` (`idEquipe`, `nomeEquipe`, `senhaEquipe`, `admin`) VALUES
(1, 'Equipe 1', '7c3c6f3063fdc735e43004c3085102860d54a48e', 1),
(2, 'Equipe 2', '7c3c6f3063fdc735e43004c3085102860d54a48e', 2),
(3, 'Equipe 3', '7c3c6f3063fdc735e43004c3085102860d54a48e', 3),
(4, 'Equipe 4', '7c3c6f3063fdc735e43004c3085102860d54a48e', 7),
(5, 'Equipe 5', '7c3c6f3063fdc735e43004c3085102860d54a48e', 9),
(6, 'Equipe 6', '7c3c6f3063fdc735e43004c3085102860d54a48e', 11),
(10, 'teste23', '7c3c6f3063fdc735e43004c3085102860d54a48e', 20),
(11, 'Equipe 7', 'de543e0bdbee46ff6c415f8ef4e2bc169fb19bd0', 12),
(12, 'Equipe 8', 'ce1e90f9bc15c7e94e19fd8682ddeb1dc79075c2', 13),
(13, 'Equipe 9', '7461690ca67db08dc8067e99ed29250f4e3d03cb', 14),
(14, 'Equipe 10', '3b42955ec246ea5c9d89d94cfab2a2c0cda7b06a', 15);

-- --------------------------------------------------------

--
-- Estrutura da tabela `partidas`
--

CREATE TABLE `partidas` (
  `email` varchar(80) NOT NULL,
  `data` timestamp NOT NULL DEFAULT current_timestamp(),
  `points` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `partidas`
--

INSERT INTO `partidas` (`email`, `data`, `points`) VALUES
('raulteste@dev.com', '2023-11-30 16:31:02', 64),
('raulteste@dev.com', '2023-11-30 16:32:21', 0),
('raulteste@dev.com', '2023-11-30 16:44:09', 0),
('raulteste@dev.com', '2023-11-30 16:49:30', 0),
('raulteste@dev.com', '2023-11-30 16:55:30', 0),
('raulteste@dev.com', '2023-11-30 17:01:30', 0),
('usuario16@example.com', '2023-11-30 21:30:00', 80),
('usuario16@example.com', '2023-11-30 22:45:00', 90),
('usuario16@example.com', '2023-12-01 00:00:00', 40),
('usuario17@example.com', '2023-11-30 21:45:00', 45),
('usuario17@example.com', '2023-11-30 23:00:00', 15),
('usuario17@example.com', '2023-12-01 00:15:00', 85),
('usuario18@example.com', '2023-11-30 22:00:00', 60),
('usuario18@example.com', '2023-11-30 23:15:00', 50),
('usuario18@example.com', '2023-12-01 00:30:00', 55),
('usuario19@example.com', '2023-11-30 22:15:00', 30),
('usuario19@example.com', '2023-11-30 23:30:00', 70),
('usuario19@example.com', '2023-12-01 00:45:00', 10),
('usuario20@example.com', '2023-11-30 22:30:00', 75),
('usuario20@example.com', '2023-11-30 23:45:00', 25),
('usuario20@example.com', '2023-12-01 01:00:00', 65);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `idUser` int(11) NOT NULL,
  `nomeUser` varchar(60) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(60) NOT NULL,
  `equipe` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`idUser`, `nomeUser`, `email`, `password`, `equipe`) VALUES
(1, 'Usuário 1', 'usuario1@example.com', 'senha1', 1),
(2, 'Usuário 2', 'usuario2@example.com', 'senha2', 2),
(3, 'Usuário 3', 'usuario3@example.com', 'senha3', 3),
(4, 'Usuário 4', 'usuario4@example.com', 'senha4', 1),
(5, 'Usuário 5', 'usuario5@example.com', 'senha5', 2),
(6, 'Usuário 6', 'usuario6@example.com', 'senha6', 3),
(7, 'Usuário 7', 'usuario7@example.com', 'senha7', 4),
(8, 'Usuário 8', 'usuario8@example.com', 'senha8', 4),
(9, 'Usuário 9', 'usuario9@example.com', 'senha9', 5),
(10, 'Usuário 10', 'usuario10@example.com', 'senha10', 5),
(11, 'Usuário 11', 'usuario11@example.com', 'senha11', 6),
(12, 'Usuário 12', 'usuario12@example.com', 'senha12', 6),
(13, 'Usuário 13', 'usuario13@example.com', 'senha13', 1),
(14, 'Usuário 14', 'usuario14@example.com', 'senha14', 2),
(15, 'Usuário 15', 'usuario15@example.com', 'senha15', 3),
(16, 'teste', 'teste@teste.com', '2e6f9b0d5885b6010f9167787445617f553a735f', NULL),
(17, 'teste', 'teste@tes2.com', '8cb2237d0679ca88db6464eac60da96345513964', NULL),
(18, 'teste567', 'testeteste567@teste567.com', 'e0f68134d29dc326d115de4c8fab8700a3c4b002', NULL),
(19, 'raul', 'raulteste@dev.com', 'e0f68134d29dc326d115de4c8fab8700a3c4b002', 10),
(20, 'raul2', 'raul2@teste.com', 'e0f68134d29dc326d115de4c8fab8700a3c4b002', 10),
(21, 'Usuário 16', 'usuario16@example.com', '3fbd35d2aeab222ce8479081d0de1e634bd6a180', 4),
(22, 'Usuário 17', 'usuario17@example.com', '6d607561ee5df3d97800eeac1544fdf1d60ad19c', 5),
(23, 'Usuário 18', 'usuario18@example.com', 'b41817cbf284ea5dd71a11f5166b1101f81b1ead', 6),
(24, 'Usuário 19', 'usuario19@example.com', 'acc9773a0eca09ed1a3fb5fc34d87a9002af8021', 2),
(25, 'Usuário 20', 'usuario20@example.com', 'd38538a0463ddd9032d3dcdd8680c7fad5182335', 3);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `equipes`
--
ALTER TABLE `equipes`
  ADD PRIMARY KEY (`idEquipe`),
  ADD UNIQUE KEY `nome_equipe` (`nomeEquipe`),
  ADD KEY `fk_adm` (`admin`);

--
-- Índices para tabela `partidas`
--
ALTER TABLE `partidas`
  ADD PRIMARY KEY (`email`,`data`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUser`),
  ADD KEY `fk_equipe` (`equipe`),
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `equipes`
--
ALTER TABLE `equipes`
  MODIFY `idEquipe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `equipes`
--
ALTER TABLE `equipes`
  ADD CONSTRAINT `fk_adm` FOREIGN KEY (`admin`) REFERENCES `users` (`idUser`);

--
-- Limitadores para a tabela `partidas`
--
ALTER TABLE `partidas`
  ADD CONSTRAINT `fk_email` FOREIGN KEY (`email`) REFERENCES `users` (`email`);

--
-- Limitadores para a tabela `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_equipe` FOREIGN KEY (`equipe`) REFERENCES `equipes` (`idEquipe`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
