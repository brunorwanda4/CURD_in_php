<?php
// add delete method page 😔
$DB_Server = "localhost";
$DB_Username = "root";
$DB_Password = "";
$DB="SOS";
$conn = mysqli_connect($DB_Server, $DB_Username, $DB_Password , $DB);

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete record from database
    $sql = "DELETE FROM students WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        // Redirect back to table page with success message
        echo "<script>alert('Record deleted successfully'); window.location.href='read.php';</script>";
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
} else {
    echo "No ID specified";
}

mysqli_close($conn);
?>

