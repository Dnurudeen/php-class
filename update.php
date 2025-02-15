<?php
    include "connect.php";

    if(isset($_POST['update'])){
        $firstname = htmlspecialchars($_POST['firstname']);
        $lastname = htmlspecialchars($_POST['lastname']);
        $phone = htmlspecialchars($_POST['phone']);
        $email = htmlspecialchars($_POST['email']);

        $update_record = mysqli_query($connect_db, "UPDATE `registration` SET `first_name`='$firstname',`last_name`='$lastname',`phone_no`='$phone',`email_address`='$email' WHERE `id`=5");

        if($update_record == true){
            echo "<script>alert('Update Successful!')</script>";
        }else{
            echo "<script>alert('Try Again!')</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User Information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>
<body>
    <section style="margin-top: 7rem;" >
        <div class="">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="w-50 ms-auto me-auto bg-dark text-light p-5">
                <h2>Update User Information</h2>
                <hr>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Firstname <span class="text-danger">*</span></label>
                    <input type="text" name="firstname" required class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Lastname <span class="text-danger">*</span></label>
                    <input type="text" name="lastname" required class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Phone</label>
                    <input type="tel" name="phone" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address <span class="text-danger">*</span></label>
                  <input type="email" name="email" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

                <button type="submit" name="update" class="btn btn-primary">Update Record</button>
              </form>
        </div>
    </section>
</body>
</html>