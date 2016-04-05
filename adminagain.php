<?php

  //include"header.php";
  //include"footer.php"; 

include('attendanceconnect.php');
if(isset($_POST['submit']))
{

$emailid  = $_POST['email'];
echo $password = $_POST['password'];
echo $confirmpassword = $_POST['confirmpassword'];
$usertype = $_POST['options'];

if($password==$confirmpassword)
{
 echo $sql = "INSERT INTO signin(emailid,password,usertype) 
  VALUES('$emailid','$password','$usertype')";
   $res = mysqli_query($conn,$sql);

  if ($res) {
    echo "New record created successfully";

}
   
   }
   else
   {
    echo "password not match";
   }
}




?>


<!DOCTYPE html>
<html>
<head>
	<title>  </title>
  <?php include("index.php"); ?>

	<h2  class="top-hrading"> <center>  Assign Email & Password to new user's  </center>  </h2>
 
    <link rel="stylesheet" type="text/css" href="attendances.css">
   

</head>
<body>
   
<div class="wrapper-center">



<form method="post" action="" name="myform1">
                        <div class="panel-body pn mv10">

                            <div class="section">
                                <label for="email" class="field prepend-icon">
                                    
                                   <label for="email" class="field-icon">
                                        <i class="fa fa-user"></i>
                                    <input type="text" name="email" id="username" class="gui-input"
                                           placeholder="User email id" required>
                                    
                                    </label>
                                </label>
                            </div>
  



  
  
                             <div class="section">
                                <label for="password" class="field prepend-icon">
                                    <label for="password" class="field-icon">
                                        <i class="fa fa-user"></i> 
                                    

                                    <input type="text" name="password" id="username" class="gui-input"
                                           placeholder="Enter password" required>
                                    
                                    </label>
                                </label>
                            </div>
  




  
  


                 <div class="section">
                    <label for="confirmpassword" class="field prepend-icon">
                     <label for="confirmpassword" class="field-icon">
                      <i class="fa fa-user"></i>
                      <input type="text" name="confirmpassword" id="username" class="gui-input"
                                           placeholder=" confirm password" required>
                                   
                                        
                                    </label>
                                </label>
                            </div>
  

  



  

  
   
                                       <div class="section">
                                         <label  class="field select"> Type of User
                                           <select  name="options">
                                             <option value="1"  >ADMIN</option>
                                               <option value="2">USER</option>
                                                 </select>
                                                   <i class="arrow double"></i>
                                                     </label>
                                                        </div>






  <input type = "submit" name = "submit" value = "submit" class="btn btn-bordered btn-primary pull-right">

    </ul>
    </div>

</body>
</html> 