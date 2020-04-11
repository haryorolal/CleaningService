<?php
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['Phone']) && isset($_POST['company']) && isset($_POST['message']) ){
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['Phone']) && !empty($_POST['company']) && !empty($_POST['message'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $Phone = $_POST['Phone'];
        $company = $_POST['company'];
        $message = $_POST['message'];
        
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "Kindly provide valid email";
        }else{
            $body = $name."\n".$email."\n".$Phone."\n".$message;
            if(mail('haryorolal2@gmail.com', 'Website Response', $body, 'From: response@mywebsite.com')){
             echo "Thanks for contacting us.";   
            }else{
                echo "There is a problem in sending mail.";
            }
        }
    } else{
        echo "All fields are required.";
    }
}else{
    echo "Not ok";
}

?>