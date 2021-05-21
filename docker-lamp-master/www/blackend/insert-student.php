<?php
	
if(isset($_POST["student_id"])){
    echo $student_id = $_POST["student_id"];
echo $name = $_POST["name"];
echo $personal_id = $_POST["personal_id"];
echo $nationality = $_POST["nationality"];
echo $email = $_POST["email"];
echo $address = $_POST["address"];
echo $adviser = $_POST["adviser"];
include('../frontend/session.php');//
$conn = mysqli_connect('db', 'user', 'test', "myDb");
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
if($student_id and $name and $personal_id and $nationality and $email and $address and $adviser){
    //$genpass = $personal_id;//
    $sql = "INSERT INTO users (username,password,studentid,name,personalid,nationality,address,email,adviser,status) VALUES ('$student_id','$personal_id','$student_id', '$name', '$personal_id', '$nationality','$address','$email','$adviser','user')";
    
    if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
      header('location:admin-student-info.php');
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

}
mysqli_close($conn);
}else{

}

// include("config.php");

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
    <div class="container">
        <form name="myForm" onsubmit="return validateForm()" method="post">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="exampleInputEmail1">STUDENT ID :</label>
                        <input type="text" name="student_id" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" require placeholder="Enter Student Id ">
                    </div>

                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="exampleInputPassword1">NAME :</label>
                        <input type="text" name="name" class="form-control" id="exampleInputPassword1"
                            placeholder="Enter Name">
                    </div>

                </div>

            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="exampleInputEmail1">PERSONAL ID :</label>
                        <input type="text" name="personal_id" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Enter personal Id">
                    </div>

                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="exampleInputEmail1">NATIONALITY :</label>
                        <input type="text" name="nationality" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Enter nationality">
                    </div>

                </div>

            </div>
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="exampleInputPassword1">EMAIL :</label>
                        <input type="email" name="email" class="form-control" id="exampleInputPassword1"
                            placeholder="Enter email">
                    </div>

                </div>


            </div>
			
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="exampleInputPassword1">ADVISER :</label>
                        <input type="text" name="adviser" class="form-control" id="exampleInputPassword1"
                            placeholder="Enter Adviser ">
                    </div>

                </div>


            </div>

            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="comment">ADDRESS :</label>
                        <textarea class="form-control" rows="5" id="comment" name="address"></textarea>
                    </div>

                </div>


            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="button" class="btn btn-danger" onclick="back()">Cancel</button>
        </form>

    </div>
	
</body>

</html>

<script>
function validateForm() {
    var x1 = document.forms["myForm"]["student_id"].value;
    var x2 = document.forms["myForm"]["name"].value;
	var x3 = document.forms["myForm"]["personal_id"].value;
    var x4 = document.forms["myForm"]["nationality"].value;
    var x5 = document.forms["myForm"]["email"].value;
    var x6 = document.forms["myForm"]["address"].value;
    var x7 = document.forms["myForm"]["student_id"].value;
    var x8 = document.forms["myForm"]["adviser"].value;
    if (x1 == "" || x1 == null ||
        x2 == "" || x2 == null ||
        x3 == "" || x3 == null ||
        x4 == "" || x4 == null ||
        x5 == "" || x5 == null ||
        x6 == "" || x6 == null ||
        x7 == "" || x7 == null)||
		x8 == "" || x8 == null)||{
        alert("Name must be filled out");
        return false;
    }
}

function back() {
    window.location = "admin-student-info.php"
}
</script>
<style lang="">
body {
    background-color: rgba(0, 0, 0, 0.5);
    color: #fff;

    /* opacity: 0.5; */

}

.container {
    margin-top: 30px;
}
</style>