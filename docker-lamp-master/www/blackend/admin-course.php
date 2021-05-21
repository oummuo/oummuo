<html>
<h1 style="padding:10;">COURSE INFORMATION</h1>
<?php
//  include("config.php");
 include('../frontend/session.php');
 $conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);


if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
} else{
    $sql = "SELECT * FROM courses";
$result = mysqli_query($conn, $sql);
echo "<table class='table'>";
echo " <thead class='thead-dark'><tr>";
echo " <th scope='col'>Course cose</th>";
echo " <th scope='col'>Course name</th>";
echo " <th scope='col'>Section</th>";
echo " <th scope='col'>Credit</th>";
echo " <th scope='col'>Department</th>";
echo " <th scope='col'>Examination date</th>";
echo " <th scope='col'></th>";
echo " <th scope='col'>  <form action='insert-course.php' method='post'><button type='submit' class='btn btn-primary'>+ Add more</button></th>";
echo " </tr></thead>";
    if (mysqli_num_rows($result) > 0) {
     
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        // $did= $row["id"];
        //echo "show".$login_session;
        $did= $row["id"];
        echo "<td>" . $row["course_code"]. "</td> " ;
        echo  "<td>" .$row["course_name"]. "</td>";
        echo  "<td>" .$row["section"]. "</td>";
        echo  "<td>" .$row["credit"]. "</td>";
        echo  "<td>" .$row["department"]. "</td>";
        echo  "<td>" .$row["examination_date"]. "</td>";
        echo  "<td> <button type='button' class='btn btn-primary' value= '$did' onclick= 'editecourse(this.value)' ><i class='fa fa-pencil'></i></button></td>";
        echo  "<td> <button type='button' class='btn btn-danger' value= '$did' onclick= 'deletecourse(this.value)' ><i class='fa fa-trash'></i></button></td>";

        echo "</tr>";
    }
    } else {
    //echo "NO";
    }
    echo "</table>";


    mysqli_close($conn);

}


?>
<script>
function editecourse(val) {
    window.location.href = "update-course.php?id=" + val;


}

function deletecourse(val) {
    window.location.href = "admin-course.php?del=" + val;
}
</script>
<?php 
// include("config.php");
// include('session.php');
$conn = mysqli_connect('db', 'user', 'test', "myDb");
if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}
    if(isset($_GET["del"])){
        $del = $_GET["del"];
            $sql = "DELETE FROM courses where id = '$del'";
           echo $sql;
            $result = mysqli_query($conn, $sql);
            echo $result;
            if (mysqli_num_rows($result) > 0) {
               
                echo "yesy";
            } else {
                header('location:admin-course.php');
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