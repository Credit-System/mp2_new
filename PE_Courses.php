<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Credit System</title>
    <style>
    #table{
        display: none;
    }
    </style>

</head>

<body style="margin: 50px;">
<!-- Showing Core subjects -->

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
                $branchname = "IT";
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

</html>

<!-- <script type="text/javascript">
    document.getElementById("editbtn").onclick = function () {
        location.href = "/login.php";
    };
</script> -->