<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

<?php
    $category = $_POST['category'];
    $category_query = "";
    switch($category){
        case "Dating":
            echo "dating";
            break;
        case "Food&Drink":
            echo "food";
            break;
        case "Entertainment":
            echo "enter";
            break;
        case "Outdoor&Sports":
            echo "outdoor";
            break;
    }
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
    $sql = "select * from events where category = \"$category_query\" ";
    $result = mysql_query($sql,$conn);
    while($row= mysql_fetch_array($result)){
        $e_id = $row[];
        $u_id = $row[];
        $short = $row[];
        $long = $row[];
        $time = $row[];
        $address = $row[];
        
        echo<<<end

end
?>









    </body>
</html>
