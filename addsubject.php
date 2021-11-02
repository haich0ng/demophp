<?php
try{
	include_once("connection.php");
	array_map("htmlspecialchars", $_POST);
	$stmt = $conn->prepare("INSERT INTO Tblsubjects (SubjectID,Subjectname,Teacher)VALUES (null,:Subjectname,:Teacher)");

	$stmt->bindParam(':Subjectname', $_POST["Subejctname"]);
	$stmt->bindParam(':Teacher', $_POST["Teacher"]);
	$stmt->execute();
}
catch(PDOException $e)
{
	echo"error".$e->
	getMessage();
}
$conn=null;
?>