<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
</html>
<select name = "student">
<?php
include_once("connection.php");
$stmt = $conn->prepare("SELECT * FROM Tblusers WHERE Role = 0 ORDER BY Surname ASC");
$stmt -> execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
	echo("<option value=".$row["UserID"].">".$row["Surname"].", ".$row["Forename"]."</option>");
}
?>
</select>