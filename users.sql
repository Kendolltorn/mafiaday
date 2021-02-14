#
# Table structure for table `users`
#

CREATE TABLE users(
  id int(11) NOT NULL auto_increment,
  userip varchar(50) NOT NULL default '',
  signup_ip varchar(255) NOT NULL,
  login_count varchar(10) NOT NULL default '0',
  login_ip text NOT NULL,
  name varchar(50) NOT NULL default '',
  account_type char(1) NOT NULL default '1',
  password varchar(50) NOT NULL default '',
  sitestate char(1) NOT NULL default '0',
  signup varchar(255) NOT NULL default '',
  money varchar(20) NOT NULL default '1500',
  exp varchar(20) NOT NULL default '0',
  rank char(2) default '0',
  health char(3) NOT NULL default '100',
  points varchar(10) NOT NULL default '0',
  PRIMARY KEY  (id)
) ENGINE=MyISAM AUTO_INCREMENT=3023 DEFAULT CHARSET=latin1;
# --------------------------------------------------------