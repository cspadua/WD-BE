-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2024 at 03:32 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `corememories`
--

-- --------------------------------------------------------

--
-- Table structure for table `islandcontents`
--

CREATE TABLE `islandcontents` (
  `islandContentID` int(4) NOT NULL,
  `islandOfPersonalityID` int(4) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `content` varchar(1000) NOT NULL,
  `color` varchar(10) DEFAULT NULL,
  `contentName` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islandcontents`
--

INSERT INTO `islandcontents` (`islandContentID`, `islandOfPersonalityID`, `image`, `content`, `color`, `contentName`) VALUES
(1, 1, 'familyc1.png', 'My father works as an OFW, which means he’s away most of the time. The moments we get to spend together when he’s home are incredibly special, even though the distance isn’t easy. I always remind myself that he’s working hard for us, and that thought stays close to my heart', NULL, 'The OFW Shore'),
(2, 1, 'familyc2.png', 'My mom works tirelessly to keep everything running smoothly at home, even when things get challenging. She’s the backbone of our family, the one who holds us together through thick and thin. Despite the weight she carries, she’s always there, making sure we’re cared for, supported, and loved, especially during the times when Dad is away. Her constant presence and unwavering dedication make her the heart of our home, and we’re so lucky to have her.', NULL, 'The Home Haven'),
(3, 1, 'familyc3.png', 'My brother, my sister, and I? We’re constantly at odds, squabbling over the silliest things. The tension can get intense at times, and it’s not always easy to get along. But no matter how much we argue or clash, I care about them deeply. At the end of the day, they’re my family, and despite all the chaos, I wouldn’t trade them for anything.', NULL, ' The Sibling Chaos'),
(4, 2, 'gfc1.png', 'This is where our shared love for food thrives. Whether it’s trying out new dishes, sharing snacks, or playfully debating what to eat next, this part of the island holds some of our most enjoyable moments. It’s a reminder that food is more than just something we eat it’s one of the ways we connect, create memories, and strengthen our bond in the simplest yet most meaningful ways.', NULL, 'The Table of Taste'),
(5, 2, 'gfc2.png', 'This bridge symbolizes how we navigate our personality differences. It’s not always easy, but we make the effort to meet halfway. Through patience, understanding, and compromise, we grow together, learning more about each other with each challenge we face. Despite the difficulties, we continue to strengthen our bond and move forward together.', NULL, 'Bridge of Differences'),
(6, 2, 'gfc3.png', 'This spot is filled with the laughter and happiness I feel whenever I’m with her. It’s a place that reminds me of all the little things she does that make me love her even more. She has this amazing way of making even the simplest moments feel incredibly special, and being here brings all those beautiful memories to life.', NULL, 'The Joyful Garden'),
(7, 3, 'friendc1.png', 'This part of the island reflects how I adapt to each friend’s unique personality. With Johnbert, Gabriel, and Juniel being so distinct, I’ve learned to navigate their differences and find ways to connect with each of them. It hasn’t always been easy, but these adjustments have helped me grow, strengthening our bonds and ensuring our friendships remain strong despite our individuality.', NULL, 'Zone of Adaptation'),
(8, 3, 'friendc2.png', 'This is where I spend time with each of them one-on-one. Since they can’t all be together without clashing, I’ve learned to appreciate the moments I have with each friend individually. It helps me adapt to their unique personalities, strengthening our bonds and teaching me the importance of understanding and flexibility in friendships.', NULL, 'The Solo Table'),
(9, 3, 'friendc3.png', 'The memories we’ve created together are some of my most cherished treasures. Despite our hectic schedules and the demands of school, the times we manage to meet mean so much to me. Each gathering is a chance to reconnect, share laughter, and create moments that stand out amidst the busyness of life. I always put in the effort to make these times as fun and unforgettable as possible, knowing how rare and precious they truly are.', NULL, 'The Memory Hill'),
(10, 4, 'tftc1.png', 'This is where it all began. playing TFT casually, simply enjoying the game for fun, and slowly realizing it was more than just a pastime. It represents the moment I discovered my potential, the turning point that showed me I could achieve more if I put in the effort. What started as lighthearted enjoyment became a passion, igniting the spark that pushed me to take the game seriously and strive for something greater. It’s a reminder of how small beginnings can lead to incredible journeys when you recognize the possibilities ahead.', NULL, 'The Discovery Arena'),
(11, 4, 'tftc2.png', 'This reflects the mental challenges of playing TFT. From mastering team compositions to analyzing strategies, it’s where I developed my critical thinking and adaptability. It wasn’t just about grinding this game it was about staying sharp, making quick decisions, and adjusting to ever-changing scenarios. These skills became just as important as practice, shaping my approach to the game and helping me grow as a player.', NULL, 'The Strategy Workshop'),
(12, 4, 'tftc3.png', 'This is where I achieved what I once thought was impossible: winning the regional tournament against top-performing schools like UP Diliman and the best teams in the Philippines. It’s not just about the win, it’s a symbol of growth, perseverance, and the fulfillment of a dream. Competing at that level, alongside some of the country’s finest players, proved that with determination and hard work, even the toughest challenges can be overcome.', NULL, 'The Victory Summit'),
(13, 5, 'sparkc1.png', 'This part of the island reflects my fear of failure and self-doubt. It’s where I feel the pressure of living up to expectations, both my own and others\'. Despite the uncertainties, I face these challenges head-on, pushing through the anxiety. It’s a place of struggle, but also one of growth, where I continue to move forward, learning from the obstacles along the way.', NULL, 'The Shadowed Valley'),
(14, 5, 'sparkc2.png', 'A significant part of the island where I confront the truth: IT wasn’t my dream. I didn’t choose this course, and for a long time, I struggled to connect with it. I felt lost and unsure of my place. But it’s also where I began to see its potential, thanks to the support of my friends and especially my professor, Sir CJ. Their encouragement helped me realize that, though this path wasn’t what I envisioned, it could still lead to something meaningful.', NULL, 'Road of Resistance'),
(15, 5, 'sparkc3.png', 'The part of the island where I focus on the future I’m working toward. It reminds me why I keep pushing forward, despite the challenges and doubts. I aim to take everything I’ve learned, grow from it, and overcome my insecurities. My goal is to become a developer I can be proud of, someone who has not only succeeded but also overcome struggles along the way. This vision keeps me motivated and moving forward.', NULL, 'The Horizon of Hope');

-- --------------------------------------------------------

--
-- Table structure for table `islandsofpersonality`
--

CREATE TABLE `islandsofpersonality` (
  `islandOfPersonalityID` int(4) NOT NULL,
  `name` varchar(40) NOT NULL,
  `shortDescription` varchar(300) DEFAULT NULL,
  `longDescription` varchar(900) DEFAULT NULL,
  `color` varchar(10) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islandsofpersonality`
--

INSERT INTO `islandsofpersonality` (`islandOfPersonalityID`, `name`, `shortDescription`, `longDescription`, `color`, `image`, `status`) VALUES
(1, 'Family', 'anger', 'The Island of Family is where I navigate the love, challenges, and occasional chaos of being part of a family. My father works as an OFW, which means he’s often away, and our time together is limited. Despite the ups and downs, my family shapes a big part of who I am and remains at the heart of my journey.', '#933737', 'familyisland.png', NULL),
(2, 'GF', 'joy', 'The Island of my Girlfriend, Myca Gwen, is built on the foundation of love, laughter, and countless shared memories from our three years together. Despite our differences, this island is where we always find common ground, meeting in the middle and embracing what makes us unique as a couple. It’s a place filled with joy, understanding, and the little moments that bring us closer, whether it’s sharing a meal, laughing at an inside joke, or simply enjoying each other’s company. This island is a testament to the bond we’ve nurtured, one that continues to grow stronger with time.', '#938137', 'gfisland.png', NULL),
(3, 'Friend', 'disgust', 'The Island of Friendship is home to the bonds I share with my three friends, Johnbert, Gabriel, and Juniel. Each of them has a unique personality, and bringing them together is like mixing oil and water, it just doesn’t work. Despite their differences, they’ve each carved out a special place in my life. They’ve taught me how to adapt, appreciate varying perspectives, and cherish the individuality that makes each friendship so meaningful. ', '#379353', 'friendisland.png', NULL),
(4, 'TFT', 'anxiety', 'The Island of TFT stands as a testament to my dedication, perseverance, and the value of hard work. What began as a casual pastime quickly evolved into a passion, driving me to push my limits and strive for excellence. Through countless hours of practice, late nights, and learning from my mistakes, I turned this game into one of my greatest achievements.', '#934537', 'tftisland.png', NULL),
(5, 'Spark', 'fear', 'Spark Island is where my doubts, challenges, and small victories as an IT student come together. It’s a place shaped by my fears of not being good enough, where I constantly question my abilities and wonder if I’m truly cut out for this field. But it’s also where my determination to grow and prove myself shines through. Despite the uncertainty, I’ve learned to push past my insecurities and embrace the journey, even though it’s a path I didn’t originally choose for myself.', '#673793', 'sparkisland.png', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `islandcontents`
--
ALTER TABLE `islandcontents`
  ADD PRIMARY KEY (`islandContentID`);

--
-- Indexes for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
  ADD PRIMARY KEY (`islandOfPersonalityID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `islandcontents`
--
ALTER TABLE `islandcontents`
  MODIFY `islandContentID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
  MODIFY `islandOfPersonalityID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
