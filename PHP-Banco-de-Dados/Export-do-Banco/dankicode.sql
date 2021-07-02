-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Jul-2021 às 07:14
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dankicode`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id` varchar(3) NOT NULL,
  `nome` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id`, `nome`) VALUES
('ESP', 'Esportes'),
('GRL', 'Geral'),
('VGS', 'Vídeo Games');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `nascimento` date DEFAULT NULL,
  `sexo` enum('M','F') DEFAULT NULL,
  `peso` decimal(5,2) DEFAULT NULL,
  `altura` decimal(3,2) DEFAULT NULL,
  `nacionalidade` varchar(50) DEFAULT 'Brasil',
  `hora` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `nascimento`, `sexo`, `peso`, `altura`, `nacionalidade`, `hora`) VALUES
(1, 'Jônatas Soares Alves', '2000-04-19', 'M', '115.00', '1.75', 'Brasil', '23:00:15'),
(2, 'Gustavo Pereira Junior', '2001-05-15', 'M', '74.25', '1.87', 'Estados Unidos', '23:35:45'),
(3, 'Jhon Vincent', '1990-09-20', 'M', '87.16', '1.67', 'Canada', '00:27:30');

-- --------------------------------------------------------

--
-- Estrutura da tabela `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `idCategoria` varchar(3) DEFAULT NULL,
  `titulo` varchar(25) DEFAULT NULL,
  `texto` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `post`
--

INSERT INTO `post` (`id`, `idCategoria`, `titulo`, `texto`) VALUES
(1, 'ESP', 'Matéria de esportes', 'Esportes, sports, volei ball, golf, futebol, ciclismo, coirrida, rápido. Esportes, sports, volei ball, golf, futebol, ciclismo, coirrida, rápido. Esportes, sports, volei ball, golf, futebol, ciclismo, coirrida, rápido. Esportes, sports, volei ball, golf, futebol, ciclismo, coirrida, rápido. Esportes, sports, volei ball, golf, futebol, ciclismo, coirrida, rápido. Esportes, sports, volei ball, golf, futebol, ciclismo, coirrida, rápido.\r\nFim.'),
(2, 'VGS', 'Segredos dos Jogos', 'Na parte 25 do jogo do ano, é possível ver uma cuscene especial, que é apenas desbloqueada caso você tenha dito \"X\" para um NPC específico, depois disso bata 25 vezes na porta a direita referênciando a parte do jogo, pegue o chapel no chão e equipe, permaneça com o chapel até chegar a parte 25 e pronto! Já avisamos que não é fácil, pois o chapel te efraquece significantemente e muda diálogos de alguns NPCs o que de certa forma, faz parte do segredo.'),
(3, 'GRL', 'Noticia Geral', 'Aconteceu alguma coisa em algum lugar ali e essa é a parte que importa, exatamente as 13:00 da tarde esse evento começou e foi um estouro, fique ligado para a próxima notícia. Aconteceu alguma coisa em algum lugar ali e essa é a parte que importa, exatamente as 13:00 da tarde esse evento começou e foi um estouro, fique ligado para a próxima notícia. Aconteceu alguma coisa em algum lugar ali e essa é a parte que importa, exatamente as 13:00 da tarde esse evento começou e foi um estouro, fique ligado para a próxima notícia.'),
(4, 'VGS', 'Novo Jogo!', 'O jogo realmente é muito bom de acordo com as avaliações dos testers da equipe do jornal, tem bastante gente no hype pro lançamento mas estranhamente nenhuma prevenda desde que esteve aberta, muitas pessoas se juntaram em uma comunidade no Reddit para que tal feito acontecesse. O jogo realmente é muito bom de acordo com as avaliações dos testers da equipe do jornal, tem bastante gente no hype pro lançamento mas estranhamente nenhuma prevenda desde que esteve aberta, muitas pessoas se juntaram em uma comunidade no Reddit para que tal feito acontecesse.'),
(5, 'GRL', 'Notícia Inédita!', 'A perseguição do ultimo mês... Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto molestiae voluptates ipsum aspernatur repudiandae laudantium placeat quos quo libero quidem dolores ratione, impedit vero porro nostrum possimus nisi, corrupti facere.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto molestiae voluptates ipsum aspernatur repudiandae laudantium placeat quos quo libero quidem dolores ratione, impedit vero porro nostrum possimus nisi, corrupti facere.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto molestiae voluptates ipsum aspernatur repudiandae laudantium placeat quos quo libero quidem dolores ratione, impedit vero porro nostrum possimus nisi, corrupti facere.');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idCategoria` (`idCategoria`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`idCategoria`) REFERENCES `categoria` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
