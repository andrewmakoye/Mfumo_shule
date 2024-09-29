<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }
        h1 {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }
        input, textarea {
            width: 100%;
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
    </style>
</head>
<body>
    <div class="container">
        <h1>Feedback Form</h1>
        <form method="POST">
            <label for="fullname">Full Name</label>
            <input type="text" id="fullname" name="fullname" required>
            
            <label for="email">Email address</label>
            <input type="email" id="email" name="email" required>
            
            <label for="comments">Comments</label>
            <textarea id="comments" name="comments" rows="4" required></textarea>
            
        
            
            <button name="save">Submit</button>
        </form>
    </div>
</body>
</html>
<?php
$conn = mysqli_connect("localhost","root","","NDALA");
if(isset($_POST['save']))
{
$un = $_POST['fullname'];
$pp = $_POST['email'];
$pt = $_POST['comments'];


$ins = "INSERT INTO maoni(fullname,email,comments)
VALUES ('$un','$pp','$pt')";

$runn=mysqli_query($conn,$ins);

if ($runn)
 {
        header('location:receiver.html');
    }
 
else {
    echo "please repeat again later there is network problems";
}
}
mysqli_close($conn);

?>

 