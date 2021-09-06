
--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `tbl_brands`
--
ALTER TABLE `tbl_brands`
  ADD PRIMARY KEY (`brandID`);

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`commentID`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `gadgetID` (`gadgetID`);

--
-- Indexes for table `tbl_gadget`
--
ALTER TABLE `tbl_gadget`
  ADD PRIMARY KEY (`gadgetID`),
  ADD UNIQUE KEY `model` (`model`),
  ADD KEY `brandID` (`brandID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_brands`
--
ALTER TABLE `tbl_brands`
  MODIFY `brandID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `commentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `tbl_gadget`
--
ALTER TABLE `tbl_gadget`
  MODIFY `gadgetID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD CONSTRAINT `tbl_comment_ibfk_1` FOREIGN KEY (`gadgetID`) REFERENCES `tbl_gadget` (`gadgetID`);

--
-- Constraints for table `tbl_gadget`
--
ALTER TABLE `tbl_gadget`
  ADD CONSTRAINT `tbl_gadget_ibfk_1` FOREIGN KEY (`brandID`) REFERENCES `tbl_brands` (`brandID`);
