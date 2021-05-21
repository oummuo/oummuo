<?php

   include("config.php");
   //include("session.php");
   session_start();
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']); //รับ usersname
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); // รับ password

      $sql = "SELECT status FROM users WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $status = $row['status'];
      $count = mysqli_num_rows($result);
      //echo $status;
   
      // If result matched $myusername and $mypassword, table row must be 1 row
		 
      if($count == 1) {
         if($status == 'admin'){
            header("location: admin-page.php");
			echo "<script>console.log('Debug Objects: " . $count . "' );</script>";
            $_SESSION['login_user'] = $myusername;
         }
         
         else {
              //session_register("myusername");
            $_SESSION['login_user'] = $myusername;
            header("location: user-page.php");
         }
         //session_register("myusername");
         //$_SESSION['login_user'] = $myusername;
         //$error = "Your Login Name or Password is correct";
        
      }else{
        
                 echo "<div class='alert alert-danger' role='alert'>Username or Password is incorrect!</div>" ;

      }
   }
 


?>
<html>

<head>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <scrip src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </scrip>
    <scrip src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </scrip>
    <scrip src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </scrip>


    <title>Login Page</title>

    <style type="text/css">
    body {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 14px;
    }

    label {
        font-weight: bold;
        width: 100px;
        font-size: 14px;
    }

    .box {
        border: #666666 solid 1px;
    }
    </style>

</head>

<body>
    <!-- 
    <div align="center">

        <div style="width:300px;height=500px;color:#fff;background-color: rgba(0, 0, 0, 0.5)" align="left">
            <div style="background-color:#333333; color:#FFFFFF; padding:5;"><b>Login</b></div>

            <div style="margin:30px;height=500px;">

                <form action="" method="post">
                    <label>UserName :</label><input type="text" name="username" class="box" /><br /><br />
                    <label>Password :</label><input type="password" name="password" class="box" /><br /><br />
                    <input type="submit" value=" Submit " /><br />
                </form>

                <div style="font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>

            </div>

        </div>

    </div> -->

    <div class="login">
        <!-- <h1>LOGIN</h1> -->
        <form class="form-inline" action="" method="post">
            <label>Username :</label><input type="text" class="form-control" name="username" class="box" /><br /><br />
            <label>Password :</label><input type="password" class="form-control" name="password"
                class="box" /><br /><br />
            <div class="btn">
                <button type="submit" class="btn btn-success">Login</button><br>
                <small>*if you are student use your student id as username and use personal id as password</small>
            </div>
        </form>

    </div>

</body>

</html>
<style>
body {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 16px;
    background-position: center;
    /* Center the image */
    background-repeat: no-repeat;
    /* Do not repeat the image */
    background-size: cover;
    /* Resize the background image to cover the entire container */
    background-image: url("https://images.unsplash.com/20/cambridge.JPG?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=730&q=80");
}

.login {
    border-radius: 10px;
    color: #fff;
    width: 400px;
    /* height: 200px; */
    background-color: rgba(0, 0, 0, 0.5);
    margin: auto;
    margin-top: 10px;
    text-align: center;
    padding: 10px;
    padding-top: 25px;

}

.btn {
    margin: auto;
    color: #fff;
}
</style>