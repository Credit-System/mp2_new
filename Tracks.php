<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Credit System</title>
</head>
<style>
    #the-form{
        display: none;
    }
    a{
        text-decoration: none;
        color: black;
    }
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
    .btn{
        text-decoration: none;
        border: solid rgb(0, 0, 0);
        background-color: rgb(255, 241, 212);
        margin-left: 660px;
        margin-right: 660px;
        padding: 6px;
        margin-top: 50%;
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

<body>
<div class="nav-bar">
<nav class="navbar navbar-light bg-burlywood">
<span><img src="logo2.png" width="30" height="30" class="d-inline-block align-top" alt=""></span><span style="margin-left: 0.5rem;">Walchand College of Engineering Sangli</span>
</nav>

</div>
<!-- Showing Core subjects -->
<h2 style="text-align: center;"><?php echo $Branch; ?> Tracks</h2>

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
                        <td>" . $row["Track_name"] . "</td>";
                        ?>

                        <td>
                            <a href='Track_Edit.php?id=<?php echo $row["Track_id"]; ?>'>Edit</a>
                        </td>
                    
                        <?php
                        echo "</tr>";
                        $i = $i + 1;
                        }
                    }
                    // echo "<td><a href='Track_Edit.php?id='".$row['Track_id']; echo "'>Edit</button></td>";
                
                    ?>
                </tr>
                </tbody>
    </table>

    

    <button><a href='Track_Insert.php'>Insert</button></button>

</body>

</html>