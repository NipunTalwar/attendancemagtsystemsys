<?php

session_start();
ob_start();

$select=$_SESSION['utilitylogin'];
/*if(($select=='utilitylogin'))
{
header("location: testingagain.php");
}

elseif(($select=='admin'))
{
header("location: showdata.php");
}
else
{
  
  }
*/
include('attendanceconnect.php');


if(isset($_POST['submit']))
{
echo $emailid  = $_POST['email'];
echo $password = $_POST['password'];

 echo  $sqlD = "select * from signin where emailid='$emailid' and password='$password'";
       $res  = mysqli_query($conn,$sqlD);
print_r($res);


while($row=mysqli_fetch_assoc($res))
{
    
     $id=$row['id'];
    $_SESSION['id']=$id;
    $email=$row['emailid'];
    $_SESSION['utilitylogin']='utilitylogin';

    
    
  $usertype = $row['usertype'];
    
     if($usertype=='2')
     {

    header("Location: testingagain.php");
     }
    else if($usertype=='1')
    {
     
        header("Location: showdata.php");
         $_SESSION['admin']='admin';
   }
   

}
}

?>

<!--

<!DOCTYPE html>
<html>
<head>
    <title>  </title>

    <h1> <center>  Sign In  </center>  </h1>

</head>
<body>
  
<form name="myform1" method = "POST" action="" >

    <label> Email Id </label> : <input type ="text"       name ="email"    placeholder = "valid email id"       required ><br>
    <label> Password </label> : <input type ="password"   name ="password" placeholder = "enter valid password" required ><br>
    <input type = "submit" name = "submit" value = "submit">

</body>
</html>












-->
<!DOCTYPE html>
<html>

<head>


<?php //include("index.php"); ?>
    <!-- -------------- Meta and Title -------------- -->
    <meta charset="utf-8">
    <title>A</title>
    <meta name="keywords" content="HTML5, Bootstrap 3, Admin Template, UI Theme"/>
    <meta name="description" content="Alliance - A Responsive HTML5 Admin UI Framework">
    <meta name="author" content="ThemeREX">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!--  <script src="https://code.jquery.com/jquery-2.2.2.min.js"></script>  -->

    <!-- -------------- Fonts -------------- 
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,300italic,400italic,700,700italic' rel='stylesheet'
          type='text/css'>

    <!-- -------------- CSS - theme -------------- 
    <link rel="stylesheet" type="text/css" href="assets/skin/default_skin/css/theme.css">

    <!-- -------------- CSS - allcp forms -------------- 
    <link rel="stylesheet" type="text/css" href="assets/allcp/forms/css/forms.css">

    <!-- -------------- Favicon -------------- 
    <link rel="shortcut icon" href="assets/img/favicon.ico">  -->

    <!-- -------------- IE8 HTML5 support  -------------- -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="utility-page sb-l-c sb-r-c">

<!-- -------------- Body Wrap  -------------- -->
<div id="main" class="animated fadeIn">

    <!-- -------------- Main Wrapper -------------- -->
    <section id="content_wrapper">

        <div id="canvas-wrapper">
            <canvas id="demo-canvas"></canvas>
        </div>

        <!-- -------------- Content -------------- -->
        <section id="content">

            <!-- -------------- Login Form -------------- -->
            <div class="allcp-form theme-primary mw320" id="login">
                <div class="text-center mb20"><img src="assets/img/logo_login_form.png" class="img-responsive"
                                                   alt="Logo"/></div>
                <div class="panel mw320">

                    
                    <form method="post" action="" name="myform1">
                        <div class="panel-body pn mv10">

                            <div class="section">
                                <label for="username" class="field prepend-icon">
                                    <input type="text" name="email" id="username" class="gui-input"
                                           placeholder="Username" required>
                                    <label for="username" class="field-icon">
                                        <i class="fa fa-user"></i>
                                    </label>
                                </label>
                            </div>
                            <!-- -------------- /section -------------- -->

                            <div class="section">
                                <label for="password" class="field prepend-icon">
                                    <input type="password" name="password" id="password" class="gui-input"
                                           placeholder="Password" required>
                                    <label for="password" class="field-icon">
                                        <i class="fa fa-lock"></i>
                                    </label>
                                </label>
                            </div>
                            <!-- -------------- /section -------------- -->

                            <div class="section">
                                <div class="bs-component pull-left pt5">
                                    <div class="radio-custom radio-primary mb5 lh25">
                                        <input type="radio" id="remember" name="remember">
                                        <label for="remember">Remember me</label>
                                    </div>
                                </div>
                                <input  type="submit" name="submit" value="submit" class="btn btn-bordered btn-primary pull-right"/>                            <!-- -------------- /section -------------- -->

                        </div>
                        <!-- -------------- /Form -------------- -->
                    </form>
                </div>
                <!-- -------------- /Panel -------------- -->
            </div>
            <!-- -------------- /Spec Form -------------- -->

        </section>
        <!-- -------------- /Content -------------- -->

    </section>
    <!-- -------------- /Main Wrapper -------------- -->

</div>
<!-- -------------- /Body Wrap  -------------- -->

<!-- -------------- Scripts -------------- -->

<!-- -------------- jQuery --------------  -->
<script src="assets/js/jquery/jquery-1.11.3.min.js"></script>  
<script src="assets/js/jquery/jquery_ui/jquery-ui.min.js"></script>  

<!-- -------------- CanvasBG JS -------------- -->
<!--<script src="assets/js/plugins/canvasbg/canvasbg.js"></script>

<!-- -------------- Theme Scripts -------------- 
<script src="assets/js/utility/utility.js"></script>
<script src="assets/js/demo/demo.js"></script>
<script src="assets/js/main.js"></script> -->

<!-- -------------- Page JS -------------- -->
<script type="text/javascript">
    jQuery(document).ready(function () {

        
        // Init CanvasBG
        CanvasBG.init({
            Loc: {
                x: window.innerWidth / 5,
                y: window.innerHeight / 10
            }
        });

    });
</script>

<!-- -------------- /Scripts -------------- -->

</body>

</html>
