<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>
<body>
    <section style="margin-top: 7rem;" >
        <div class="">
            <form action="auth.php" method="post" class="w-50 ms-auto me-auto bg-dark text-light p-5">
                <h2>Registration Form</h2>
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
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Password <span class="text-danger">*</span></label>
                  <input type="password" name="password" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Confirm Password <span class="text-danger">*</span></label>
                  <input type="password" name="confirm-password" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3 form-check">
                  <input type="checkbox" name="terms" required value="Signed" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Accept terms and conditions</label>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </section>
</body>
</html>