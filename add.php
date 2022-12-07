<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Credit System</title>
</head>
<body>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $Sem = $_POST['Sem'] ;
    $Branch = $_POST['Branch'];
    $Course_name = $_POST['Course_name'];
    $Course_type = $_POST['Course_type'];
    $AICTE_category = $_POST['AICTE_category'];
    $Code = $_POST['Code'];
    $L = $_POST['L'];
    $T = $_POST['T'];
    $P = $_POST['P'];
    $I = $_POST['I'];
    $Cr = $_POST['Cr'];
    $Hr = $_POST['Hr'];
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
        $sql = "insert into `professionalelective` (`EL_NO`, `Sem`, `Branch`, `Course_type`, `AICTE_category`, `Code`, `Course_name`, `Track`, `L`, `T`, `P`, `I`, `Hr`, `Cr`, `MSE`, `ISE`, `ESE`, `POE`) values ('$EL_NO', '$Sem', '$Branch', '$Course_type', '$AICTE_category', '$Code', '$Course_name', '$Track', '$L', '$T', '$P', '$I', '$Hr', '$Cr', '$MSE', '$ISE', '$ESE', '$POE')";
        $result = mysqli_query($conn, $sql);
    }

    else if($AICTE_category == "OE"){
        $EL_NO = $_POST['EL_NO'];
        $sql = "insert into `openelective` (`EL_NO`, `Sem`, `Branch`, `Code`, `Course_name`, `L`, `T`, `P`, `I`, `Hr`, `Cr`, `MSE`, `ISE`, `ESE`, `POE`, `Course_type`, `AICTE_category`) values ('$EL_NO', '$Sem', '$Branch', '$Code', '$Course_name', '$L', '$T', '$P', '$I', '$Hr', '$Cr', '$MSE', '$ISE', '$ESE', '$POE', '$Course_type', '$AICTE_category')";
        $result = mysqli_query($conn, $sql);
    }

    else{
        $sql = "insert into `professioncore` (`Sem`, `Branch`, `Course_type`, `AICTE_category`, `Code`, `Course_name`, `L`, `T`, `P`, `I`, `Hr`, `Cr`, `MSE`, `ISE`, `ESE`, `POE`) values ('$Sem', '$Branch', '$Course_type', '$AICTE_category', '$Code', '$Course_name', '$L', '$T', '$P', '$I', '$Hr', '$Cr', '$MSE', '$ISE', '$ESE', '$POE')";
        $result = mysqli_query($conn, $sql);
    }
    

    echo '<script>alert("Inserted")</script>';
    header("location: ViewCredits.php?sem=".$Sem."&branch=".$Branch);

}
?>
</body>
</html>