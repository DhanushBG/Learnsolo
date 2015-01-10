<?php

    $name = $_POST['name']; 
    $subject = $_POST['subject'];
    $message = $_POST['message'];
   
    $var=mail('learnsolo123@gmail.com',$subject,$message,$name);
     if($var){
     	echo "Your message was recieved\n";
        echo "Thank you ";
     }
    else{
    	echo"failure";
    }

?>