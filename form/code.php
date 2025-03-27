

<?php 
session_start();
    include("./db.php");
    if(isset($_POST['msg'])){

        $name= mysqli_real_escape_string($conn,$_POST['name']);
        $email= mysqli_real_escape_string($conn,$_POST['email']);
        $msg= mysqli_real_escape_string($conn,$_POST['msg']);
        $subject= mysqli_real_escape_string($conn,$_POST['subject']);

        $sql = "insert into contact(name,email,subject,msg) values('$name','$email','$subject','$msg')";

        $result = mysqli_query($conn,$sql);
        if($result){
                // echo $result;
                $_SESSION['msg'] ="Submit success";
                header("location: /form/");
        }else{
            echo "something wrong :(";
        }

    } 


?>