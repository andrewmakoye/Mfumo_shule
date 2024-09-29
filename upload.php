

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Upload Student Results</title>
<style>
    a{
    text-decoration:none;
}
p{
    text-align:right;
}
textarea{
    background-color:green;
    border:solid;
    color:black;
}
</style>
</head>
<body>
<h1>Upload Student Results</h1>
<form action="" method="post">
<label for="full_name">Student Full Name:</label>
<input type="text" id="full_name" name="full_name" required><br><br>
<label for="result">Result:</label><br>
<textarea id="result" name="result" rows="20" cols="80" required>
                      Basic Computer=[]
                 Network And Internet=[]
                        Microsoft Word=[]
                           Power PointS=[]
                         Microsoft Excel=[]
                         Operating System=[]
                      Communication Skills=[]
                                 Psychology=[]
                       Computer Maintainance=[]
                              Web Programming=[]
                   Object Oriented Programming=[]
                    Datastructure and Algorithm=[]
                                 Database System=[]
                                
            


                             Average:     
                      
                             Teacher Comment:

                             Program:

                             Level:
</textarea><br><br>
<input type="submit" value="save">
</form>
<a href="logout.php"><p>Logout</p></a><br><br><br>
<a href="admin.php"><p>For cOLLEGUE use Only</p></a> |
<marquee><p font-family="Blackadder ITC">&copy; 2024-25 developed by Mrandrews944@gmail.com</p></marquee> 
<?php
    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'ndala');

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $full_name = $conn->real_escape_string($_POST['full_name']);
        $result = $conn->real_escape_string($_POST['result']);

        $sql = "INSERT INTO results (full_name, result) VALUES ('$full_name', '$result')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close();
    ?>
</body>
</html>
