<?php
session_start();

if(!isset($_SESSION['username']))
{
    header("location:login.php");
}
elseif($_SESSION['usertype']=='student')
{
    header("location:login.php");
}

$host="localhost";
$user="root";
$password="";
$db="schoolsproject";

$data=mysqli_connect($host,$user,$password,$db);

$sql="SELECT * from admission";

$result=mysqli_query($data,$sql);

?>






<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Admin Dashboard</title>
        <link rel="stylesheet" href="design.css">

       
        
        <?php

        include 'admin_css.php';
        ?>

</head>
<body background="admission.jpg"  
    class="body_deg" >
<?php

include 'admin_sidebar.php';

?>
<div class="content">
    <center>
   <h1 style=" font-family: cursive;">Appiled For Admission</h1>
   
   <br></br>
   <table border="1px">
    <tr>
        <th style="padding:20px;font-size:15px;">Name</th>
        <th style="padding:20px;font-size:15px;">Email</th>
        <th style="padding:20px;font-size:15px;">Phone</th>
        <th style="padding:20px;font-size:15px;">Message</th>
    </tr>
    <?php
    while($info=$result->fetch_assoc())
    {

    
    ?>
    
    <tr >
        <td style="padding:20px;"> <?php echo "{$info['name']}"; ?> </td>
        <td style="padding:20px;"> <?php echo "{$info['email']}"; ?> </td>
        <td style="padding:20px;"> <?php echo "{$info['phone']}"; ?> </td>
        <td style="padding:20px;"> <?php echo "{$info['message']}"; ?> </td>
    </tr>
    <?php
    }
    ?>
   </table>
</center>
</div>
</body>
</html>