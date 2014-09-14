-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generato il: Set 14, 2014 alle 18:08
-- Versione del server: 5.5.35
-- Versione PHP: 5.4.6-1ubuntu1.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `carboneMarco`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `Libri`
--

CREATE TABLE IF NOT EXISTS `Libri` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `titolo` varchar(128) DEFAULT NULL,
  `autore` varchar(128) DEFAULT NULL,
  `editore` varchar(128) DEFAULT NULL,
  `stato` varchar(128) DEFAULT NULL,
  `locazione` varchar(128) DEFAULT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dump dei dati per la tabella `Libri`
--

INSERT INTO `Libri` (`id`, `titolo`, `autore`, `editore`, `stato`, `locazione`) VALUES
(1, 'la piramide di fango', 'Camilleri Andrea', 'Sellerio editore palermo', 'NON DISPONIBILE', 'A'),
(2, 'una mutevole verità', 'Carofiglio Gianrico', 'Einaudi', 'DISPONIBILE', 'A'),
(3, 'vacanze in giallo', 'Robecchi', 'Sellerio editore palermo', 'DISPONIBILE', 'A'),
(4, 'shadowhunters', 'Clare Cassandra', 'Mondadori', 'DISPONIBILE', 'A'),
(5, 'in fondo al tuo cuore', 'De Giovanni Maurizio', 'Einaudi', 'DISPONIBILE', 'A'),
(6, 'fantasmi dal passato', 'Vichi Marco', 'Guanda', 'DISPONIBILE', 'A'),
(7, 'storia di una ladra di libri', 'Zusak Markus', 'Frassinelli', 'DISPONIBILE', 'A'),
(8, 'la misura della felicità', 'Zevin Gabrielle', 'Nord', 'DISPONIBILE', 'A'),
(9, 'L''abazia dei cento peccati', 'Simoni Marcello', 'Newton Compton', 'DISPONIBILE', 'A'),
(10, 'I clienti di Avrenos', 'Simenon Georges', 'Adelphi', 'DISPONIBILE', 'A'),
(11, 'Il desiderio di essere come tutti', 'Piccolo Francesco', 'Einaudi', 'DISPONIBILE', 'B'),
(12, 'adulterio', 'Coelho Paulo', 'Bompiani', 'DISPONIBILE', 'B'),
(13, 'albergo italia', 'Lucarelli Carlo', 'Einaudi', 'DISPONIBILE', 'B'),
(14, 'Il caso kakoiannis', 'Recami Francesco', 'Sellerio editore palermo', 'DISPONIBILE', 'B'),
(15, 'il cardellino', 'Tartt Donna', 'Rizzoli', 'DISPONIBILE', 'B'),
(16, 'non dirmi che hai paura', 'Catozzella Giuseppe', 'Feltrinelli', 'DISPONIBILE', 'B'),
(17, 'il sentiero dei desideri', 'Caboni Cristina', 'Garzanti libri', 'DISPONIBILE', 'B'),
(18, 'colpa delle stelle', 'Green Jhon', 'Rizzoli', 'DISPONIBILE', 'B'),
(19, 'vita dopo vita', 'Atkinson Kate', 'Nord', 'DISPONIBILE', 'B'),
(20, 'l''incolore tazaki tsukuru', 'Murakami Haruki', 'Einaudi', 'DISPONIBILE', 'B'),
(21, 'i cento libri che rendono più ricca la mente', 'Dorfles Piero', 'Garzanti libri', 'DISPONIBILE', 'C'),
(22, 'le scelte che non hai fatto', 'Perosino Maria', 'Einaudi', 'DISPONIBILE', 'C'),
(23, 'un idea di destino', 'Terzani Tiziano', 'Longanesi', 'DISPONIBILE', 'C'),
(24, 'il fuoco di sangue', 'Brooks Terry', 'Mondadori', 'DISPONIBILE', 'C'),
(25, 'buttanissima sicilia', 'Buttafuoco Pietrangelo', 'Bompiani', 'DISPONIBILE', 'C'),
(26, 'october list', 'Deaver Jeffery', 'Rizzoli', 'DISPONIBILE', 'C'),
(27, 'la moglie magica', 'Casati Modignani Sveva', 'Sperling e Kupfer', 'DISPONIBILE', 'C'),
(28, 'ti fidi di me?', 'Lynn J.', 'Nord', 'DISPONIBILE', 'C'),
(29, 'l''armata dei sonnambuli', 'Wu Ming', 'Einaudi', 'DISPONIBILE', 'C'),
(30, 'uno splendido disastro', 'McGuire Jamie', 'Garzanti libri', 'DISPONIBILE', 'C'),
(31, 'quattro sberle benedette', 'Vitali Andrea', 'Garzanti libri', 'DISPONIBILE', 'D'),
(32, 'allegiant', 'Roth Veronica', 'De Agostini', 'DISPONIBILE', 'D'),
(33, 'giorgione orto e cucina', 'Barchiesi Giorgio', 'Gambero Rosso CRH', 'DISPONIBILE', 'D'),
(34, 'la dieta del dott. Mozzi', 'Mozzi Pietro', 'Coop. Mogliazze', 'DISPONIBILE', 'D'),
(35, 'il mio disastro sei tu', 'McGuire Jamie', 'Garzanti libri', 'DISPONIBILE', 'D'),
(36, 'la sirena', 'Lackberg Camilla', 'Marsilio', 'DISPONIBILE', 'D'),
(37, 'orizzonte di fuoco', 'Rollins James', 'Nord', 'DISPONIBILE', 'D'),
(38, 'il buio oltre la siepe', 'Lee Harper', 'Feltrinelli', 'DISPONIBILE', 'D'),
(39, 'il segrate della camera n3', 'Dexter Colin', 'Sellerio editore palermo', 'DISPONIBILE', 'D'),
(40, 'un estate con Montaigne', 'Compagnon Montaigne', 'Adelphi', 'DISPONIBILE', 'D'),
(41, 'da quando a ora', 'Falletti Giorgio', 'Einaudi', 'DISPONIBILE', 'E'),
(42, 'il trono di spade', 'Martin George R.', 'Mondadori', 'DISPONIBILE', 'E'),
(43, 'la sposa silenziosa', 'A.S.A. Harrison', 'Longanesi', 'DISPONIBILE', 'E'),
(44, 'e l''eco rispose', 'Hossein Khaled', 'Piemme', 'DISPONIBILE', 'E'),
(45, 'il nero e l''argento', 'Giordano Paolo', 'Einaudi', 'DISPONIBILE', 'E'),
(46, 'un disastro è per sempre', 'McGuire Jamie', 'Garzanti libri', 'DISPONIBILE', 'E'),
(47, 'confessioni di una squartatrice', 'Nesser Hakan', 'Guanda', 'DISPONIBILE', 'E'),
(48, 'insurgent', 'Roth Veronica', 'De Agostini', 'DISPONIBILE', 'E'),
(49, 'the china study', 'Campbell T. Colin', 'Macro Edizioni', 'DISPONIBILE', 'E'),
(50, 'la danza dei draghi', 'Martin George R.', 'Mondadori', 'DISPONIBILE', 'E');

-- --------------------------------------------------------

--
-- Struttura della tabella `Utenti`
--

CREATE TABLE IF NOT EXISTS `Utenti` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(128) DEFAULT NULL,
  `cognome` varchar(128) DEFAULT NULL,
  `password` varchar(16) DEFAULT NULL,
  `id_libro` int(11) DEFAULT NULL,
  `e_mail` varchar(128) DEFAULT NULL,
  `sesso` varchar(128) DEFAULT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dump dei dati per la tabella `Utenti`
--

INSERT INTO `Utenti` (`id`, `nome`, `cognome`, `password`, `id_libro`, `e_mail`, `sesso`) VALUES
(26, 'Marco', 'Carbone', 'ciao', 1, 'marco.carbone@example.it', 'Maschio');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
