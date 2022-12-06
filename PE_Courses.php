<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style>
    #table{
        display: none;
    }
    </style>

    <script>
        function displaydiv(){
            document.getElementById("table").style.display = "block";
        }
    </script>

</head>

<body style="margin: 50px;">
<!-- Showing Core subjects -->

<form id="the-form" method="GET" action = "">
    <!-- <input type="submit"/> -->
    <button type="submit" value="submit" onclick="displaydiv()" >submit</button>
    <input name="branchname" id="branchname" type="text">
</form>
<div id="table">
<p>hello</p>
    <table>
        <thead>
            <tr>
                <th>El No.</th>
                <th>SN</th>
                <th>Sem</th>
                <th>Code</th>
                <th>Course</th>
                <th>Track</th>
            </tr>
        </thead>

        <!-- Data -->
        <tbody>
                <?php
                include ("config.php");
                $branchname = $_GET['branchname'];
                echo $branchname;
                // echo $branchname;
                    
                // $sql = "SELECT EL_NO, Sem, Code, Course_name, Track FROM `professionalelective` where Branch = '$branchname' ORDER BY EL_NO";
                // $result = $link->query($sql);

                // if(!$result){
                //     die("Invalid query: ". $link->error);
                // }

                // else{
                //     $i=1;
                //     while($row = $result->fetch_assoc()){
                //         echo 
                //         "
                //         <tr>
                //         <td>" . $row["EL_NO"] . "</td>
                //         <td>" . $i . "</td>
                //         <td>" . $row["Sem"] . "</td>
                //         <td>" . $row["Code"] . "</td>
                //         <td>" . $row["Course_name"] . "</td
                //         <td>" . $row["Track"] . "</td>

                //         </tr>";
                //         ?>
                    
                //         <?php
                //         echo "</tr>";
                //         $i = $i + 1;
                //         }
                //     }
                
                ?>
                </tbody>
    </table>
    </div>

    

    <!-- <td><a href='edit.php'>Edit</button></td> -->

    <a href='Tracks.php'>View Tracks</a>
</body>
<script>

    
    // let branchname = prompt("Please enter your name", "Enter Branch");
    // // if (branchName != null) {
    // //     document.getElementById("branch-name").value = branchName;
    // // }
    // document.getElementById("branchname").value = branchname;
</script>
</html>

<!-- <script type="text/javascript">
    document.getElementById("editbtn").onclick = function () {
        location.href = "/login.php";
    };
</script> -->