<!DOCTYPE html>
<html>
<head>
<title>Credit System</title>
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
<body>
		<form method="POST" action="add.php">
			<label>Sem:</label>
            <input type="number" name="Sem" id="Sem">

            <br>

            <label>Branch:</label>
            <input type="text" name="Branch" id="Branch">

            <br>

			<label>Course Type:</label>
            <select id="Course_type" name="Course_type">
                <option value="Professional Core(Theory)">Professional Core(Theory)</option>
                <option value="Professional Core(Lab)">Professional Core(LAb)</option>
                <option value="Professional Elective(Theory)">Professional Elective(Theory)</option>
                <option value="Professional Elective(Lab)">Professional Elective(Lab)</option>
                <option value="Open Elective">Open Elective</option>
                <option value="AICTE Mandatory Course">AICTE Mandatory Course</option>
                <option value="VAPC">VAPC</option>
                <option value="VALC">VALC</option>
            </select>

            <br>

      <div>
        <label>AICTE Category:</label>
        <select id="AICTE_category" name="AICTE_category" onchange="admSelectCheck(this);">
            <option value="BS">BS</option>
            <option value="HS">HS</option>
            <option value="ES">ES</option>
            <option value="PC">PC</option>
            <option value="PE" id="peOption">PE</option>
            <option value="OE" id="oeOption">OE</option>
            <option value="PR">PR</option>
            <option value="MC">MC</option>
        </select>
        <div id="admDivCheck" style="display:none;">
                <label>Track:</label>
                <select id="Track" name="Track">
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
                <!-- <br> -->
        </div>
        <div id="OEcheck" style="display:none;">
          <label>Electve No:</label>
          <input type="text" name="EL_NO" id="EL_NO">
        </div>
        </div>

        <br>

			      <label>Code:</label>
            <input type="text" name="Code" id="Code">

            <br>
            <label>Course Name:</label>
            <input type="text" name="Course_name" id="Course_name">
            
            <br>

            <label>L:</label>
            <input type="number" name="L" id="L">

            <br>

            <label>T:</label>
            <input type="number" name="T" id="T">

            <br>

            <label>P:</label>
            <input type="number" name="P" id="P">

            <br>

            <label>I:</label>
            <input type="number" name="I" id="I">

            <br>

            <label>Hr:</label>
            <input type="number" name="Hr" id="Hr">
            
            <br>

            <label>Cr:</label>
            <input type="number" name="Cr" id="Cr">
            
            <br>

            <label>MSE/LA1:</label>
            <input type="number" name="MSE" id="MSE">

            <br>

            <label>ISE/LA2:</label>
            <input type="number" name="ISE" id="ISE">

            <br>

            <label>ESE/LA3:</label>
            <input type="number" name="ESE" id="ESE">

            <br>

            <label>POE:</label>
            <select id="POE" name="POE">
                <option value="POE">Yes</option>
                <option value="">No</option>
            </select>
            <br><br>

            <input type="submit" value="submit">
            <input type="reset" value="reset">
		</form>
</body>
</html>