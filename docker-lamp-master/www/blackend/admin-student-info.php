<html>
<h1 style="padding:10;">STUDENT INFORMATION</h1>
<?php
//  include("config.php");
 include('../frontend/session.php');
$conn = mysqli_connect('db', 'user', 'test', "myDb");


if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
} else{
    $sql = "SELECT * FROM users where status = 'user'";
$result = mysqli_query($conn, $sql);
echo "<table class='table'>";
echo " <thead class='thead-dark'><tr>";
echo " <th scope='col'>StudentID</th>";
echo " <th scope='col'>Name</th>";
echo " <th scope='col'>PersonalID</th>";
echo " <th scope='col'>Nationality</th>";
echo " <th scope='col'>Address</th>";
echo " <th scope='col'>Email</th>";
echo " <th scope='col'>Adviser</th>";
echo " <th scope='col'></th>";
echo " <th scope='col'>  <form action='insert-student.php' method='post'><button type='submit' class='btn btn-primary'>+ Add more</button></th>";
echo " </tr></thead>";
    if (mysqli_num_rows($result) > 0) {
   
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        $did= $row["id"];
        echo "<td>" . $row["studentid"]. "</td> " ;
        echo  "<td>" .$row["name"]. "</td>";
		echo "<td>" . $row["personalid"]. "</td> " ;
        echo  "<td>" .$row["nationality"]. "</td>";
        echo  "<td>" .$row["address"]. "</td>";
        echo  "<td>" .$row["email"]. "</td>";
        echo  "<td>" .$row["adviser"]. "</td>";
        echo  "<td> <button type='button' class='btn btn-primary' value= '$did' onclick= 'editestudent(this.value)' ><i class='fa fa-pencil'></i></button></td>";
        echo  "<td> <button type='button' class='btn btn-danger' value= '$did' onclick= 'deletestudent(this.value)' ><i class='fa fa-trash'></i></button></td>";

        echo "</tr>";
    }
    } else {
    // echo "Cart is emty, Please choose you course";
    }
    echo "</table>";


    mysqli_close($conn);

}


?>
<script>
function editestudent(val) {
    window.location.href = "update-student.php?id=" + val;

}

function deletestudent(val) {
    window.location.href = "admin-student-info.php?did=" + val;
}
</script>
<?php 
// include("config.php");
//include('session.php');
$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);


if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
} else{
    if(isset($_GET["did"])){
        $did = $_GET["did"];

        $sql = "DELETE FROM users where id = '$did'";
       
        $result = mysqli_query($conn, $sql);
        echo $result;
        if (mysqli_num_rows($result) > 0) {
           
            echo "yesy";
        } else {
            header('location:admin-student-info.php');
        }

    

    }
 
}

?>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

</body>
</head>

</html>
<style>
body {
    background-color: rgba(0, 0, 0, 0.5);
    color: #fff;

    /* opacity: 0.5; */

}

td {
    color: #fff;

}
</style>