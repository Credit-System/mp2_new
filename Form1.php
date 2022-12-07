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
<script>
function admSelectCheck(nameSelect) {
    if (nameSelect) {
        peOptionValue = document.getElementById("peOption").value;
        OEOptionValue = document.getElementById("oeOption").value;
        if (peOptionValue == nameSelect.value) {
        document.getElementById("admDivCheck").style.display = "block";
        document.getElementById("OEcheck").style.display = "block";
        }
        else if(OEOptionValue == nameSelect.value) {
        document.getElementById("admDivCheck").style.display = "none";
        document.getElementById("OEcheck").style.display = "block";
        }
        else{
        document.getElementById("admDivCheck").style.display = "none";
        document.getElementById("OEcheck").style.display = "none";

        }
    }
    else {
        document.getElementById("admDivCheck").style.display = "none";
        document.getElementById("OEcheck").style.display = "none";
    }
}
</script>
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
                                <p>Please Fill the Information as per curriculum</p>
                                <form id="register-form" role="form" autocomplete="off" class="form" method="POST" action="add.php">
                                    
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                                            <select id="Sem" name="Sem" class="Padding">
                                            <option selected="true" disabled="disabled">Enter Sem</option>
                                            <option value="1">Sem 1</option>
                                            <option value="2">Sem 2</option>
                                            <option value="3">Sem 3</option>
                                            <option value="4">Sem 4</option>
                                            <option value="5">Sem 5</option>
                                            <option value="6">Sem 6</option>
                                            <option value="7">Sem 7</option>
                                            <option value="8">Sem 8</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                                            <select id="Branch" name="Branch" class="Padding">
                                            <option selected="true" disabled="disabled">Enter Form</option>
                                            <option value="CSE">Computer Science</option>
                                            <option value="IT">Information Technology</option>
                                            <option value="mech">Mechanical</option>
                                            <option value="Civil">Civil</option>
                                            <option value="electrical">Electrical</option>
                                            <option value="electronics">Electronics</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                                            <select id="Course_type" name="Course_type" class="Padding">
                                            <option selected="true" disabled="disabled">Enter Course Type</option>
                                            <option value="Professional Core(Theory)">Professional Core(Theory)</option>
                                            <option value="Professional Core(Lab)">Professional Core(LAb)</option>
                                            <option value="Professional Elective(Theory)">Professional Elective(Theory)</option>
                                            <option value="Professional Elective(Lab)">Professional Elective(Lab)</option>
                                            <option value="Open Elective">Open Elective</option>
                                            <option value="AICTE Mandatory Course">AICTE Mandatory Course</option>
                                            <option value="VAPC">VAPC</option>
                                            <option value="VALC">VALC</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                                            <select id="AICTE_category" name="AICTE_category" class="Padding" onchange="admSelectCheck(this);">
                                            <option selected="true" disabled="disabled">Enter AICTE Category</option>
                                            <option value="BS">BS</option>
                                            <option value="HS">HS</option>
                                            <option value="ES">ES</option>
                                            <option value="PC">PC</option>
                                            <option value="PE" id="peOption">PE</option>
                                            <option value="OE" id="oeOption">OE</option>
                                            <option value="PR">PR</option>
                                            <option value="MC">MC</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="form-group" id="admDivCheck" style="display:none;">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                                            <select id="Track" name="Track" class="Padding">
                                            <option selected="true" disabled="disabled">Select Track</option>
                                            <?php
                                                $Branch = "IT";
                                                include ('config.php');
                                                $sql = "SELECT Track_name from `track` where Branch = '$Branch'";
                                                $result = $link->query($sql);
                                                while($row = $result->fetch_assoc()){
                                                    ?>
                                                    <option value =<?php echo $row['Track_name'];?>><?php echo $row['Track_name'];?></option>" ;
                                                    <?php
                                                }
                                                ?>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="form-group" id="OEcheck" style="display:none;">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                                            <input id="EL_NO" name="EL_NO" placeholder="Enter Elective No" class="form-control"  type="number">
                                        </div>
                                    </div>
                                    <div class="form-group" id="Padding">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                                            <input id="code" name="Code" placeholder="Enter Course Code" class="form-control"  type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                                            <input id="Course_name" name="Course_name" placeholder="Enter Course name" class="form-control"  type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                                            <input id="L" name="L" placeholder="No. of Lecture required" class="form-control"  type="number">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                                            <input id="T" name="T" placeholder="No. of Tutorials required" class="form-control"  type="number">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                                            <input id="P" name="P" placeholder="No. of Practicals required" class="form-control"  type="number">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                                            <input id="I" name="I" placeholder="No. of interactive ecture required" class="form-control"  type="number">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                                            <input id="Hr" name="Hr" placeholder="No. of hour required" class="form-control"  type="number">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                                            <input id="Cr" name="Cr" placeholder="No. of credits required" class="form-control"  type="number">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                                            <input id="MSE" name="MSE" placeholder="MSE mark" class="form-control"  type="number">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                                            <input id="ISE" name="ISE" placeholder="ISE mark" class="form-control"  type="number">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                                            <input id="ESE" name="ESE" placeholder="ESE mark" class="form-control"  type="number">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <select class="form-control" id="POE" name="POE">
                                                <option selected="true" disabled="disabled">POE</option>
                                                <option>Yes</option>
                                                <option>No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                                            <input id="forgetAnswer" name="forgetAnswer" placeholder="Answer" class="form-control"  type="text">
                                        </div>
                                    </div> -->
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
</body>
</html>