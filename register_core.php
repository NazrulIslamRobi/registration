<?php

require_once('config.php');


    $employee_type = htmlspecialchars($_POST['employee_type']) ;
    $full_name = htmlspecialchars($_POST['full_name']);
    $email_addr = htmlspecialchars(strtolower($_POST['email_addr']));
    $phone = htmlspecialchars($_POST['phone']);
    $address = htmlspecialchars($_POST['address']);
 



if(isset($_FILES['photo']) && $_POST){



    $allowedTypes= array('image/png','image/jpeg','image/JPEG');
    
    $photoName = 'files/'.uniqid("image_",true).$_FILES['photo']['name'];
    
        if(in_array($_FILES['photo']['type'],$allowedTypes) &&  $_FILES['photo']['size'] < 5*1024*1024){
    
           

            $insertQuery = "INSERT INTO users (employee_type,full_name,email_addr,phone,address,photo) VALUES ('$employee_type','$full_name','$email_addr','$phone','$address','$photoName')";
            
            $runQuery = mysqli_query($connection,$insertQuery);

            if($runQuery == true){
                
                move_uploaded_file($_FILES['photo']['tmp_name'],$photoName);

                header("location:index.php?successMsg=Employee registered successfully");
            }
            
            
        }else{
            header("location:index.php?errorMsg=please input the valid photo");
        }
    
    
   
    
    }else{
        header("location:index.php?errorMsg=Plese make sure all information given");
    }






?>