<?php 
include_once("db.php");
session_start();
$_SESSION["admin"];
if($_SESSION['admin']=="")
  {
    header("location:index.php");
  }
  
?>
<!DOCTYPE html>
<html>

<!-- Mirrored from themepixels.com/main/themes/demo/webpage/shamcey/editprofile.html by HTTrack Website Copier/3.x [XR&CO'2010], Wed, 22 May 2013 11:02:00 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Carrgo Admin</title>
<link rel="stylesheet" href="css/style.default.css" type="text/css" />
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/jquery-migrate-1.1.1.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.9.2.min.js"></script>
<script type="text/javascript" src="js/modernizr.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.cookie.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="ckeditor/ckeditor.js">
</script>
<script type="text/javascript">
jQuery(document).ready(function(){

  
  jQuery('.taglist .close').click(function(){
    jQuery(this).parent().remove();
    return false;
  });
  
});

</script>
<script>
 function delete_data(vals)
 {
var con=confirm("Do You Want Delate Banner");
if(con){
window.location="ban_delete.php?ids="+vals;
}
}
</script>
</head>

<body>

<div class="mainwrapper">
    
     <?php include"header.php";?><!--header-->
    
    <?php include"leftmenu.php";?><!-- leftpanel -->
    
    <div class="rightpanel">
        
        <ul class="breadcrumbs">
            <li><a href="dashboard.php"><i class="iconfa-home"></i> &nbsp;Home </a> <span class="separator"></span></li>
            
      <li>Vehicles Category</li>
            
        </ul>
        
       
        
        <div class="maincontent">
            <div class="maincontentinner">
                <div class="row-fluid">
                 <div class="span12"> 
                  <h4 class="widgettitle" align="center">Add Vehicles Category</h4>
                      <form action="manage_ban.php" class="editprofileform" method="post" enctype="multipart/form-data">
                                
                                <div class="widgetbox login-information">
                                    
                                    <div class="widgetcontent">
                                       <div class="row-fluid">
                                          <div class="span6">   
                                              <label>Title</label>
                                             <span class="field"><input type="text" name="title1" class="input-block-level" value="" /></span> 
                                          </div>
                                          <div class="span6">   
                                             <span class="field"><input type="submit" name="submit" value="Submit" class="btn btn-primary" style="margin-top: 29px;"> </span> 
                                          </div>      
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <table class="table table-bordered responsive">
                                <thead>
                                    <tr>
                                        <th>Sl.No</th>
                                        <th>Vehicle Category</th>
                                        <th>action</th>
                                    </tr>
                                </thead>
                                <tbody>
                      
                                </tbody>
                              </table>
                    </div>    
                    </div><!--row-fluid-->
                    
                    <?php include("footer.php")?><!--footer-->
                
            </div><!--maincontentinner-->
        </div><!--maincontent-->
        
    </div><!--rightpanel-->
    
</div><!--mainwrapper-->

</body>

<!-- Mirrored from themepixels.com/main/themes/demo/webpage/shamcey/editprofile.html by HTTrack Website Copier/3.x [XR&CO'2010], Wed, 22 May 2013 11:02:00 GMT -->
</html>
