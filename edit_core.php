<?php

require_once('config.php');


if(isset($_REQUEST['id'])){

 $id= $_REQUEST['id'];


 $selectQuery= "SELECT * FROM users WHERE id='$id'";

 $runQuery = mysqli_query($connection,$selectQuery);

 if($runQuery == true){

    $data= mysqli_fetch_assoc($runQuery);

  
 }


}







?>