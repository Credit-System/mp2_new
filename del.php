<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body >
    <script>
        alert("Deleted");
    </script>
    
<?php
$Code = $_GET['id'];

        $user = 'root';
        $mydatabase = 'miniproject2';

        $conn = new mysqli("localhost", $user, "", $mydatabase);

        if($AICTE_category == "PE"){
            $sql ="delete from `professionalelective` where Code = '$Code'";
            $result = mysqli_query($conn, $sql);
        }
    
        else if($AICTE_category == "OE"){
            $sql = "delete from `openelective` where Code = '$Code'";
            $result = mysqli_query($conn, $sql);
        }
        else{
            $sql = "delete from `professioncore` where Code = '$Code'";
            $result = mysqli_query($conn, $sql);

        }

        header("location: edit.php");
?>

</body>
</html>
