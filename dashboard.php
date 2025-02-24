<?php
    session_start();
    include_once "connect.php";

    if($_SESSION['id'] <= 0){
        header('location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://js.paystack.co/v1/inline.js"></script>
</head>
<body>
    <?php
        $user_id = $_SESSION['id'];
        $fetch_user = mysqli_query($connect_db, "SELECT * FROM `registration` WHERE `id`='$user_id'");
        $fetch = mysqli_fetch_array($fetch_user);

        $fullname = $fetch['first_name'] . ' ' . $fetch['last_name'];
    ?>
    <div class="w-50 me-auto ms-auto my-5">
        <div class="card bg-dark text-light p-5">
            <h1>Welcome to your Dashboard</h1><hr>
            <h3>Name: <?php echo $fullname ?></h3>
        </div>

        <form action="logout.php">
            <button type="submit" name="logout" class="btn btn-danger mt-4">Logout</button>
        </form>
        <form id="paymentForm">
            <input type="hidden" id="email-address" value="<?php echo $fetch['email_address'] ?>">
            <input type="hidden" id="amount" value="50">
            <button type="submit" onclick="payWithPaystack()" class="btn btn-dark mt-4">Make Payment (₦50)</button>
        </form>
    </div>
</body>
</html>

<!-- <script src="api/make-payment.js"></script> -->
<script>
    const paymentForm = document.getElementById('paymentForm');
paymentForm.addEventListener("submit", payWithPaystack, false);

function payWithPaystack(e) {
  e.preventDefault();

  let handler = PaystackPop.setup({
    key: 'pk_live_xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx', // Replace with your public key
    email: document.getElementById("email-address").value,
    amount: document.getElementById("amount").value * 100,
    ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
    // label: "Optional string that replaces customer email"
    onClose: function(){
      alert('Window closed.');
    },
    callback: function(response){
      let message = 'Payment complete! Reference: ' + response.reference;
      alert(message);
    }
  });

  handler.openIframe();
}
</script>