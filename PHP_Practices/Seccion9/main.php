<?php
/*
include is used to embed a php file into another php file 
*/

include "header.php";
?>

<body>

<?php
include "menu.php";

require_once "while.php";
//include_once "menu.php";
//include_once "menu.php"; //only once, even if you try
//require "submenu.php"; //makes to not execute the code when this file isn't available
?>

<h3>Exercise on how to include files</h3>


<?php

include "footer.php";
?>