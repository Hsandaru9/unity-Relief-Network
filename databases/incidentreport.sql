

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";



CREATE TABLE `increport` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(256) NOT NULL,
  `user_email` varchar(256) NOT NULL,
  `address` varchar(256) NOT NULL,
  `latitude` varchar(256) NOT NULL,
  `longitude` varchar(256) NOT NULL,
  `incident` varchar(256) NOT NULL,
  `explanation` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `increport`
--

INSERT INTO `increport` (`user_id`, `user_name`, `user_email`, `address`, `latitude`, `longitude`, `incident`, `explanation`) VALUES
(1, 'admin', 'admin@gmail.com', 'ananda collage,Colombo 01000, Sri Lanka', '79.86927930000002', '79.86927930000002', 'Fire', 'there is a huge fire.'),
(8, 'alpha', 'alpha@gmail.com', 'royal collageRajakeeya Mawatha, Colombo 00700, Sri Lanka.', '79.86144809999996', '79.86144809999996', 'Natural Disaster', 'there is a earthquake situation.please help us. '),
(9, 'bravo', 'bravo@gmail.com', 'dharmapala vidyalaya,High Level Rd, Pannipitiya 10230, Sri Lanka.', '79.95389419999992', '79.95389419999992', 'Road Side Accident', 'car accident/ two school students are injured/ we wanna immediate support. ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `increport`
--
ALTER TABLE `increport`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `increport`
--
ALTER TABLE `increport`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
