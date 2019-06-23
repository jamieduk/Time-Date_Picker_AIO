<center>
</center>
-- Adminer 4.7.1-dev MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `alarm_email`;
CREATE TABLE `alarm_email` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `alarm_date` varchar(15) NOT NULL,
  `alarm_time` varchar(20) NOT NULL,
  `email_sent` int(1) NOT NULL DEFAULT '0',
  `reminder_details` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `alarm_email` (`id`, `username`, `alarm_date`, `alarm_time`, `email_sent`, `reminder_details`) VALUES
(17,	'multimedia',	'24/06/2019',	'11:32 PM',	0,	'Test');

-- 2019-06-23 22:35:39

