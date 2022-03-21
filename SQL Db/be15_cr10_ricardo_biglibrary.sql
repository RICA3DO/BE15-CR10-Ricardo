-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2022 at 02:49 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `be15_cr10_ricardo_biglibrary`
--
CREATE DATABASE IF NOT EXISTS `be15_cr10_ricardo_biglibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `be15_cr10_ricardo_biglibrary`;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `bookID` int(11) NOT NULL,
  `picture` varchar(250) DEFAULT NULL,
  `title` varchar(50) NOT NULL,
  `ISBN` int(13) NOT NULL,
  `short_description` varchar(650) NOT NULL,
  `book_type` varchar(13) NOT NULL,
  `author_first_name` varchar(50) NOT NULL,
  `author_last_name` varchar(50) NOT NULL,
  `publisher_name` varchar(50) NOT NULL,
  `publisher_address` varchar(50) NOT NULL,
  `publish_date` date NOT NULL,
  `book_status` enum('available','reserved') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`bookID`, `picture`, `title`, `ISBN`, `short_description`, `book_type`, `author_first_name`, `author_last_name`, `publisher_name`, `publisher_address`, `publish_date`, `book_status`) VALUES
(1, 'HP_PS.jpeg', 'Harry Potter and the Philosopher\'s Stone', 747532699, 'Harry Potter lives with his abusive aunt and uncle, Vernon and Petunia Dursley and their bullying son, Dudley. On Harry\'s eleventh birthday, a half-giant named Rubeus Hagrid personally delivers an acceptance letter to Hogwarts School of Witchcraft and Wizardry, revealing that Harry\'s parents, James and Lily Potter, were wizards. When Harry was one year old, an evil and powerful dark wizard, Lord Voldemort, murdered his parents. Harry survived Voldemort\'s killing curse that rebounded off his forehead and seemingly destroyed the Dark Lord, leaving a lightning bolt-shaped scar on his forehead.', 'Book', 'Joanne', 'Rowling', 'Bloomsbury', 'UK', '1997-06-26', 'available'),
(2, 'HP_CS.jpg', 'Harry Potter and the Chamber of Secrets', 747538492, 'While spending the summer at the Dursleys, twelve-year-old Harry is visited by a house-elf named Dobby. He warns that Harry is in danger and must not return to Hogwarts. Harry refuses, so Dobby magically ruins Aunt Petunia and Uncle Vernon\'s dinner party. A furious Uncle Vernon locks Harry into his room in retaliation. The Ministry of Magic immediately sends a notice accusing Harry of performing underage magic and threatening dismissal from Hogwarts.', 'Book', 'Joanne', 'Rowling', 'Bloomsbury', 'UK', '1998-07-02', 'reserved'),
(3, 'HP_PA.jpg', 'Harry Potter and the Prisoner of Azkaban', 747542155, 'Thirteen-year-old Harry Potter spends another unhappy summer at the Dursleys. After Aunt Marge insults Harry and his deceased parents, an angry Harry accidentally inflates her. Fearing expulsion from Hogwarts, he runs away. On a dark street, a large black dog watches Harry. Startled, Harry stumbles backward, causing his wand to emit sparks. The Knight Bus, a vehicle that rescues stranded wizards, suddenly arrives. Harry goes to the Leaky Cauldron in Diagon Alley where Cornelius Fudge, the Minister for Magic, is waiting. Harry is not expelled but is asked to remain in Diagon Alley until school starts. While there.', 'Book', 'Joanne', 'Rowling', 'Bloomsbury', 'UK', '1999-07-08', 'available'),
(4, 'Avatar.jpg', 'Avatar', 634533452, 'In 2154, humans have depleted Earth\'s natural resources, leading to a severe energy crisis. The Resources Development Administration (RDA) mines a valuable mineral called unobtanium on Pandora, a densely forested habitable moon orbiting Polyphemus, a fictional gas giant in the Alpha Centauri star system.[10] Pandora, whose atmosphere is poisonous to humans, is inhabited by the Na\'vi, a species of 10-foot tall (3.0 m), blue-skinned, sapient humanoids[38] that live in harmony with nature and worship a mother goddess named Eywa.', 'DVD', 'James', 'Cameron', '20th Century Fox', 'United States', '2009-12-18', 'available'),
(5, 'HP_GF.png', 'Harry Potter and the Goblet of Fire', 747546245, 'Throughout the three previous novels in the Harry Potter series, the main character, Harry Potter, has struggled with the difficulties of growing up and the added challenge of being a famed wizard. When Harry was a baby, Lord Voldemort, the most powerful dark wizard in history, killed Harry\'s parents but was mysteriously defeated after unsuccessfully trying to kill Harry, though his attempt left a lightning-shaped scar on Harry\'s forehead. This results in Harry\'s immediate fame and his being placed in the care of his abusive Muggle (non-magical) aunt and uncle, Petunia and Vernon Dursley, who have a son named Dudley.', 'Book', 'Joanne', 'Rowling', 'Bloomsbury', 'UK', '2000-07-08', 'available'),
(6, 'HP_OP.jpg', 'Harry Potter and the Order of the Phoenix', 747551006, 'During the summer, Harry Potter and his cousin Dudley are attacked by Dementors. Forced to magically fend them off, Harry is expelled from Hogwarts, but his expulsion is postponed pending a hearing at the Ministry of Magic. A group of wizards belonging to the Order of the Phoenix whisk Harry off to Number 12, Grimmauld Place, Sirius Black\'s childhood home.', 'Book', 'Joanne', 'Rowling', 'Bloomsbury', 'UK', '2003-06-27', 'available'),
(7, 'HP_HBP.png', 'Harry Potter and the Half-Blood Prince', 747581088, 'Severus Snape, a member of the Order of the Phoenix, meets with Narcissa Malfoy, Draco\'s mother, and her sister Bellatrix Lestrange, Lord Voldemort\'s supporter. Narcissa expresses concern that her son may not survive a mission that Voldemort has given him. Snape makes an Unbreakable Vow with Narcissa, swearing to assist Draco.', 'Book', 'Joanne', 'Rowling', 'Bloomsbury', 'UK', '2005-07-16', 'available'),
(8, 'HP_DH.jpg', 'Harry Potter and the Deathly Hallows', 545010225, 'Throughout the six previous novels in the series, the main character Harry Potter has struggled with the difficulties of adolescence along with being famous as the only person ever to survive the Killing Curse. The curse was cast by Tom Riddle, better known as Lord Voldemort, a powerful evil wizard who murdered Harry\'s parents and attempted to kill Harry as a baby, due to a prophecy which claimed Harry would be able to stop him. As an orphan, Harry was placed in the care of his Muggle (non-magical) relatives Petunia Dursley and Vernon Dursley, with their son Dudley Dursley.', 'Book', 'Joanne', 'Rowling', 'Bloomsbury', 'UK', '2007-07-14', 'available'),
(9, 'Berserk_manga.png', 'Berserk', 753456643, 'Guts is a lone warrior who was born from a hanged corpse and raised as a mercenary by adoptive father Gambino, whom he was forced to kill in self defense. His fearsome reputation catches the attention of Griffith, the charismatic leader of a mercenary group known as the Band of the Hawk. Griffith forces Guts to join the group after defeating him in battle, with Guts becoming his best fighter while quickly rising through the band\'s ranks as they are hired by the Midland Kingdom during its century-long war against the Chuder Empire.', 'Book', 'Kentaro', 'Miura', 'Hakusensha', 'Tokyo', '1988-01-12', 'available'),
(13, 'Transformers.jpg', 'Transformers', 745627446, 'Thousands of years ago, the planet Cybertron was consumed by a civil war between the two Transformer factions, the Autobots led by Optimus Prime and the Decepticons led by Megatron. The Autobots want to find the All Spark, the source of all Cybertronian life, so they can use it to rebuild Cybertron and end the war between the Autobots and the Decepticons, while the Decepticons want to use it to defeat the Autobots and conquer the universe. Megatron found the All Spark on Earth, but crash-landed in the Arctic Circle and was frozen in the ice. Captain Archibald Witwicky and his crew of explorers stumble upon Megatron\'s body in 1897.', 'DVD', 'Michael', 'Bay', 'Paramount Pictures[', 'United States', '2007-07-03', 'reserved');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`bookID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `bookID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
