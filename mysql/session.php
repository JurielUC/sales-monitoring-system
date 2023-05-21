<?php 
    session_start();
    require 'db_connect.php';
    
    $user_check=$_SESSION['email'];
    $ses_sql=mysqli_query($conn,"select * from tb_user where email='$user_check'");
    $row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
    $lgn_email=$row['email'];
    $lgn_id=$row['id'];
    //$lgn_uid=$row['unique_id'];
    $lgn_name=$row['name'];
    $lgn_psw=$row['password'];

    if(!$_SESSION['email'])
    {  
        header("Location: ../index.php"); //redirect to the login page to secure the welcome page without login access.  
    }  
?>