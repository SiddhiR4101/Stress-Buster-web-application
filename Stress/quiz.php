<?php
// Include config file
require_once "config.php";

if(isset($_POST['submit'])) {
    $email=$_POST['email'];
	$q1=$_POST['q1'];
    $q2=$_POST['q2'];
    $q3=$_POST['q3'];
    $q4=$_POST['q4'];
    $q5=$_POST['q5'];
    $q6=$_POST['q6'];
    $q7=$_POST['q7'];
    $q8=$_POST['q8'];
    $q9=$_POST['q9'];
    $q10=$_POST['q10'];
    $q11=$_POST['q11'];
    $q12=$_POST['q12'];
    $score = ($q1+$q2+$q3+$q4+$q5+$q6+$q7+$q8+$q9+$q10+$q11+$q12);

    //echo $score;
    $query="UPDATE patients SET score='$score' where Email='$email'";
    
    $result = mysqli_query($link, $query);
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quiz</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="css/s.css"/>
    <style>
        body{ font: 14px sans-serif;
        margin:auto; 
        margin-top: 120px;
        width:1000px; 
        background-color: blueviolet;
        color: black;
        }
        .wrapper{  border-style: solid;
        border-color: blue;
        border-radius: 30px;
        padding: 10px;  background-color: white;}
    </style>
</head>
<body>
    <!--Header-->
    <header id="header" class="transparent-nav" style="position: fixed;background-color: rgb(120, 70, 167); top: 0;">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a class="logo" href="main.php" style="padding-bottom: 10px;">
                        Stress Buster</a>
					</div>
					<!-- /Logo -->

				</div>
			</div>
		</header>
		<!-- /Header -->

    <!-- <div class="wrapper">
        
    <h2>Please answer the questions with respect to your 'LAST MONTH' experiences</h2>
        
        <form action="#" method="POST">
        <div class="form-group">
                <label><b>Email-id</b></label>
                <input type="Email" name="email" id="email"  class="form-control" >
            </div> 
        <div class="form-group">
                <label><b>Been upset because of something that happened unexpectedly?</b></label><br>
                <input type="radio" name="q1" id="q1"   value=5> Never<br>
                <input type="radio" name="q1" id="q1"   value=4> Almost Never<br>
                <input type="radio" name="q1" id="q1"   value=3> Sometimes<br>
                <input type="radio" name="q1" id="q1"   value=2> Fairly Often<br>
                <input type="radio" name="q1" id="q1"   value=1> Very Often<br>
            </div> 
            
            <div class="form-group">
                <label><b>Felt that you were unable to control important things in your life?</b></label><br>
                <input type="radio" name="q2" id="q2"  value=5> Never<br>
                <input type="radio" name="q2" id="q2"   value=4> Almost Never<br>
                <input type="radio" name="q2" id="q2"   value=3> Sometimes<br>
                <input type="radio" name="q2" id="q2"   value=2> Fairly Often<br>
                <input type="radio" name="q2" id="q2"   value=1> Very Often<br>
            </div> 
            
            <div class="form-group">
                <label><b>Felt nervous and 'stressed'?</b></label><br>
                <input type="radio" name="q3" id="q3"   value=5> Never<br>
                <input type="radio" name="q3"  id="q3"  value=4> Almost Never<br>
                <input type="radio" name="q3"  id="q3"  value=3> Sometimes<br>
                <input type="radio" name="q3" id="q3"   value=2> Fairly Often<br>
                <input type="radio" name="q3"  id="q3"  value=1> Very Often<br>
            </div> 
            <div class="form-group">
                <label> <b> Felt confident about your ability to handle your personal problems?</b></label><br>
                <input type="radio" name="q4" id="q4"   value=1> Never<br>
                <input type="radio" name="q4" id="q4"    value=2> Almost Never<br>
                <input type="radio" name="q4" id="q4"    value=3> Sometimes<br>
                <input type="radio" name="q4" id="q4"    value=4> Fairly Often<br>
                <input type="radio" name="q4" id="q4"    value=5> Very Often<br>
            </div>
            <div class="form-group">
                <label> <b> Felt that things were going your way?</b></label><br>
                <input type="radio" name="q5" id="q5"    value=1> Never<br>
                <input type="radio" name="q5" id="q5"   value=2> Almost Never<br>
                <input type="radio" name="q5" id="q5"   value=3> Sometimes<br>
                <input type="radio" name="q5" id="q5"   value=4> Fairly Often<br>
                <input type="radio" name="q5" id="q5"   value=5> Very Often<br>
            </div>
            <div class="form-group">
                <label> <b> Been able to control irritations in your life?</b></label><br>
                <input type="radio" name="q6" id="q6"   value=1> Never<br>
                <input type="radio" name="q6" id="q6"  value=2> Almost Never<br>
                <input type="radio" name="q6" id="q6"  value=3> Sometimes<br>
                <input type="radio" name="q6" id="q6"  value=4> Fairly Often<br>
                <input type="radio" name="q6" id="q6"  value=5> Very Often<br>
            </div>
            <div class="form-group">
                <label> <b> Found that you could NOT cope with all the things you had to do?</b></label><br>
                <input type="radio" name="q7"  id="q7" value=5> Never<br>
                <input type="radio" name="q7" id="q7" value=4> Almost Never<br>
                <input type="radio" name="q7" id="q7" value=3> Sometimes<br>
                <input type="radio" name="q7" id="q7" value=2> Fairly Often<br>
                <input type="radio" name="q7" id="q7" value=1> Very Often<br>
            </div>
            <div class="form-group">
                <label> <b> Felt that you were on top of things?</b></label><br>
                <input type="radio" name="q8" id="q8" value=1> Never<br>
                <input type="radio" name="q8" id="q8"  value=2> Almost Never<br>
                <input type="radio" name="q8"  id="q8" value=3> Sometimes<br>
                <input type="radio" name="q8" id="q8"  value=4> Fairly Often<br>
                <input type="radio" name="q8" id="q8"  value=5> Very Often<br>
            </div>
            <div class="form-group">
                <label> <b> Been angered because of things that happened that were out of your control?</b></label><br>
                <input type="radio" name="q9" id="q9"  value=5> Never<br>
                <input type="radio" name="q9" id="q9"  value=4> Almost Never<br>
                <input type="radio" name="q9" id="q9"  value=3> Sometimes<br>
                <input type="radio" name="q9" id="q9"  value=2> Fairly Often<br>
                <input type="radio" name="q9" id="q9"  value=1> Very Often<br>
            </div>
            <div class="form-group">
                <label> <b> Been angered because of things that happened that were out of your control?</b></label><br>
                <input type="radio" name="q10"  id="q10" value=5> Never<br>
                <input type="radio" name="q10"  id="q10" value=4> Almost Never<br>
                <input type="radio" name="q10"  id="q10" value=3> Sometimes<br>
                <input type="radio" name="q10"  id="q10" value=2> Fairly Often<br>
                <input type="radio" name="q10"  id="q10" value=1> Very Often<br>
            </div>
            <div class="form-group">
                <label> <b> How often do you consume coffee or tea ?</b></label><br>
                <input type="radio" name="q11"  id="q11" value=5> Never<br>
                <input type="radio" name="q11"  id="q11" value=4> Almost Never<br>
                <input type="radio" name="q11"  id="q11" value=3> Sometimes<br>
                <input type="radio" name="q11"  id="q11" value=2> Fairly Often<br>
                <input type="radio" name="q11"  id="q11" value=1> Very Often<br>
            </div>
            <div class="form-group">
                <label> <b> How often do you get atleast 6 hrs of sleep ?</b></label><br>
                <input type="radio" name="q12"  id="q12" value=1> Never<br>
                <input type="radio" name="q12"  id="q12" value=2> Almost Never<br>
                <input type="radio" name="q12"  id="q12"  value=3> Sometimes<br>
                <input type="radio" name="q12"  id="q12"  value=4> Fairly Often<br>
                <input type="radio" name="q12"  id="q12"  value=5> Very Often<br>
            </div>
            
            <div style="text-align:center">
            <button type="submit" value="Submit" id="submit" name="submit" class="btn btn-success">Submit
            </button>

            </div>
  
        </form>
        </div>     -->

        
            <div class="order-section">
                <script type="text/javascript" src="https://form.jotform.com/jsform/221033448721044"></script>
                
            </div>
</body>
</html>