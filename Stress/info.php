<?php
// Include config file
require_once "config.php";

if(isset($_POST['save'])) {
    $name=$_POST['name'];
    $email=$_POST['email'];
	$age=$_POST['age'];
    $gender=$_POST['gender'];
    $history=$_POST['history'];
    $occupation=$_POST['occupation'];



   // echo $email,$age,$gender,$history,$occupation;
    $query="INSERT INTO patients (name,Email,age,Gender,history,occupation) VALUES ('$name',$email','$age','$gender','$history','occupation')";
    $result = mysqli_query($link, $query);
   // echo "successful";
        

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Information</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="css/s.css"/>
    <style>
        body{ font: 14px sans-serif;
        margin:auto; 
        margin-top: 120px;
        width:500px; 
        background-color: blueviolet;
        color: black;
        
        
        }
        .wrapper{  border-style: solid;
        border-color: blue;
        border-radius: 30px;
        padding: 20px;  background-color: white;}
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

    <div class="wrapper">
        
        <h2>Please complete your profile.</h2>
        
        <form action="" method="POST">
        <div class="form-group">
                <label><b>Username</b></label>
                <input type="text" name="name" id="name"  class="form-control" >
            </div> 
            
            <div class="form-group">
                <label><b>Email-id</b></label>
                <input type="Email" name="email" id="email"  class="form-control" >
            </div> 
            
            <div class="form-group">
                <label><b>Age</b></label>
                <input type="number" name="age" id="age"  class="form-control" >
            </div> 
            <div>
                <label> <b> Gender</b></label>
                <input type="radio" name="gender" value="F">Female
                <input type="radio" name="gender" value="M">Male
                <input type="radio" name="gender" value="O">Other
            </div>
            <div class="form-group">
                <label><b>Occupation</b></label>
                <input type="text" name="occupation" id="occupation"  class="form-control" >
            </div>

            <div class="form-group">
                <label><b>Medical History (If any)</b></label>
                <input type="text" name="history" id="history"  class="form-control" >
            </div class="form-group">

            <button type="submit" value="Save" id="save" name="save" class="btn btn-success">Save
            </button>

            <p style="font-size: 16px;"><a href="quiz.php" style="color:blue;">Next</a> ,</p>


            
 

            
        </form>
        </div>    
</body>
</html>
