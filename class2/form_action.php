<?php 
include('connection.php');
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$status = $_POST['status'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$account_number = rand(111111111,999999999);

$sql = "insert into user(name,email,phone,status,gender,dob,account_number)
values('$name','$email','$phone','$status','$gender','$dob',$account_number)
";
$result = $conn->query($sql);
if($result==true){
    header('Location:form.php');
}else{
    echo "Error";
} 
?>