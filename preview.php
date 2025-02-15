<?php
include_once "connect.php";

$lookinto_database = mysqli_query($connect_db, "SELECT * FROM `registration` WHERE 1");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preview Register User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>
<body>
    <section class="bg-dark text-light">
        <div class="container p-5">
            <div class="card p-5">
                <h1>Preview Registered User</h1>

                <?php
                    while($fetch_data = mysqli_fetch_array($lookinto_database)){

                    $fullname = $fetch_data['first_name'] . ' ' . $fetch_data['last_name'];
                ?>
                <div><b>Name: </b> <?php echo $fullname; ?></div> 
                <div><b>Phone: </b> <?php echo $fetch_data['phone_no']; ?></div> 
                <div><b>Email: </b> <?php echo $fetch_data['email_address']; ?></div>
                <br><hr><br>
                <?php } ?>

                <br>
                <?php
                    if(isset($_POST['delete'])){
                        $delete_user = mysqli_query($connect_db, "DELETE FROM `registration` WHERE `id`=4");

                        if($delete_user == true){
                            echo "<script>alert('User Deleted Successfully!')</script>";
                        }else{
                            echo "<script>alert('User Not Successfully Deleted!')</script>";
                        }
                    }
                ?>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <button type="submit" name="delete" class="btn btn-danger">Delete User</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>