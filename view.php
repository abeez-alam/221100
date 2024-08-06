<?php
include "connection.php";

try {
    // Prepare the SQL statement
    $stmt = $conn->prepare("SELECT *FROM mytable");
    $stmt->execute();

    // Set the resulting array to associative
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Check if there are any records
    if (count($records) > 0) {
        echo "<table border='1'>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                </tr>";
        foreach ($records as $record) {
            echo "<tr>
                    <td>" . htmlspecialchars($record['id']) . "</td>
                    <td>" . htmlspecialchars($record['name']) . "</td>
                    <td>" . htmlspecialchars($record['email']) . "</td>
                </tr>";
        }
        echo "</table>";
    } else {
        echo "No records found.";
    }
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
