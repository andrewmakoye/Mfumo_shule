<?php
$conn = mysqli_connect("localhost","root","","NDALA");
if(isset($_POST['save']))
{
$un = $_POST['Firstname'];
$em = $_POST['Secondname'];
$ag = $_POST['LastName'];
$p = $_POST['number'];
$pp = $_POST['email'];
$pt = $_POST['password'];
$r = $_POST['role'];

$ins = "INSERT INTO student(Firstname,Secondname,LastName,number,email,password,role)
VALUES ('$un','$em','$ag','$p','$pp','$pt','$r')";

$runn=mysqli_query($conn,$ins);

if ($runn)
 {
        header('location: ingia.php');
    }
 
else {
    echo "please repeat again later";
}
}
mysqli_close($conn);

?>