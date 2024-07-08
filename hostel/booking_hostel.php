<?php include('includes/db-connect.php'); ?>

<?php
session_start();

//code for registration
if (isset($_POST['submit'])) {
	$roomno = $_POST['room'];
	// $seater = $_POST['seater'];
	// $feespm = $_POST['fpm'];
	$foodstatus = $_POST['foodstatus'];
	$stayfrom = $_POST['stayfrom'];
	$duration = $_POST['duration'];


	$regno = $_POST['regno'];
	$name = $_POST['name'];
	$emailid = $_POST['email'];
	
	$gender = $_POST['gender'];
	$course = $_POST['course'];
	$address = $_POST['address'];
	$contactno = $_POST['contact'];


	$gurname = $_POST['gurname'];
	$gurrelation=$_POST['grelation'];
	$gurcntno = $_POST['gurcontact'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$pincode = $_POST['pincode'];


	$query = "insert into  registration(roomno,foodstatus,stayfrom,duration,course,regno,name,gender,contactno,emailid,guardianName,guardianRelation,guardianContactno,corresAddress,corresCIty,corresState,corresPincode) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
	// echo "$query";

	$stmt = $mysqli->prepare($query);
	$rc = $stmt->bind_param('iisisississsisssi', $roomno,  $foodstatus, $stayfrom, $duration, $course, $regno, $name, $gender, $contactno, $emailid, $gurname, $gurrelation, $gurcntno, $address, $city, $state, $pincode);
	$stmt->execute();
    echo "$rc";
	echo "<script>alert('Student Successfully registered!');</script>";
}
// echo "ok";
?>

