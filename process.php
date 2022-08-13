<?php 
include 'dbconn.php';
if(isset($_POST['uname'])){
    $name=$_POST['uname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $role=$_POST['role'];                       
    $sql="INSERT INTO registration(name,email,password,role)VALUES('$name','$email','$password','$role')";
    $result=mysqli_query($conn,$sql);
    if($result){
        $msg="done";
    }else{
        $msg="sorry";
    }
    echo $msg;
    exit;
}
else if(isset($_POST['lemail'])){
    $lemail=$_POST['lemail'];
    $lpass=$_POST['lpass'];
    $sql="SELECT * FROM `registration` WHERE `email`='".$lemail."' AND `password`='".$lpass."'";
        $result=mysqli_query($conn,$sql);
        $rowcount=mysqli_num_rows($result);
        $data=mysqli_fetch_assoc($result);
        if($rowcount==1){
         session_start();
         $_SESSION['user']=$data['id'];
            $msg="done";
        }else{
            $msg="sorry";
        }  
        echo $msg;
        exit;
}
?>