
<!--how to enter data in database from form, we created a page where we r bringing data from index.php file of MYProject-->
<?php

$con = mysqli_connect("localhost", "root", "", "e_commerce") or die(mysqli_error($con));
$email = mysqli_real_escape_string($con, $_POST['email_id']);
$first_name = mysqli_real_escape_string($con, $_POST['first_name']);
$last_name = mysqli_real_escape_string($con, $_POST['last_name']);
$phone = mysqli_real_escape_string($con, $_POST['phone']);
$user_registration_query = "insert into users(email_id, first_name, last_name, phone) values ('$email', '$first_name', '$last_name', '$phone')" ;
 die($user_registration_query);
$user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
echo "User successfully inserted";
?>