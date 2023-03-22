<?php

error_reporting(0);
session_start();
session_destroy();

if($_SESSION['message'])
{
    $message=$_SESSION['message'];

    echo"<script type='text/javascript'>

    alert('$message');
    </script>";
}

$host="localhost";
$user="root";
$password="";
$db="schoolsproject";

$data=mysqli_connect($host,$user,$password,$db);

$sql="SELECT * FROM teacher";

$result=mysqli_query($data,$sql);






?>



<!DOCTYPE html>
<html>
 <head>
    <meta charset="UTF-8">
  <title>Student Management System</title>
  <link rel="stylesheet" href="style.css">
  
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 </head>
 <body>
<nav>
    
    <label style=" font-family: cursive;" class="logo">Holy School</label>
    
    <ul>
        <li style=" font-family: cursive;"><a href="">Home</a></li>
        <li style=" font-family: cursive;"><a href="">Contact</a></li>
        <li style=" font-family: cursive;"><a href="">Admission</a></li>
        <li style=" font-family: cursive;"><a href="login.php"class="btn btn-success">Login</a></li>
</ul>
</nav>
<div class="section1">
    <label style=" font-family: cursive;" class="img_text">We Teach Student With Care</label>
    <img  class="main-img" src="school management.jpg">
</div>
<div class="container">

    <div class="row">

        <div class="col-md-4">
        <img class="welcome_img" src="school1.jpg">
        </div>

        <div class="col-md-8">
        <h1 style=" font-family: cursive;">Welcome to Holy School</h1>
        <p>A school is an educational institution designed
             to provide learning spaces and learning environments for the teaching of students 
             under the direction of teachers. 
             Most countries have systems of formal education, which is sometimes compulsory.
            In these systems, students progress through a series of schools. 
            The names for these schools vary by country (discussed in the Regional terms section below) but generally include primary school for young children and secondary school for teenagers who have completed primary education. 
            An institution where higher education is taught is commonly called a university college or university.</p>
        </div>

    </div>

</div>
<center>
    <br></br>
    <h1 style=" font-family: cursive;">Our Teacher</h1>
    
</center>
<div class="container">


    <div class="row">
        
    <?php

while($info=$result->fetch_assoc())
{



?>

        <div class="col-md-4">

            <img class="teacher" src="<?php echo "{$info['image']}" ?>">
           <h3><?php echo "{$info['name']}" ?></h3>

           <h5><?php echo "{$info['description']}" ?></h5>
        </div>
<?php

}

?>


  

</div>
<center>
<br></br>
    <h1 style=" font-family: cursive;">Our Courses</h1>
    
</center>
<div class="container">

    <div class="row">


        <div class="col-md-4">
            <img class="cource" src="cource1.webp">
            <h3 style=" text-align:center; font-family: cursive";>Web Development</h3>
        </div>

    <div class="col-md-4">
      <img class="cource" src="cource2.jpg">
      <h3 style=" text-align:center; font-family: cursive";>Graphic Design</h3>
      
    </div>

    <div class="col-md-4">
       <img class="cource" src="cource3.png">
       <h3 style=" text-align:center; font-family: cursive";>Marketing</h3>
     
    </div>

</div>
<center>
    <br></br>
    <h2 style="font-family: cursive;"; class="adm">Admission Form</h2>
</center>
<div align="center" class="admission_form">

<form action="data_check.php" method="POST">
    <div class="adm_int">
        <label class="label_text">Name</label>
        <input class="input_deg" type="text" name="name">
</div>
<div class="adm_int">
        <label class="label_text">Email</label>
        <input class="input_deg" type="text" name="email">
</div>
<div class="adm_int">
        <label class="label_text">Phone</label>
        <input class="input_deg" type="text" name="phone">
</div>
<div class="adm_int">
        <label class="label_text">Message</label>
       <textarea class="input_txt" name="message"></textarea>
</div>
<div class="adm_int">
       
        <input class="btn btn-primary" id="submit"  type="submit" value="Apply" name="apply">
</div>
</form>
<footer>
    <h3 style="font-size:12px"; class="footer_text">created by ms.merlin all rights reserved</h3>
</footer>
 </body>
</html>