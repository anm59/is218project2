<?php
// Get values of text inputs
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');

$firstName = filter_input(INPUT_POST, 'firstName');
$lastName = filter_input(INPUT_POST, 'lastName');
$birthday = filter_input(INPUT_POST, 'birthday');
$registration_email = filter_input(INPUT_POST, 'registration_email');
$registration_password = filter_input(INPUT_POST, 'registration_password');

$questionName = filter_input(INPUT_POST, 'questionname');
$questionBody = filter_input(INPUT_POST, 'questionbody');
$questionSkills = filter_input(INPUT_POST, 'questionSkills');

//email is  not supposed to be  empty
if(empty($email)){
    $email= 'email shouldn`t be empty';
}
 ?>

<! DOCTYPE html>
<html>
<head>
    <title>Display Email and Password</title>
</head>
<body>
<h1>User Information </h1>
Email: <?php echo $email; ?><br>
Password: <?php echo $password;?><br>

<h1>Registration  information </h1>
First Name: <?php echo $firstName; ?><br>
Last Name: <?php echo $lastName;?><br>
Birthday: <?php echo $birthday;?><br>
Email: <?php echo $registration_email; ?><br>
Password: <?php echo $registration_password;?><br>


<h1>Questions information </h1>
Question Name: <?php echo $questionName; ?><br>
Question Body: <?php echo $questionBody;?><br>
Question Skills: <?php echo $questionSkills;?><br>


</body>
</html>
