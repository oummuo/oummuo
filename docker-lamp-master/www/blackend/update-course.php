<html>

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


    <?php
//include("config.php");
 include('../frontend/session.php');
$conn = mysqli_connect('db', 'user', 'test', "myDb");


if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
} 

 $id = $_GET['id'];
// echo "show id update ".$id;



// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
 
}
if($id !== 0 || $id !== ""){
   
    $sql = "SELECT * FROM courses where id ='$id'";
   //echo "show mysql",$sql;
    $result = mysqli_query($conn, $sql);
    //echo "sql fa".mysqli_num_rows($result);
    // while ($row = $result->fetch_assoc()) {
    //     echo $row['classtype']."<br>";
    // }
    if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_assoc($result)) {
        $did= $row["id"];
         $course_code = $row["course_code"];
         $course_name = $row["course_name"];
         $section = $row["section"];
         $credit = $row["credit"];
        $department = $row["department"];
         $examination_date = $row["examination_date"];

         echo "<div class='container' style='padding-top:20'>";
         echo "<form method='post' action='save-course.php?id=$id'> ";
        echo "<div class='row'>";
        echo  "<div class='col'>";
        echo  "<div class='form-group'>";
        echo  "<label for='exampleInputEmail1'>COURSE CODE</label>";
        echo   "<input type='text' name='course_code' class='form-control' value='$course_code'>";
        echo     "</div>";
        echo  "</div>";
        echo   "<div class='col'>";
        echo  "<div class='form-group'>";
        echo  "<label>COURSE NAME</label>";
        echo  "<input type='text' name='course_name' class='form-control' value='$course_name'>";
        echo  "</div>";
        echo       " </div>";
        echo    " </div>";
        echo     "<div class='row'>";
        echo   "<div class='col'>";
        echo   "<div class='form-group'>";
        echo    "<label for='exampleInputEmail1'>SECTION</label>";
        echo    "<input type='text' name='section' class='form-control' value='$section'>";
        echo    "</div>";
        echo    "</div>";
        echo    "<div class='col'>";
        echo    "<div class='form-group'>";
        echo    "<label for='exampleInputPassword1'>CREDIT</label>";
        echo    "<input type='text' name='credit' class='form-control' value ='$credit'>";
        echo    "</div>";

        echo    "</div>";

        echo    "</div>";
        echo     "<div class='row'>";
        echo   "<div class='col'>";
        echo   "<div class='form-group'>";
        echo    "<label for='exampleInputEmail1'>DEPARTMENT</label>";
        echo    "<input type='text' name='department' class='form-control' value='$department'>";
        echo    "</div>";
        echo    "</div>";
        echo    "<div class='col'>";
        echo    "<div class='form-group'>";
        echo    "<label for='exampleInputPassword1'>EXAMINATION DATE</label>";
        echo    "<input type='date' name='examination_date' class='form-control' value = '$examination_date'>";
        echo    "</div>";

        echo    "</div>";

        echo    "</div>";


        echo  " <button type='submit' class='btn btn-primary'>Submit</button>";
        echo  " <button type='button' class='btn btn-danger' onclick='back()'>Cancel</button>";
        echo "</form>";
/////////////////////////////////////////////////////////////////////////////////////////////

      
    }

    } else {
    echo "Cart is emty, Please choose you course";
    }


    //mysqli_close($conn);

    
}

mysqli_close($conn);


?>

</body>
</head>

</html>
<script>
function back() {
    window.location = "admin-course.php"
}
</script>
<style>
body {
    background-color: rgba(0, 0, 0, 0.5);
    color: #fff;

    /* opacity: 0.5; */

}
</style>