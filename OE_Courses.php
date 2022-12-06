<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Form</title>
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
    #table{
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
    height: 100%;
    text-align: center;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    }
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
<!-- <form id="the-form" method="GET">
    <input type="submit"/>
    <input name="branchname" id="branchname" type="text" value="Hello">
</form> -->
<div class="nav-bar">
<nav class="navbar navbar-light bg-burlywood">
<span><img src="logo2.png" width="30" height="30" class="d-inline-block align-top" alt=""></span><span style="margin-left: 0.5rem;">Walchand College of Engineering Sangli</span>
</nav>
</div>
<br>
<h3 style="text-align: center;">Open Elective</h3>
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
                $Branch = "IT";
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