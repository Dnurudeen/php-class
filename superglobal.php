<?php
    $fname = htmlspecialchars($_REQUEST['firstname']);
    $lname = htmlspecialchars($_REQUEST['lastname']);
    $email = htmlspecialchars($_REQUEST['email']);
    $terms = htmlspecialchars($_REQUEST['terms']);

    function formValid(){
        if(isset($_POST['submit'])){
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                global $fname;
                global $lname;
                global $email;
                global $terms;

                if(!empty($terms)){
                    if(empty($fname && $lname)){
                        echo "<p class='alert alert-danger'>firstname and lastname field can't be empty</p>";
                    }else{
                        echo "Name: $fname $lname <br><br>";
                    }
        
                    if(empty($email)){
                        echo "<p class='alert alert-danger'>email field can't be empty</p>";
                    }else{
                        echo "Email: $email";
                    }
                }else{
                    die ("<p class='alert alert-danger'>You must check the box!</p>");
                }
            }
        }
    }

    formValid();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Global</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>
<body>
    <section style="margin-top: 7rem;" >
        <div class="">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="w-50 ms-auto me-auto bg-dark text-light p-5">
                <h2>Contact Form</h2>
                <hr>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Firstname</label>
                    <input type="text" name="firstname" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Lastname</label>
                    <input type="text" name="lastname" class="form-control" id="exampleInputPassword1">
                  </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3 form-check">
                  <input type="checkbox" name="terms" value="Signed" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Accept terms and conditions</label>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </section>
</body>
</html>