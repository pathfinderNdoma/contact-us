<?php
include "connection.php";
include "contact.php";
//Calling functions
try{
 
    $conec = new Connection();
    $con = $conec->Open();
   

        if ($con) {
 
            $firstName      =       $_POST['firstName'];
            $lastName       =       $_POST['lastName'];
            $email          =       $_POST['email'];
            $address        =      $_POST['address'];
            $phone          =       $_POST['phone'];
            $gender         =       $_POST['gender'];
            $submit         =       $_POST['submit'];

            if(isset($_POST['submit'])){
                $send_contact = new Contact();
            
                $send_contact->contact_details($con, $firstName, $lastName, $email, $address, $gender, $phone);
            }
            
        } 

        //Else STATEMENT FOR THE CONNECTIONIF STATEMENT
        else {
            echo $con;
        }
   
}
catch(PDOException $ex){
    echo $ex->getMessage();
}
?>