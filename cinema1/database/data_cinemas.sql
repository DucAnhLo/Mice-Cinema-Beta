

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";





CREATE TABLE `bookings` (
  `book_id` int(11) PRIMARY KEY,
  `membership_no` varchar(30) NOT NULL,
  `ticket_id` varchar(255) NOT NULL,
  `cinema_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `performance_id` int(11) NOT NULL,
  `screen_id` int(11) NOT NULL,
  `seat_no` int(3) NOT NULL COMMENT 'number of seats',
  `amount` int(5) NOT NULL,
  `ticket_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `bookings` (`book_id`, `membership_no`,`ticket_id`, `cinema_id`, `user_id`, `performance_id`, `screen_id`, `seat_no`, `amount`, `ticket_date`) VALUES
(12,'1' ,'BKID6369842',4, 12, 4, 3, 1, 380, '2021-04-15'),
(13,'2' ,'BKID2313964',6, 15, 5, 6, 4, 2400, '2021-04-16'),
(14,'3' ,'BKID1766021',6, 17, 5, 6, 2, 1200, '2021-04-16');





CREATE TABLE `login` (
  `id` int(11) PRIMARY KEY,
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL COMMENT 'email',
  `password` varchar(50) NOT NULL,
  `user_type` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `login` (`id`, `user_id`, `username`, `password`, `user_type`) VALUES
(1, 0, 'admin', 'password', 0),
(2, 3, 'theatre', 'password', 1),
(3, 4, 'theatre2', 'password', 1),
(12, 2, 'harryden@gmail.com', 'password', 2),
(15, 14, 'USR295127', 'PWD195747', 1),
(17, 4, 'bruno@gmail.com', 'password', 2),
(18, 6, 'THR760801', 'PWD649976', 1),
(19, 5, 'james@gmail.com', 'password', 2);



CREATE TABLE `events` (
`event_id` int(11) PRIMARY KEY,
`name` varchar(255) NOT NUll,
`start_date` date NOT NULL,
`end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




CREATE TABLE `movies` (
  `movie_id` int(11) PRIMARY KEY,
  `cinema_id` int(11) NOT NULL,
  `movie_name` varchar(255) NOT NULL,
  `cast` varchar(500) NOT NULL,
  `desc` varchar(1000) NOT NULL,
  `release_date` date NOT NULL,
  `image` varchar(200) NOT NULL,
  `video_url` varchar(200) NOT NULL,
  `event_id` int(11) NOT NULL COMMENT '0 means no events'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `movies` (`movie_id`, `cinema_id`, `movie_name`, `cast`, `desc`, `release_date`, `image`, `video_url`, `event_id`) VALUES
(1, 3, 'Avengers: Endgame', 'Elisabeth Moss, Oliver Jackson-Cohen, Aldis Hodge, Storm Reid', 'After the devastating events of Avengers: Infinity War, the universe is in ruins. With the help of remaining allies, the Avengers assemble once more in order to reverse Thanos actions and restore balance to the universe.', '2020-03-04', 'images/avengers.jpg', 'https://www.youtube.com/watch?v=TcMBFSGVi1c', 0),
(11, 6, 'Spider Man: No way home', 'Tom Holland, Zendaya, Benedict Cumberbatch, Jacob Batalon, Jon Favreau, Jamie Foxx, Willem Dafoe, Alfred Molina, Benedict Wong, Tony Revolori, Marisa Tomei, Andrew Garfield, Tobey Maguire', 'With Spider-Man\'s identity now revealed, Peter asks Doctor Strange for help. When a spell goes wrong, dangerous foes from other worlds start to appear, forcing Peter to discover what it truly means to be Spider-Man.', '2021-03-01', 'images/spiderman.jpg', 'https://www.https://www.youtube.com/watch?v=JfVOs4VSpmA', 0),
(12, 6, 'Godzilla vs. Kong', 'Millie Bobby Brown, Alexander Skarsgard, Rebecca Hall', 'The initial confrontation between the two titans -- instigated by unseen forces -- is only the beginning of the mystery that lies deep within the core of the planet.', '2021-03-31', 'images/gvkpster.jpg', 'https://www.youtube.com/watch?v=odM92ap8_c0', 0);
-- --------------------------------------------------------



CREATE TABLE `news` (
  `news_id` int(11) PRIMARY KEY,
  `name` varchar(100) NOT NULL,
  `cast` varchar(100) NOT NULL,
  `news_date` date NOT NULL,
  `description` varchar(200) NOT NULL,
  `attachment` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `news` (`news_id`, `name`, `cast`, `news_date`, `description`, `attachment`) VALUES
(3, 'Black Widow', 'Scarlett Johansson, Florence Pugh, David Harbour, Rachel Weisz', '2021-07-09', 'At birth the Black Widow (aka Natasha Romanova) is given to the KGB, which grooms her to become its ultimate operative.', 'news_images/blackwidow.jpg'),
(9, 'Shang-Chi and the Legend of the Ten Rings', 'Simu Liu, Awkwafina, Tony Leung, Fala Chen, Micheele Yeoh', '2021-09-14', 'Shang-Chi is a master of numerous unarmed and weaponry-based wushu styles, including the use of the gun, nunchaku, and jian.', 'news_images/shangchi.jpg'),
(10, 'The Eternals', 'Richard Madden, Salma Hayek, Angelina Jolie, Kit Harrington', '2021-11-04', 'The saga of the eternals, a race of immortal beings who lived on earth and shaped its history and civilizations.', 'news_images/eternals.jpg');

-- --------------------------------------------------------
CREATE TABLE `members`(
  `membership_no` varchar(255) PRIMARY KEY,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `joined` date NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
INSERT INTO `members`(`membership_no`,`title`,`user_id`,`name`,`joined`,`status`) VALUES
(1111,'title','2' , 'Helen Miranda', '2017-12-21','Active'),
(1234,'title','14' ,'Jose Alves','2017-12-27','Active'),
(1333,'title','4' ,'Vito Gelato','2018-01-06','Lapsed'),
(1344,'title','5' ,'Gay Redmond','2018-02-09','Active');


CREATE TABLE `registration` (
  `user_id` int(11) PRIMARY KEY,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `age` int(2) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `registration` (`user_id`, `name`, `email`, `phone`, `age`, `gender`) VALUES
(2, 'Harry Den', 'harryden@gmail.com', '1247778540', 22, 'gender'),
(4, 'Bruno', 'bruno@gmail.com', '7451112450', 30, 'gender'),
(5, 'James', 'james@gmail.com', '7124445696', 25, 'gender');



CREATE TABLE `screens` (
  `screen_id` int(11) PRIMARY KEY,
  `cinema_id` int(11) NOT NULL ,
  `screen_name` varchar(110) NOT NULL,
  `seats` int(11) NOT NULL COMMENT 'number of seats',
  `charge` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `screens` (`screen_id`, `cinema_id`, `screen_name`, `seats`, `charge`) VALUES
(1, 3, 'Screen 1', 100, 350),
(2, 3, 'Screen 2', 150, 310),
(3, 4, 'Screen 1', 200, 380),
(4, 14, 'Screen1', 34, 250),
(5, 6, 'Demo Screen', 150, 300),
(6, 6, 'IMX Screen', 200, 600);



CREATE TABLE `performances` (
  `performance_id` int(11) PRIMARY KEY,
  `pt_id` int(11) NOT NULL,
  `cinema_id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `status` int(11) NOT NULL,
  `r_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `performances` (`performance_id`, `pt_id`, `cinema_id`, `movie_id`, `start_date`, `status`, `r_status`) VALUES
(19, 15, 6, 11, '2021-04-15', 0, 1),
(20, 20, 6, 13, '2021-04-15', 0, 1),
(21, 19, 6, 12, '2021-03-31', 1, 1),
(22, 18, 6, 17, '2021-04-16', 1, 1);

-- --------------------------------------------------------
CREATE TABLE `staff`( 
  `employee_no` int(8) PRIMARY KEY,
  `name`    VARCHAR(80)  NOT NULL,
  `address`   VARCHAR(200) NOT NULL,
  `phone_no`  VARCHAR(11),
  `DoB`   DATE NOT NULL,
  `date_joined` DATE NOT NULL,
  `salary`    int(8),
  `manager`  int(11),
  `cinema`    varchar(50) NOT NULL 
  )ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `staff` (`employee_no`,`name`,`address`,`phone_no`,`DoB`,`date_joined`,`salary`,`manager`,`cinema`) VALUES
( 93345826, 'Martha Robbins', '74b, Sandley Towers, Sandley', 09389863734, '1992-04-23', '2011-04-23', 30719, NULL, 'Intu' );
-- ( ''22672518'', ''Richard Silver'', ''298, Christchurch Lane, Lindon'', ''01433628388'', TO_DATE( ''09/09/1965'', ''DD/MM/YYYY'' ), TO_DATE( ''01/11/1997'', ''DD/MM/YYYY'' ), 22013, ''93345826'', ''Intu'' ),                                                                                                                                                                                                           
-- ( ''63213492'', ''Abe Lance'', ''81, Templemead, Sharpenley'', ''08095680934'', TO_DATE( ''27/02/1959'', ''DD/MM/YYYY'' ), TO_DATE( ''01/11/1997'', ''DD/MM/YYYY'' ), 22572, ''93345826'', ''Intu'' ),   
-- ( ''03846455'', ''Rebecca Martins'', ''34, Mount Drive, Lindon'', ''07256882974'', TO_DATE( ''13/09/1986'', ''DD/MM/YYYY'' ), TO_DATE( ''25/10/2010'', ''DD/MM/YYYY'' ), 13026, ''22672518'', ''Rialto'' ),                                                                                                                                                                                                                         
-- ( ''82636780'', ''Thomas Grace'', ''23, High Street, Lindon'', ''06398364024'', TO_DATE( ''16/11/2000'', ''DD/MM/YYYY'' ), TO_DATE( ''02/07/2017'', ''DD/MM/YYYY'' ), 9651, ''63213492'', ''Intu'' ),                                                                                                                                                                                                                             
-- ( ''62822277'', ''Craig Legion'', ''8, Mandela Walk, Southlands'', ''06399823840'', TO_DATE( ''15/01/1996'', ''DD/MM/YYYY'' ), TO_DATE( ''30/05/2021'', ''DD/MM/YYYY'' ), 4050, ''63213492'', ''Rialto'' ),                                                                                                                                                                                                                        
-- ( ''08216453'', ''Leon Marvin'', ''The Marches, Teal Avenue, Lindon'', ''02092319845'', TO_DATE( ''08/02/1989'', ''DD/MM/YYYY'' ), TO_DATE( ''16/01/2012'', ''DD/MM/YYYY'' ), 15028, ''63213492'', ''Phoenix'' ),                                                                                                                                                                                                                 
-- ( ''62480190'', ''Satir Kumar'', ''1, Sun Terrace, Tramley'', ''08398659309'', TO_DATE( ''31/10/1998'', ''DD/MM/YYYY'' ), TO_DATE( ''11/03/2019'', ''DD/MM/YYYY'' ), 13026, NULL, ''Intimate'' ), 
-- ( ''77673492'', ''Callum Maru'', ''45, Margan Drive, Southlands'', ''04439863925'', TO_DATE( ''24/04/1979'', ''DD/MM/YYYY'' ), TO_DATE( ''14/06/2008'', ''DD/MM/YYYY'' ), 12782, ''22672518'', ''Intimate'' ),                                                                                                                                                                                                                        
-- ( ''19344527'', ''George Strettle'', ''Rose Cottage, Mount Drive, Lindon'', ''03987853853'', TO_DATE( ''01/01/1984'', ''DD/MM/YYYY'' ), TO_DATE( ''29/04/2009'', ''DD/MM/YYYY'' ), 12782, NULL, ''Intimate'' ),                                                                                                                                                                                                                     
-- ( ''83838492'', ''Terence Grace'', ''23, High Street, Lindon'', ''02393453590'', TO_DATE( ''30/05/1961'', ''DD/MM/YYYY'' ), TO_DATE( ''13/04/1998'', ''DD/MM/YYYY'' ), 0, NULL, ''Rialto'' ),                                                                                                                                                                                                                         
-- ( ''61187434'', ''Claire Holmsworthy'', ''11, Brookfield, Tramley'', ''01198345284'', TO_DATE( ''05/03/2001'', ''DD/MM/YYYY'' ), TO_DATE( ''25/11/2017'', ''DD/MM/YYYY'' ), 11830, ''63213492'', ''Phoenix'' ),                                                                                                                                                                                                                     
-- ( ''48563983'', ''Kevin Kline'', ''43, Sandpit Drive, Lindon'', ''04983984767'',  TO_DATE( ''07/06/1991'', ''DD/MM/YYYY'' ), TO_DATE( ''17/05/2013'', ''DD/MM/YYYY'' ), 27001, NULL, ''Rialto'' ),                                                                                                                                                                                                                       
-- ( ''77283918'', ''Ruth Tuttle'', ''7, Clearways, Cosset'', ''04442895661'', TO_DATE( ''23/08/1993'', ''DD/MM/YYYY'' ), TO_DATE( ''14/06/2003'', ''DD/MM/YYYY'' ), 23092, ''48563983'', ''Intu'' ),                                                                                                                                                                                                                                
-- ( ''90023936'', ''Vital Singh'', ''11, Brentway, Sandley'', ''02349856763'', TO_DATE( ''09/07/1997'', ''DD/MM/YYYY'' ), TO_DATE( ''25/05/2016'', ''DD/MM/YYYY'' ), 25930, ''48563983'', ''Phoenix'' ),                                                                                                                                                                                                                           
-- ( ''80234690'', ''Rebecca Neo'', ''2a, Carnfield, Masterton'', ''05283283285'', TO_DATE( ''16/12/2000'', ''DD/MM/YYYY'' ), TO_DATE( ''13/11/2019'', ''DD/MM/YYYY'' ), 15037, ''77283918'', ''Phoenix'' ),                                                                                                                                                                                                                           
-- ( ''52980911'', ''Samuel Leibermann'', ''The Manor, Sandley Lane, Southlands'', ''01198763987'', TO_DATE( ''02/05/1996'', ''DD/MM/YYYY'' ), TO_DATE( ''21/09/2018'', ''DD/MM/YYYY'' ), 15037, ''77283918'', ''Rialto'' ),                                                                                                                                                                                                          
-- ( ''19091123'', ''John Fellows'', ''18, Whooper Way, Cosset'', ''03434298765'', TO_DATE( ''18/12/1999'', ''DD/MM/YYYY'' ), TO_DATE( ''04/03/2017'', ''DD/MM/YYYY'' ), 15037, ''77283918'', ''Intu'' ),                                                                                                                                                                                                                           
-- ( ''83512382'', ''Boris Oslovski'', ''108, High Street, Lindon'', ''0563498458'', TO_DATE( ''13/10/1987'', ''DD/MM/YYYY'' ), TO_DATE( ''13/10/2017'', ''DD/MM/YYYY'' ), 13982, ''77283918'', ''Rialto'' ),                                                                                                                                                                                                                         
-- ( ''87490252'', ''Claire Wilson'', ''54, The Greenway, Lindon'',''04398271662'', TO_DATE( ''16/06/1997'', ''DD/MM/YYYY'' ), TO_DATE( ''16/04/2016'', ''DD/MM/YYYY'' ), 32980, NULL, ''Intimate'' ),
-- ( ''51939202'', ''Able Zimmerman'', ''Flat 4, Helm House, Sharpenley'', ''09820435855'', TO_DATE( ''24/11/2001'', ''DD/MM/YYYY'' ), TO_DATE( ''30/08/2018'', ''DD/MM/YYYY'' ), 12700, ''87490252'', ''Intimate'' ),                                                                                                                                                                                                                   
-- ( ''59922223'', ''Carrie Genoa'', ''106, Ridgeway, Sharpenley'',''04676287251'', TO_DATE( ''16/12/1976'', ''DD/MM/YYYY'' ), TO_DATE( ''03/09/2004'', ''DD/MM/YYYY'' ), 20145, NULL, ''Intimate'' ),
-- ( ''20010109'', ''Aaron Fellows'', ''12, Abbey Road, Southlands'', ''07675739566'', TO_DATE( ''14/12/1968'', ''DD/MM/YYYY'' ), TO_DATE( ''19/12/2006'', ''DD/MM/YYYY'' ), 24935, NULL, ''Phoenix'' ); 





CREATE TABLE `showing_time` (
  `st_id` int(11) PRIMARY KEY,
  `screen_id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `start_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `showing_time` (`st_id`, `screen_id`, `name`, `start_time`) VALUES
(1, 1, 'Noon', '10:00:00'),
(2, 1, 'Matinee', '14:00:00'),
(3, 1, 'First', '18:00:00'),
(4, 1, 'Second', '21:00:00'),
(5, 2, 'Noon', '10:00:00'),
(6, 2, 'Matinee', '14:00:00'),
(7, 2, 'First', '18:00:00'),
(8, 2, 'Second', '21:00:00'),
(9, 3, 'Noon', '10:00:00'),
(10, 3, 'Matinee', '14:00:00'),
(11, 3, 'First', '18:00:00'),
(12, 3, 'Second', '21:00:00'),
(14, 4, 'Noon', '12:03:00'),
(15, 5, 'First', '00:08:00'),
(16, 5, 'Second', '15:10:00'),
(17, 5, 'Others', '18:10:00'),
(18, 6, 'Noon', '00:02:00'),
(19, 6, 'First', '06:35:00'),
(20, 6, 'Second', '09:18:00'),
(21, 5, 'Matinee', '20:04:00');



CREATE TABLE `cinemas` (
  `id` int(11) PRIMARY KEY,
  `name` varchar(100) NOT NULL,
  `location` varchar(255) NOT NUll,
  `address` varchar(100) NOT NULL,
  `manager` varchar(255) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `cinemas` (`id`, `name`,`location`, `address`, `manager`) VALUES
(3, 'Intu', 'Watford', '10, High Str', 'Andy Smith'),
(4, 'Phoenix', 'Hitchin', '2, Swan Lane', 'Mary Jobs'),
(5, 'Rialto', 'Stevenage', '6, London Rd', 'Tuhaj Bey'),
(6, 'Intimate', 'Watford', '3, Broad Ave', 'Marek Huk');




ALTER TABLE `bookings`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

ALTER TABLE `movies`
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;


ALTER TABLE `screens`
  MODIFY `screen_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

ALTER TABLE `performances`
  MODIFY `performance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

ALTER TABLE `showing_time`
  MODIFY `st_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

ALTER TABLE `cinemas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

