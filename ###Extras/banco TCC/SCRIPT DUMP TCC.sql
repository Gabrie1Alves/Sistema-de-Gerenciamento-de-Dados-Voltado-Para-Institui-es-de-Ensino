-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Dez-2022 às 19:13
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `tccii`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `id` int(11) NOT NULL,
  `matricula` int(11) NOT NULL,
  `turma` varchar(20) NOT NULL,
  `mae` varchar(60) NOT NULL,
  `pai` varchar(60) DEFAULT NULL,
  `nascimento` varchar(10) NOT NULL,
  `rg` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`id`, `matricula`, `turma`, `mae`, `pai`, `nascimento`, `rg`) VALUES
(1, 8, 'A-1', 'Maria Alves', 'José Maria', '1998-09-30', '00.000.007'),
(2, 9, 'A-1', 'Rosângela Figueiredo', 'João da Silva', '1998-09-30', '00.000.008'),
(3, 10, 'A-1', 'Aparecida Almeida', 'Baltazar Almeida', '1998-09-30', '00.000.009'),
(4, 11, 'A-1', 'Maria Antonio', 'José Antonio', '1998-09-30', '00.000.010'),
(5, 12, 'A-1', 'Aline Fonseca', 'Italo Fonseca', '1998-09-30', '00.000.011'),
(6, 13, 'A-1', 'Rosa Souza', 'Mario Souza', '1998-09-30', '00.000.012'),
(7, 14, 'A-1', 'Joana Rosedo', 'Pedro Rosedo', '1998-09-30', '00.000.013'),
(8, 15, 'A-1', 'Marcela Augusto', 'Pedro Augusto', '1998-09-30', '00.000.014'),
(9, 16, 'A-1', 'Itala Resende da Silva', 'Joao Resende da Silva', '1998-09-30', '00.000.015'),
(10, 17, 'A-1', 'Elaine Ribeiro', 'Alex Ribeiro', '1998-09-30', '00.000.016'),
(11, 18, 'A-1', 'Rita Fonseca', 'Giovani Fonseca', '1998-09-30', '00.000.017'),
(12, 19, 'A-1', 'Itala Rocha', 'Manoel Rocha', '1998-09-30', '00.000.018'),
(13, 20, 'A-1', 'Isabel Gomes', 'Italo Gomes', '1998-09-30', '00.000.019'),
(14, 21, 'A-1', 'Lorraine Babos', 'Pedro Babos', '1998-09-30', '00.000.020'),
(15, 22, 'A-1', 'Lorem Campos', 'Ramon Campos', '1998-09-30', '00.000.021'),
(16, 23, 'A-1', 'Lorraine Aparecido', 'Jonatan Aparecido', '1998-09-30', '00.000.022'),
(17, 24, 'A-1', 'Regiane Augusto', 'Pedro Augusto', '1998-09-30', '00.000.023'),
(18, 25, 'A-1', 'Larissa Pereira', 'José Pereira', '1998-09-30', '00.000.025'),
(19, 26, 'A-1', 'Cleide Suzano', 'Luis Suzano', '1998-09-30', '00.000.026'),
(20, 27, 'A-1', 'Cleide Barbosa', 'Pedro Barbosa', '1998-09-30', '00.000.027');

-- --------------------------------------------------------

--
-- Estrutura da tabela `atividades_avaliativas`
--

