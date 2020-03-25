<?php
	$ParticipantName = $_POST['ParticipantName'];
	$Profession = $_POST['Profession'];
 	$CompanyName = $_POST['CompanyName'];
 	$CountryName = $_POST['CountryName'];
 	$Contact = $_POST['Contact'];

 	$conn = new mysqli('localhost','root','','test');
 	if($conn->connect_error){
 		die('Connection failed : '.$conn->connect_error);
 	}
 	else{
 		$stmt = $conn->prepare("insert into registrationForm(ParticipantName,Profession,CompanyName,CountryName,Contact) 
 			values(?,?,?,?,?)");
 		$stmt->bind_param("ssssi",$ParticipantName,$Profession,$CompanyName,$CountryName,$Contact);
 		$stmt->execute();
 		echo "Registered Successfully !";
 		$stmt->close();
 		$conn->close();
 	}
?>