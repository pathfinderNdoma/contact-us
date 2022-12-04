<?php
//including the connection page.

include_once 'connection.php';
class Contact{

    function contact_details($con, $firstName, $lastName, $email, $address, $phone, $gender){
       $sql     =           "INSERT INTO `contact` ( `firstName`, `lastName`, `address`, `phone`, `email`, `gender`)
                             VALUES ( :firstName, :lastName, :adds, :phone, :email, :gender)";

        $stmt   =             $con->prepare($sql);
        $send   =             $stmt->execute(['firstName'=>$firstName, 'lastName'=>$lastName, 
                              'adds'=>$address, 'phone'=>$phone, 'email'=>$email, 'gender'=>$gender]);

        if($send){
            echo '<script> alert("Contact Information Saved")</script>';
        }

        else{
            echo '<script> alert("Contact information was not saved")</script>';  
        }
    }
}


?>