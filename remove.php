<?php
include 'db.php';
$id = $_GET['id'];

$sql = "DELETE FROM users WHERE id=$id";
if ($conn->query($sql) === true) {
    echo "<script>
        alert('User Deleted Successfully');
        window.location.href = 'index.php';
    </script>";
} else {
    echo "<script>
        alert('Error: " . $conn->error . "');
        window.location.href = 'index.php';
    </script>";
}

$conn->close();
