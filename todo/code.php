<?php 
session_start();
    include("./connection.php");
    if(isset($_POST['msg'])){

        $name= mysqli_real_escape_string($conn,$_POST['name']);
        $msg= mysqli_real_escape_string($conn,$_POST['msg']);
   
// print_r(["name"=>$name,"msg"=>$msg]);
// die();
        $sql = "insert into users(name,textarea) values('$name','$msg')";

        $result = mysqli_query($conn,$sql);
        if($result){
                // echo $result;
                $_SESSION['msg'] ="Submit success";
                header("location: /todo/");
        }else{
            echo "something wrong :(";
        }

    } 


?>