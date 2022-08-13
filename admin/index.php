<?php include_once("db.php");

session_start();
if(isset($_GET['task'])=="logout")
	{
		unset($_SESSION['admin']);
		session_destroy();
	}
		
	if(isset($_SESSION['admin'])!="")
	{
		header("location:ban.php");
	}
if(isset($_POST['submit']))
{

$username=$_POST['username']; 
$password=$_POST['password'];

$sql="SELECT * FROM admin WHERE username='$username' AND password='$password'"; 

$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);

if($num >=1)
{
session_start();
$_SESSION['admin']=$username; 
$_SESSION['usertype']="admin";
header('location:dashboard.php');
}else{
    echo "<script>alert('Invalid login credentials');</script>>";
    echo "<script>location.href='index.php'</script>>";
}
}
?>
<!DOCTYPE html>
<html>

<!-- Mirrored from themepixels.com/main/themes/demo/webpage/shamcey/index.html by HTTrack Website Copier/3.x [XR&CO'2010], Wed, 22 May 2013 11:02:00 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>HandMade Admin Login</title>
<link rel="icon" type="image/icon" href="image/favicon.png" />
<link rel="stylesheet" href="css/style.default.css" type="text/css" />
<link rel="stylesheet" href="css/style.shinyblue.html" type="text/css" />
<link rel="stylesheet" href="css/style.css" type="text/css" />
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/jquery-migrate-1.1.1.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.9.2.min.js"></script>
<script type="text/javascript" src="js/modernizr.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.cookie.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<style>
.log{padding:5px;text-align:center;color:red;font-size:12px;background-color:#fc5a6d;margin-bottom:10px;display:none;}
</style>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('#login').submit(function(){
            var u = jQuery('#username').val();
            var p = jQuery('#password').val();
			
            if(u == '' && p == '') {
                jQuery('.login-alert').fadeIn();
                return false;
            }
			
        });
    });
</script>


</head>

<body class="loginpage">

<div class="loginpanel">
    <div class="loginpanelinner">
        <div class="logo animate0 bounceIn"><img src="image/logo.png" alt=""></div>
        <form id="login" action="" method="post">
		    
            
			   <div class="inputwrapper login-alert">
                <div class="alert alert-error">Invalid username or password</div>
            </div>
            <div class="inputwrapper animate1 bounceIn">
                <input type="text" name="username" id="username" placeholder="Enter any username" />
            </div>
            <div class="inputwrapper animate2 bounceIn">
                <input type="password" name="password" id="password" placeholder="Enter any password" />
            </div>
            <div class="inputwrapper animate3 bounceIn">
                <button name="submit">Sign In</button>
            </div>
            
            
        </form>
		
    </div><!--loginpanelinner-->
</div><!--loginpanel-->

<div class="loginfooter">
    <p>&copy;<?php echo date('Y'); ?>. HandMade Admin . All Rights Reserved.</p>
</div>

</body>

</html>
