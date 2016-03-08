<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="stylesheets/signup_style.css">
	<link rel="stylesheet" type="text/css" href="stylesheets/general_style.css">
    <link rel="shortcut icon" href="images/general/favicon.ico" />
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="scripts/pictureuploader.js"></script>
	<script src="scripts/signup_script.js"></script>
	<script src="scripts/modal.js"></script>
	<script src="scripts/general.js"></script>
	<script>
	$(document).ready(function(){
		$("#modal_trigger").leanModal({top : 200, overlay : 0.6, closeButton: ".modal_close" });
	});

	</script>
	<title>SignUp</title>
</head>
<body onresize="resizeInput()">
    <div class="row" id = "heading" style = "padding:0px;margin:0px;">
      <div class="col8" id="title_row">
          <a href = "home_page.html">
            <h1 style = "color:white;text-align:center;font-size:10vmin;margin:10px">MyTreat.com</h1>
          </a>
        </div>
        <div class="col4">
          <br>
          <div class="row">
            <div class="col6">
              <form id="login" action="#modal">
                <a id="modal_trigger" href="#modal"><span class="login_button">Log In</span></a>
              </form>
            </div>
            <div class="col6">
              <form  id="signup" action="#">
                <a href="signup_page.html"><span class="login_button">Sign Up</span></a>
              </form>
            </div>
          </div>
          <div class="row">
            <div id="tfheader">
              <form id="tfnewsearch" method="get" action="search_result_page.html">
                <input id="search1" type="text" class="tftextinput" name="q" size="21" maxlength="120"><input type="submit" value="search" class="tfbutton">
              </form>
              <div class="tfclear"></div>
            </div>
          </div>
      </div>
    </div>

<?php
    //database login info
    $_servername = "localhost";
    $_dbusr = "mt_developer";
    $_dbpsw = "mytreat";
    //establish connection
    $conn= mysql_connect($_servername,$_dbusr,$_dbpsw);
    if(!$conn){
        die('Could not connect: ' .mysql_error());
    }
    echo '<script>alert(\'Connected Successfully\')</script>';
    //choose database
    $db = mysql_select_db("mytreat",$conn);
    if(!$db){
        die("Database not found".mysql_error());
    }


    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $describe = $_POST['describe'];
    $hobbies = $_POST['hobbies'];
    $occupataion = $_POST['occupation'];
    $email = $_POST['email'];
    $psw = $_POST['psw'];
    $pic_url = $_POST['pic_url'];

    echo $f_name;
    echo $l_name;
    echo $gender;
    echo $dob;
    echo $describe;
    echo $hobbies;
    echo $occupataion;
    echo $email;
    echo $psw;
    echo $pic_url;




    //$sql = "insert into users(f_name,l_name,DOB,age,gender,occupation,hobbies,description,email,psw,pic_url)
    //values($f_name,$l_name)";

?>

    <h1>Thank you for signing up</h1>

    <!-- footer -->
    	<br><br>
        <div class="row footer">
            <div class="row">
                <div class="col1 footer">
                    <a class="iconlink" href="https://www.instagram.com" >
                      <img src="images/general/inst.png" width="30" alt="Image Not Found">
                    </a>
                </div>
                <div class="col1 footer">
                    <a class="iconlink" href="https://www.facebook.com">
                      <img src="images/general/facebook.png" width="30" alt="Image Not Found">
                    </a>
                </div>
                <div class="col1 footer">
                    <a class="iconlink" href="https://github.com/COEN276Group/MyTreat/tree/dev">
                      <img src="images/general/github.png" width="30" alt="Image Not Found">
                    </a>
                </div>

                <div class ="col6" id="connect">
                    <p id="footer_title">MyTreat.com</p>
                </div>
            </div>
        </div>


          <!--modal stuff-->

    	<div id="modal" class="popupContainer" style="display:none;">
    			<header class="popupHeader">
    				<span class="header_title">Login</span>
    				<span class="modal_close"><i class="fa fa-times"></i></span>
    			</header>

    			<section class="popupBody">
    				<!-- Username & Password Login form -->
    				<div class="user_login">
    					<form>
    						<label>Email / Username</label>
    						<input type="text" />
    						<br>

    						<label>Password</label>
    						<input type="password" />
    						<br>
    						<div class="action_btns">
    							<div class=""><a href="myprofile_page.html" class="btn btn_theme">Login</a></div>
    						</div>
    					</form>
    					<br>
    					<a href="signup_page.html" class = "new_user">New User? Click Here to Register</a>
    				</div>
    			</section>
    	</div>
    </body>
