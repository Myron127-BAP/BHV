<?php
$servernaam = 'localhost';
$username = 'root';
$password = '';
$dbname = 'bhv';

$con = new mysqli($servernaam, $username, $password , $dbname);


$sql1 = "SELECT TIME_TO_SEC(TIMEDIFF(NOW(), last_ts)) AS tdif FROM php_cron WHERE id=1";
$res1 = mysqli_query($con, $sql1) or die("[1] MySQL ERROR: ".mysqli_error());
$dif = mysqli_fetch_assoc($res1);
$tdif = implode($dif);
$vervallen = '';

//vul hier tijd in seconden in
if ($tdif >= 5)
{
    /*$sql3 = "UPDATE php_cron SET last_ts = NOW() WHERE id=1";
    mysqli_query($con, $sql3) or die("[3] MySQL ERROR: ".mysqli_error());*/

    $vervallen = true;
}

/*database:
CREATE TABLE `php_cron` (
`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `last_ts` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
);

INSERT INTO `php_cron` (`id`, `last_ts`) VALUES (1,'2018-00-00 00:00:00'); */
?>