<?php
	
	$button1 = $POST['button1'];
	$button2 = $POST['button2'];
	$button3 = $POST['button3'];
	$button4 = $POST['button4'];
	$button5 = $POST['button5'];
	
	
	//database connection

	$conn = new mysli('localhost','root','','RobotControlPanel')

	if ($conn->connect_error) {
		die('connection failed : '.$conn->connect_error);

	}else{

		$stmt = $conn->prepare("insert into RobotControlPanel(button1,button2,button3,button4,button5)
			values(?,?,?,?,?)");

		$stmt->bind_parm("iiiii"$button1,$button2,$button3,$button4,$button5);

		$stmt->execute();
		echo "success";

		$stmt->close();
		$conn->close();
	
	}
?>