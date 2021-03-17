<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Message</title>
    <link rel="stylesheet" href="app.css">
</head>
<body class="msg-body">
  <?php

if($_SERVER['REQUEST_METHOD'] == "POST"){
$email = $_POST['email'];
$message = $_POST['message'];
}

  ?>
  
  <h1 class="thx">Thank You For Your Message</p></h1>

  <p class="text">
    Your message has been recieved sucessfully. We will
    notify you when we will deploy new applications via your email: <p class="email"><?php echo $email; ?></p>
  </p>

  <div class="footer3">
    <a href="index.php">Home</a>
    <a href="tourisms.php">Tourisms</a>
    <a href="investment.php">Investment</a>
    <a href="meet.php">Meet In Rwanda</a>
  </div>

</body>
</html>
