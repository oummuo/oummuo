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
    <script>
    function deletecart(value) {
        window.location.href = "user-cart.php?deletecart=" + value;
    }
    </script>
    <?php
$userid = $row['id'];
// $deletecart = $_GET["deletecart"];
$sql = "SELECT * FROM users where id = '$userid'";
//echo $sql;
$result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
       $studentid=$row['studentid'];
	   $personalid=$row['personalid'];
        $nationality=$row['nationality'];
        $adviser=$row['adviser'];
        $name=$row['name'];
         $email=$row['email'];
         $address=$row['address'];
    } else {
    echo "Cart is emty, Please choose you course";
    }
    


    mysqli_close($conn);

  
?>
    <div class="container">

        <div class="row justify-content-center">

            <h1>STUDENT PROFILE</h1>

        </div>
        <div class="row">
            <div class="col-2">
                <img src="https://www.flaticon.com/svg/static/icons/svg/3135/3135715.svg" witd="120" height="120">
            </div>
            <div class="col-10">
                <form method='post' action='save-profile.php'>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="font-weight-bold">STUDENT ID :</label>
                                <input type="text" name="studentid" id="studentid" disabled=true class="form-control"
                                    value="<?php echo $studentid ?>">
                                <input type="text" name="studentid" id="studentid2" disabled=true class="form-control"
                                    value="<?php echo $studentid ?>">
                            </div>

                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleInputPassword1" class="font-weight-bold">NAME : </label>
                                <input type="text" name="name" id="name" disabled=true class="form-control"
                                    value="<?php echo $name ?>">
                            </div>

                        </div>

                    </div>
                    <div class="row">
						<div class="col">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="font-weight-bold">PERSONAL ID :</label>
                                <input type="text" name="personalid" id="personalid" disabled=true class="form-control"
                                    value="<?php echo $personalid ?>">
                                <input type="text" name="personalid" id="personalid2" disabled=true class="form-control"
                                    value="<?php echo $personalid ?>">									
                            </div>

                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="font-weight-bold">NATIONALITY : </label>
                                <input type="text" name="nationality" class="form-control" id="nationality"
                                    disabled=true value="<?php echo $nationality ?>">
                            </div>

                        </div>

                    </div>
					
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="exampleInputPassword1" class="font-weight-bold">EMAIL :</label>
                                <input type="email" name="email" class="form-control" id="email" disabled=true
                                    value="<?php echo $email ?>">
                            </div>

                        </div>


                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="exampleInputPassword1" class="font-weight-bold">ADVISER :</label>
                                <input type="text" name="adviser" id="adviser" disabled=true class="form-control"
                                    value="<?php echo $adviser ?>">
                            </div>

                        </div>


                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="comment" class="font-weight-bold">ADDRESS :</label>
                                <textarea class="form-control" rows="3" id="address" disabled=true
                                    name="address"><?php echo $address ?></textarea>
                            </div>

                        </div>


                    </div>


                    <button type="button" class="btn btn-primary" id="editbtn" onclick="myFunction()">Edit</button>
                    <button type="submit" class="btn btn-primary" id="savebtn">Save</button>
                </form>

            </div>
        </div>



    </div>


</body>

</html>
<script>
document.getElementById("studentid").style.display = "none";
document.getElementById("savebtn").style.display = "none";
document.getElementById("personalid").style.display = "none";

function myFunction() {
    document.getElementById("studentid").disabled = false;
    document.getElementById("name").disabled = false;
	document.getElementById("personalid").disabled = false;
    document.getElementById("nationality").disabled = false;
    document.getElementById("email").disabled = false;
    document.getElementById("adviser").disabled = false;
    document.getElementById("address").disabled = false;
    document.getElementById("savebtn").style.display = "block";
    document.getElementById("editbtn").style.display = "none";
	document.getElementById("password").disabled = true;


}
</script>
<style>
body {
    background-color: rgba(0, 0, 0, 0.5);
    color: #fff;

    /* opacity: 0.5; */
}

.container {
    margin-top: 20px;

}



.col-2 {
    /* float: left; */
    text-align: left;
    /*background-color: #956520;*/
}
</style>