<?php
include "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Update Form</title>
</head>
<body>
    <h2>Update an Existing Record</h2>
    <form action="update.php" method="post">
        <label for="id">ID:</label>
        <input type="text" id="id" name="id" required><br><br>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>
        <input type="submit" value="Update">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];

        // Prepare the SQL query with placeholders
        $sql = "UPDATE mytable SET ";
        $params = [];

        // Add fields to update only if they are provided
        if (!empty($name)) {
            $sql .= "name = :name, ";
            $params[':name'] = $name;
        }
        if (!empty($email)) {
            $sql .= "email = :email, ";
            $params[':email'] = $email;
        }

        // Remove trailing comma and space, and add the condition
        $sql = rtrim($sql, ', ') . " WHERE id = :id";
        $params[':id'] = $id;

        // Prepare and execute the statement
        $stmt = $conn->prepare($sql);
        $stmt->execute($params);

        echo "Record updated successfully";
    }
    ?>
</body>
</html>
