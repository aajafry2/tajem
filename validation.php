<?php

    $user_name = $email = $subject = $message = "";
    $name_error = $email_error = $subject_error = $message_error = "";
    $success_msg = "";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    if(isset($_POST['sub_button'])){
        
        //assign the user-name , email , subject and message value.
        $user_name = input($_POST['user_name']);
        $email = input($_POST['user_email']);
        $subject = input($_POST['user_subject']);
        $message = input($_POST['user_message']);
        
        
        // start user-name php code.
        if(empty($_POST['user_name'])){
            $name_error = 'User Name Is Required';
        }
        else{
            if(!preg_match('/^[a-zA-Z .\-]+$/',$user_name)) {
                $name_error = 'The User-Name Does Not Meet The Requirements!';
            }
            else if(strlen($user_name) <= 3){
                $name_error = 'At Last 3 Long String Needed';
            }
        }// end user-name php code.
        
        //start email php code.
        if (empty($_POST['user_email'])) {
            $email_error = "Email Is Required";
        }
        else {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $email_error = "Invalid Email Format";
            }
        }//end email php code.
        
        //start subject php code.
        if(empty($_POST['user_subject'])){
            $subject_error = "Subject Is Required";
        }
        else {
            if(strlen($message) >= 32 ){
                $subject_error = "Subject Is Too Much Long";
            }
        }
        
        //start comments php code.
        if(empty($_POST['user_message'])){
            $message_error = "Massage Is Required";
        }
        else {
            if(strlen($message) >= 140 ){
                $message_error = "Massage Is Too Much Long";
            }
        }
        
        //start check the all form fill.
        if((!$name_error) && (!$email_error) && (!$subject_error) && (!$message_error) ){
            /*
            $_to = "server@company.org";
            $_subject = $subject;
            $_message = $message;
            $_from = $user_name . '<' . $email . '>';
            if(mail($_to,$_subject,$_message,$_from)){
                $success_msg = '<script language="javascript"> alert("YOUR MESSAGE HAS BEEN SUCCESSFULLY SENT") </script>'; 
            }
            else{
                $success_msg = '<script language="javascript"> alert("sorry!!!<br>try agin.") </script>'; 
            }
            */
            $success_msg = '<script language="javascript"> alert("YOUR MESSAGE HAS BEEN SUCCESSFULLY SENT") </script>';
        }
        else{
           // $success_msg = 'sorry!!!<br>try agin.';
        }//end check the all form fill.
    }
}

function input($data){
    $data = trim($data);
    #$data = stripslashes($data);
    #$data = htmlspecialchars($data);
    return $data;
}


?>