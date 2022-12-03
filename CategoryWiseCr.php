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
    <table id="table">
        <thead>
            <tr>
                <th>AICTE Category</th>
                <th>Sem-1</th>
                <th>Sem-2</th>
                <th>Sem-3</th>
                <th>Sem-4</th>
                <th>Sem-5</th>
                <th>Sem-6</th>
                <th>Sem-7</th>
                <th>Sem-8</th>
                <th>Total Credits</th>
                <th>Total Learning Hours</th>
            </tr>
        </thead>

        <!-- Data -->
        <tbody>
            <tr>
                <?php
                include ("config.php");
                $category = "HS";
                $i = 1;
                $total = 0;
                
                echo "<td>HS</td>";
                //HS
                while($i<9){
                    $sql = "SELECT sum(Cr) as total FROM `professioncore` where AICTE_Category = '$category' and Sem = '$i'";
                    $result = $link->query($sql);
                    $value = mysqli_fetch_assoc($result);
                    if($value['total'] == null){
                        $value['total'] = 0;
                    }

                    // if(!$result){
                    //     die("Invalid query: ". $conn->error);
                    // }
    
                    // else{
                            echo 
                            " <td>" . $value['total'] . "</td>";
                            $total = $total + $value['total'];
                            $i = $i + 1;
                    //         }
                    }
                    echo 
                    " <td>" . $total . "</td>
                    <td>" . $total . "</td>
                    </tr>
                    <tr>"; 
                
                //BS category
                $category = "BS";
                $i=1;
                $total = 0;
                echo "<td>BS</td>";
                while($i<9){
                    $sql = "SELECT sum(Cr) as total FROM `professioncore` where AICTE_Category = '$category' and Sem = '$i'";
                    $result = $link->query($sql);
                    $value = mysqli_fetch_assoc($result);
                    if($value['total'] == null){
                        $value['total'] = 0;
                    }

                    // if(!$result){
                    //     die("Invalid query: ". $conn->error);
                    // }
    
                    // else{
                        echo 
                        " <td>" . $value['total'] . "</td>";
                        $total = $total + $value['total'];
                        $i = $i + 1;
                //         }
                }
                echo 
                " <td>" . $total . "</td>
                 <td>" . $total . "</td>
                </tr>
                <tr>";

                //ES category
                $category = "ES";
                $i=1;
                $total = 0;
                echo "<td>ES</td>";
                while($i<9){
                    $sql = "SELECT sum(Cr) as total FROM `professioncore` where AICTE_Category = '$category' and Sem = '$i'";
                    $result = $link->query($sql);
                    $value = mysqli_fetch_assoc($result);
                    if($value['total'] == null){
                        $value['total'] = 0;
                    }

                    // if(!$result){
                    //     die("Invalid query: ". $conn->error);
                    // }
    
                    // else{
                        echo 
                        " <td>" . $value['total'] . "</td>";
                        $total = $total + $value['total'];
                        $i = $i + 1;
                //         }
                }
                echo 
                " <td>" . $total . "</td>
                <td>" . $total . "</td>
                </tr>
                <tr>";

                //PC category
                $category = "PC";
                $i=1;
                $total = 0;
                echo "<td>PC</td>";
                while($i<9){
                    $sql = "SELECT sum(Cr) as total FROM `professioncore` where AICTE_Category = '$category' and Sem = '$i'";
                    $result = $link->query($sql);
                    $value = mysqli_fetch_assoc($result);
                    if($value['total'] == null){
                        $value['total'] = 0;
                    }

                    // if(!$result){
                    //     die("Invalid query: ". $conn->error);
                    // }
    
                    // else{
                        echo 
                        " <td>" . $value['total'] . "</td>";
                        $total = $total + $value['total'];
                        $i = $i + 1;
                //         }
                }
                echo 
                " <td>" . $total . "</td>
                <td>" . $total . "</td>
                </tr>
                <tr>";

                //PE category
                $category = "PE";
                $i=1;
                $total = 0;
                echo "<td>PE</td>";
                while($i<9){
                    $sql = "SELECT sum(Cr) as total FROM `professionalelective` where AICTE_Category = '$category' and Sem = '$i'";
                    $result = $link->query($sql);
                    $value = mysqli_fetch_assoc($result);
                    if($value['total'] == null){
                        $value['total'] = 0;
                    }

                    // if(!$result){
                    //     die("Invalid query: ". $conn->error);
                    // }
    
                    // else{
                        echo 
                        " <td>" . $value['total'] . "</td>";
                        $total = $total + $value['total'];
                        $i = $i + 1;
                //         }
                }
                echo 
                " <td>" . $total . "</td>
                <td>" . $total . "</td>
                </tr>
                <tr>";

                //OE category
                $category = "OE";
                $i=1;
                $total = 0;
                echo "<td>OE</td>";
                while($i<9){
                    $sql = "SELECT sum(Cr) as total FROM `openelective` where Sem = '$i'";
                    $result = $link->query($sql);
                    $value = mysqli_fetch_assoc($result);
                    if($value['total'] == null){
                        $value['total'] = 0;
                    }

                    // if(!$result){
                    //     die("Invalid query: ". $conn->error);
                    // }
    
                    // else{
                        echo 
                        " <td>" . $value['total'] . "</td>";
                        $total = $total + $value['total'];
                        $i = $i + 1;
                //         }
                }
                echo 
                " <td>" . $total . "</td>
                <td>" . $total . "</td>
                </tr>
                <tr>";

                //PR category
                $category = "PR";
                $i=1;
                $total = 0;
                echo "<td>PR</td>";
                while($i<9){
                    $sql = "SELECT sum(Cr) as total FROM `professioncore` where AICTE_Category = '$category' and Sem = '$i'";
                    $result = $link->query($sql);
                    $value = mysqli_fetch_assoc($result);
                    if($value['total'] == null){
                        $value['total'] = 0;
                    }

                    // if(!$result){
                    //     die("Invalid query: ". $conn->error);
                    // }
    
                    // else{
                        echo 
                        " <td>" . $value['total'] . "</td>";
                        $total = $total + $value['total'];
                        $i = $i + 1;
                //         }
                }
                echo 
                " <td>" . $total . "</td>
                <td>" . $total . "</td>
                </tr>
                <tr>";

                //MC category
                $category = "MC";
                $i=1;
                $total = 0;
                echo "<td>MC</td>";
                while($i<9){
                    $sql = "SELECT sum(Cr) as total FROM `professioncore` where AICTE_Category = '$category' and Sem = '$i'";
                    $result = $link->query($sql);
                    $value = mysqli_fetch_assoc($result);
                    if($value['total'] == null){
                        $value['total'] = 0;
                    }

                    // if(!$result){
                    //     die("Invalid query: ". $conn->error);
                    // }
    
                    // else{
                        echo 
                        " <td>" . $value['total'] . "</td>";
                        $total = $total + $value['total'];
                        $i = $i + 1;
                //         }
                }
                echo 
                " <td>" . $total . "</td>
                <td>" . $total . "</td>
                </tr>
                <tr>";

                ?>
                </tbody>
    </table>

    

    <!-- <td><a href='edit.php'>Edit</button></td> -->

</body>
</html>