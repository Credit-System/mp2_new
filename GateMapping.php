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
<!-- Showing POE subjects -->
    <table id="table">
        <thead>
            <tr>
                <th>SN</th>
                <th>Code</th>
                <th>Course</th>
                <th>Gate Topic</th>
            </tr>
        </thead>

        <!-- Data -->
        <tbody>
            <tr>
                <?php
                include ("config.php");
                $sql = "SELECT Code, Course_name, POE FROM professioncore where POE = 'POE'";
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
                        <td>" . $row["Code"] . "</td>
                        <td>" . $row["Course_name"] . "</td>
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
    </table>

    

    <!-- <td><a href='edit.php'>Edit</button></td> -->

</body>
</html>

<!-- <script type="text/javascript">
    document.getElementById("editbtn").onclick = function () {
        location.href = "/login.php";
    };
</script> -->