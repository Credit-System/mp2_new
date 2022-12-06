<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Form</title>
</head>
<body>
    <?php

    $Code = "5PE302";
    $type = "PE";
    // echo "$Code";
    // echo "$type";
    $user = 'root';
    $mydatabase = 'miniproject2';

    $conn = new mysqli("localhost", $user, "", $mydatabase);

    if($type == "PE"){
        $result = mysqli_query($conn, "SELECT * FROM `professionalelective` WHERE `Code`='$Code'");
    }
    else if($type == "OE"){
        $result = mysqli_query($conn, "SELECT * FROM `openelective` WHERE `Code`='$Code'");
    }
    else{
            $result = mysqli_query($conn, "SELECT * FROM `professioncore` WHERE `Code`='$Code'");
    }
    
    while($res = mysqli_fetch_array($result))
    {
        $name = $res['Sem'];
        ?>
<form method="post" action="Change.php">
<table id="Credits">
    <thead>
        <tr>
            <th>Sem</th>
            <th id = "ElNo" style="display:none;">EL NO</th>
            <th>Branch</th>
            <th>Course Type</th>
            <th>AICTE Category</th>
            <th id = "track" style="display:none;">Track</th>
            <th>Code</th>
            <th>Course Name</th>
            <th>L</th>
            <th>T</th>
            <th>P</th>
            <th>I</th>
            <th>Hr</th>
            <th>Cr</th>
            <th>MSE/LA1</th>
            <th>ISE/LA2</th>
            <th>ESE</th>
            <th>POE</th>

        </tr>
    </thead>

    <!-- Data -->
    <tbody>
        <tr>
            <td>
                <input type="number" name="Sem" id="Sem" value=<?php echo $res['Sem'];?>>
            </td>
            <td>
                <input type="number" name="Branch" id="Branch" value=<?php echo $res['Branch'];?>>
            </td>
            <td>
                <select id="Course_type" name="Course_type" value=<?php echo $res['Course_type']; ?>>
                    <option value="Professional Core(Theory)">Professional Core(Theory)</option>
                    <option value="Professional Core(Lab)">Professional Core(Theory)</option>
                    <option value="Professional Elective(Theory)">Professional Elective(Theory)</option>
                    <option value="Professional Elective(Lab)">Professional Elective(Lab)</option>
                    <option value="Open Elective">Open Elective</option>
                    <option value="AICTE Mandatory Course">AICTE Mandatory Course</option>
                    <option value="VAPC">VAPC</option>
                    <option value="VALC">VALC</option>
                </select>
            </td>
            <td>
                <select id="AICTE_category" name="AICTE_category" value=<?php echo $res['AICTE_category']; ?>>
                    <option value="BS">BS</option>
                    <option value="HS">HS</option>
                    <option value="ES">ES</option>
                    <option value="PC">PC</option>
                    <option value="PE">PE</option>
                    <option value="OE">OE</option>
                    <option value="PR">PR</option>
                    <option value="MC">MC</option>
                </select>
            </td>
            <td>
                <input type="text" name="Code" id="Code" value=<?php echo $res['Code']; ?>>
            </td>
            <td>
                <input type="text" name="Course_name" id="Course_name" value=<?php echo $res['Course_name']; ?>>
            </td>
            <td>
                <input type="number" name="L" id="L" value=<?php echo $res['L']; ?>>
            </td>
            <td>
                <input type="number" name="T" id="T" value=<?php echo $res['T']; ?>>
            </td>
            <td>
                <input type="number" name="P" id="P" value=<?php echo $res['P']; ?>>
            </td>
            <td>
                <input type="number" name="I" id="I" value=<?php echo $res['I']; ?>>
            </td>
            <td>
                <input type="number" name="Hr" id="Hr" value=<?php echo $res['Hr']; ?>>
            </td>
            <td>
                <input type="number" name="Cr" id="Cr" value=<?php echo $res['Cr']; ?>>
            </td>
            <td>
                <input type="number" name="MSE" id="MSE" value=<?php echo $res['MSE']; ?>>
            </td>
            <td>
                <input type="number" name="ISE" id="ISE" value=<?php echo $res['ISE']; ?>>
            </td>
            <td>
                <input type="number" name="ESE" id="ESE" value=<?php echo $res['ESE']; ?>>
            </td>
            <td>
                <select id="POE" name="POE" value=<?php echo res['POE']; ?>>
                    <option value="POE">Yes</option>
                    <option value="">No</option>
                </select>
            </td>
        </tr> 
        <?php
    }
    ?>    
</table>
<input type="submit" value="submit">
<input type="reset" value="reset">
</form>

<?php

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $Sem = $_POST['Sem'];
        $Branch = $_POST['Branch'];
        $Course_Name = $_POST['Course_name'];
        $Course_Type = $_POST['Course_type'];
        $AICTE_Category = $_POST['AICTE_category'];
        $Code = $_POST['Code'];
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
            $sql = "update `openelective` set `EL_NO`= '$EL_NO', `Sem` = '$Sem', `Branch` = '$Branch', `Course_name` = '$Course_name', `L` = '$L', `T` = '$T', `P` = '$P', `I` = '$I', `Hr` = '$Hr', `Cr` = '$Cr', `MSE` = '$MSE', `ISE` = '$ISE', `ESE` = '$ESE', `POE` = '$POE' where `Code` = '$Code' ";
            $result = mysqli_query($conn, $sql);
        }
        else{
            $sql = "update `professioncore` set `Sem` = '$Sem', `Branch` = '$Branch', `Course_type` = '$Course_type' , `AICTE_category` = '$AICTE_category' , `Course_name` = '$Course_name' , `L` = '$L' , `T` = '$T' , `P` = '$P' , `I` = '$I' , `Hr` = '$Hr' , `Cr` = '$Cr' , `MSE` = '$MSE' , `ISE` = '$ISE' , `ESE` = '$ESE', `POE`='$POE' where `Code` = '$Code' ";
            $result = mysqli_query($conn, $sql);

            
        }
        header("location: edit.php");
        }
?>
</body>
</html>