CREATE TABLE `atividades_avaliativas` (
  `id` int(11) NOT NULL,
  `sigla_turma` varchar(20) NOT NULL,
  `sigla_disc` varchar(20) NOT NULL,
  `data` varchar(10) NOT NULL,
  `horario` varchar(10) NOT NULL,
  `titulo` varchar(60) NOT NULL,
  `resumo` varchar(200) NOT NULL,
  `valor` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `atividades_avaliativas`
--

INSERT INTO `atividades_avaliativas` (`id`, `sigla_turma`, `sigla_disc`, `data`, `horario`, `titulo`, `resumo`, `valor`) VALUES
(1, 'A-1', 'PT-1', '2023-03-20', '10:00', 'Avaliação 1', 'Primeira avaliação de português', 20),
(2, 'A-1', 'PT-1', '2023-05-20', '10:00', 'Avaliação 2', 'Segunda avaliação de português', 20),
(3, 'A-1', 'PT-1', '2023-07-20', '08:00', 'Avaliação 3', 'Terceira avaliação de português', 20),
(4, 'A-1', 'PT-1', '2023-09-20', '08:00', 'Trabalho', 'Trabalho final de português', 40),
(5, 'A-1', 'MT-1', '2023-03-15', '08:00', 'Avaliação 1', 'Primeira avaliação de matemática', 30),
(6, 'A-1', 'MT-1', '2023-06-15', '10:00', 'Avaliação 2', 'Sgunda avaliação de matemática', 30),
(7, 'A-1', 'MT-1', '2023-09-15', '10:00', 'Avaliação 3', 'Terceira avaliação de matemática', 40),
(8, 'A-1', 'HT-1', '2023-03-10', '10:00', 'Avaliação 1', 'Primeira Avaliação de História', 30),
(9, 'A-1', 'HT-1', '2023-06-10', '10:00', 'Avaliação 2', 'Segunda Avaliação de História', 30),
(10, 'A-1', 'HT-1', '2023-06-10', '10:00', 'Trabalho', 'Trabalho de História', 40),
(11, 'A-1', 'GF-1', '2023-03-12', '10:00', 'Avaliação 1', 'Primeira Avaliação de Geografia', 35),
(12, 'A-1', 'GF-1', '2023-06-12', '10:00', 'Avaliação 2', 'Segunda Avaliação de Geografia', 35),
(13, 'A-1', 'GF-1', '2023-09-12', '10:00', 'Trabalho', 'Trabalho de Geografia', 30),
(14, 'A-1', 'QM-1', '2023-03-22', '08:00', 'Avaliação 1', 'Primeira Avaliação de Química', 35),
(15, 'A-1', 'QM-1', '2023-06-22', '08:00', 'Avaliação 2', 'Segunda Avaliação de Química', 35),
(16, 'A-1', 'QM-1', '2023-06-22', '08:00', 'Avaliação 3', 'Terceira Avaliação de Química', 30),
(17, 'A-1', 'FS-1', '2023-03-12', '10:00', 'Avaliação 1', 'Primeira avaliação de Física', 25),
(19, 'A-1', 'FS-1', '2023-09-12', '10:00', 'Trabalho', 'Trabalho de Física', 40),
(20, 'A-1', 'FS-1', '2023-09-12', '10:00', 'Avaliação 2', 'Segunda avaliação de Física', 35);

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `id` int(11) NOT NULL,
  `matricula` int(11) NOT NULL,
  `telefone` varchar(12) DEFAULT NULL,
  `cel1` varchar(14) NOT NULL,
  `cel2` varchar(14) DEFAULT NULL,
  `email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`id`, `matricula`, `telefone`, `cel1`, `cel2`, `email`) VALUES
(1, 1, '34 3855-2262', '34 9 9797-0972', '34 9 9797-0972', 'paulohenrique@exemple.com'),
(2, 2, '34 1234-1234', '34 12345-1234', '34 12345-1234', 'mariapt@exemple.com'),
(3, 3, '34 1234-1234', '34 12345-1234', '34 12345-1234', 'joelbraga@exemple.com'),
(4, 4, '34 1234-1234', '11 12341-2345', '11 12345-1234', 'norma@exemple.com'),
(5, 5, '34 1452-1452', '11 14521-1452', '33 14521-4521', 'paula@exemple.com'),
(6, 6, '21 7894-7894', '21 78945-7894', '12 45674-5678', 'douglas@exemple.com'),
(7, 7, '22 1234-1111', '12 12345-1234', '12 14569-1456', 'joelma@exemple.com'),
(8, 8, '21 1234-1234', '21 12341-2342', '21 12341-2343', 'gabriel1@exemple.com'),
(9, 9, '21 1234-1234', '21 12341-2342', '21 12341-2343', 'joao1213@exemple.com'),
(10, 10, '21 1234-1234', '21 12341-2342', '21 12341-2343', 'luis132@exemple.com'),
(11, 11, '21 1234-1234', '21 12341-2342', '21 12341-2343', 'pedro8123@exemple.com'),
(12, 12, '21 1234-1234', '21 12341-2342', '21 12341-2343', 'Lucasasd@exemple.com'),
(13, 13, '21 1234-1234', '21 12341-2342', '21 12341-2343', 'marcela132@exemple.com'),
(14, 14, '21 1234-1234', '21 12341-2342', '21 12341-2343', 'isabel312@exemple.com'),
(15, 15, '21 1234-1234', '21 12341-2342', '21 12341-2343', 'pedro91823@exemple.com'),
(16, 16, '21 1234-1234', '21 12341-2342', '21 12341-2343', 'jordana81732@exemple.com'),
(17, 17, '21 1234-1234', '21 12341-2342', '21 12341-2343', 'giovani123a@exemple.com'),
(18, 18, '21 1234-1234', '21 12341-2342', '21 12341-2343', 'jonatan1023@exemple.com'),
(19, 19, '21 1234-1234', '21 12341-2342', '21 12341-2343', 'pedro019231@exemple.com'),
(20, 20, '21 1234-1234', '21 12341-2342', '21 12341-2343', 'manoel10322@exemple.com'),
(21, 21, '21 1234-1234', '21 12341-2342', '21 12341-2343', 'flavio10333@exemple.com'),
(22, 22, '21 1234-1234', '21 12341-2342', '21 12341-2343', 'nataliaa123@exemple.com'),
(23, 23, '21 1234-1234', '21 12341-2342', '21 12341-2343', 'ramon13@exemple.com'),
(24, 24, '21 1234-1234', '21 12341-2342', '21 12341-2343', 'lorem31222@exemple.com'),
(25, 25, '21 1234-1234', '21 12341-2342', '21 12341-2343', 'jorgeasdsad@exemple.com'),
(26, 26, '21 1234-1234', '21 12341-2342', '21 12341-2343', 'alex444@exemple.com'),
(27, 27, '21 1234-1234', '21 12341-2342', '21 12341-2343', 'vinicim@exemple.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

CREATE TABLE `endereco` (
  `id` int(11) NOT NULL,
  `matricula` int(11) NOT NULL,
  `rua` varchar(60) NOT NULL,
  `numero` int(11) NOT NULL,
  `complemento` varchar(60) DEFAULT NULL,
  `bairro` varchar(60) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `cidade` varchar(60) NOT NULL,
  `estado` varchar(60) NOT NULL,
  `pais` varchar(60) DEFAULT 'BRASIL'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `endereco`
--

INSERT INTO `endereco` (`id`, `matricula`, `rua`, `numero`, `complemento`, `bairro`, `cep`, `cidade`, `estado`, `pais`) VALUES
(1, 1, 'Rua das Flores', 201, 'Casa', 'centro', '38810-000', 'Rio Paranaiba', 'MG', 'Brasil'),
(2, 2, 'Rua das fores', 201, 'Casa', 'Centro', '38.810-00', 'Rio Paranaíba', 'MG', 'Brasil'),
(3, 3, 'Rua Larga', 25, 'Casa', 'Flores', '38.810-00', 'Rio Paranaíba', 'MG', 'Brasil'),
(4, 4, 'Rua Do Trabalho', 213, 'casa', 'Oeste', '38.810-00', 'Rio Paranaíba', 'MG', 'Brasil'),
(5, 5, 'Rua J', 25, 'Casa', 'Leste', '38.810-00', 'Rio Paranaíba', 'MG', 'Brasil'),
(6, 6, 'Rua K', 58, 'Casa', 'Sul', '38.810-00', 'Rio Paranaíba', 'MG', 'Brasil'),
(7, 7, 'Rua Girassol', 87, 'Casa', 'Centro', '38.810-00', 'Rio Paranaíba', 'MG', 'Brasil'),
(8, 8, 'Rua J', 201, 'Casa', 'Centro', '38.810-00', 'Rio Paranaíba', 'MG', 'Brasil'),
(9, 9, 'Rua K', 123, 'Casa', 'Centro', '38.810-00', 'Rio Paranaíba', 'MG', 'Brasil'),
(10, 10, 'Rua I', 512, 'Casa', 'Centro', '38.810-00', 'Rio Paranaíba', 'MG', 'Brasil'),
(11, 11, 'Rua H', 11, 'Casa', 'Centro', '38.810-00', 'Rio Paranaíba', 'MG', 'Brasil'),
(12, 12, 'Rua H', 178, 'Casa', 'Centro', '38.810-00', 'Rio Paranaíba', 'MG', 'Brasil'),
(13, 13, 'Rua W', 41, 'Casa', 'Centro', '38.810-00', 'Rio Paranaíba', 'MG', 'Brasil'),
(14, 14, 'Rua Das Flores', 132, 'Casa', 'Centro', '38.810-00', 'Rio Paranaíba', 'MG', 'Brasil'),
(15, 15, 'Rua Das Flores', 511, 'Casa', 'Centro', '38.810-00', 'Rio Paranaíba', 'MG', 'Brasil'),
(16, 16, 'Rua Y', 12, 'Casa', 'Centro', '38.810-00', 'Rio Paranaíba', 'MG', 'Brasil'),
(17, 17, 'Rua JK', 85, 'Casa', 'Centro', '38.810-00', 'Rio Paranaíba', 'MG', 'Brasil'),
(18, 18, 'Rua JDK', 31, 'Casa', 'Centro', '38.810-00', 'Rio Paranaíba', 'MG', 'Brasil'),
(19, 19, 'Rua JDK', 87, 'Casa', 'Centro', '38.810-00', 'Rio Paranaíba', 'MG', 'Brasil'),
(20, 20, 'Rua da Juventude', 133, 'Casa', 'Centro', '38.810-00', 'Rio Paranaíba', 'MG', 'Brasil'),
(21, 21, 'Rua da Juventude', 118, 'Casa', 'Centro', '38.810-00', 'Rio Paranaíba', 'MG', 'Brasil'),
(22, 22, 'Rua da Juventude', 4122, 'Casa', 'Centro', '38.810-00', 'Rio Paranaíba', 'MG', 'Brasil'),
(23, 23, 'Rua da Paz', 78, 'Casa', 'Centro', '38.810-00', 'Rio Paranaíba', 'MG', 'Brasil'),
(24, 24, 'Rua da Paz', 744, 'Casa', 'Centro', '38.810-00', 'Rio Paranaíba', 'MG', 'Brasil'),
(25, 25, 'Rua da Paz', 988, 'Casa', 'Centro', '38.810-00', 'Rio Paranaíba', 'MG', 'Brasil'),
(26, 26, 'Rua Florida', 933, 'Casa', 'Centro', '38.810-00', 'Rio Paranaíba', 'MG', 'Brasil'),
(27, 27, 'Rua Floripes', 4444, 'Casa', 'Centro', '38.810-00', 'Rio Paranaíba', 'MG', 'Brasil');

-- --------------------------------------------------------

--
-- Estrutura da tabela `gerenciador`
--

CREATE TABLE `gerenciador` (
  `id` int(11) NOT NULL,
  `matricula` int(11) NOT NULL,
  `rg` varchar(13) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `nascimento` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `gerenciador`
--

INSERT INTO `gerenciador` (`id`, `matricula`, `rg`, `cpf`, `nascimento`) VALUES
(1, 1, 'MG-19.852.111', '146.598.276-00', '1999-09-30');

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE `professor` (
  `matricula` int(11) NOT NULL,
  `disciplica` varchar(60) NOT NULL,
  `sigla_disc` varchar(20) NOT NULL,
  `rg` varchar(13) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `atuacao` varchar(100) NOT NULL,
  `nascimento` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`matricula`, `disciplica`, `sigla_disc`, `rg`, `cpf`, `atuacao`, `nascimento`) VALUES
(7, 'Física', 'FS-1', '00.000.006', '00000006', 'Biológica', '1968-12-25'),
(5, 'Geografia', 'GF-1', '00.000.004', '00000004', 'Biológicas', '1947-04-15'),
(4, 'História', 'HT-1', '00.000.003', '00000000003', 'Humanas', '1958-02-20'),
(3, 'Matemática', 'MT-1', '00.000.002', '00000000002', 'Exatas', '1958-05-30'),
(2, 'Português', 'PT-1', '00.000.001', '00000000001', 'Linguagens', '1987-09-30'),
(6, 'Química', 'QM-1', '00.000.005', '00000000005', 'Biologicas', '1958-03-25');

-- --------------------------------------------------------

--
-- Estrutura da tabela `responsavel`
--

CREATE TABLE `responsavel` (
  `id` int(11) NOT NULL,
  `matricula` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `rg` varchar(13) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `telefone` varchar(12) DEFAULT NULL,
  `celular` varchar(14) NOT NULL,
  `email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `responsavel`
--

INSERT INTO `responsavel` (`id`, `matricula`, `nome`, `rg`, `cpf`, `telefone`, `celular`, `email`) VALUES
(1, 8, 'Maria Alves', '11.000.001', '111.000.000-01', '21 1234-1234', '21 12341-2343', 'maria@exemple.com'),
(2, 9, 'Rosângela Figueiredo', '11.000.002', '111.000.000-02', '21 1234-1234', '21 12341-2343', 'RosangelaFigueiredo@exemple.com'),
(3, 10, 'Aparecida Almeida', '11.000.003', '111.000.000-03', '21 1234-1234', '21 12341-2343', 'AparecidaAlmeida@exemple.com'),
(4, 11, 'Maria Antonio', '11.000.004', '111.000.000-04', '21 1234-1234', '21 12341-2343', 'MariaAntonio@exemple.com'),
(5, 12, 'Aline Fonseca', '11.000.005', '111.000.000-05', '21 1234-1234', '21 12341-2343', 'AlineFonseca@exemple.com'),
(6, 13, 'Rosa Souza', '11.000.006', '111.000.000-06', '21 1234-1234', '21 12341-2343', 'RosaSouza@exemple.com'),
(7, 14, 'Joana Rosedo', '11.000.007', '111.000.000-07', '21 1234-1234', '21 12341-2343', 'JoanaRosedo@exemple.com'),
(8, 15, 'Marcela Augusto', '11.000.008', '111.000.000-08', '21 1234-1234', '21 12341-2343', 'MarcelaAugusto@exemple.com'),
(9, 16, 'Itala Resende da Silva', '11.000.009', '111.000.000-09', '21 1234-1234', '21 12341-2343', 'ItalaResende123@exemple.com'),
(10, 17, 'Elaine Ribeiro', '11.001.010', '111.000.000-10', '21 1234-1234', '21 12341-2343', 'ElaineRibeiro@exemple.com'),
(11, 18, 'Rita Fonseca', '11.001.011', '111.000.000-11', '21 1234-1234', '21 12341-2343', 'RitaFonseca@exemple.com'),
(12, 19, 'Itala Rocha', '11.001.012', '111.000.000-12', '21 1234-1234', '21 12341-2343', 'ItalaRocha@exemple.com'),
(13, 20, 'Isabel Gomes', '11.001.013', '111.000.000-13', '21 1234-1234', '21 12341-2343', 'IsabelGomes@exemple.com'),
(14, 21, 'Lorraine Babos', '11.001.014', '111.000.000-14', '21 1234-1234', '21 12341-2343', 'LorraineBabos@exemple.com'),
(15, 22, 'Lorem Campos', '11.001.015', '111.000.000-15', '21 1234-1234', '21 12341-2343', 'LoremCampos@exemple.com'),
(16, 23, 'Lorraine Aparecido', '11.001.016', '111.000.000-16', '21 1234-1234', '21 12341-2343', 'LorraineAparecido@exemple.com'),
(17, 24, 'Regiane Augusto', '11.001.017', '111.000.000-17', '21 1234-1234', '21 12341-2343', 'RegianeAugusto@exemple.com'),
(18, 25, 'Larissa Pereira', '11.001.018', '111.000.000-18', '21 1234-1234', '21 12341-2343', 'LarissaPereira@exemple.com'),
(19, 26, 'Cleide Suzano', '11.001.019', '111.000.000-19', '21 1234-1234', '21 12341-2343', 'CleideSuzano@exemple.com'),
(20, 27, 'Cleide Barbosa', '11.001.020', '111.000.000-20', '21 1234-1234', '21 12341-2343', 'CleideBarbosa@exemple.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma`
--

CREATE TABLE `turma` (
  `sigla` varchar(20) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `ano` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `turma`
--

INSERT INTO `turma` (`sigla`, `nome`, `ano`) VALUES
('A-1', 'Turma A-1', ''),
('B-1', 'Turma B-1', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma_disciplinas`
--

CREATE TABLE `turma_disciplinas` (
  `id` int(11) NOT NULL,
  `sigla_turma` varchar(20) NOT NULL,
  `disciplina_sigla1` varchar(20) NOT NULL,
  `disciplina_sigla2` varchar(20) NOT NULL,
  `disciplina_sigla3` varchar(20) NOT NULL,
  `disciplina_sigla4` varchar(20) DEFAULT NULL,
  `disciplina_sigla5` varchar(20) DEFAULT NULL,
  `disciplina_sigla6` varchar(20) DEFAULT NULL,
  `disciplina_sigla7` varchar(20) DEFAULT NULL,
  `dia_d1_1` varchar(10) NOT NULL,
  `dia_d1_2` varchar(10) NOT NULL,
  `dia_d2_1` varchar(10) NOT NULL,
  `dia_d2_2` varchar(10) NOT NULL,
  `dia_d3_1` varchar(10) NOT NULL,
  `dia_d3_2` varchar(10) NOT NULL,
  `dia_d4_1` varchar(10) DEFAULT NULL,
  `dia_d4_2` varchar(10) DEFAULT NULL,
  `dia_d5_1` varchar(10) DEFAULT NULL,
  `dia_d5_2` varchar(10) DEFAULT NULL,
  `dia_d6_1` varchar(10) DEFAULT NULL,
  `dia_d6_2` varchar(10) DEFAULT NULL,
  `dia_d7_1` varchar(10) DEFAULT NULL,
  `dia_d7_2` varchar(10) DEFAULT NULL,
  `h_d1_1` time NOT NULL,
  `h_d1_2` time NOT NULL,
  `h_d2_1` time NOT NULL,
  `h_d2_2` time NOT NULL,
  `h_d3_1` time NOT NULL,
  `h_d3_2` time NOT NULL,
  `h_d4_1` time DEFAULT NULL,
  `h_d4_2` time DEFAULT NULL,
  `h_d5_1` time DEFAULT NULL,
  `h_d5_2` time DEFAULT NULL,
  `h_d6_1` time DEFAULT NULL,
  `h_d6_2` time DEFAULT NULL,
  `h_d7_1` time DEFAULT NULL,
  `h_d7_2` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `turma_disciplinas`
--

INSERT INTO `turma_disciplinas` (`id`, `sigla_turma`, `disciplina_sigla1`, `disciplina_sigla2`, `disciplina_sigla3`, `disciplina_sigla4`, `disciplina_sigla5`, `disciplina_sigla6`, `disciplina_sigla7`, `dia_d1_1`, `dia_d1_2`, `dia_d2_1`, `dia_d2_2`, `dia_d3_1`, `dia_d3_2`, `dia_d4_1`, `dia_d4_2`, `dia_d5_1`, `dia_d5_2`, `dia_d6_1`, `dia_d6_2`, `dia_d7_1`, `dia_d7_2`, `h_d1_1`, `h_d1_2`, `h_d2_1`, `h_d2_2`, `h_d3_1`, `h_d3_2`, `h_d4_1`, `h_d4_2`, `h_d5_1`, `h_d5_2`, `h_d6_1`, `h_d6_2`, `h_d7_1`, `h_d7_2`) VALUES
(1, 'A-1', 'PT-1', 'MT-1', 'HT-1', 'GF-1', 'QM-1', '', '', 'Segunda', 'Quarta', 'Terça', 'Quinta', 'Quarta', 'Sexta', 'Quinta', 'Segunda', 'Sexta', 'Terça', '', '', '', '', '08:00:00', '10:00:00', '08:00:00', '10:00:00', '08:00:00', '10:00:00', '10:00:00', '08:00:00', '08:00:00', '10:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00'),
(2, 'B-1', 'PT-1', 'FS-1', 'GF-1', 'HT-1', 'MT-1', '', '', 'Segunda', 'Segunda', 'Terça', 'Terça', 'Quarta', 'Quarta', 'Quinta', 'Quinta', 'Sexta', 'Sexta', '', '', '', '', '08:00:00', '10:00:00', '08:00:00', '10:00:00', '08:00:00', '10:00:00', '08:00:00', '10:00:00', '08:00:00', '10:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma_faltas`
--

CREATE TABLE `turma_faltas` (
  `id` int(11) NOT NULL,
  `sigla_turma` varchar(20) NOT NULL,
  `sigla_disc` varchar(20) NOT NULL,
  `mat_aluno` int(11) NOT NULL,
  `faltas` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `turma_faltas`
--

INSERT INTO `turma_faltas` (`id`, `sigla_turma`, `sigla_disc`, `mat_aluno`, `faltas`) VALUES
(1, 'A-1', 'PT-1', 8, 2),
(2, 'A-1', 'MT-1', 8, 0),
(3, 'A-1', 'HT-1', 8, 0),
(4, 'A-1', 'GF-1', 8, 0),
(5, 'A-1', 'QM-1', 8, 2),
(6, 'A-1', 'PT-1', 9, 3),
(7, 'A-1', 'MT-1', 9, 2),
(8, 'A-1', 'HT-1', 9, 0),
(9, 'A-1', 'GF-1', 9, 2),
(10, 'A-1', 'QM-1', 9, 0),
(11, 'A-1', 'PT-1', 10, 0),
(12, 'A-1', 'MT-1', 10, 5),
(13, 'A-1', 'HT-1', 10, 0),
(14, 'A-1', 'GF-1', 10, 1),
(15, 'A-1', 'QM-1', 10, 0),
(16, 'A-1', 'PT-1', 11, 1),
(17, 'A-1', 'MT-1', 11, 1),
(18, 'A-1', 'HT-1', 11, 0),
(19, 'A-1', 'GF-1', 11, 2),
(20, 'A-1', 'QM-1', 11, 1),
(21, 'A-1', 'PT-1', 12, 2),
(22, 'A-1', 'MT-1', 12, 2),
(23, 'A-1', 'HT-1', 12, 0),
(24, 'A-1', 'GF-1', 12, 1),
(25, 'A-1', 'QM-1', 12, 0),
(26, 'A-1', 'PT-1', 13, 1),
(27, 'A-1', 'MT-1', 13, 0),
(28, 'A-1', 'HT-1', 13, 0),
(29, 'A-1', 'GF-1', 13, 1),
(30, 'A-1', 'QM-1', 13, 0),
(31, 'A-1', 'PT-1', 14, 4),
(32, 'A-1', 'MT-1', 14, 1),
(33, 'A-1', 'HT-1', 14, 0),
(34, 'A-1', 'GF-1', 14, 1),
(35, 'A-1', 'QM-1', 14, 4),
(36, 'A-1', 'PT-1', 15, 0),
(37, 'A-1', 'MT-1', 15, 2),
(38, 'A-1', 'HT-1', 15, 0),
(39, 'A-1', 'GF-1', 15, 0),
(40, 'A-1', 'QM-1', 15, 0),
(41, 'A-1', 'PT-1', 16, 0),
(42, 'A-1', 'MT-1', 16, 4),
(43, 'A-1', 'HT-1', 16, 0),
(44, 'A-1', 'GF-1', 16, 0),
(45, 'A-1', 'QM-1', 16, 1),
(46, 'A-1', 'PT-1', 17, 2),
(47, 'A-1', 'MT-1', 17, 2),
(48, 'A-1', 'HT-1', 17, 0),
(49, 'A-1', 'GF-1', 17, 0),
(50, 'A-1', 'QM-1', 17, 1),
(51, 'A-1', 'PT-1', 18, 5),
(52, 'A-1', 'MT-1', 18, 1),
(53, 'A-1', 'HT-1', 18, 0),
(54, 'A-1', 'GF-1', 18, 5),
(55, 'A-1', 'QM-1', 18, 1),
(56, 'A-1', 'PT-1', 19, 0),
(57, 'A-1', 'MT-1', 19, 1),
(58, 'A-1', 'HT-1', 19, 0),
(59, 'A-1', 'GF-1', 19, 2),
(60, 'A-1', 'QM-1', 19, 2),
(61, 'A-1', 'PT-1', 20, 3),
(62, 'A-1', 'MT-1', 20, 1),
(63, 'A-1', 'HT-1', 20, 0),
(64, 'A-1', 'GF-1', 20, 1),
(65, 'A-1', 'QM-1', 20, 1),
(66, 'A-1', 'PT-1', 21, 0),
(67, 'A-1', 'MT-1', 21, 0),
(68, 'A-1', 'HT-1', 21, 0),
(69, 'A-1', 'GF-1', 21, 0),
(70, 'A-1', 'QM-1', 21, 0),
(71, 'A-1', 'PT-1', 22, 1),
(72, 'A-1', 'MT-1', 22, 0),
(73, 'A-1', 'HT-1', 22, 0),
(74, 'A-1', 'GF-1', 22, 0),
(75, 'A-1', 'QM-1', 22, 0),
(76, 'A-1', 'PT-1', 23, 4),
(77, 'A-1', 'MT-1', 23, 0),
(78, 'A-1', 'HT-1', 23, 0),
(79, 'A-1', 'GF-1', 23, 0),
(80, 'A-1', 'QM-1', 23, 0),
(81, 'A-1', 'PT-1', 24, 2),
(82, 'A-1', 'MT-1', 24, 5),
(83, 'A-1', 'HT-1', 24, 0),
(84, 'A-1', 'GF-1', 24, 0),
(85, 'A-1', 'QM-1', 24, 3),
(86, 'A-1', 'PT-1', 25, 0),
(87, 'A-1', 'MT-1', 25, 2),
(88, 'A-1', 'HT-1', 25, 0),
(89, 'A-1', 'GF-1', 25, 1),
(90, 'A-1', 'QM-1', 25, 0),
(91, 'A-1', 'PT-1', 26, 8),
(92, 'A-1', 'MT-1', 26, 3),
(93, 'A-1', 'HT-1', 26, 0),
(94, 'A-1', 'GF-1', 26, 2),
(95, 'A-1', 'QM-1', 26, 2),
(96, 'A-1', 'PT-1', 27, 2),
(97, 'A-1', 'MT-1', 27, 0),
(98, 'A-1', 'HT-1', 27, 0),
(99, 'A-1', 'GF-1', 27, 1),
(100, 'A-1', 'QM-1', 27, 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma_material`
--

CREATE TABLE `turma_material` (
  `id` int(11) NOT NULL,
  `sigla_turma` varchar(20) NOT NULL,
  `sigla_disc` varchar(20) NOT NULL,
  `titulo` varchar(60) NOT NULL,
  `informacao` varchar(300) NOT NULL,
  `material` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma_nf_total`
--

CREATE TABLE `turma_nf_total` (
  `id` int(11) NOT NULL,
  `sigla_turma` varchar(20) NOT NULL,
  `sigla_disc` varchar(20) NOT NULL,
  `mat_aluno` int(11) NOT NULL,
  `falta` int(11) DEFAULT 0,
  `nota` float DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `turma_nf_total`
--

INSERT INTO `turma_nf_total` (`id`, `sigla_turma`, `sigla_disc`, `mat_aluno`, `falta`, `nota`) VALUES
(1, 'A-1', 'PT-1', 8, 0, 0),
(2, 'A-1', 'MT-1', 8, 0, 0),
(3, 'A-1', 'HT-1', 8, 0, 0),
(4, 'A-1', 'GF-1', 8, 0, 0),
(5, 'A-1', 'QM-1', 8, 0, 0),
(6, 'A-1', 'PT-1', 9, 0, 0),
(7, 'A-1', 'MT-1', 9, 0, 0),
(8, 'A-1', 'HT-1', 9, 0, 0),
(9, 'A-1', 'GF-1', 9, 0, 0),
(10, 'A-1', 'QM-1', 9, 0, 0),
(11, 'A-1', 'PT-1', 10, 0, 0),
(12, 'A-1', 'MT-1', 10, 0, 0),
(13, 'A-1', 'HT-1', 10, 0, 0),
(14, 'A-1', 'GF-1', 10, 0, 0),
(15, 'A-1', 'QM-1', 10, 0, 0),
(16, 'A-1', 'PT-1', 11, 0, 0),
(17, 'A-1', 'MT-1', 11, 0, 0),
(18, 'A-1', 'HT-1', 11, 0, 0),
(19, 'A-1', 'GF-1', 11, 0, 0),
(20, 'A-1', 'QM-1', 11, 0, 0),
(21, 'A-1', 'PT-1', 12, 0, 0),
(22, 'A-1', 'MT-1', 12, 0, 0),
(23, 'A-1', 'HT-1', 12, 0, 0),
(24, 'A-1', 'GF-1', 12, 0, 0),
(25, 'A-1', 'QM-1', 12, 0, 0),
(26, 'A-1', 'PT-1', 13, 0, 0),
(27, 'A-1', 'MT-1', 13, 0, 0),
(28, 'A-1', 'HT-1', 13, 0, 0),
(29, 'A-1', 'GF-1', 13, 0, 0),
(30, 'A-1', 'QM-1', 13, 0, 0),
(31, 'A-1', 'PT-1', 14, 0, 0),
(32, 'A-1', 'MT-1', 14, 0, 0),
(33, 'A-1', 'HT-1', 14, 0, 0),
(34, 'A-1', 'GF-1', 14, 0, 0),
(35, 'A-1', 'QM-1', 14, 0, 0),
(36, 'A-1', 'PT-1', 15, 0, 0),
(37, 'A-1', 'MT-1', 15, 0, 0),
(38, 'A-1', 'HT-1', 15, 0, 0),
(39, 'A-1', 'GF-1', 15, 0, 0),
(40, 'A-1', 'QM-1', 15, 0, 0),
(41, 'A-1', 'PT-1', 16, 0, 0),
(42, 'A-1', 'MT-1', 16, 0, 0),
(43, 'A-1', 'HT-1', 16, 0, 0),
(44, 'A-1', 'GF-1', 16, 0, 0),
(45, 'A-1', 'QM-1', 16, 0, 0),
(46, 'A-1', 'PT-1', 17, 0, 0),
(47, 'A-1', 'MT-1', 17, 0, 0),
(48, 'A-1', 'HT-1', 17, 0, 0),
(49, 'A-1', 'GF-1', 17, 0, 0),
(50, 'A-1', 'QM-1', 17, 0, 0),
(51, 'A-1', 'PT-1', 18, 0, 0),
(52, 'A-1', 'MT-1', 18, 0, 0),
(53, 'A-1', 'HT-1', 18, 0, 0),
(54, 'A-1', 'GF-1', 18, 0, 0),
(55, 'A-1', 'QM-1', 18, 0, 0),
(56, 'A-1', 'PT-1', 19, 0, 0),
(57, 'A-1', 'MT-1', 19, 0, 0),
(58, 'A-1', 'HT-1', 19, 0, 0),
(59, 'A-1', 'GF-1', 19, 0, 0),
(60, 'A-1', 'QM-1', 19, 0, 0),
(61, 'A-1', 'PT-1', 20, 0, 0),
(62, 'A-1', 'MT-1', 20, 0, 0),
(63, 'A-1', 'HT-1', 20, 0, 0),
(64, 'A-1', 'GF-1', 20, 0, 0),
(65, 'A-1', 'QM-1', 20, 0, 0),
(66, 'A-1', 'PT-1', 21, 0, 0),
(67, 'A-1', 'MT-1', 21, 0, 0),
(68, 'A-1', 'HT-1', 21, 0, 0),
(69, 'A-1', 'GF-1', 21, 0, 0),
(70, 'A-1', 'QM-1', 21, 0, 0),
(71, 'A-1', 'PT-1', 22, 0, 0),
(72, 'A-1', 'MT-1', 22, 0, 0),
(73, 'A-1', 'HT-1', 22, 0, 0),
(74, 'A-1', 'GF-1', 22, 0, 0),
(75, 'A-1', 'QM-1', 22, 0, 0),
(76, 'A-1', 'PT-1', 23, 0, 0),
(77, 'A-1', 'MT-1', 23, 0, 0),
(78, 'A-1', 'HT-1', 23, 0, 0),
(79, 'A-1', 'GF-1', 23, 0, 0),
(80, 'A-1', 'QM-1', 23, 0, 0),
(81, 'A-1', 'PT-1', 24, 0, 0),
(82, 'A-1', 'MT-1', 24, 0, 0),
(83, 'A-1', 'HT-1', 24, 0, 0),
(84, 'A-1', 'GF-1', 24, 0, 0),
(85, 'A-1', 'QM-1', 24, 0, 0),
(86, 'A-1', 'PT-1', 25, 0, 0),
(87, 'A-1', 'MT-1', 25, 0, 0),
(88, 'A-1', 'HT-1', 25, 0, 0),
(89, 'A-1', 'GF-1', 25, 0, 0),
(90, 'A-1', 'QM-1', 25, 0, 0),
(91, 'A-1', 'PT-1', 26, 0, 0),
(92, 'A-1', 'MT-1', 26, 0, 0),
(93, 'A-1', 'HT-1', 26, 0, 0),
(94, 'A-1', 'GF-1', 26, 0, 0),
(95, 'A-1', 'QM-1', 26, 0, 0),
(96, 'A-1', 'PT-1', 27, 0, 0),
(97, 'A-1', 'MT-1', 27, 0, 0),
(98, 'A-1', 'HT-1', 27, 0, 0),
(99, 'A-1', 'GF-1', 27, 0, 0),
(100, 'A-1', 'QM-1', 27, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma_notas`
--

CREATE TABLE `turma_notas` (
  `id` int(11) NOT NULL,
  `sigla_turma` varchar(20) NOT NULL,
  `sigla_disc` varchar(20) NOT NULL,
  `id_atividade` int(11) NOT NULL,
  `mat_aluno` int(11) NOT NULL,
  `titulo` varchar(60) NOT NULL,
  `valor_atividade` float NOT NULL,
  `valor_atingido` float DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `turma_notas`
--

INSERT INTO `turma_notas` (`id`, `sigla_turma`, `sigla_disc`, `id_atividade`, `mat_aluno`, `titulo`, `valor_atividade`, `valor_atingido`) VALUES
(401, 'A-1', 'PT-1', 1, 8, '', 20, 15),
(402, 'A-1', 'PT-1', 1, 20, '', 20, 12),
(403, 'A-1', 'PT-1', 1, 21, '', 20, 17),
(404, 'A-1', 'PT-1', 1, 22, '', 20, 19),
(405, 'A-1', 'PT-1', 1, 23, '', 20, 20),
(406, 'A-1', 'PT-1', 1, 24, '', 20, 14),
(407, 'A-1', 'PT-1', 1, 25, '', 20, 17),
(408, 'A-1', 'PT-1', 1, 26, '', 20, 15),
(409, 'A-1', 'PT-1', 1, 27, '', 20, 16),
(410, 'A-1', 'PT-1', 1, 19, '', 20, 12),
(411, 'A-1', 'PT-1', 1, 18, '', 20, 14),
(412, 'A-1', 'PT-1', 1, 17, '', 20, 14),
(413, 'A-1', 'PT-1', 1, 9, '', 20, 18),
(414, 'A-1', 'PT-1', 1, 10, '', 20, 19),
(415, 'A-1', 'PT-1', 1, 11, '', 20, 17),
(416, 'A-1', 'PT-1', 1, 12, '', 20, 15),
(417, 'A-1', 'PT-1', 1, 13, '', 20, 12),
(418, 'A-1', 'PT-1', 1, 14, '', 20, 11),
(419, 'A-1', 'PT-1', 1, 15, '', 20, 10),
(420, 'A-1', 'PT-1', 1, 16, '', 20, 17),
(421, 'A-1', 'PT-1', 2, 19, '', 20, 20),
(422, 'A-1', 'PT-1', 2, 20, '', 20, 14),
(423, 'A-1', 'PT-1', 2, 21, '', 20, 12),
(424, 'A-1', 'PT-1', 2, 22, '', 20, 15),
(425, 'A-1', 'PT-1', 2, 23, '', 20, 14),
(426, 'A-1', 'PT-1', 2, 24, '', 20, 17),
(427, 'A-1', 'PT-1', 2, 25, '', 20, 1),
(428, 'A-1', 'PT-1', 2, 26, '', 20, 18),
(429, 'A-1', 'PT-1', 2, 27, '', 20, 15),
(430, 'A-1', 'PT-1', 2, 18, '', 20, 12),
(431, 'A-1', 'PT-1', 2, 17, '', 20, 10),
(432, 'A-1', 'PT-1', 2, 8, '', 20, 5),
(433, 'A-1', 'PT-1', 2, 9, '', 20, 6),
(434, 'A-1', 'PT-1', 2, 10, '', 20, 9),
(435, 'A-1', 'PT-1', 2, 11, '', 20, 15),
(436, 'A-1', 'PT-1', 2, 12, '', 20, 12),
(437, 'A-1', 'PT-1', 2, 13, '', 20, 14),
(438, 'A-1', 'PT-1', 2, 14, '', 20, 12),
(439, 'A-1', 'PT-1', 2, 15, '', 20, 14),
(440, 'A-1', 'PT-1', 2, 16, '', 20, 17),
(441, 'A-1', 'PT-1', 3, 19, '', 20, 20),
(442, 'A-1', 'PT-1', 3, 20, '', 20, 12),
(443, 'A-1', 'PT-1', 3, 21, '', 20, 14),
(444, 'A-1', 'PT-1', 3, 22, '', 20, 15),
(445, 'A-1', 'PT-1', 3, 23, '', 20, 14),
(446, 'A-1', 'PT-1', 3, 24, '', 20, 8),
(447, 'A-1', 'PT-1', 3, 25, '', 20, 14),
(448, 'A-1', 'PT-1', 3, 26, '', 20, 10),
(449, 'A-1', 'PT-1', 3, 27, '', 20, 10),
(450, 'A-1', 'PT-1', 3, 18, '', 20, 14),
(451, 'A-1', 'PT-1', 3, 17, '', 20, 15),
(452, 'A-1', 'PT-1', 3, 8, '', 20, 17),
(453, 'A-1', 'PT-1', 3, 9, '', 20, 18),
(454, 'A-1', 'PT-1', 3, 10, '', 20, 19),
(455, 'A-1', 'PT-1', 3, 11, '', 20, 12),
(456, 'A-1', 'PT-1', 3, 12, '', 20, 17),
(457, 'A-1', 'PT-1', 3, 13, '', 20, 15),
(458, 'A-1', 'PT-1', 3, 14, '', 20, 12),
(459, 'A-1', 'PT-1', 3, 15, '', 20, 14),
(460, 'A-1', 'PT-1', 3, 16, '', 20, 12),
(481, 'A-1', 'MT-1', 5, 8, '', 30, 20),
(482, 'A-1', 'MT-1', 5, 20, '', 30, 21),
(483, 'A-1', 'MT-1', 5, 21, '', 30, 22),
(484, 'A-1', 'MT-1', 5, 22, '', 30, 23),
(485, 'A-1', 'MT-1', 5, 23, '', 30, 25),
(486, 'A-1', 'MT-1', 5, 24, '', 30, 25),
(487, 'A-1', 'MT-1', 5, 25, '', 30, 26),
(488, 'A-1', 'MT-1', 5, 26, '', 30, 26),
(489, 'A-1', 'MT-1', 5, 27, '', 30, 28),
(490, 'A-1', 'MT-1', 5, 19, '', 30, 12),
(491, 'A-1', 'MT-1', 5, 18, '', 30, 12),
(492, 'A-1', 'MT-1', 5, 17, '', 30, 15),
(493, 'A-1', 'MT-1', 5, 9, '', 30, 14),
(494, 'A-1', 'MT-1', 5, 10, '', 30, 15),
(495, 'A-1', 'MT-1', 5, 11, '', 30, 14),
(496, 'A-1', 'MT-1', 5, 12, '', 30, 22),
(497, 'A-1', 'MT-1', 5, 13, '', 30, 25),
(498, 'A-1', 'MT-1', 5, 14, '', 30, 26),
(499, 'A-1', 'MT-1', 5, 15, '', 30, 24),
(500, 'A-1', 'MT-1', 5, 16, '', 30, 24),
(501, 'A-1', 'MT-1', 6, 19, '', 30, 25),
(502, 'A-1', 'MT-1', 6, 20, '', 30, 26),
(503, 'A-1', 'MT-1', 6, 21, '', 30, 24),
(504, 'A-1', 'MT-1', 6, 22, '', 30, 28),
(505, 'A-1', 'MT-1', 6, 23, '', 30, 26),
(506, 'A-1', 'MT-1', 6, 24, '', 30, 25),
(507, 'A-1', 'MT-1', 6, 25, '', 30, 12),
(508, 'A-1', 'MT-1', 6, 26, '', 30, 11),
(509, 'A-1', 'MT-1', 6, 27, '', 30, 14),
(510, 'A-1', 'MT-1', 6, 18, '', 30, 15),
(511, 'A-1', 'MT-1', 6, 17, '', 30, 14),
(512, 'A-1', 'MT-1', 6, 8, '', 30, 17),
(513, 'A-1', 'MT-1', 6, 9, '', 30, 18),
(514, 'A-1', 'MT-1', 6, 10, '', 30, 19),
(515, 'A-1', 'MT-1', 6, 11, '', 30, 25),
(516, 'A-1', 'MT-1', 6, 12, '', 30, 25),
(517, 'A-1', 'MT-1', 6, 13, '', 30, 25),
(518, 'A-1', 'MT-1', 6, 14, '', 30, 29),
(519, 'A-1', 'MT-1', 6, 15, '', 30, 29),
(520, 'A-1', 'MT-1', 6, 16, '', 30, 30),
(521, 'A-1', 'MT-1', 7, 19, '', 40, 39),
(522, 'A-1', 'MT-1', 7, 20, '', 40, 35),
(523, 'A-1', 'MT-1', 7, 21, '', 40, 36),
(524, 'A-1', 'MT-1', 7, 22, '', 40, 31),
(525, 'A-1', 'MT-1', 7, 23, '', 40, 32),
(526, 'A-1', 'MT-1', 7, 24, '', 40, 34),
(527, 'A-1', 'MT-1', 7, 25, '', 40, 32),
(528, 'A-1', 'MT-1', 7, 26, '', 40, 25),
(529, 'A-1', 'MT-1', 7, 18, '', 40, 25),
(530, 'A-1', 'MT-1', 7, 17, '', 40, 29),
(531, 'A-1', 'MT-1', 7, 16, '', 40, 29),
(532, 'A-1', 'MT-1', 7, 8, '', 40, 24),
(533, 'A-1', 'MT-1', 7, 9, '', 40, 24),
(534, 'A-1', 'MT-1', 7, 10, '', 40, 25),
(535, 'A-1', 'MT-1', 7, 11, '', 40, 26),
(536, 'A-1', 'MT-1', 7, 12, '', 40, 35),
(537, 'A-1', 'MT-1', 7, 13, '', 40, 25),
(538, 'A-1', 'MT-1', 7, 14, '', 40, 12),
(539, 'A-1', 'MT-1', 7, 15, '', 40, 14),
(540, 'A-1', 'MT-1', 7, 27, '', 40, 25),
(541, 'A-1', 'HT-1', 8, 8, '', 30, 25),
(542, 'A-1', 'HT-1', 8, 20, '', 30, 26),
(543, 'A-1', 'HT-1', 8, 21, '', 30, 26),
(544, 'A-1', 'HT-1', 8, 22, '', 30, 25),
(545, 'A-1', 'HT-1', 8, 23, '', 30, 21),
(546, 'A-1', 'HT-1', 8, 24, '', 30, 21),
(547, 'A-1', 'HT-1', 8, 25, '', 30, 21),
(548, 'A-1', 'HT-1', 8, 26, '', 30, 11),
(549, 'A-1', 'HT-1', 8, 27, '', 30, 12),
(550, 'A-1', 'HT-1', 8, 19, '', 30, 15),
(551, 'A-1', 'HT-1', 8, 18, '', 30, 15),
(552, 'A-1', 'HT-1', 8, 17, '', 30, 15),
(553, 'A-1', 'HT-1', 8, 9, '', 30, 30),
(554, 'A-1', 'HT-1', 8, 10, '', 30, 25),
(555, 'A-1', 'HT-1', 8, 11, '', 30, 20),
(556, 'A-1', 'HT-1', 8, 12, '', 30, 22),
(557, 'A-1', 'HT-1', 8, 13, '', 30, 24),
(558, 'A-1', 'HT-1', 8, 14, '', 30, 28),
(559, 'A-1', 'HT-1', 8, 15, '', 30, 29),
(560, 'A-1', 'HT-1', 8, 16, '', 30, 12),
(561, 'A-1', 'HT-1', 9, 19, '', 30, 12),
(562, 'A-1', 'HT-1', 9, 20, '', 30, 15),
(563, 'A-1', 'HT-1', 9, 21, '', 30, 19),
(564, 'A-1', 'HT-1', 9, 22, '', 30, 19),
(565, 'A-1', 'HT-1', 9, 23, '', 30, 19),
(566, 'A-1', 'HT-1', 9, 24, '', 30, 25),
(567, 'A-1', 'HT-1', 9, 25, '', 30, 26),
(568, 'A-1', 'HT-1', 9, 26, '', 30, 25),
(569, 'A-1', 'HT-1', 9, 27, '', 30, 24),
(570, 'A-1', 'HT-1', 9, 18, '', 30, 24),
(571, 'A-1', 'HT-1', 9, 17, '', 30, 22),
(572, 'A-1', 'HT-1', 9, 8, '', 30, 29),
(573, 'A-1', 'HT-1', 9, 9, '', 30, 28),
(574, 'A-1', 'HT-1', 9, 10, '', 30, 25),
(575, 'A-1', 'HT-1', 9, 11, '', 30, 26),
(576, 'A-1', 'HT-1', 9, 12, '', 30, 26),
(577, 'A-1', 'HT-1', 9, 13, '', 30, 25),
(578, 'A-1', 'HT-1', 9, 14, '', 30, 22),
(579, 'A-1', 'HT-1', 9, 15, '', 30, 11),
(580, 'A-1', 'HT-1', 9, 16, '', 30, 12),
(601, 'A-1', 'GF-1', 11, 8, '', 35, 35),
(602, 'A-1', 'GF-1', 11, 20, '', 35, 25),
(603, 'A-1', 'GF-1', 11, 21, '', 35, 26),
(604, 'A-1', 'GF-1', 11, 22, '', 35, 25),
(605, 'A-1', 'GF-1', 11, 23, '', 35, 24),
(606, 'A-1', 'GF-1', 11, 24, '', 35, 25),
(607, 'A-1', 'GF-1', 11, 25, '', 35, 28),
(608, 'A-1', 'GF-1', 11, 26, '', 35, 28),
(609, 'A-1', 'GF-1', 11, 27, '', 35, 29),
(610, 'A-1', 'GF-1', 11, 19, '', 35, 25),
(611, 'A-1', 'GF-1', 11, 18, '', 35, 24),
(612, 'A-1', 'GF-1', 11, 17, '', 35, 25),
(613, 'A-1', 'GF-1', 11, 9, '', 35, 22),
(614, 'A-1', 'GF-1', 11, 10, '', 35, 15),
(615, 'A-1', 'GF-1', 11, 11, '', 35, 14),
(616, 'A-1', 'GF-1', 11, 12, '', 35, 15),
(617, 'A-1', 'GF-1', 11, 13, '', 35, 17),
(618, 'A-1', 'GF-1', 11, 14, '', 35, 15),
(619, 'A-1', 'GF-1', 11, 15, '', 35, 18),
(620, 'A-1', 'GF-1', 11, 16, '', 35, 15),
(621, 'A-1', 'GF-1', 12, 19, '', 35, 25),
(622, 'A-1', 'GF-1', 12, 20, '', 35, 35),
(623, 'A-1', 'GF-1', 12, 21, '', 35, 26),
(624, 'A-1', 'GF-1', 12, 22, '', 35, 25),
(625, 'A-1', 'GF-1', 12, 23, '', 35, 24),
(626, 'A-1', 'GF-1', 12, 24, '', 35, 15),
(627, 'A-1', 'GF-1', 12, 25, '', 35, 14),
(628, 'A-1', 'GF-1', 12, 26, '', 35, 18),
(629, 'A-1', 'GF-1', 12, 27, '', 35, 28),
(630, 'A-1', 'GF-1', 12, 18, '', 35, 11),
(631, 'A-1', 'GF-1', 12, 17, '', 35, 25),
(632, 'A-1', 'GF-1', 12, 8, '', 35, 27),
(633, 'A-1', 'GF-1', 12, 9, '', 35, 25),
(634, 'A-1', 'GF-1', 12, 10, '', 35, 24),
(635, 'A-1', 'GF-1', 12, 11, '', 35, 28),
(636, 'A-1', 'GF-1', 12, 12, '', 35, 29),
(637, 'A-1', 'GF-1', 12, 13, '', 35, 29),
(638, 'A-1', 'GF-1', 12, 14, '', 35, 12),
(639, 'A-1', 'GF-1', 12, 15, '', 35, 12),
(640, 'A-1', 'GF-1', 12, 16, '', 35, 15),
(661, 'A-1', 'QM-1', 14, 8, '', 35, 25),
(662, 'A-1', 'QM-1', 14, 20, '', 35, 26),
(663, 'A-1', 'QM-1', 14, 21, '', 35, 25),
(664, 'A-1', 'QM-1', 14, 22, '', 35, 22),
(665, 'A-1', 'QM-1', 14, 23, '', 35, 21),
(666, 'A-1', 'QM-1', 14, 24, '', 35, 24),
(667, 'A-1', 'QM-1', 14, 25, '', 35, 25),
(668, 'A-1', 'QM-1', 14, 26, '', 35, 26),
(669, 'A-1', 'QM-1', 14, 27, '', 35, 22),
(670, 'A-1', 'QM-1', 14, 19, '', 35, 21),
(671, 'A-1', 'QM-1', 14, 18, '', 35, 21),
(672, 'A-1', 'QM-1', 14, 17, '', 35, 28),
(673, 'A-1', 'QM-1', 14, 9, '', 35, 29),
(674, 'A-1', 'QM-1', 14, 10, '', 35, 28),
(675, 'A-1', 'QM-1', 14, 11, '', 35, 35),
(676, 'A-1', 'QM-1', 14, 12, '', 35, 32),
(677, 'A-1', 'QM-1', 14, 13, '', 35, 32),
(678, 'A-1', 'QM-1', 14, 14, '', 35, 25),
(679, 'A-1', 'QM-1', 14, 15, '', 35, 26),
(680, 'A-1', 'QM-1', 14, 16, '', 35, 21),
(681, 'A-1', 'QM-1', 15, 19, '', 35, 25),
(682, 'A-1', 'QM-1', 15, 20, '', 35, 29),
(683, 'A-1', 'QM-1', 15, 21, '', 35, 24),
(684, 'A-1', 'QM-1', 15, 22, '', 35, 26),
(685, 'A-1', 'QM-1', 15, 23, '', 35, 21),
(686, 'A-1', 'QM-1', 15, 24, '', 35, 26),
(687, 'A-1', 'QM-1', 15, 25, '', 35, 21),
(688, 'A-1', 'QM-1', 15, 26, '', 35, 22),
(689, 'A-1', 'QM-1', 15, 27, '', 35, 24),
(690, 'A-1', 'QM-1', 15, 18, '', 35, 25),
(691, 'A-1', 'QM-1', 15, 17, '', 35, 26),
(692, 'A-1', 'QM-1', 15, 8, '', 35, 22),
(693, 'A-1', 'QM-1', 15, 9, '', 35, 21),
(694, 'A-1', 'QM-1', 15, 10, '', 35, 20),
(695, 'A-1', 'QM-1', 15, 11, '', 35, 14),
(696, 'A-1', 'QM-1', 15, 12, '', 35, 15),
(697, 'A-1', 'QM-1', 15, 13, '', 35, 17),
(698, 'A-1', 'QM-1', 15, 14, '', 35, 18),
(699, 'A-1', 'QM-1', 15, 15, '', 35, 25),
(700, 'A-1', 'QM-1', 15, 16, '', 35, 25),
(701, 'A-1', 'QM-1', 16, 19, '', 30, 20),
(702, 'A-1', 'QM-1', 16, 20, '', 30, 25),
(703, 'A-1', 'QM-1', 16, 21, '', 30, 21),
(704, 'A-1', 'QM-1', 16, 22, '', 30, 25),
(705, 'A-1', 'QM-1', 16, 23, '', 30, 28),
(706, 'A-1', 'QM-1', 16, 24, '', 30, 29),
(707, 'A-1', 'QM-1', 16, 25, '', 30, 25),
(708, 'A-1', 'QM-1', 16, 26, '', 30, 26),
(709, 'A-1', 'QM-1', 16, 18, '', 30, 24),
(710, 'A-1', 'QM-1', 16, 17, '', 30, 22),
(711, 'A-1', 'QM-1', 16, 16, '', 30, 12),
(712, 'A-1', 'QM-1', 16, 8, '', 30, 15),
(713, 'A-1', 'QM-1', 16, 9, '', 30, 14),
(714, 'A-1', 'QM-1', 16, 10, '', 30, 25),
(715, 'A-1', 'QM-1', 16, 11, '', 30, 24),
(716, 'A-1', 'QM-1', 16, 12, '', 30, 28),
(717, 'A-1', 'QM-1', 16, 13, '', 30, 27),
(718, 'A-1', 'QM-1', 16, 14, '', 30, 25),
(719, 'A-1', 'QM-1', 16, 15, '', 30, 26),
(720, 'A-1', 'QM-1', 16, 27, '', 30, 23),
(721, 'A-1', 'FS-1', 17, 8, '', 25, 25),
(722, 'A-1', 'FS-1', 17, 20, '', 25, 25),
(723, 'A-1', 'FS-1', 17, 21, '', 25, 21),
(724, 'A-1', 'FS-1', 17, 22, '', 25, 21),
(725, 'A-1', 'FS-1', 17, 23, '', 25, 20),
(726, 'A-1', 'FS-1', 17, 24, '', 25, 14),
(727, 'A-1', 'FS-1', 17, 25, '', 25, 15),
(728, 'A-1', 'FS-1', 17, 26, '', 25, 12),
(729, 'A-1', 'FS-1', 17, 27, '', 25, 14),
(730, 'A-1', 'FS-1', 17, 19, '', 25, 18),
(731, 'A-1', 'FS-1', 17, 18, '', 25, 19),
(732, 'A-1', 'FS-1', 17, 17, '', 25, 15),
(733, 'A-1', 'FS-1', 17, 9, '', 25, 16),
(734, 'A-1', 'FS-1', 17, 10, '', 25, 18),
(735, 'A-1', 'FS-1', 17, 11, '', 25, 18),
(736, 'A-1', 'FS-1', 17, 12, '', 25, 17),
(737, 'A-1', 'FS-1', 17, 13, '', 25, 18),
(738, 'A-1', 'FS-1', 17, 14, '', 25, 17),
(739, 'A-1', 'FS-1', 17, 15, '', 25, 18),
(740, 'A-1', 'FS-1', 17, 16, '', 25, 12),
(761, 'A-1', 'FS-1', 20, 19, '', 35, 33),
(762, 'A-1', 'FS-1', 20, 20, '', 35, 32),
(763, 'A-1', 'FS-1', 20, 21, '', 35, 34),
(764, 'A-1', 'FS-1', 20, 22, '', 35, 25),
(765, 'A-1', 'FS-1', 20, 23, '', 35, 26),
(766, 'A-1', 'FS-1', 20, 24, '', 35, 28),
(767, 'A-1', 'FS-1', 20, 25, '', 35, 24),
(768, 'A-1', 'FS-1', 20, 26, '', 35, 29),
(769, 'A-1', 'FS-1', 20, 18, '', 35, 24),
(770, 'A-1', 'FS-1', 20, 17, '', 35, 25),
(771, 'A-1', 'FS-1', 20, 16, '', 35, 26),
(772, 'A-1', 'FS-1', 20, 8, '', 35, 12),
(773, 'A-1', 'FS-1', 20, 9, '', 35, 15),
(774, 'A-1', 'FS-1', 20, 10, '', 35, 19),
(775, 'A-1', 'FS-1', 20, 11, '', 35, 18),
(776, 'A-1', 'FS-1', 20, 12, '', 35, 14),
(777, 'A-1', 'FS-1', 20, 13, '', 35, 35),
(778, 'A-1', 'FS-1', 20, 14, '', 35, 22),
(779, 'A-1', 'FS-1', 20, 15, '', 35, 20),
(780, 'A-1', 'FS-1', 20, 27, '', 35, 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `matricula` int(11) NOT NULL,
  `tipo` varchar(15) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `entrada` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`matricula`, `tipo`, `senha`, `nome`, `entrada`) VALUES
(1, 'gerenciador', '123qwe', 'Paulo Henrique Freitas', '2022-12-06 19:17:33'),
(2, 'professor', '123qwe', 'Maria da Silva Rocha', '2022-12-06 19:25:17'),
(3, 'professor', '123qwe', 'Joel Ribeiro Braga', '2022-12-06 19:26:58'),
(4, 'professor', '123qwe', 'Norma Resende Antonio', '2022-12-06 19:29:22'),
(5, 'professor', '123qwe', 'Paula da Cruz', '2022-12-06 19:31:47'),
(6, 'professor', '123qwe', 'Douglas Boa Ventura', '2022-12-06 19:33:53'),
(7, 'professor', '123qwe', 'Joelma Ribeiro', '2022-12-06 19:36:56'),
(8, 'aluno', '123qwe', 'Gabriel Alves Resende Rocha', '2022-12-07 17:03:43'),
(9, 'aluno', '123qwe', 'Joao da Rocha', '2022-12-07 17:05:04'),
(10, 'aluno', '123qwe', 'Luis Almeida', '2022-12-07 17:05:56'),
(11, 'aluno', '123qwe', 'Pedro Antonio', '2022-12-07 17:06:47'),
(12, 'aluno', '123qwe', 'Lucas Fonseca', '2022-12-07 17:07:31'),
(13, 'aluno', '123qwe', 'Marcela Souza', '2022-12-07 17:08:19'),
(14, 'aluno', '123qwe', 'Isabel Rosedo', '2022-12-07 17:09:29'),
(15, 'aluno', '123qwe', 'Carolina Augusto', '2022-12-07 17:10:37'),
(16, 'aluno', '123qwe', 'Jordana Resende da Silva', '2022-12-07 17:12:38'),
(17, 'aluno', '123qwe', 'Giovani Ribeiro', '2022-12-07 17:14:42'),
(18, 'aluno', '123qwe', 'Jonatan Fonseca', '2022-12-07 17:16:29'),
(19, 'aluno', '123qwe', 'Pedro Rocha', '2022-12-07 17:17:26'),
(20, 'aluno', '123qwe', 'Manoel Gomes', '2022-12-07 17:18:21'),
(21, 'aluno', '123qwe', 'Flavio Babos', '2022-12-07 17:19:47'),
(22, 'aluno', '123qwe', 'Natália Campos', '2022-12-07 17:21:07'),
(23, 'aluno', '123qwe', 'Ramon Aparecido', '2022-12-07 17:22:48'),
(24, 'aluno', '123qwe', 'Lorem Augusto', '2022-12-07 17:23:38'),
(25, 'aluno', '123qwe', 'Jorge Pereira', '2022-12-07 17:25:13'),
(26, 'aluno', '123qwe', 'Alex Suzano', '2022-12-07 17:26:14'),
(27, 'aluno', '123qwe', 'Vinicius Barbosa', '2022-12-07 17:27:17');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rg` (`rg`),
  ADD KEY `usuario_aluno` (`matricula`);

--
-- Índices para tabela `atividades_avaliativas`
--
ALTER TABLE `atividades_avaliativas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `atividade_turma` (`sigla_turma`),
  ADD KEY `atividade_professor` (`sigla_disc`);

--
-- Índices para tabela `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_contato` (`matricula`);

--
-- Índices para tabela `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_endereco` (`matricula`);

--
-- Índices para tabela `gerenciador`
--
ALTER TABLE `gerenciador`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rg` (`rg`),
  ADD UNIQUE KEY `cpf` (`cpf`),
  ADD KEY `usuario_gerenciador` (`matricula`);

--
-- Índices para tabela `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`sigla_disc`),
  ADD KEY `usuario_professor` (`matricula`);

--
-- Índices para tabela `responsavel`
--
ALTER TABLE `responsavel`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rg` (`rg`),
  ADD UNIQUE KEY `cpf` (`cpf`),
  ADD KEY `usuario_responsavel` (`matricula`);

--
-- Índices para tabela `turma`
--
ALTER TABLE `turma`
  ADD PRIMARY KEY (`sigla`);

--
-- Índices para tabela `turma_disciplinas`
--
ALTER TABLE `turma_disciplinas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `turma_faltas`
--
ALTER TABLE `turma_faltas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `faltas_turma` (`sigla_turma`),
  ADD KEY `faltas_professor` (`sigla_disc`),
  ADD KEY `faltas_aluno` (`mat_aluno`);

--
-- Índices para tabela `turma_material`
--
ALTER TABLE `turma_material`
  ADD PRIMARY KEY (`id`),
  ADD KEY `turmaMaterial_turma` (`sigla_turma`),
  ADD KEY `turmaMaterial_professor` (`sigla_disc`);

--
-- Índices para tabela `turma_nf_total`
--
ALTER TABLE `turma_nf_total`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nf_turma` (`sigla_turma`),
  ADD KEY `nf_professor` (`sigla_disc`),
  ADD KEY `nf_aluno` (`mat_aluno`);

--
-- Índices para tabela `turma_notas`
--
ALTER TABLE `turma_notas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notas_turma` (`sigla_turma`),
  ADD KEY `notas_professor` (`sigla_disc`),
  ADD KEY `notas_atividade` (`id_atividade`),
  ADD KEY `notas_aluno` (`mat_aluno`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`matricula`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `aluno`
--
ALTER TABLE `aluno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `atividades_avaliativas`
--
ALTER TABLE `atividades_avaliativas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `contato`
--
ALTER TABLE `contato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `endereco`
--
ALTER TABLE `endereco`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `gerenciador`
--
ALTER TABLE `gerenciador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `responsavel`
--
ALTER TABLE `responsavel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `turma_disciplinas`
--
ALTER TABLE `turma_disciplinas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `turma_faltas`
--
ALTER TABLE `turma_faltas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT de tabela `turma_material`
--
ALTER TABLE `turma_material`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `turma_nf_total`
--
ALTER TABLE `turma_nf_total`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT de tabela `turma_notas`
--
ALTER TABLE `turma_notas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=781;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `matricula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `aluno`
--
ALTER TABLE `aluno`
  ADD CONSTRAINT `usuario_aluno` FOREIGN KEY (`matricula`) REFERENCES `usuario` (`matricula`);

--
-- Limitadores para a tabela `atividades_avaliativas`
--
ALTER TABLE `atividades_avaliativas`
  ADD CONSTRAINT `atividade_professor` FOREIGN KEY (`sigla_disc`) REFERENCES `professor` (`sigla_disc`),
  ADD CONSTRAINT `atividade_turma` FOREIGN KEY (`sigla_turma`) REFERENCES `turma` (`sigla`);

--
-- Limitadores para a tabela `contato`
--
ALTER TABLE `contato`
  ADD CONSTRAINT `usuario_contato` FOREIGN KEY (`matricula`) REFERENCES `usuario` (`matricula`);

--
-- Limitadores para a tabela `endereco`
--
ALTER TABLE `endereco`
  ADD CONSTRAINT `usuario_endereco` FOREIGN KEY (`matricula`) REFERENCES `usuario` (`matricula`);

--
-- Limitadores para a tabela `gerenciador`
--
ALTER TABLE `gerenciador`
  ADD CONSTRAINT `usuario_gerenciador` FOREIGN KEY (`matricula`) REFERENCES `usuario` (`matricula`);

--
-- Limitadores para a tabela `professor`
--
ALTER TABLE `professor`
  ADD CONSTRAINT `usuario_professor` FOREIGN KEY (`matricula`) REFERENCES `usuario` (`matricula`);

--
-- Limitadores para a tabela `responsavel`
--
ALTER TABLE `responsavel`
  ADD CONSTRAINT `usuario_responsavel` FOREIGN KEY (`matricula`) REFERENCES `usuario` (`matricula`);

--
-- Limitadores para a tabela `turma_faltas`
--
ALTER TABLE `turma_faltas`
  ADD CONSTRAINT `faltas_aluno` FOREIGN KEY (`mat_aluno`) REFERENCES `aluno` (`matricula`),
  ADD CONSTRAINT `faltas_professor` FOREIGN KEY (`sigla_disc`) REFERENCES `professor` (`sigla_disc`),
  ADD CONSTRAINT `faltas_turma` FOREIGN KEY (`sigla_turma`) REFERENCES `turma` (`sigla`);

--
-- Limitadores para a tabela `turma_material`
--
ALTER TABLE `turma_material`
  ADD CONSTRAINT `turmaMaterial_professor` FOREIGN KEY (`sigla_disc`) REFERENCES `professor` (`sigla_disc`),
  ADD CONSTRAINT `turmaMaterial_turma` FOREIGN KEY (`sigla_turma`) REFERENCES `turma` (`sigla`);

--
-- Limitadores para a tabela `turma_nf_total`
--
ALTER TABLE `turma_nf_total`
  ADD CONSTRAINT `nf_aluno` FOREIGN KEY (`mat_aluno`) REFERENCES `aluno` (`matricula`),
  ADD CONSTRAINT `nf_professor` FOREIGN KEY (`sigla_disc`) REFERENCES `professor` (`sigla_disc`),
  ADD CONSTRAINT `nf_turma` FOREIGN KEY (`sigla_turma`) REFERENCES `turma` (`sigla`);

--
-- Limitadores para a tabela `turma_notas`
--
ALTER TABLE `turma_notas`
  ADD CONSTRAINT `notas_aluno` FOREIGN KEY (`mat_aluno`) REFERENCES `aluno` (`matricula`),
  ADD CONSTRAINT `notas_atividade` FOREIGN KEY (`id_atividade`) REFERENCES `atividades_avaliativas` (`id`),
  ADD CONSTRAINT `notas_professor` FOREIGN KEY (`sigla_disc`) REFERENCES `professor` (`sigla_disc`),
  ADD CONSTRAINT `notas_turma` FOREIGN KEY (`sigla_turma`) REFERENCES `turma` (`sigla`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
