CREATE DATABASE  IF NOT EXISTS `newyorkc_newsletter`;
USE `newyorkc_newsletter`;

--
-- Table structure for table `subscribers`
--

DROP TABLE IF EXISTS `subscribers`;
CREATE TABLE `subscribers` (
  `subscriber_id` int(11) NOT NULL AUTO_INCREMENT,
  `subscriber_name` varchar(45) DEFAULT NULL,
  `subscriber_email` varchar(320) NOT NULL,
  `subscribtion_date` datetime NOT NULL,
  PRIMARY KEY (`subscriber_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
