<!DOCTYPE html>
<html>
<head>
	<title>MyTreat</title>
	<link rel = 'stylesheet' type = 'text/css' href = 'stylesheets/general_style.css'>
	<link rel = 'stylesheet' type = 'text/css' href = "stylesheets/home_style.css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<meta charset="utf-8">
    <link rel="shortcut icon" href="images/general/favicon.ico" />
    <script src="scripts/jQuery.js"></script>
    <script src="scripts/flip.js"></script>
	<script src="scripts/modal.js"></script>
	<script src="scripts/home.js"></script>
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
                <input type="text" id="search1" class="tftextinput" placeholder="Search Events" name="q" size="21" maxlength="120"><input type="submit" value="search" class="tfbutton">
              </form>
              <div class="tfclear"></div>
            </div>
          </div>
      </div>
    </div>

	<br/>


	<div class = "row">
		<div class = "col1"></div>
		<div class = "col10" style = "padding:10px 20px">
			<img src="images/general/home_theme.jpg" alt="not found" style = "width:100em">
		</div>
		<div class = "col1"></div>

	</div>
	<div class = "row">
		<div class = "col1"></div>
		<div class = "col10 sec">

<?php

	//database login info
	$_servername = "localhost";
	$_dbusr = "root";
	$_dbpsw = "Lyq117915";
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
	$categories = array("Dating","Food&Drink","Entertainment","Outdoor&Sports");

	foreach($categories as $cat){
		echo<<<end
		<!--Section Code Starts Here-->
		<div id = "date" class = "row">
			<div class = "col1">
			</div>
			<div class = "col10 sec">
				<div class = "row">
					<div class = "col10">
						<a href = "categories_page.html"><h2>$cat</h2></a>
					</div>
					<div class = "col2">
						<a href="categories_page.html"><h3><span class="more_button">More</span></h3></a>
					</div>
				</div>
				<br>

				<div class = "row">
end;


		$sql = "select u.f_name,u.l_name,e.title,u.stars,e.short_desc from mytreat.users u,mytreat.events e where u.id = e.organizer_id and e.category = '".$cat."' limit 4";
		$result = mysql_query($sql,$conn);

		while($event1 = mysql_fetch_array($result)){
			echo<<<end


							<div class = "category">
								<div class = "card">
									<div class = "front">
										<div class = "event">
											<img src = "images/content/dating1.png" alt="not found"><br>
											<span class = "event_title">$event1[2]</span>
										</div>
									</div>
									<div class = "back">
										<div class = "event">
											<div class = "row">
												<div class = "organizer_info">
													<div class = "col1"></div>
													<div class = "col2">
														<a href="profile_page.html"><img class = "homeevent" src="images/profile_pics/profile1.png" alt="not found"></a>
													</div>
													<div class = "col2"></div>
													<div class = "col7">
														<div class = "row">$event1[0].$event1[1]</div>
														<div class = "row">*****</div>
													</div>
												</div>
											</div>
											<hr>
											<p>
												$event1[4]
											</p>
											<div class = "row">
												<div class = "col1"></div>
												<div class = "col2">
													<form action = "event_page.html">
														<input type = "submit" value = "More Info">
													</form>
												</div>
												<div class = "col5"></div>
												<div class = "col3">
													<input class = "want_in_button" type = "button" value = "I Want In!">
												</div>
											</div>

										</div>
									</div>
								</div>
							</div>

end;

		}
		echo<<<end
		</div>
		</div>
		<br>

		</div>
		<hr>
end;

	}
	mysql_close($conn);
?>



</div>
<div class="col1"></div>
</div>
</body>
</html>
