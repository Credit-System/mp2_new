<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Form</title>
    <style>
    #the-form{
        display: none;
    }
    </style>

    <script>
    let branchname = prompt("Please enter your name", "Enter Branch");
    // if (branchName != null) {
    //     document.getElementById("branch-name").value =
    //     branchName;
    // }
    document.getElementById("branchname").value = branchname;
</script>
</head>


<body style="margin: 50px;">
<form id="the-form" method="GET">
    <input type="submit"/>
    <input name="branchname" id="branchname" type="text" value="Hello">
</form>
<!-- Showing Core subjects -->
    <table id="table">
        <thead>
            <tr>
                <th>EL NO</th>
                <th>SN</th>
                <th>Code</th>
                <th>Course</th>
            </tr>
        </thead>

        <!-- Data -->
        <tbody>    
            <!-- <tr>Open Elective</tr> -->
            <tr>
                <?php
                include("config.php");
                $Branch = $_GET['branchname'];
                $sql = "SELECT * FROM openelective where Branch = '$Branch' order by EL_NO, Sem";
                $result = $link->query($sql);

                if(!$result){
                    die("Invalid query: ". $link->error);
                }

                else{
                    $i = 1;
                    while($row = $result->fetch_assoc()){
                        echo 
                        "
                        <tr>
                        <td>" . $row["EL_NO"] . "</td>
                        <td>" . $i . "</td>
                        <td>" . $row["Code"] . "</td>
                        <td>" . $row["Course_name"] . "</td>
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

    

    <!-- <td><a href='edit.php'>Edit</button></td> -->

</body>

</html>

<!-- <script type="text/javascript">
    document.getElementById("editbtn").onclick = function () {
        location.href = "/login.php";
    };
</script> -->