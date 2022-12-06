<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style>
    #table{
        display: none;
    }
    </style>

</head>
<body style="margin: 50px;">
<!-- Showing Core subjects -->

<form id="the-form" method="GET" action = "">
    <!-- <input type="submit"/> -->
    <button onclick="displaydiv()" >submit</button>
    <input name="branchname" id="branchname" type="text">
</form>
<!-- <div id="table"> -->
    <p id = "table">hello</p>
<!-- </div> -->

</body>

<script>
        function displaydiv(){
            var div = document.getElementById("table");
            if (div.style.display == 'none') {
                div.style.display = 'block';
            }

            else {
                div.style.display = 'none';
            }
        }
    </script>

</html>
