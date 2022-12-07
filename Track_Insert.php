<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Credit System</title>
    <link rel="stylesheet" href="FormStyle.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
    
<!------ Include the above in your HEAD tag ---------->
<body>
<div class="container forget-password">
            <div class="row">
                <div class="col-md-12 col-md-offset-4">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="text-center">
                                <!-- <img src="https://i.ibb.co/rshckyB/car-key.png" alt="car-key" border="0"> -->
                                <h2 class="text-center">Course Details</h2>
                                <p>Fill Information about Track</p>
                                <form id="register-form" role="form" autocomplete="off" class="form" method="POST" action="Track_Insert.php">
                                    
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                                            <select id="Branch" name="Branch" class="Padding">
                                            <option selected="true" disabled="disabled">Enter Sem</option>
                                            <option value="CSE">Computer Science</option>
                                            <option value="IT">Information Technology</option>
                                            <option value="mech">Mechanical</option>
                                            <option value="Civil">Civil</option>
                                            <option value="electrical">Electrical</option>
                                            <option value="electronics">Electronics</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="form-group" id="Padding">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                                            <input id="Track_id" name="Track_id" placeholder="Enter Track Id" class="form-control"  type="number">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                                            <input id="Track_name" name="Track_name" placeholder="Enter Track name" class="form-control"  type="text">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <input name="btnForget" class="btn btn-lg btn-primary btn-block btnForget" value="Insert" type="submit">
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $Branch = $_POST['Branch'];
    $Track_id = $_POST['Track_id'] ;
    $Track_name = $_POST['Track_name'];

}

$user = 'root';
$mydatabase = 'miniproject2';

$conn = new mysqli("localhost", $user, "", $mydatabase);

$sql = "insert into `track` (`Branch`, `Track_id`, `Track_name`) values ('$Branch', '$Track_id','$Track_name')";
$result = mysqli_query($conn, $sql);

header("Tracks.php");
?>
</body>
</html>