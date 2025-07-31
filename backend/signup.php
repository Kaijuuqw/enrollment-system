<?php
include 'db.php';

$lrn = $_POST['lrn'];
$lastname = $_POST['lastname'];
$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$birthdate = $_POST['birthdate'];
$strand = $_POST['strand'];
$mother = $_POST['mother_name'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$sql = "INSERT INTO students (lrn, lastname, firstname, middlename, birthdate, strand, mother_name, password)
        VALUES ('$lrn', '$lastname', '$firstname', '$middlename', '$birthdate', '$strand', '$mother', '$password')";

        if ($conn->query($sql) === TRUE) {
            echo "Registration successful. <a href='../login.html'>Login here</a>";
            } else {
                echo "Error: " . $conn->error;
                }

                $conn->close();
                ?>
                