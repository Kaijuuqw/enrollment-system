<?php
include 'db.php';

$result = $conn->query("SELECT * FROM students");

echo "<h2>Enrolled Students</h2><table border='1'><tr>
<th>LRN</th><th>Name</th><th>Strand</th><th>Status</th></tr>";

while ($row = $result->fetch_assoc()) {
  echo "<tr><td>{$row['lrn']}</td>
    <td>{$row['lastname']}, {$row['firstname']}</td>
      <td>{$row['strand']}</td>
        <td>{$row['status']}</td></tr>";
        }
        echo "</table>";
        ?>

        