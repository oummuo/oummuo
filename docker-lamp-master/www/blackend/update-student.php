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
   
    $sql = "SELECT * FROM users where id ='$id'";
  // echo "show mysql",$sql;
    $result = mysqli_query($conn, $sql);
  // echo "sql fa".mysqli_num_rows($result);
    // while ($row = $result->fetch_assoc()) {
    //     echo $row['classtype']."<br>";
    // }
    if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
       
        $did= $row["id"];
        $studentid=$row['studentid'];
        $name=$row['name'];
		$personalid=$row['personalid'];
        $nationality=$row['nationality'];
        $address=$row["address"];
        $email=$row['email'];
        $adviser=$row['adviser'];

        echo "<div class='container' style='padding-top:20'>";
         echo "<form method='post' action='save-student.php?id=$id'> ";
        echo "<div class='row'>";
        echo  "<div class='col'>";
        echo  "<div class='form-group'>";
        echo  "<label for='exampleInputEmail1'>STUDENT ID</label>";
        echo   "<input type='text' name='studentid' class='form-control' value ='$studentid'>";
        echo     "</div>";
        echo  "</div>";
        echo   "<div class='col'>";
        echo  "<div class='form-group'>";
        echo  "<label>NAME</label>";
        echo  "<input type='text' name='name' class='form-control'value='$name'>";
        echo  "</div>";
        echo       " </div>";

        echo    " </div>";
        echo     "<div class='row'>";
        echo  "<div class='col'>";
        echo  "<div class='form-group'>";
        echo  "<label for='exampleInputEmail1'>PERSONAL ID</label>";
        echo   "<input type='text' name='personalid' class='form-control' value ='$personalid'>";
        echo     "</div>";
        echo  "</div>";		
		
        echo   "<div class='col'>";
        echo   "<div class='form-group'>";
        echo    "<label for='exampleInputEmail1'>NATIONALITY</label>";
        echo    "<input type='text' name='nationality' class='form-control' value='$nationality'>";
        echo    "</div>";
        echo    "</div>";

        echo    "</div>";
		
        echo     "<div class='row'>";
        echo     "<div class='col-12'>";
        echo     "<div class='form-group'>";
        echo    "<label for='exampleInputPassword1'>EMAIL</label>";
        echo    "<input type='text' name='email' class='form-control' value='$email'>";
        echo    "</div>";

        echo    "</div>";


        echo    "</div>";
		
        echo     "<div class='row'>";
        echo     "<div class='col-12'>";
        echo     "<div class='form-group'>";
        echo    "<label for='exampleInputPassword1'>ADVISER</label>";
        echo    "<input type='text' name='adviser' class='form-control' value='$adviser'>";
        echo    "</div>";

        echo    "</div>";


        echo    "</div>";

        echo     "<div class='row'>";
        echo     "<div class='col-12'>";
        echo     "<div class='form-group'>";
        echo     "<label for='comment'>ADDRESS :</label>";
        echo    "<textarea class='form-control' rows='5' name='address'>$address</textarea>";
        echo    "</div>";

        echo    "</div>";


        echo    "</div>";


        echo  " <button type='submit' class='btn btn-primary'>Submit</button>";
        echo  " <button type='button' class='btn btn-danger' onclick='back()'>Cancel</button>";
        echo "</form>";
/////////////////////////////////////////////////////////////////////////////////////////////
        // echo "<form method='post' action='save-student.php?id=$id'> ";
        // echo "<div class='form-group'>";
        // echo "<div class='row'>";
        // echo "studentid : <input type='text' name='studentid' value='$studentid'><br/>" ;
        // echo  "name : <input type='text' name='name' value='$name'><br/>" ;
        // echo  "nationality : <input type='text' name='nationality' value='$nationality'><br/>" ;
        // echo  "address : <input type='text' name='address' value='$address'><br/>" ;
        // echo  "email : <input type='text' name='email' value='$email'><br/>" ;
        // echo  "adviser : <input type='text' name='adviser' value='$adviser'><br/>" ;
        // echo  " <button type='submit' class='btn btn-primary' >Submit</button>";
        // echo " </form>";
      
    }
//         echo $student_id = $_POST["student_id"];
// echo $name = $_POST["name"];
// echo $nationality = $_POST["nationality"];
// echo $email = $_POST["email"];
// echo $address = $_POST["address"];
// echo $adviser = $_POST["adviser"];
// echo $status = $_GET["status"];

//     if($status){
            
// echo $name = $_POST["name"];
// echo $nationality = $_POST["nationality"];
// echo $email = $_POST["email"];
// echo $address = $_POST["address"];
// echo $adviser = $_POST["adviser"];
// $sql = "UPDATE users
// SET studentid='$student_id',name = '$name',nationality='$nationality',email = '$email',address = '$address',adviser='$adviser'
// WHERE id = '$id'";
//  if (mysqli_query($conn, $sql)) {
//     echo "Update record created successfully";
//   } else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//   }

//     }



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
    window.location = "admin-student-info.php"
}
</script>
<style>
body {
    background-color: rgba(0, 0, 0, 0.5);
    color: #fff;

    /* opacity: 0.5; */

}
</style>