<!doctype html>

<html lang="en">
  
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" >
    
    
    

    <style>
      a{
        text-decoration :none;
        color: maroon;
      }
      #logo{
          /* margin-left : 450px; */
          /* align-items : centre; */
          /* display :flex; */
          display: flex;
          justify-content: center;
          color: maroon;
      }

       #edb{
        text-decoration: none;
        border: solid rgb(0, 0, 0);
        /* margin-top: 25px; */
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
    </style>
    
    
    <!-- class="navbar navbar-expand-lg bg-warning" -->
    <!-- <a href="login-pro/login/login.php"></a> -->
  </head>
  <body>
    <!-- <h1>Hello, world!</h1> -->
    <nav class="navbar navbar-expand-lg bg-warning">
        <div class="container-fluid" >
          <a class="navbar-brand" href="#">CREDIT SYSTEM</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#ho">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Credits
                </a>
                <ul class="dropdown-menu">
                  <a class="dropdown-item" href="CategoryWiseCr.php">AICTE Category wise Credits</a>
                  <a class="dropdown-item" href="CourseTypeWiseCredits.php">Course Type wise Credits</a>
                  <a class="dropdown-item" href="CategoryWiseCourses.php">AICTE Category wise Courses</a>
                  <a class="dropdown-item" href="CourseTypeCour.php">Course Type wise Courses</a>
                  <a class="dropdown-item" href="PC_Courses.php">Professional Core Courses</a>
                  <a class="dropdown-item" href="PC_Lab_Courses.php">Professional Core Lab Courses</a>
                  <a class="dropdown-item" href="PE_Courses.php">Professional Elective Courses</a>
                  <a class="dropdown-item" href="OE_Courses.php">Open Elective Courses</a>
                  <a class="dropdown-item" href="GateMapping.php">Gate Mapping</a>
                </ul>
              </li>
            
              <li class="nav-item">
                <a class="nav-link" href="#con">Contact Us</a>
              </li>
              
            </ul>
          </div>
        </div>
      </nav>

      <!-- Home-->
        <div id="logo">
        <img  src="logo.png" alt="Walchand College Of Engineering Sangli"></div>
      <!-- <h3 id="ho">Walchand College Of Engineering Sangli</h3> -->
      <br>
                    
                    <!-- <img src="wce_home.jpg" alt="walchand">
                    <img src="img2.jpg" alt="walchand">
                    <img src="img3.jpg"alt="walchand">
                    <img src="img2.jpg" alt="walchand"> -->

                    <p id="home">Walchand College of Engineering is situated midway between Sangli and Miraj cities at Vishrambag, Sangli. The WCE campus is located on about 90 acres of land on southern side of Sangli ? Miraj road.

                        In 1947, the college made a modest beginning as New Engineering College, with a single program leading to B.E. (Civil) degree. In the year 1955, the College was renamed as Walchand College of Engineering as part of the new arrangements and pursuant to the Rehabilitation and Development Program mainly funded by Seth Walchand Hirachand Memorial Trust and the Government. The Government appointed an Ad Hoc Committee for conducting the college from May 1955, later replaced by the Administrative Council in 1956. The Ad Hoc Committee added two more degree programs in B.E. (Mechanical) and B.E. (Electrical) in 1955 with the intake of 20 each. Three Diploma programs also started in 1955 ? Civil (40 intake), Mechanical (20) and Electrical (20).
                       
                       Post Graduate programs in Civil, Mechanical and Electrical Engineering and Diploma program in Industrial Electronics were introduced in 1971. In 1986 the UG and PG programs in Electronics Engineering and UG program in Computer Science and Engineering were introduced. 
                       
                       PG program in CSE was introduced in 1997. In 2001, added B.E. program in Information Technology with an intake of 60 students. An additional intake of 30 students was also sanctioned for Computer Science & Engineering program, resulting in total intake of 390 students for all branches at UG level and 106 at PG level. As part of strategic planning, PG section is being strengthened and PG intake has now steadily risen to 240 across 10 programs. The College has a QIP scheme for full-time doctoral programs and also offers Ph. D. programs of Shivaji University in various branches of engineering.</p>
                </div>

                <div>
                </head>
                      <body>
                      <br><br>
                      <h2 id="ct">CREDIT Table</h2>
                      
                      <table id="table1">
                        <tr>
                          
                          <th>Sem 1</th>
                          <th>Sem 2</th>
                          <th>Sem 3</th>
                          <th>Sem 4</th>
                          <th>Sem 5</th>
                          <th>Sem 6</th>
                          <th>Sem 7</th>
                          <th>Sem 8</th>
                          
                        </tr>
                       

                       <tbody>
                            <td>
                            <tr>
                                <td><a href="ViewCredits.php?sem=1&amp; branch=Civil">Civil</td>
                                <td><a href="ViewCredits.php?sem=2&amp; branch=Civil">Civil</td>
                                <td><a href="ViewCredits.php?sem=3&amp; branch=Civil">Civil</td>
                                <td><a href="ViewCredits.php?sem=4&amp; branch=Civil">Civil</td>
                                <td><a href="ViewCredits.php?sem=5&amp; branch=Civil">Civil</td>
                                <td><a href="ViewCredits.php?sem=6&amp; branch=Civil">Civil</td>
                                <td><a href="ViewCredits.php?sem=7&amp; branch=Civil">Civil</td>                                
                                <td><a href="ViewCredits.php?sem=8&amp; branch=Civil">Civil</td>
                                </tr>
                                
                                <tr>
                                <td><a href="ViewCredits.php?sem=1&amp; branch=Mechanical">Mechanical</td>
                                <td><a href="ViewCredits.php?sem=2&amp; branch=Mechanical">Mechanical</td>
                                <td><a href="ViewCredits.php?sem=3&amp; branch=Mechanical">Mechanical</td>
                                <td><a href="ViewCredits.php?sem=4&amp; branch=Mechanical">Mechanical</td>
                                <td><a href="ViewCredits.php?sem=5&amp; branch=Mechanical">Mechanical</td>
                                <td><a href="ViewCredits.php?sem=6&amp; branch=Mechanical">Mechanical</td>
                                <td><a href="ViewCredits.php?sem=7&amp; branch=Mechanical">Mechanical</td>
                                <td><a href="ViewCredits.php?sem=8&amp; branch=Mechanical">Mechanical</td>
                                </tr>

                                <tr>
                                <td><a href="ViewCredits.php?sem=1&amp; branch=Electrial">Electrial</td>
                                <td><a href="ViewCredits.php?sem=2&amp; branch=Electrial">Electrial</td>
                                <td><a href="ViewCredits.php?sem=3&amp; branch=Electrial">Electrial</td>
                                <td><a href="ViewCredits.php?sem=4&amp; branch=Electrial">Electrial</td>
                                <td><a href="ViewCredits.php?sem=5&amp; branch=Electrial">Electrial</td>
                                <td><a href="ViewCredits.php?sem=6&amp; branch=Electrial">Electrial</td>
                                <td><a href="ViewCredits.php?sem=7&amp; branch=Electrial">Electrial</td>
                                <td><a href="ViewCredits.php?sem=8&amp; branch=Electrial">Electrial</td>
                                </tr>

                                <tr>
                                <td><a href="ViewCredits.php?sem=1&amp; branch=Electronics">Electronics</td>
                                <td><a href="ViewCredits.php?sem=2&amp; branch=Electronics">Electronics</td>
                                <td><a href="ViewCredits.php?sem=3&amp; branch=Electronics">Electronics</td>
                                <td><a href="ViewCredits.php?sem=4&amp; branch=Electronics">Electronics</td>
                                <td><a href="ViewCredits.php?sem=5&amp; branch=Electronics">Electronics</td>
                                <td><a href="ViewCredits.php?sem=6&amp; branch=Electronics">Electronics</td>
                                <td><a href="ViewCredits.php?sem=7&amp; branch=Electronics">Electronics</td>
                                <td><a href="ViewCredits.php?sem=8&amp; branch=Electronics">Electronics</td>
                                </tr>
                                <tr>
                                <td><a href="ViewCredits.php?sem=1&amp; branch=IT">IT</td>
                                <td><a href="ViewCredits.php?sem=2&amp; branch=IT">IT</td>
                                <td><a href="ViewCredits.php?sem=3&amp; branch=IT">IT</td>
                                <td><a href="ViewCredits.php?sem=4&amp; branch=IT">IT</td>
                                <td><a href="ViewCredits.php?sem=5&amp; branch=IT">IT</td>
                                <td><a href="ViewCredits.php?sem=6&amp; branch=IT">IT</td>
                                <td><a href="ViewCredits.php?sem=7&amp; branch=IT">IT</td>
                                <td><a href="ViewCredits.php?sem=8&amp; branch=IT">IT</td>
                                </tr>
                                <tr>                                
                                <td><a href="ViewCredits.php?sem=1&amp; branch=CSE">CSE</td>
                                <td><a href="ViewCredits.php?sem=2&amp; branch=CSE">CSE</td>
                                <td><a href="ViewCredits.php?sem=3&amp; branch=CSE">CSE</td>
                                <td><a href="ViewCredits.php?sem=4&amp; branch=CSE">CSE</td>
                                <td><a href="ViewCredits.php?sem=5&amp; branch=CSE">CSE</td>
                                <td><a href="ViewCredits.php?sem=6&amp; branch=CSE">CSE</td>
                                <td><a href="ViewCredits.php?sem=7&amp; branch=CSE">CSE</td>
                                <td><a href="ViewCredits.php?sem=8&amp; branch=CSE">CSE</td>
                                </tr>
                                
                            </td>
                       </tbody>
                        
                      </table>
                      
                      

                    
