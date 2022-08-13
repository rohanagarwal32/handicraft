<?php 
include_once("db.php");
session_start();
$_SESSION["admin"];
if($_SESSION['admin']=="")
	{
		header("location:index.php");
	}

	if(isset($_POST['submit'])){
        $title=$_POST['title'];
        $img=$_FILES['ban_image']['name'];
        $dec=$_POST['desc'];
        if(move_uploaded_file($_FILES['ban_image']['tmp_name'], "banner/".$img)){
         $insert=mysqli_query($conn,"INSERT INTO `banner`(`title`, `descripition`, `image`) VALUES ('$title','$dec','$img')");
                if($insert){
                    echo "<script>alert('Banner added successfully');</script>";
                    echo "<script>location.href='ban.php';</script>";
                }else{
                    echo "<script>alert('Banner can not uploaded')</script>";
                }

        }
       
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
<style ></style>
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
            
			<li>Banner</li>
            
        </ul>
        
       
        
        <div class="maincontent">
            <div class="maincontentinner">
                <div class="row-fluid">
                 <div class="span12">	
                      <form class="editprofileform" method="post" enctype="multipart/form-data">
                                
                                <div class="widgetbox login-information">
                                    <h4 class="widgettitle" align="center">Banner Upload</h4>
                                    <div class="widgetcontent">
                                       <div class="row-fluid">
                                          <div class="span6">   
                                              <label>Title</label>
                                             <span class="field"><input type="text" name="title" class="input-block-level" value="" /></span> 
                                          </div>
                                          <div class="span6">   
                                              <label>Banner Image</label>
                                             <span class="field"><input type="file" name="ban_image" class="input-block-level" value="" /></span> 
                                          </div>  
                                          <div class="span12" style="margin-left:0px;">   
                                              <label>Description</label>
                                             <span class="field">
                                                 <textarea name="desc" class="input-block-level"></textarea>
                                             </span> 
                                          </div> 
                                          <div class="span12" style="margin-left:0px;">   
                                             
                                             <span class="field">
                                                 <input type="submit" name="submit" value="submit" class="btn btn-primary"> 
                                             </span> 
                                          </div>      
                                        </div>
                                    </div>
                                </div>
								</form>
								<table class="table table-bordered responsive">
                    <thead>
                        <tr>
                            <th>Sl.No</th>
                            <th>Title</th>
							<th>Description</th>
                            <th>image</th>
							<th>action</th>
                        </tr>
                    </thead>
					<tbody>
					<?php
                    $i=1;
                      $sql=mysqli_query($conn,"SELECT * FROM `banner`");
                      while($data=mysqli_fetch_assoc($sql)){ 
                    ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $data['title']; ?></td>
                        <td><?php echo $data['descripition'];?></td>
                        <td><img src="banner/<?php echo $data['image']; ?>" height="50" width="50"></td>
                        <td></td>
                    </tr>
                    <?php $i++; } ?>
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
