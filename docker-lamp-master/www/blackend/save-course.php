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
//  include("config.php");
 include('../frontend/session.php');
$conn = mysqli_connect('db', 'user', 'test', "myDb");


if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
} 

// $did= $row["id"];
// $course_code = $row["course_code"];
// $course_name = $row["course_name"];
// $section = $row["section"];
// $credit = $row["credit"];
// $department = $row["department"];
// $examination_date = $row["examination_date"];

echo $id=$_GET['id'];
echo $course_code = $_POST["course_code"];
echo $course_name = $_POST["course_name"];
echo $section = $_POST["section"];
echo $credit = $_POST["credit"];
echo $department = $_POST["department"];
echo $examination_date = $_POST["examination_date"];

$sql = "UPDATE courses
SET course_code='$course_code',course_name = '$course_name',section='$section',credit = '$credit',department = '$department',examination_date='$examination_date'
WHERE id = '$id'";
 if (mysqli_query($conn, $sql)) {
    //echo "Update record created successfully";
    header('location:admin-course.php');
    
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

    




// Check connection
// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }
// if($id ){
//     $sql = "SELECT * FROM users where id ='$id'";
    
//     $result = mysqli_query($conn, $sql);
//     if (mysqli_num_rows($result) > 0) {
    
//     while($row = mysqli_fetch_assoc($result)) {
       
//         $did= $row["id"];
//         $studentid=$row['studentid'];
//         $name=$row['name'];
//         $nationality=$row['nationality'];
//         $address=$row['address'];
//         $email=$row['email'];
//         $adviser=$row['adviser'];
//         echo "<form method='post'> ";
//         echo "studentid : <input type='text' name='studentid' value='$studentid'><br/>" ;
//         echo  "name : <input type='text' name='name' value='$name'><br/>" ;
//         echo  "nationality : <input type='text' name='nationality' value='$nationality'><br/>" ;
//         echo  "address : <input type='text' name='address' value='$address'><br/>" ;
//         echo  "email : <input type='text' name='email' value='$email'><br/>" ;
//         echo  "adviser : <input type='text' name='adviser' value='$adviser'><br/>" ;
//         echo  " <button type='submit' class='btn btn-primary' onclick='test()'>Submit</button>";
//         echo " </form>";
      
//     }

//     if($status){
            
// // echo $name = $_POST["name"];
// // echo $nationality = $_POST["nationality"];
// // echo $email = $_POST["email"];
// // echo $address = $_POST["address"];
// // echo $adviser = $_POST["adviser"];
// $sql = "UPDATE users
// SET studentid='$student_id',name = '$name',nationality='$nationality',email = '$email',address = '$address',adviser='$adviser'
// WHERE id = '$id'";
//  if (mysqli_query($conn, $sql)) {
//     echo "Update record created successfully";
//   } else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//   }

//     }



//     } else {
//     echo "Cart is emty, Please choose you course";
//     }


//     mysqli_close($conn);

    
// }

// mysqli_close($conn);


?>

</body>
</head>

</html>
<script>
function test() {
    //alert("test");

}
</script>
<style>
body {
    background-color: #fff;
}
</style>