-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 03-Abr-2017 às 07:33
-- Versão do servidor: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `comicsnews`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `configuracao`
--

CREATE TABLE `configuracao` (
  `nome` varchar(20) DEFAULT NULL,
  `linkbanner` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `configuracao`
--

INSERT INTO `configuracao` (`nome`, `linkbanner`) VALUES
('Ocean', 'http://inspirationfeed.com/wp-content/uploads/2010/08/12582-12620821641.gif/');

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticia`
--

CREATE TABLE `noticia` (
  `ID` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descricao` text NOT NULL,
  `img` varchar(100) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `autor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `noticia`
--

INSERT INTO `noticia` (`ID`, `titulo`, `descricao`, `img`, `data`, `autor`) VALUES
(7, 'Exemplo TÃ­tutlo', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. \r\n\r\nCurabitur sodales ligula in libero. Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa. Fusce ac turpis quis ligula lacinia aliquet. Mauris ipsum. Nulla metus metus, ullamcorper vel, tincidunt sed, euismod in, nibh. ', 'https://www.askideas.com/media/13/Welcome-Banner-With-3d-Colorful-Men.jpg', '2017-04-03 04:36:12', 'Autor 1 Exemplo'),
(8, 'TÃ­tulo 2', 'LOREM IPSUM.', 'https://yt3.ggpht.com/-jsD-pSw6G8w/AAAAAAAAAAI/AAAAAAAAAAA/b9y-Fq4Fz8Q/s100-c-k-no-mo-rj-c0xffffff/p', '2017-04-03 04:53:46', 'Exemplo'),
(9, 'TÃ­tulo 3', 'Android is GOOD!', 'http://storage.googleapis.com/ix_choosemuse/uploads/2016/02/android-logo.png', '2017-04-03 05:22:32', 'Auto 3'),
(10, 'Titulo 4', 'ANDROID IS DOUBLE GOOD!', 'http://storage.googleapis.com/ix_choosemuse/uploads/2016/02/android-logo.png', '2017-04-03 05:25:56', 'Autor 4'),
(11, 'Titulo 5', 'ANDROID IS TRIPLE GOOD!', 'http://storage.googleapis.com/ix_choosemuse/uploads/2016/02/android-logo.png', '2017-04-03 05:26:34', 'Auto 5'),
(12, 'TÃ­tulo 5', 'OÃ­A', 'http://storage.googleapis.com/ix_choosemuse/uploads/2016/02/android-logo.png', '2017-04-03 05:28:00', 'AÃ!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `noticia`
--
ALTER TABLE `noticia`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
