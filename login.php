<?php
    session_start();
    include_once "connect.php";

    if(isset($_POST['login'])){
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);

        //covert password to hash
        $hash_password = md5($password);

        //get registered user
        $get_reg_users = mysqli_query($connect_db, "SELECT * FROM `registration` WHERE email_address='$email' and password='$hash_password'");
        //fetch information
        $fetch_info = mysqli_fetch_array($get_reg_users);

        if($fetch_info > 0){
            $_SESSION['id'] = $fetch_info['id'];
            $_SESSION['email_address'] = $fetch_info['email_address'];

            header('location: dashboard.php');
        }else{
            echo("<script>alert('login information not valid')</script>");
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>
<body>
    <section style="margin-top: 7rem;" >
        <div class="">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="w-50 ms-auto me-auto bg-dark text-light p-5">
                <h2>Login Form</h2>
                <hr>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address <span class="text-danger">*</span></label>
                  <input type="email" name="email" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Password <span class="text-danger">*</span></label>
                  <input type="password" name="password" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <button type="submit" name="login" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </section>
</body>
</html>