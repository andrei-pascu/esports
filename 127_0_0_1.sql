-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 28 Iul 2017 la 14:08
-- Versiune server: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `esports`
--

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `date_posted` varchar(30) NOT NULL,
  `content` varchar(30000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `news`
--

INSERT INTO `news` (`id`, `title`, `date_posted`, `content`) VALUES
(15, 'You Should Play This: Metro 2033', 'June 14, 2017', ' Metro 2033 is set in post-apocalyptic Moscow, after nuclear weapons have annihilated much of the world. The fallout forced the surviving humans to eke out a living deep below the surface in the Moscow subway system. Communities have sprung up throughout many of the stations, struggling to survive in the darkness as various factions fight among themselves, while bandits and mutated monstrosities assail their walls.\r\n\r\n You play as Artyom, a young man tasked with leaving his hometown to reach a far away station that houses an elite cadre of soldiers, in the hopes that they will be able to help defeat a number of mysterious beings known as Dark Ones. Along the way, Artyom will have to survive against the monsters that populate the subway system, as well as the communists and Nazis that have resurfaced with great fervor since the apocalypse.'),
(16, 'Off Meta: Jhin Jungle', 'June 14, 2017', ' How does this work?\r\n\r\n Jhin jungle is basically the cooler version of Shaco jungle, as if Shaco turned his chair around and sat on it by leaning forward against the back of the chair. You also take Flash with Smite and not Ignite because you\'re not a monster who thinks your tool to get in is also going to help get you out.\r\n\r\n Like Kevin McCallister from Home Alone, you must rely on your traps to survive and succeed early. Lay down four traps onto raptors before they spawn at 1:37. If they sit onto them all, Jhin should be able to cause the small raptors to die, leaving their larger family member (Mother? Brother? Aunt? Estranged Godfather?) to fend for themselves.\r\n\r\n After that, you can devastate other camps while kiting them to take less damage. If your team is actually somehow communicative and willing to help, they can kite and leash red buff while you enact your plan to make all small raptors extinct. After, you can go to red buff and collect it in a flash (please don\'t literally use your flash to go get it).\r\n\r\n Once Jhin hits Level 3, the fun begins. At once, Jhin can help mid through a W root, and run through river to gank the other sidelane with red buff auto attacks and his massive damage. Does this sound fair? Yeah, I didn\'t think so either. The last time I saw someone try to gank two lanes at once, Dyrus leaked the strategy.'),
(17, 'How did this happen: The Laser AUG', 'June 14, 2017', ' On Feb. 5, 2014, Valve released a sort of post-holiday cleanup patch. They removed the seasonal holiday items from the store, but also did a few bug fixes and some re-balancing here and there. Both the AUG and its Terrorist counterpart, the SG 553, got and increased rate of fire and lower recoil.\r\n\r\n The AUG is not a terribly popular gun outside of lower-level play, simply because it\'s not cost-efficient. Even back then, its long reload times, high price tag and low damage against even unarmored targets made it a worse choice overall than say, the M4A1-S, which has the AUG\'s general accuracy, but with some more damage and a lower price tag.'),
(18, 'mouz\'s oskar on qualifying for his first Major', 'June 14, 2017', ' TomÃ¡Å¡ \"oskar\" Å Å¥astnÃ½ is the AWPer for mousesports who, at 26 years old, has qualified for his first ever Major.\r\n\r\n Ahead of his games in KrakÃ³w, oskar answered questions from theScore esports about his long journey to the Major and coming into the event after a poor showing at ESL One Cologne 2017.\r\n\r\n First off, congratulations on making the Major. After your win against PENTA Sports in the offline qualifier, which clinched your Major spot, what were your reactions, what was the first thing you did when you got backstage? What were the reactions from your friends and family?\r\n\r\n Hey, thank you. It was a hard match and a pretty big relief for me because of the previous attempts with HellRaisers.'),
(19, 'You Should Play This: Endless Legend', 'June 14, 2017', ' The 4X genre of strategy games has long been popular staple in PC gaming, with the Civilization series being a prime example. Standing for eXplore, eXpand, eXploit and eXterminate, 4X games provide you with complex control over an empire, giving you numerous technological, economical and military solutions in order to achieve victory.\r\n\r\n But outside of the Civilization series, most 4X games use science fiction as a setting. Games like the Galactic Civilizations series, Stellaris and Sins of a Solar Empire place you in control of large space-faring empires, where planets replace cities and battles are fought with interstellar armadas instead of ships at sea.\r\n           '),
(20, 'Team Liquid sign Mickey', 'June 14, 2017', ' Team Liquid have signed ROX Tigers mid laner Son \"Mickey\" Young-min to their NA LCS roster, the organization announced Monday.\r\n\r\n \"Mickey is young, ambitious, and a hard worker. He brings a desire to win, an aggressive play style and an enthusiasm to play in North America and we\'re excited about that,\" Liquid CEO Steve Arhancet said in a press release. \"As an organization, we have some of the best resources in terms of accommodating a Korean who has not yet been to North America and we feel like we\'re well-positioned to give Mickey a healthy transition.\".'),
(21, 'CS:GO Match of the Week ', 'June 14, 2017', ' ViCi Gaming vs. UYA   \r\n\r\n On the other side of the bracket for ROG Masters 2017 - China are two familiar teams from Asia, ViCi Gaming and UYA, with the former being the stronger of the two.\r\n\r\n Earlier in the year, VG\'s well-known AWPer Savage took a short stint off of VG\'s primary roster to start an offshoot team dubbed ViCi Gaming Renascence. But after both rosters failed to find any success, Savage returned to VG\'s primary roster, largely returning to form.\r\n\r\n UYA is probably the most interesting team at the event as they are one of the few teams in Asia that have made use of foreign talent and a six-man roster. They have four Chinese players, one Russian player and one Estonian player, and that\'s not mentioning their two coaches.\r\n\r\n Though UYA have a larger support staff, they have a losing record against VG, but their head-to-heads are almost always competitive.'),
(23, 'Cloud9 sign Team NP', 'June 14, 2017', ' Cloud9 released their last Dota 2 roster in May, after originally signing the team formerly known as Danish Bears in January. Prior to that signing, Cloud9 fielded a Dota 2 team that competed at both TI4 and TI5, advancing as high as 5th-6th place in the former.\r\n\r\n Team NP was originally formed in the post-TI6 roster shuffle by team captain Jacky \"EternalEnvy\" Mao and most recently qualified for TI7 after placing first in the North American closed qualifiers. All five of the current members of Cloud9 have previously played for the organization in the past.\r\n\r\n The team will make their competitive debut as Cloud9 at The International 2017 group stage, which begins on Aug. 2.'),
(25, 'HellRaisers sign Planet Dog', 'July 14, 2017', ' HellRaisers have signed The International 2017-qualified team Planet Dog, the organization announced Thursday.\r\n\r\n \"I\'m really excited to be joining HellRaiers as their first Dota team in over a year and to go to The International together for the first time,\" player Alexei \r\n\"j4\" Lipai said in a press release. \"HR are a great organisation and we both got on really well from our first meeting. We\'re all looking forward to a long bright future with HR!\"\r\n\r\n HellRaisers released their last Dota 2 roster in March 2016, after a long period of poor results. The organization has been in and out of Dota 2 since 2014, often fielding teams built around CIS players.\r\n\r\n'),
(26, 'Best Skin Concepts: Rift Rivals edition', 'July 28, 2017', ' Best Skin Concepts is a recurring series that highlights the best skins and skin concepts for heroes, champions and characters across a variety of games.\r\n\r\n With Rift Rivals getting underway around the world this week, we\'re going to be highlighting several skin concepts that celebrate a few of the teams competing in the global event. Regardless of who wins each event, we can all take a moment to appreciate the skin concepts that we will never see because SK Telecom T1 continues to exist.'),
(27, 'Esports meets mainstream: ', 'July 28, 2017', ' For being one of the three esports with the largest audiences, Dota 2 sits at a strange place when it comes to big-name, non-endemic sponsors. Dota 2 is a juggernaut in terms of viewership and prize payouts for top teams, but it\'s relatively small-time in terms of mainstream sponsorship in the West. Outside of the standard big-name esports teams we see at The International every year, Dota seems unfriendly to non-endemic sponsors. But Valve can change that.\r\n\r\n In most of the past entries of this column, I\'ve talked about non-endemic brands entering all kinds of different esports spaces, but I\'ve rarely mentioned Dota.');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `news_e`
--

CREATE TABLE `news_e` (
  `id` int(11) NOT NULL,
  `title` varchar(40) NOT NULL,
  `date_posted` varchar(30) NOT NULL,
  `content_1` varchar(5000) NOT NULL,
  `content_2` varchar(5000) NOT NULL,
  `content_3` varchar(5000) NOT NULL,
  `content_4` varchar(5000) NOT NULL,
  `content_5` varchar(5000) NOT NULL,
  `content_6` varchar(5000) NOT NULL,
  `content_7` varchar(5000) NOT NULL,
  `content_8` varchar(5000) NOT NULL,
  `content_9` varchar(5000) NOT NULL,
  `content_10` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'musuroi', 'andrei'),
(2, 'carnat', 'debalta'),
(3, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_e`
--
ALTER TABLE `news_e`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `news_e`
--
ALTER TABLE `news_e`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
