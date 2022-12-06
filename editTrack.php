!DOCTYPE html>
<html>
<head>
<title>Credit System</title>
<body>
<?php

$id = $_GET['id'];
$user = 'root';
$mydatabase = 'miniproject2';

$conn = new mysqli("localhost", $user, "", $mydatabase);

$result = mysqli_query($conn, "SELECT * FROM `track` WHERE `Track_id`='$id'");

$res = mysqli_fetch_array($result);

?>
<form id="form" method="POST" action="">
        <label>Branch:</label>
        <input type="text" name="Branch" id="Branch" value=<?php echo res['Branch']; ?>>

        <br>

        <label>Track Id:</label>
        <input type="number" name="Track_id" id="Track_id" value=<?php echo res['Track_id']; ?>>

        <br>

        <label>Track name:</label>
        <input type="text" name="Track_name" id="Track_name" value=<?php echo res['Track_name']; ?>>
</form>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $Branch = $_POST['Branch'];
    $Track_id = $_POST['Track_id'];
    $Track_name = $_POST['Track_name'];
}

$sql = "update `track` set `Branch` = '$Branch',  `Track_name` = '$Track_name' where `Track_id` = '$Track_id'";
$result = mysqli_query($conn, $sql);

header("Tracks.php");
?>