<?php 
    if(isset($_POST['send_button'])){
        $post_data = file_get_contents('php://input');

        if(!isset($email)){
            $email = $_POST['email-input'];
            $text = $_POST['recorded-text'];
            echo($email."<br/>".$text);
        }

    }
?>