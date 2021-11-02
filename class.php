<!DOCTYPE html>
<html>
<head>
    
    <title>Add class</title>
    
</head>
<body>
    <form action="addsubject.php" method="post">
        Subject:<input type="text" name="Subjectname"><br>
        Teacher:<input type="text" name="Teacher"><br>
        <input type="submit" value="Add User">
      </form>
      
</body>
</html>
<?php
include_once('connection.php');
$stmt = $conn->prepare("select* FROM TblSubjects");
$stmt-> execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC));
{
echo($row["Subjectname"]." ".$row["Teacher"]."<br>");
}
?>

