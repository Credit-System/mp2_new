<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Credit System</title>
</head>
<!-- <style>
    #the-form{
        display: none;
    }
</style> -->

<body style="margin: 50px;">

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
                $branchname = "IT";
                $id = 1;
                    
                $sql = "SELECT Track_name FROM `track` where Branch = '$branchname' and Track_id = '$id'";
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
                        <td>" . $row["Track_name"] . "</td>";
                        ?>
                        <td>
                                <a href='TrackEdit.php?id=<?php echo $row["Track_id"]; ?>'>Edit</a>
                                </td>
                        <?php
                        echo "
                        </tr>";
                        $i = $i + 1;
                        }
                    }
                    // echo "<td><a href='TrackEdit.php?id='".$row['Track_id']; echo "'>Edit</button></td>";
                
                    ?>
                </tr>
                </tbody>
    </table>

    

    <td><a href='TrackInsert.php'>Insert</button></td>

</body>

</html>