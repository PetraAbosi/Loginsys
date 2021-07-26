<?php
//get user details
$firstname = $_POST['fname'];
$middlename = $_POST['midname'];
$lastname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];
$password2 = $_POST['password2'];
$gender = $_POST['gender'];

//check password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
$verify_password = password_verify($password, $hashed_password);

//database connection
$con = new mysqli('localhost', 'loginsysuser', 'Emmanuel7!', 'loginsystem', '8889');
if($con->connect_error){
    die('connection failed : '. $con->connect_error);
}
else{
    $stmt = $con->prepare("insert into loginsys(firstname, middlename, lastname, email, pswd, password2, gender) values(?,?,?,?,?,?,?)");
    $stmt->bind_param("sssssss", $firstname, $middlename, $lastname, $email, $password, $password2, $gender);
    $stmt->execute();
    print_r($stmt);
    header('Location: login.php');
   
    $stmt->close();
    $con->close();
   
}

?>