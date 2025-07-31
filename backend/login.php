<?php
include 'db.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM students WHERE lrn='$username'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
                echo "Login successful. Welcome, " . $row['firstname'] . "!";
                    } else {
                            echo "Incorrect password.";
                                }
                                } else {
                                    echo "User not found.";
                                    }

                                    $conn->close();
                                    ?>
                                    