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
                <th>Course Type</th>
                <th>Sem-1</th>
                <th>Sem-2</th>
                <th>Sem-3</th>
                <th>Sem-4</th>
                <th>Sem-5</th>
                <th>Sem-6</th>
                <th>Sem-7</th>
                <th>Sem-8</th>
                <th>Total Courses</th>
            </tr>
        </thead>

        <!-- Data -->
        <tbody>
            <tr>
                <?php
                include ("config.php");
                $type = "Professional Core(Theory)";
                $i = 1;
                $total = 0;
                
                echo "<td>Professional Core(Theory)</td>";
                //Professional Core(Theory)
                while($i<9){
                    $sql = "SELECT count(*) as total FROM `professioncore` where Course_type = '$type' and Sem = '$i'";
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
                    </tr>
                    <tr>"; 
                
                //Professional Core(Lab) type
                $type = "Professional Core(Lab)";
                $i=1;
                $total = 0;
                echo "<td>Professional Core(Lab)</td>";
                while($i<9){
                    $sql = "SELECT count(*) as total FROM `professioncore` where Course_type = '$type' and Sem = '$i'";
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
                </tr>
                <tr>";

                //Professional Elective(Theory) type
                $type = "Professional Elective(Theory)";
                $i=1;
                $total = 0;
                echo "<td>Professional Elective(Theory)</td>";
                while($i<9){
                    $sql = "SELECT count(*) as total FROM `professionalelective` where Course_type = '$type' and Sem = '$i'";
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
                </tr>
                <tr>";

                //Professional Elective(Lab) type
                $type = "Professional Elective(Lab)";
                $i=1;
                $total = 0;
                echo "<td>Professional Elective(Lab)</td>";
                while($i<9){
                    $sql = "SELECT count(*) as total FROM `professionalelective` where Course_type = '$type' and Sem = '$i'";
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
                </tr>
                <tr>";

                //Open Elective type
                $type = "Open Elective";
                $i=1;
                $total = 0;
                echo "<td>Open Elective</td>";
                while($i<9){
                    $sql = "SELECT count(*) as total FROM `openelective` where Sem ='$i'";
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
                </tr>
                <tr>";

                //AICTE Mandatory Course type
                $type = "AICTE Mandatory Course";
                $i=1;
                $total = 0;
                echo "<td>AICTE Mandatory Course</td>";
                while($i<9){
                    $sql = "SELECT count(*) as total FROM `professioncore` where Course_type = '$type' and Sem = '$i'";
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
                </tr>
                <tr>";

                //VAPC type
                $type = "VAPC";
                $i=1;
                $total = 0;
                echo "<td>VAPC</td>";
                while($i<9){
                    $sql = "SELECT count(*) as total FROM `professioncore` where Course_type = '$type' and Sem = '$i'";
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
                </tr>
                <tr>";

                //VALC type
                $type = "VALC";
                $i=1;
                $total = 0;
                echo "<td>VALC</td>";
                while($i<9){
                    $sql = "SELECT count(*) as total FROM `professioncore` where Course_type = '$type' and Sem = '$i'";
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
                </tr>
                <tr>";

                ?>
                </tbody>
    </table>

    

    <!-- <td><a href='edit.php'>Edit</button></td> -->

</body>
</html>