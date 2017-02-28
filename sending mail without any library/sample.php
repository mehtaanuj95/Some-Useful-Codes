<?php
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        
        $from = "<Your Email Address>";
        $headers ="<Header>";
        
        $subject ="New registration";
        $msg = "Name : ".$name."\nEmail : ".$email;
        if(mail($from,$subject,$msg,$headers)) {
        ?> <script>alert("Thank you for Registering");</script>
        <?php
        //echo "mail sent";
        }      
    }
?>