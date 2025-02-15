<?php
include_once ('connect.php');

if(isset($_POST['submit'])){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $firstname = htmlspecialchars($_POST['firstname']);
        $lastname = htmlspecialchars($_POST['lastname']);
        $phone = htmlspecialchars($_POST['phone']);
        $email = htmlspecialchars($_POST['email']);
        $password1 = htmlspecialchars($_POST['password']);
        $password2 = htmlspecialchars($_POST['confirm-password']);
        $sign = $_POST['terms'];

        // Hash Password
        $hash_password = md5($password1);

        if($password1 == $password2){
            if(!empty($sign)){
                $register_user = mysqli_query($connect_db, "INSERT INTO `registration` (`first_name`, `last_name`, `phone_no`, `email_address`, `password`) VALUES ('$firstname', '$lastname', '$phone', '$email', '$hash_password') ");

                if($register_user == true){
                    echo ("<script>alert('Registration Successful!')</script>");
                    header('refresh:0 url=register.php');
                }else{
                    echo ("<script>alert('User Not Successfully Registered!')</script>");
                    header('refresh:0 url=register.php');
                }
            }
        }

    }
}