<?php
// Get values of text inputs
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');

 ?>
<! DOCTYPE html>
<html>
<head>
    <title>Display Email and Password</title>
</head>
<body>
<h1>user information </h1>
Email: <?php echo $email; ?><br><br>
Password: <?php echo $password;?><br>

<h1>

</body>
</html>
