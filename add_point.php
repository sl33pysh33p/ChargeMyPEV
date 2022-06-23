<?php
$hostname = "";
$username = "";      
$password = "";    
$database = "";    

$link = mysqli_connect($hostname, $username, $password, $database);
if (mysqli_connect_errno()) {
   die("Connect failed: %s\n" + mysqli_connect_error());
   exit();
}

if(isset($_POST['submit'])){
	if (!empty($_POST['name']) && !empty($_POST['loc']) && !empty($_POST['date']) && !empty($_POST['det']) && !empty($_POST['img']) && !empty($_POST['addby'])){
       
        $name = $_POST['name'];
        $loc = $_POST['loc'];
        $date = $_POST['date'];
        $det = $_POST['det'];
        $img = $_POST['img'];
        $addby = $_POST['addby'];
    
		$run = mysqli_query($conn, $query) or die(mysqli_error());

		if($run){
        echo"Point Added to Database";

		}
		
        else{
		echo"Error! Point not added.";
		}
    }
    else {
    echo "Error!";
    }
    
}
?>
