<?php
include "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Create Form</title>
</head>
<body>
    <h2>Create a New Record</h2>
    <form action="create.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $email = $_POST['email'];

            $stmt = $conn->prepare("INSERT INTO mytable (name, email) VALUES (:name, :email)");
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->execute();
            echo "New record created successfully";
        
        
    }
    ?>
</body>
</html>
