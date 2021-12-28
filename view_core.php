<?php

require_once('config.php');

$selectQuery= "SELECT * FROM users ORDER BY id DESC";

$runQuery = mysqli_query($connection,$selectQuery);



?>