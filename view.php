
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>View Student Results</title>
<style>
a{
    text-decoration:none;
}

</style>
</head>
<body>
<a href="reply_form.php"><h2 align="right">Provide Suggestions</h2></a><br><br><br> 
<a href="logout.php"><h3 align="right">Logout</h3></a>

<h1>View Student Results</h1>
<form action="" method="get">
<label for="full_name">Student Full Name:</label>
<input type="text" id="full_name" name="full_name" required><br><br>
<input type="submit" value="Search">
</form>

<?php
    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'ndala');

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if (isset($_GET['full_name'])) {
        $full_name = $conn->real_escape_string($_GET['full_name']);

        $sql = "SELECT result FROM results WHERE full_name = '$full_name'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<h2>Results for $full_name</h2>";
                echo "<p>" . nl2br(htmlspecialchars($row['result'])) . "</p>";
            }
        } else {
            echo "No results found for $full_name";
        }
    }

    $conn->close();
    ?>
</body>
</html>
