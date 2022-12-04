<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Form</title>
</head>
<body style="margin: 50px;">
<!-- Showing Core subjects -->
    <table id="PCTheory">
        <thead>
            <tr>
                <th>Sr No</th>
                <th>Category</th>
                <th>Course Code</th>
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
        <div>

            <tr>Professional Core(Theory)</tr>
            <tr>
                <?php
                $Sem = $_GET['sem'];
                $Branch = $_GET['branch'];
                $type = 'Professional Core(Theory)';
                //db connection
                include('config.php');

                // $sql = 'SELECT * FROM `professioncore` WHERE Sem = "$Sem" AND Branch = "$Branch" AND Course_type = "$type"';
                $sql = "SELECT * FROM `professioncore` WHERE Sem = '$Sem' AND Branch = '$Branch' AND Course_type = '$type'";
                $result = $link->query($sql);

                if(!$result){
                    die("Invalid query: ". $link->error);
                }

                else{
                    $i=1;
                    while($row = $result->fetch_assoc()){
                        echo 
                        "
                        <tr>
                        <td>" . $i . "</td>
                        <td>" . $row["AICTE_category"] . "</td>
                        <td>" . $row["Code"] . "</td>
                        <td>" . $row["Course_name"] . "</td>
                        <td>" . $row["L"] . "</td>
                        <td>" . $row["T"] . "</td>
                        <td>" . $row["P"] . "</td>
                        <td>" . $row["I"] . "</td>
                        <td>" . $row["Hr"] . "</td>
                        <td>" . $row["Cr"] . "</td>
                        <td>" . $row["MSE"] . "</td>
                        <td>" . $row["ISE"] . "</td>
                        <td>" . $row["ESE"] . "</td>
                        <td>" . $row["POE"] . "</td>
                        </tr>";
                    ?>

                    <?php
                    echo "</tr>";
                    $i = $i + 1;
                    }
                }
                ?>
            </tr>
            </tbody>
        </div>
        <div> 
        <table id="PCLab">
        <thead>
            <tr>
                <th>Sr No</th>
                <th>Category</th>
                <th>Course Code</th>
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

            <tbody>    
            <tr>Professional Core(Lab)</tr>
            <tr>
                <?php
                // include("config.php");
                $sql = "SELECT * FROM `professioncore` where Sem = '$Sem'and Branch = '$Branch' and Course_type='Professional Core(Lab)'";
                $result = $link->query($sql);

                if(!$result){
                    die("Invalid query: ". $link->error);
                }

                else{
                    while($row = $result->fetch_assoc()){
                        echo 
                        "
                        <tr>
                        <td>" . $i . "</td>
                        <td>" . $row["AICTE_category"] . "</td>
                        <td>" . $row["Code"] . "</td>
                        <td>" . $row["Course_name"] . "</td>
                        <td>" . $row["L"] . "</td>
                        <td>" . $row["T"] . "</td>
                        <td>" . $row["P"] . "</td>
                        <td>" . $row["I"] . "</td>
                        <td>" . $row["Hr"] . "</td>
                        <td>" . $row["Cr"] . "</td>
                        <td>" . $row["MSE"] . "</td>
                        <td>" . $row["ISE"] . "</td>
                        <td>" . $row["ESE"] . "</td>
                        <td>" . $row["POE"] . "</td>
                        </tr>";
                    ?>
                    
                    <?php
                    echo "</tr>";
                    $i = $i + 1;
                    }
                }
                ?>
            </tr>
            </tbody>
            </div>
    </table>
               
    <?php
    if($Sem > 4){
        echo "
    <table id='PE_table' class='table table-bordered table-striped'>
    <h3>Professional Elective</h3>
    <thead>
        <tr>
            <th>Sr No</th>
            <th>El No</th>
            <th>Course Type</th>
            <th>Track</th>
            <th>Course Code</th>
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
        </tr>
    </thead>
    <tbody>
    <tr>Professional Elective</tr>
            <tr>";
                // include("config.php");
                $sql = "SELECT * FROM `professionalelective` where Sem = '$Sem'and Branch = '$Branch'";
                $result = $link->query($sql);

                if(!$result){
                    die("Invalid query: ". $link->error);
                }

                else{
                    while($row = $result->fetch_assoc()){
                        echo 
                        "
                        <tr>
                        <td>" . $i . "</td>
                        <td>" . $row["EL_NO"] . "</td>
                        <td>" . $row["Course_type"] . "</td>
                        <td>" . $row["Track"] . "</td>
                        <td>" . $row["Code"] . "</td>
                        <td>" . $row["Course_name"] . "</td>
                        <td>" . $row["L"] . "</td>
                        <td>" . $row["T"] . "</td>
                        <td>" . $row["P"] . "</td>
                        <td>" . $row["I"] . "</td>
                        <td>" . $row["Hr"] . "</td>
                        <td>" . $row["Cr"] . "</td>
                        <td>" . $row["MSE"] . "</td>
                        <td>" . $row["ISE"] . "</td>
                        <td>" . $row["ESE"] . "</td>
                        </tr>";
                    echo "</tr>";
                    $i = $i + 1;
                    }
                }
            echo "
            </tr>
            </tbody>
    </tbody>
    </table>

    <h3>Open Elective</h3>
    <table id='OE_table' class='table table-bordered table-striped'>
    <h3>Open Elective</h3>
    <thead>
        <tr>
            <th>Sr No</th>
            <th>El No</th>
            <th>Offering Dept</th>
            <th>Course Code</th>
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
    <tbody>
    <tr>Open Elective</tr>
            <tr>";
                // include("config.php");
                $sql = "SELECT * FROM `openelective` where Sem = '$Sem'and Branch != '$Branch'";
                $result = $link->query($sql);

                if(!$result){
                    die("Invalid query: ". $link->error);
                }

                else{
                    while($row = $result->fetch_assoc()){
                        echo 
                        "
                        <tr>
                        <td>" . $i . "</td>
                        <td>" . $row["EL_NO"] . "</td>
                        <td>" . $row["Branch"] . "</td>
                        <td>" . $row["Code"] . "</td>
                        <td>" . $row["Course_name"] . "</td>
                        <td>" . $row["L"] . "</td>
                        <td>" . $row["T"] . "</td>
                        <td>" . $row["P"] . "</td>
                        <td>" . $row["I"] . "</td>
                        <td>" . $row["Hr"] . "</td>
                        <td>" . $row["Cr"] . "</td>
                        <td>" . $row["MSE"] . "</td>
                        <td>" . $row["ISE"] . "</td>
                        <td>" . $row["ESE"] . "</td>
                        <td>" . $row["POE"] . "</td>
                        </tr>";
                    echo "</tr>";
                    $i = $i + 1;
                    }
                }
            echo "
            </tr>
            </tbody>
    </table>";
    }
    ?>
    <td><a href='edit.php?sem=<?php echo $Sem; ?>&amp;branch=<?php echo $Branch; ?>'>Edit</button></td>

    <!-- <td><a href='edit.php'>Edit</button></td> -->
    
<!-- 
    <td><a href=''>Edit</button></td> -->

</body>
</html>

<!-- <script type="text/javascript">
    document.getElementById("editbtn").onclick = function () {
        location.href = "/login.php";
    };
</script> -->