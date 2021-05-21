<?php
//  include("config.php");
 include('session.php');
  $conn = mysqli_connect('db', 'user', 'test', "myDb");


if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>


<html>

<head>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

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
    <!-- <div class="row">
        <div class="col">
            <div class="cart">
                <h1>Cart</h1>
            </div>
            <div class="col">
            </div>
        </div> -->
    <script>
    function deletecart(value) {
        window.location.href = "user-cart.php?deletecart=" + value;
    }
    </script>
    <h1 style="padding-left:20;padding-top:20;padding-bottom:15;">Cart</h1>
    <?php
$userid = $row['id'];

if(isset($_GET["deletecart"])){
    $deletecart = $_GET["deletecart"];

   

    $sql = "DELETE FROM carts where id = '$deletecart'";
    $result = mysqli_query($conn, $sql);
}

$sql = "SELECT * FROM carts where userid = '$userid'";
//echo $sql;
$result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        echo "<table class='table'>";
        echo " <thead class='thead-dark'><tr>";
        echo " <th scope='col'>Course code</th>";
        echo " <th scope='col'>Course name</th>";
        echo " <th scope='col'>Section</th>";
        echo " <th scope='col'>Credit</th>";
        echo " <th scope='col'>Department</th>";
        echo " <th scope='col'>Examination date</th>";
        echo " <th scope='col'></th></th>";
        echo " </tr></thead>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        $did= $row["id"];
        echo "<td>" . $row["course_code"]. "</td> " ;
        echo  "<td>" .$row["course_name"]. "</td>";
        echo  "<td>" .$row["section"]. "</td>";
        echo  "<td>" .$row["credit"]. "</td>";
        echo  "<td>" .$row["department"]. "</td>";
        echo  "<td>" .$row["examination_date"]. "</td>";
        echo  "<td> <button type='button' class='btn btn-danger' value= '$did' onclick='deletecart(this.value)' ><i class='fa fa-trash'></i></button></td>";
       

        echo "</tr>";
    }
    } else {
        echo "<div ><center> <img src='https://www.flaticon.com/svg/static/icons/svg/2945/2945609.svg' width='200px'  ><br><br>
        <h3>Your cart is empty please refresh page or select some course !</h3></center></div>";

   
    
    }
    echo "</table>";
    echo  "<center><button type='button' class='btn btn-success btn-lg'>PayBill</button><br></center>";


    mysqli_close($conn);

  
?>
</body>

</html>
<style>


body {
    background-color: rgba(0, 0, 0, 0.5);
    color: #fff;
}

td {
    color: #fff;

}
</style>