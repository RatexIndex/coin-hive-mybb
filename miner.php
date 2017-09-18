<?php
define("IN_MYBB", 1);
//define("NO_ONLINE", 1); // Wenn Seite nicht in Wer ist online-Liste auftauchen soll
 
require("global.php");
 
add_breadcrumb("Your Website - Miner", "miner.php");
 
eval("\$miner = \"".$templates->get("miner")."\";"); // Hier wird das erstellte Template geladen
output_page($miner);
?>