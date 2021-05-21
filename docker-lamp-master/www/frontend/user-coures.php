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

    <!-- <div class="row d-flex justify-content-end">

        <div class="search">
            <div class="col-8">
            </div>

        
            <form class="form-inline" action="user-coures.php" method="post">

                <div class="form-group mx-sm-3 mb-2">

                    <input type="text" class="form-control" name="search" value=""
                        placeholder="Search by Course code or Course name...">
                </div>
                <button type="submit" class="btn btn-primary mb-2">Search</button>
            </form>

        </div>
    </div> -->

    <div class="row">
        <div class="col">
            <div class="course">
                <h1>COURSE</h1>
            </div>
        </div>
        <div class="col">
            <div class="float-right">
                <form class="form-inline" action="user-coures.php" method="post">

                    <div class="form-group mx-sm-3 mb-2">

                        <input type="text" class="form-control" name="search" value=""
                            placeholder="Search by code/name">
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Search</button>
                </form>
            </div>
        </div>
    </div>
    <script>
	//function to add course to cart
    function myFunction(value) {
        window.location.href = "user-coures.php?query=" + value;
    }

    function addtocart(value) {
        window.location.href = "user-coures.php?addcart=" + value;
    }
    </script>
    <?php
  

$cid = $row['id'];

if(isset($_GET["addcart"])){
    $addcart =$_GET["addcart"];
    $sql = "SELECT * FROM courses where id = '$addcart'";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        $row = mysqli_fetch_assoc($result);
           $course_code =$row["course_code"];
           $course_name =$row["course_name"];
           $section =$row["section"];
           $credit =$row["credit"];
           $department =$row["department"];
           $examination_date =$row["examination_date"];
        
    } else {
        echo "<div ><center> <img src='https://www.flaticon.com/svg/static/icons/svg/751/751381.svg' width='200px'  ><br><br>
        <h3>No result Please try agian !</h3></center></div>";
    }


    $sql = "INSERT INTO carts (userid, 	course_code,course_name,section,credit,department,examination_date) VALUES ($cid,'$course_code','$course_name' ,'$section', '$credit','$department','$examination_date')";

    if (mysqli_query($conn, $sql)) {
      //echo "New record created successfully"; //show popup
    } 
	else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}


if(isset($_POST["search"])){
    $search = $_POST["search"];
    $sql = "SELECT * FROM courses where course_code like '%$search%' OR course_name like '%$search%' ";
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
            echo " <th scope='col'></th>";
            echo " </tr></thead>";
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            $cid= $row["id"];
            echo "<td>" . $row["course_code"]. "</td> " ;
            echo  "<td>" .$row["course_name"]. "</td>";
            echo  "<td>" .$row["section"]. "</td>";
            echo  "<td>" .$row["credit"]. "</td>";
            echo  "<td>" .$row["department"]. "</td>";
            echo  "<td>" .$row["examination_date"]. "</td>";
            echo  "<td> <button type='button' class='btn btn-success' value= '$cid' onclick='addtocart(this.value)' ><i class='fa fa-cart-arrow-down'></i></button></td>";
    
            echo "</tr>";
        }
        } else {
            echo "<div ><center> <img src='https://www.flaticon.com/svg/static/icons/svg/751/751381.svg' width='200px'  ><br><br>
            <h3>No result Please try agian !</h3></center></div>";
        }
        echo "</table>";
    
    
        mysqli_close($conn);
    

}
else{
    $sql = "SELECT * FROM courses";
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
            echo " <th scope='col'></th>";
            echo " </tr></thead>";
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            $cid= $row["id"];
            echo "<td>" . $row["course_code"]. "</td> " ;
            echo  "<td>" .$row["course_name"]. "</td>";
            echo  "<td>" .$row["section"]. "</td>";
            echo  "<td>" .$row["credit"]. "</td>";
            echo  "<td>" .$row["department"]. "</td>";
            echo  "<td>" .$row["examination_date"]. "</td>";
            echo  "<td> <button type='button' class='btn btn-success' value= '$cid' onclick='addtocart(this.value)' ><i class='fa fa-cart-arrow-down'></i></button></td>";
    
            echo "</tr>";
        }
        } else {
            echo "<div ><center> <img src='https://www.flaticon.com/svg/static/icons/svg/751/751381.svg' width='200px'  ><br><br>
            <h3>No result Please try agian !</h3></center></div>";
        }
        echo "</table>";
    
    
        mysqli_close($conn);
    


}

   







  
?>
</body>

</html>
<style type="text/css">
.search {


    padding-top: 20px;


}

body {
    background-color: rgba(0, 0, 0, 0.5);
    color: #fff;
}

.course {
    padding-top: 15px;
    padding-left: 20px;


}


.float-right {
    padding-top: 20px;
    padding-right: 20px;
}

.form-inline {

    text-align:'center';

}

.container {
    float: right;
}

td {
    color: #fff;

}
</style>