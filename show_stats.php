<?php
$db = new mysqli('localhost','root','123','clients');

@mysqli_query ($db, 'set character_set_results = "utf8"');


$res = mysqli_query($db, "SELECT `views`, `hosts` FROM `visits` WHERE `date`='$date'");
$row = mysqli_fetch_assoc($res);

//echo '<p>Уникальных посетителей: ' . $row['hosts'] . '<br />';
//echo 'Просмотров: ' . $row['views'] . '</p>';
