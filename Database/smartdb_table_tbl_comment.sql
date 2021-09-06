
-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `commentID` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `comment` text NOT NULL,
  `gadgetID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_comment`
--

INSERT INTO `tbl_comment` (`commentID`, `name`, `email`, `comment`, `gadgetID`) VALUES
(16, 'Anushka', 'sbhattrakesh073@hotmail.com', 'Hello', 10),
(18, 'Sports', 'lord@35.gmail.co.in', 'this phone is awesome', 10),
(32, 'rakesh', 'bhattrakesh073@hotmail.com', 'Iphone Killer', 12),
(64, 'rakesh', 'hari@hari.com', 'One Plus Beast', 13),
(66, 'Bijay', 'kbijay@gmail.com', 'Nice phone', 80),
(67, 'Suman', 'suman@suman.com', 'Best fit for price\r\n', 1),
(68, 'Pratik', 'prati@pratik.gmail.com', 'Best mobile for body to screen ratio.', 74),
(69, 'Hari ', 'hari54@hari.com', 'Good device', 10),
(70, 'sri', '9848819217', 'nice', 12);
