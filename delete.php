<?php
include "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Delete Form</title>
</head>
<body>
    <h2>Delete an Existing Record</h2>
    <form action="delete.php" method="post">
        <label for="id">ID:</label>
        <input type="text" id="id" name="id" required><br><br>
        <input type="submit" value="Delete">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST['id'];

        // Prepare the SQL query to delete the record
        $sql = "DELETE FROM mytable WHERE id = :id";

        // Prepare and execute the statement
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        echo "Record deleted successfully";
    }
    ?>
</body>
</html>
