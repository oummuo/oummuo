<?php
   include("config.php");

   $conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$addcart = $_GET["addcart"];
$sql = "SELECT * FROM courses where id = '$addcart'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["course_code"]. " - Name: " . $row["course_name"]. " <br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
header('Location: user-coures.php');
?>

