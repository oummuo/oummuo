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
    <!-- <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>User page

   <?php
$name = $row['name'];
$studentid = $row['studentid'];
$personalid = $row['personalid'];
$nationality = $row['nationality'];
$address = $row['address'];
$address = $row['email'];
$adviser = $row['adviser'];

echo "{$name }{$studentid }";

?>

</b></div> -->

    <div>

        <!-- <div class="sidenav">
  <a href="#about">
  <div><i class="fa fa-user"></i>Profile</a></div>
  <a href="#services"><i class="fa fa-book"></i>Course</a>
  <a href="#clients"><i class="fa fa-cart-arrow-down"></i>Cart</a>
  <a href="#contact"><i class="fa fa-calendar"></i>Timetable</a>
  <a href="#contact"><i class="fa fa-sign-out"></i>Logout</a>
</div> -->
        <!-- <div class= "row">
<div class="column"> -->
        <!-- <ul class="nav justify-content-center"> -->
        <!-- <div class="sidenav">
<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" >
  <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" >Home</a>
  <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" >Profile</a>
  <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" >Messages</a>
  <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" >Settings</a>
</div>
</div> -->
        <!--   -->

        <!-- </div>

<div class="content">
<div class="tab-content" id="v-pills-tabContent">
  <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">1564</div>
  <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">v-pills-profile-tab</div>
  <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">v-pills-messages-tab</div>
  <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">v-pills-settings-tab</div>
</div>
</div>
</div>

</div> -->

        <div>

        </div>
        <div class="pages">
            <div class="row">

                <div class="col-2">
                    <div class="tab">
                        <div class="nav flex-column nav-pills " id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            <a class="nav-link active" data-toggle="pill" href="#v-pills-profile" role="tab"
                                aria-controls="v-pills-profile" aria-selected="true" onclick="user_profile()"><i
                                    class="fa fa-user"></i> Profile</a>
                            <a class="nav-link " id="v-pills-coures-tab" data-toggle="pill" href="#v-pills-coures"
                                role="tab" aria-controls="v-pills-coures" onclick="user_coures()"><i
                                    class="fa fa-book"></i> Course</a>
                            <a class="nav-link " id="v-pills-carts-tab" data-toggle="pill" href="#v-pills-carts"
                                role="tab" aria-controls="v-pills-carts" onclick="user_cart()"><i
                                    class="fa fa-cart-arrow-down"></i> Cart</a>
                            <a class="nav-link " id="v-pills-contact-tab" data-toggle="pill" href="#v-pills-contact"
                                role="tab" aria-controls="v-pills-contact" onclick="user_contact()"><i class="fa fa-university"></i>
                                Contact Us</a>
                            <a class="nav-link " ata-toggle="pill" href="logout.php" role="tab"> <i
                                    class="fa fa-sign-out"></i>Logout</a>
                        </div>
                    </div>
                </div>

                <div class="col-10">
                    <iframe id="user_profile" src="user-profile.php" width="100%" frameborder="0" height="600"
                        scrolling="no"></iframe>
                    <iframe id="user_coures" src="user-coures.php" width="100%" height="550" frameborder="0"></iframe>
                    <iframe id="user_cart" src="user-cart.php" frameborder="0" width="100%" scrolling="yes"
                        height="550"></iframe>
					<iframe id="user_contact" src="user-contact.php" width="100%" frameborder="0" height="600"
                        scrolling="yes"></iframe>
                </div>
            </div>
        </div>


</body>


</html>
<script>
document.getElementById("user_profile").style.display = "block";
document.getElementById("user_coures").style.display = "none";
document.getElementById("user_cart").style.display = "none";
document.getElementById("user_contact").style.display = "none";




function user_coures() {
    document.getElementById("user_coures").style.display = "block";
    document.getElementById("user_profile").style.display = "none";
    document.getElementById("user_cart").style.display = "none";
	document.getElementById("user_contact").style.display = "none";
	
}

function user_profile() {
    document.getElementById("user_coures").style.display = "none";
    document.getElementById("user_profile").style.display = "block";
    document.getElementById("user_cart").style.display = "none";
	document.getElementById("user_contact").style.display = "none";
}

function user_cart() {
    document.getElementById('user_cart').contentDocument.location.reload(true);
    document.getElementById("user_coures").style.display = "none";
    document.getElementById("user_profile").style.display = "none";
    document.getElementById("user_cart").style.display = "block";
	document.getElementById("user_contact").style.display = "none";

}

function user_contact() {
    document.getElementById("user_coures").style.display = "none";
    document.getElementById("user_profile").style.display = "none";
    document.getElementById("user_cart").style.display = "none";
	document.getElementById("user_contact").style.display = "block";
	
}

</script>






<style type="text/css">
body {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 18px;
    background-position: center;
    /* Center the image */
    background-repeat: no-repeat;
    /* Do not repeat the image */
    background-size: cover;
    /* Resize the background image to cover the entire container */
    background-image: url("https://images.unsplash.com/20/cambridge.JPG?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=730&q=80");
}

.nav .navbar-nav li a {
    color: white !important;
}

a {
    color: #fff;
}

.nav-pills .nav-link.active,
.nav-pills .show>.nav-link {
    color: #000;
    background-color: #fff;
}

html .col-10 {
    overflow: hidden;
}

.profile {
    height: 400px;
}

/* .coures{
             height : 400px;
         }
         .carts{
             height : 400px;
         }
         .timetable{
             height : 500px;
         }
         .logout{
             height : 400px;
         } */

.pages {
    margin: 20px;


}

table,
th,
td {
    border: 1px solid black;
    border-collapse: collapse;
}

.row {
    margin-top: 50px;

}

.sidenav {
    width: 300px;
    position: fixed;
    z-index: 1;
    top: 20px;
    left: 10px;
    background: #eee;
    overflow-x: hidden;
    padding: 8px 0;
    margin-top: 100px;
}

.content {
    background: #eee;

}

.tab {
    /* background: #000;
    opacity: 0.5; */
    background-color: rgba(0, 0, 0, 0.5);
    color: #fff;
    border-radius: 5px;
}



.main {
    /*margin-left: 140px; /* Same width as the sidebar + left position in px */
    font-size: 28px;
    /* Increased text to enable scrolling */
    padding: 0px 10px;
}
</style>