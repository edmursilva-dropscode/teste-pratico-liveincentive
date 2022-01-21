-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21-Jan-2022 às 16:03
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `teste_live`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `novidade`
--

CREATE TABLE `novidade` (
  `id_novidade` int(11) NOT NULL,
  `novidade_resumo` varchar(255) DEFAULT NULL,
  `novidade_completa` text DEFAULT NULL,
  `novidade_data` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `novidade`
--

INSERT INTO `novidade` (`id_novidade`, `novidade_resumo`, `novidade_completa`, `novidade_data`) VALUES
(1, 'Eum cu tantas legere complectitur, hinc utamur ea eam. Eum patrioque mnesarchum eu, diam erant convenire et vis. Et essent evertitur sea, vis cu ubique referrentur, sed eu dicant expetendis.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tincidunt nibh ex. Mauris in arcu sed arcu ultrices finibus non nec justo. Vestibulum suscipit maximus risus, ut consequat libero tristique sagittis. In vitae purus leo. Nulla malesuada in leo a efficitur. Cras non viverra neque, sit amet consequat turpis. ', '2018-09-14'),
(2, 'Eum cu tantas legere complectitur, hinc utamur ea eam. Eum patrioque mnesarchum eu, diam erant convenire et vis. Et essent evertitur sea, vis cu ubique referrentur, sed eu dicant expetendis.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tincidunt nibh ex. Mauris in arcu sed arcu ultrices finibus non nec justo. Vestibulum suscipit maximus risus, ut consequat libero tristique sagittis. In vitae purus leo. Nulla malesuada in leo a efficitur. Cras non viverra neque, sit amet consequat turpis. ', '2018-06-16'),
(3, 'Eum cu tantas legere complectitur, hinc utamur ea eam. Eum patrioque mnesarchum eu, diam erant convenire et vis. Et essent evertitur sea, vis cu ubique referrentur, sed eu dicant expetendis.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tincidunt nibh ex. Mauris in arcu sed arcu ultrices finibus non nec justo. Vestibulum suscipit maximus risus, ut consequat libero tristique sagittis. In vitae purus leo. Nulla malesuada in leo a efficitur. Cras non viverra neque, sit amet consequat turpis. ', '2018-04-18'),
(4, 'Eum cu tantas legere complectitur, hinc utamur ea eam. Eum patrioque mnesarchum eu, diam erant convenire et vis. Et essent evertitur sea, vis cu ubique referrentur, sed eu dicant expetendis.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tincidunt nibh ex. Mauris in arcu sed arcu ultrices finibus non nec justo. Vestibulum suscipit maximus risus, ut consequat libero tristique sagittis. In vitae purus leo. Nulla malesuada in leo a efficitur. Cras non viverra neque, sit amet consequat turpis. ', '2018-03-23'),
(5, 'Eum cu tantas legere complectitur, hinc utamur ea eam. Eum patrioque mnesarchum eu, diam erant convenire et vis. Et essent evertitur sea, vis cu ubique referrentur, sed eu dicant expetendis.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tincidunt nibh ex. Mauris in arcu sed arcu ultrices finibus non nec justo. Vestibulum suscipit maximus risus, ut consequat libero tristique sagittis. In vitae purus leo. Nulla malesuada in leo a efficitur. Cras non viverra neque, sit amet consequat turpis. ', '2018-03-20'),
(6, 'Eum cu tantas legere complectitur, hinc utamur ea eam. Eum patrioque mnesarchum eu, diam erant convenire et vis. Et essent evertitur sea, vis cu ubique referrentur, sed eu dicant expetendis.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tincidunt nibh ex. Mauris in arcu sed arcu ultrices finibus non nec justo. Vestibulum suscipit maximus risus, ut consequat libero tristique sagittis. In vitae purus leo. Nulla malesuada in leo a efficitur. Cras non viverra neque, sit amet consequat turpis. ', '2022-01-28'),
(7, 'Eum cu tantas legere complectitur, hinc utamur ea eam. Eum patrioque mnesarchum eu, diam erant convenire et vis. Et essent evertitur sea, vis cu ubique referrentur, sed eu dicant expetendis.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tincidunt nibh ex. Mauris in arcu sed arcu ultrices finibus non nec justo. Vestibulum suscipit maximus risus, ut consequat libero tristique sagittis. In vitae purus leo. Nulla malesuada in leo a efficitur. Cras non viverra neque, sit amet consequat turpis. ', '2022-01-26'),
(8, 'Eum cu tantas legere complectitur, hinc utamur ea eam. Eum patrioque mnesarchum eu, diam erant convenire et vis. Et essent evertitur sea, vis cu ubique referrentur, sed eu dicant expetendis.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tincidunt nibh ex. Mauris in arcu sed arcu ultrices finibus non nec justo. Vestibulum suscipit maximus risus, ut consequat libero tristique sagittis. In vitae purus leo. Nulla malesuada in leo a efficitur. Cras non viverra neque, sit amet consequat turpis. ', '2022-01-29'),
(9, 'Eum cu tantas legere complectitur, hinc utamur ea eam. Eum patrioque mnesarchum eu, diam erant convenire et vis. Et essent evertitur sea, vis cu ubique referrentur, sed eu dicant expetendis.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tincidunt nibh ex. Mauris in arcu sed arcu ultrices finibus non nec justo. Vestibulum suscipit maximus risus, ut consequat libero tristique sagittis. In vitae purus leo. Nulla malesuada in leo a efficitur. Cras non viverra neque, sit amet consequat turpis. ', '2022-01-09'),
(10, 'Eum cu tantas legere complectitur, hinc utamur ea eam. Eum patrioque mnesarchum eu, diam erant convenire et vis. Et essent evertitur sea, vis cu ubique referrentur, sed eu dicant expetendis.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tincidunt nibh ex. Mauris in arcu sed arcu ultrices finibus non nec justo. Vestibulum suscipit maximus risus, ut consequat libero tristique sagittis. In vitae purus leo. Nulla malesuada in leo a efficitur. Cras non viverra neque, sit amet consequat turpis. ', '2022-01-22'),
(11, 'Eum cu tantas legere complectitur, hinc utamur ea eam. Eum patrioque mnesarchum eu, diam erant convenire et vis. Et essent evertitur sea, vis cu ubique referrentur, sed eu dicant expetendis.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tincidunt nibh ex. Mauris in arcu sed arcu ultrices finibus non nec justo. Vestibulum suscipit maximus risus, ut consequat libero tristique sagittis. In vitae purus leo. Nulla malesuada in leo a efficitur. Cras non viverra neque, sit amet consequat turpis. ', '2022-01-13'),
(12, 'Eum cu tantas legere complectitur, hinc utamur ea eam. Eum patrioque mnesarchum eu, diam erant convenire et vis. Et essent evertitur sea, vis cu ubique referrentur, sed eu dicant expetendis.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tincidunt nibh ex. Mauris in arcu sed arcu ultrices finibus non nec justo. Vestibulum suscipit maximus risus, ut consequat libero tristique sagittis. In vitae purus leo. Nulla malesuada in leo a efficitur. Cras non viverra neque, sit amet consequat turpis. ', '2022-01-25');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nome_completo` varchar(255) DEFAULT NULL,
  `cpf` varchar(15) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `nascimento` date DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `data_cadastro` datetime DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome_completo`, `cpf`, `email`, `nascimento`, `senha`, `data_cadastro`) VALUES
(10, 'Fernando G Silva Jr', '171.617.918-13', 'edmurgsilvajr@gmail.com', '1968-01-04', 'teste', '2022-01-21 10:53:22'),
(9, 'Edmur G Silva Jr', '171.617.918-11', 'edmurgsilvajr@gmail.com', '1968-01-04', 'teste', '2022-01-21 10:52:11');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `novidade`
--
ALTER TABLE `novidade`
  ADD PRIMARY KEY (`id_novidade`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `novidade`
--
ALTER TABLE `novidade`
  MODIFY `id_novidade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
