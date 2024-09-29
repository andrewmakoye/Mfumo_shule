<?php
$conn = mysqli_connect("localhost","root","","ndala");

session_start();
if(isset($_POST['save']))
{
$un = $_POST['LastName'];
$p = $_POST['password'];

$ins = "SELECT * FROM  student  WHERE LastName='$un' AND password='$p'";

$runn=mysqli_query($conn,$ins);

if (mysqli_num_rows($runn)>0)
{
    $row=mysqli_fetch_assoc($runn);

    $_SESSION['id']=$row['id'];
    $_SESSION['LastName']=$row['LastName'];
    $_SESSION['role']=$row['role'];


    echo"login  successful";
   
    if($_SESSION['role']== 'admin'){
        header('location: upload.php');
    }
    else{
        
        header('location: view.php');
    }
    exit();

        echo"wewe umekosea";
    }




}

?>

<!DOCTYPE html>
<html>
<head>
    <title>login Registration</title>
    <style>
        a{
        text-decoration:none;
    }
form input
{
    color:brown;
    margin:10px;
    padding:20px;
}
form
{
border:solid;
width:350px;
background:green:
}
body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: wheat;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 3px;
        }
        h1 {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }
        input{
            width: 280px;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        h2
        {
            color:blue;
        }
        </style>
</head>
<body>
<div>
    <h2 align="center">Sign In</h2>
    <form  method="POST"> 
    <label for="username">username</label>
     <input type="text" name="LastName"required>

<div>    
<label for="Password">password </label>
<input type="password" name="password"required>
</div>  
<div>    
<label for="Password">Confirm_password </label>
<input type="password" name="confirm_password"required>
</div>  

<button name="save">login</button>

    </form>
</body>
</html>