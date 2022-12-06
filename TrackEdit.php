<!DOCTYPE html>
<html>
<head>
<title>Credit System</title>
<body>
<form id="form" method="POST" action="">
        <label>Branch:</label>
        <input type="text" name="Branch" id="Branch">

        <br>

        <label>Track Id:</label>
        <input type="number" name="Track_id" id="Track_id">

        <br>

        <label>Track name:</label>
        <input type="text" name="Track_name" id="Track_name">

</form>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $Branch = $_POST['Branch'];
    $Track_id = $_POST['Track_id'] ;
    $Track_name = $_POST['Track_name'];

}

$user = 'root';
$mydatabase = 'miniproject2';

$conn = new mysqli("localhost", $user, "", $mydatabase);

$sql = "insert into `track` (`Branch`, `Track_id`, `Track_name`) values ('$Branch', '$Track_id','$Track_name')";
$result = mysqli_query($conn, $sql);

header("Tracks.php");
?>
</body>
</html>