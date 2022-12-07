<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>credit System</title>
</head>
<body>

<?php

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $Sem = $_POST['Sem'];
        $Branch = $_POST['Branch'];
        $Course_type = $_POST['Course_type'];
        $AICTE_category = $_POST['AICTE_category'];
        $Code = $_POST['Code'];
        $Course_name = $_POST['Course_name'];
        $L = $_POST['L'];
        $T = $_POST['T'];
        $P = $_POST['P'];
        $I = $_POST['I'];
        $Hr = $_POST['Hr'];
        $Cr = $_POST['Cr'];
        $MSE = $_POST['MSE'];
        $ISE = $_POST['ISE'];
        $ESE = $_POST['ESE'];
        $POE = $_POST['POE'];

        

        $user = 'root';
        $mydatabase = 'miniproject2';

        $conn = new mysqli("localhost", $user, "", $mydatabase);

        if($AICTE_category == "PE"){
            $Track = $_POST['AICTE_category'];
            $EL_NO = $_POST['EL_NO'];
            $sql = "update `professionalelective` set `EL_NO`= '$EL_NO', `Sem` = '$Sem', `Branch` = '$Branch', `Course_type` = '$Course_type', `AICTE_category` = '$AICTE_category', `Course_name` = '$Course_name', `Track` = '$Track', `L` = '$L', `T` = '$T', `P` = '$P', `I` = '$I', `Hr` = '$Hr', `Cr` = '$Cr', `MSE` = '$MSE', `ISE` = '$ISE', `ESE` = '$ESE', `POE` = '$POE' where `Code` = '$Code' ";
            $result = mysqli_query($conn, $sql);
        }
    
        else if($AICTE_category == "OE"){
            $EL_NO = $_POST['EL_NO'];
            $sql = "update `openelective` set `EL_NO`= '$EL_NO', `Sem` = '$Sem', `Branch` = '$Branch', `Course_name` = '$Course_name', `L` = '$L', `T` = '$T', `P` = '$P', `I` = '$I', `Hr` = '$Hr', `Cr` = '$Cr', `MSE` = '$MSE', `ISE` = '$ISE', `ESE` = '$ESE', `POE` = '$POE', `Course_type` = '$Course_type' , `AICTE_category` = '$AICTE_category' where `Code` = '$Code' ";
            $result = mysqli_query($conn, $sql);
        }
        else{
            $sql = "update `professioncore` set `Sem` = '$Sem', `Branch` = '$Branch', `Course_type` = '$Course_type' , `AICTE_category` = '$AICTE_category' , `Course_name` = '$Course_name' , `L` = '$L' , `T` = '$T' , `P` = '$P' , `I` = '$I' , `Hr` = '$Hr' , `Cr` = '$Cr' , `MSE` = '$MSE' , `ISE` = '$ISE' , `ESE` = '$ESE', `POE`='$POE' where `Code` = '$Code' ";
            $result = mysqli_query($conn, $sql);

            
        }
        header("location: edit.php?sem=".$Sem."&branch=".$Branch);
        }
?>
</body>
</html>