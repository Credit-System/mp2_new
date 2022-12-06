<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Form</title>
</head>
<!-- <style>
    #the-form{
        display: none;
    }
</style> -->

<body style="margin: 50px;">
<form id="the-form" method="GET">
    <input type="submit"/>
    <input name="branchname" id="branchname" type="text" hidden value="Hello">
</form>
<!-- Showing Tracks subjects -->
    <table id="table">
        <thead>
            <tr>
                <th>SN</th>
                <th>Track</th>
            </tr>
        </thead>

        <!-- Data -->
        <tbody>
            
        <tr>
                <?php
                include ("config.php");
                $branchname = $_GET['branchname'];
                    
                $sql = "SELECT Track_name FROM `track` where Branch = '$branchname'";
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
                        <td>" . $row["Track_name"] . "</td>
                        </tr>";
                        ?>
                    
                        <?php
                        echo "</tr>";
                        $i = $i + 1;
                        }
                    }
                    echo "    <td><a href='TrackEdit.php?id='.$row['Track_id']>Edit</button></td>
                    "
                
                    ?>
                </tr>
                </tbody>
    </table>

    

    <td><a href='TrackEdit.php'>Insert</button></td>

</body>
<script>
    let branchname = prompt("Please enter your name", "Enter Branch");
    // if (branchName != null) {
    //     document.getElementById("branch-name").value =
    //     branchName;
    // }
    document.getElementById("branchname").value = branchname;
</script>
</html>