<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body >

    
<?php
$Code = $_GET['id'];
$Sem = $_GET['sem'];
$type = $_GET['type'];
$Branch = $_GET['Branch'];


        $user = 'root';
        $mydatabase = 'miniproject2';

        $conn = new mysqli("localhost", $user, "", $mydatabase);

        if($type == "PE"){
            $sql ="delete from `professionalelective` where Code = '$Code'";
            $result = mysqli_query($conn, $sql);
        }
    
        else if($type == "OE"){
            $sql = "delete from `openelective` where Code = '$Code'";
            $result = mysqli_query($conn, $sql);
        }
        else{
            $sql = "delete from `professioncore` where Code = '$Code'";
            $result = mysqli_query($conn, $sql);

        }

        header("location: edit.php?sem=".$Sem."&branch=".$Branch);
?>

</body>
</html>
