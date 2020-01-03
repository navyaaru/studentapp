<!DOCTYPE html>
<html lang="en">
<head><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  <form method="GET" >

    <table class="table">
        <tr>
            <td>
                student name
             
         </td>
         <td>
             <input type="text" class="form-control" name="sname">
         </td>
        </tr>
        <tr>
            <td>
                place
            </td>
        <td>
            <input type="text" class="form-control" name="splace">
        </td>
         </tr>
         <tr>
             <td>
             email id
             </td>
             <td>
                 <input type="text" class="form-control" name="semail">
 
             </td>
    </tr>>
         <tr>
             <td>
                 mobile number
             </td>
             <td>
                 <input type="text" class="form-control" name="sno">
             </td>
         </tr>
         <tr>
             <td>
                 pincode
             </td>
             <td>
                 <input type="text" class="form-control" name="spin">
             </td>
         </tr>
        <tr>
            <td>
                user name
            </td>
            <td>
                <input type="text" class="form-control" name="suser">
            </td>
        </tr>
        <tr>
            <td>
                roll number
            </td>
            <td>
                <input type="text" class="form-control" name="sro">
            </td>
        </tr>
        <tr>
            <td>
                admission number
            </td>
            <td>
                <input type="text" class="form-control" name="sadno">
            </td>
        </tr>
        <tr>
            <td>
 college
            </td>
            <td>
                <input type="text" class="form-control" name="sclg">
            </td>
        </tr>
        <tr>
            <td>
 
            </td>
 <td>
     <input type="submit" value="register" class="btn btn-danger" name="sreg">
 </td>       </tr>
        
 </table> 


  </form>
</body>
</html>


<?php

if(isset($_GET["sreg"]))

{
$name=$_GET["sname"];
echo $name;
$place=$_GET["splace"];
echo $place;
$emailid=$_GET["semail"];
echo $emailid;
$mobileno=$_GET["sno"];
echo $mobileno;
$pincode=$_GET["spin"];
echo $pincode;
$username=$_GET["suser"];
echo $username;
$rollnumber=$_GET["sro"];
echo $rollnumber;
$admissionnumber=$_GET["sadno"];
echo $admissionnumber;
$college=$_GET["sclg"];
echo $college;
$register=$_GET["sreg"];
 echo $register;




}



?>