<html>
<body>
<a href="index.php">Back to Home page</a>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];
$con=new mysqli('localhost','root','','info');
if($con){
    //echo "connection successful";
    $sql = "INSERT INTO `data` (name, email, gender, mobile, password) VALUES ('$name', '$email', '$gender', '$mobile', '$password')";
    $result=mysqli_query($con,$sql);
    if($result){
        echo "Data inserted successfully";
    }
        else {
            die(mysqli_error($con));
        }
} else{
    die(mysqli_error($con));
}
}
?>
</body>
</html>