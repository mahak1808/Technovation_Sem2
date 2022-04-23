
<?php
session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'Technovation');

$username = $_POST['username'];
$password = $_POST['password'];
$phone = $_POST['phone'];

$s = " select * from Details where username = '$username'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo "Username already taken";
}
else{
    $reg = "insert into Details(username , password , phone) values('$username', '$password','$phone')";
    mysqli_query($con, $reg);
    echo "Registration successful";
}

?>