</div>

                
              

            <!-- <a id="edb" href="http://localhost/login-pro/login/login.php">Edit</a> -->

                
                  <!-- Contact us-->
                <div id="contact">
                    <footer>
                        <div>
                            <h3 id="con">Contact Us</h3>
                            <a href="mailto:www.walchandsangli.ac.in">walchandsangli.ac.in</a><br>
                            <a href="mailto:	
                            registrar@walchandsangli.ac.in">Registration</a><br>
                            <a href="mailto:studentsection@walchandsangli.ac.in">Studentsection</a><br>
                            <a href="mailto:accounts@walchandsangli.ac.in">Accounts</a><br>
                            <a href="mailto:	
                            tpo@walchandsangli.ac.in">Tpo</a><br>
                            <p>
                                Walchand College of Engineering ,<br>
                                       A/P: Vishrambag,
                                      Maharashtra, India
                                       Sangli - 416 415
                                       Tel: +91-233-2300383
                                       Fax:+91-233-2300831 

                            </p>
                            <a href="https://www.facebook.com/walchandsangli/" class="fa fa-facebook"> </a>   
                            <!-- <a href="#" class="fa fa-youtube"> </a> -->
                            <a href="" class="fa fa-instagram"> </a>  <br>



                        </div>
                        
                    </footer>
                </div>  
                <!-- <a href="login.php">Login here</a> -->

                <!-- <button id="myButton" class="float-left submit-button" >EDIT</button> -->

                 <!-- <script type="text/javascript">
                    document.getElementById("btn3").onclick = function () {
                        location.href = "/login.php";
                    };
                </script>  -->

     <!-- <a href="login.php">Redirect</a> -->
  <!-- <script>
    var btn = document.getElementById('myBtn');
    btn.addEventListener('click', function() {
      document.location.href = 'login.php';
    });
  </script>  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> 
  </body>
</html>