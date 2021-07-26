 <?php
//if email and password ==  db email and password
//connect user to homepage

//connection to database
$con = new mysqli('localhost', 'loginsysuser', 'Emmanuel7!', 'loginsystem','8887');
if($con->connect_error){
    die('connection failed : '. $con->connect_error);
}
//set user details
else{
$email = $_POST['email'];
$password = $_POST['password'];
//echo $email;
//echo $password;

$stmt = $con->prepare("SELECT * FROM loginsys WHERE email = '$email' AND pswd = '$password'");
$stmt->execute();

$resultset = $stmt->get_result();
$result = $resultset->fetch_all();

if(!$result){
       echo "Fail";
   }
else{
    header('Location: home.php');
}

}

?>