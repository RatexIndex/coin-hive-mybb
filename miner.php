<?php
define("IN_MYBB", 1);
//define("NO_ONLINE", 1);
 
require("global.php");
 
add_breadcrumb("Your Website - Miner", "miner.php");
 
eval("\$miner = \"".$templates->get("miner")."\";");
output_page($miner);
?>
