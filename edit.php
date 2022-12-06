<!DOCTYPE html>
<html>
<head>
<title>Credit System</title>
<link rel="stylesheet" href="style.css">

<style>
    .nav-bar{
        width: 100%;
        background-color: rgb(255, 241, 212);
        padding: 1%;
        /* text-align: center; */
        /* padding-bottom: 0.8%; */
        color: black;
        font-size: large;
        text-decoration: none;
    }
    a{
        text-decoration: none;
        color: black;
    }
    #btn{
        text-decoration: none;
        border: solid rgb(0, 0, 0);
        background-color: rgb(255, 241, 212);
        /* margin-left: 660px;
        margin-right: 660px;
        padding: 6px;
        margin-top: 50%; */
        justify-content: center;
        display: flex;
        margin-top: 25px;
        color: black;
    }
    table{
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
    text-align: center;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    }
</style>
</head>
<body>
<div class="nav-bar">
<nav class="navbar navbar-light bg-burlywood">
<span><img src="logo2.png" width="30" height="30" class="d-inline-block align-top" alt=""></span><span style="margin-left: 0.5rem;">Walchand College of Engineering Sangli</span>
</nav>
<br>
</div>
    <div>
        <?php
        // include ("Form.php");
        ?>
    </div>

    <div>
		<table >
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
            
            <?php
                $Sem = $_GET['sem'];
                $Branch = $_GET['branch'];
                $type = 'Professional Core(Theory)';

                //db connection
                include('config.php');

                $sql = "SELECT * FROM `professioncore` where Sem = '$Sem' and Branch = '$Branch'";
                $result = $link->query($sql);

                if(!$result){
                    die("No result found". $link->error);
                }

                else{
                    $i=1;
                    while($row = $result->fetch_assoc()){
                        ?>
                        <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $row["AICTE_category"]; ?></td>
                        <td><?php echo $row["Code"]; ?></td>
                        <td><?php echo $row["Course_name"]; ?></td>
                        <td><?php echo $row["L"]; ?></td>
                        <td><?php echo $row["T"]; ?></td>
                        <td><?php echo $row["P"]; ?></td>
                        <td><?php echo $row["I"]; ?></td>
                        <td><?php echo $row["Hr"]; ?></td>
                        <td><?php echo $row["Cr"]; ?></td>
                        <td><?php echo $row["MSE"]; ?></td>
                        <td><?php echo $row["ISE"]; ?></td>
                        <td><?php echo $row["ESE"]; ?></td>
                        <td><?php echo $row["POE"]; ?></td>
                        <td>
                                <a href="Form2.php?id=<?php echo $row['Code']; ?>&type=<?php echo $row['AICTE_category']; ?>">Change</a>

								<a href="del.php?id=<?php echo $row['Code']; ?>&sem=<?php echo $Sem; ?>&type=<?php echo $type; ?>">Delete</a>
						</td>
                        </tr>
                    <?php
                    $i = $i + 1;
                    }
                }
                ?>
			</tbody>
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
            <th>POE</th>
        </tr>
    </thead>
    <tbody>
    <tr>Professional Elective</tr>
            <tr>";
                // include("config.php");
                $type = "PE";
                $sql = "SELECT * FROM professionalelective where Sem = '$Sem'and Branch = '$Branch'";
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
                        <td>" . $row["ESE"] . "</td>";
                        ?>
                        <td>
                                <a href="Form.php?id=<?php echo $row['Code']; ?>&type=<?php echo $type; ?>">Change</a>
								<a href="del.php?id=<?php echo $row['Code']; ?>&type=<?php echo $type; ?>">Delete</a>
						</td>
                        <?php
                    
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
                $type = "OE";
                $sql = "SELECT * FROM openelective where Sem = '$Sem'and Branch != '$Branch'";
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
                        <td>" . $row["POE"] . "</td>";
                        ?>
                        <td>
                                <a href="Form2.php?id=<?php echo $row['Code']; ?>&type=<?php echo $type; ?>">Change</a>
                                
								<a href="del.php?id=<?php echo $row['Code']; ?>&type=<?php echo $type; ?>">Delete</a>
						</td>
                        <?php
                        echo "
                        </tr>";

                    $i = $i + 1;
                    }
                }
            echo "
            </tr>
            </tbody>
    </table>";
            }
            ?>
	</div>
    <button id="btn"><a href="Form1.php" style="decoration: none;">Insert</a></button>
</body>

</html>