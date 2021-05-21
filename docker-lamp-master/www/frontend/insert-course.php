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
                        <label for="exampleInputEmail1">COURSE CODE :</label>
                        <input type="text" name="course_code" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" require placeholder="EnterCOURSE CODE">
                    </div>

                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="exampleInputPassword1">COURSE NAME :</label>
                        <input type="text" name="course_name" class="form-control" id="exampleInputPassword1"
                            placeholder="Enter COURSE NAME">
                    </div>

                </div>

            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="exampleInputEmail1">SECTION :</label>
                        <input type="text" name="section" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Enter SECTION">
                    </div>

                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="exampleInputPassword1">CREDIT :</label>
                        <input type="text" name="credit" class="form-control" id="exampleInputPassword1"
                            placeholder="Enter CREDIT">
                    </div>

                </div>

            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="exampleInputPassword1">DEPARTMENT :</label>
                        <input type="text" name="department" class="form-control" id="exampleInputPassword1"
                            placeholder="Enter DEPARTMENT ">
                    </div>

                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="comment">EXAMINATION DATE :</label>
                        <input type="date" name="examination_date" class="form-control">
                    </div>

                </div>


            </div>

      


            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="button" class="btn btn-danger" onclick="back()">Cancel</button>
        </form>




    </div>


    <?php
    if(isset($_POST["course_code"])){
        $course_code = $_POST["course_code"];
        $course_name = $_POST["course_name"];
        $section = $_POST["section"];
        $credit = $_POST["credit"];
        $department = $_POST["department"];
        $examination_date = $_POST["examination_date"];
        //include("config.php");
//include('session.php');
 $conn = mysqli_connect('db', 'user', 'test', "myDb");
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
if($course_code and $course_name and $section and $credit and $department and $examination_date){

    $sql = "INSERT INTO courses (course_code,course_name,section,credit,department,examination_date) 
    VALUES ('$course_code','$course_name','$section', '$credit', '$department','$examination_date')";
    
    if (mysqli_query($conn, $sql)) {
      header('location:admin-course.php');
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
}

mysqli_close($conn);
    }




?>

</body>

</html>

<script>
function validateForm() {
    var x1 = document.forms["myForm"]["course_code"].value;
    var x2 = document.forms["myForm"]["course_name"].value;
    var x3 = document.forms["myForm"]["section"].value;
    var x4 = document.forms["myForm"]["credit"].value;
    var x5 = document.forms["myForm"]["department"].value;
    var x6 = document.forms["myForm"]["examination_date"].value;

    if (x1 == "" || x1 == null ||
        x2 == "" || x2 == null ||
        x3 == "" || x3 == null ||
        x4 == "" || x4 == null ||
        x5 == "" || x5 == null ||
        x6 == "" || x6 == null) {
        alert("Name must be filled out");
        return false;
    }
}

function back() {
    window.location = "admin-course.php"
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