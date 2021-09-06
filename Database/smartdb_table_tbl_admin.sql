
-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `username`, `password`, `status`) VALUES
(2, 'admin', '0192023a7bbd73250516f069df18b500', 1),
(4, 'rakesh', '02b9c0d0d3741055518f7d5cd6b7f683', 1),
(6, 'bhawana', '90d664d663d3db41ffcd1197fc28535c', 1),
(8, 'pratik', '31f480cb50b0a6e56b7f5e74ce910b8d', 1),
(9, 'rock', 'rakesh5', 1);
