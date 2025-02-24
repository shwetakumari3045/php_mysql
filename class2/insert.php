<?php
include('connection.php');
// $sql = "insert into user(name,email,phone,gender,status,dob)
// values
// ('Aman sharma','aman.sharma@gmail.com','+91 9555199515','male',1,'1995-08-26'),
// ('Swastik Kumar','swastik.dashing@gmail.com','+91 7701825154','male',1,'2002-08-10'),
// ('Rohit Kumar', 'rohit.kumar@gmail.com','+91 9998765432','male','1', '1989-09-10'),
// ('Neha Gupta', 'neha.gupta@gmail.com', '9887654321', 'female', '1', '1993-05-22'),
// ('Vishal Singh', 'vishal.singh@gmail.com', '9876456789', 'male', '1', '1990-12-30'),
// ('Divya Reddy', 'divya.reddy@gmail.com', '9506782341', 'female', '1', '1994-06-14'),
// ('Karan Joshi', 'karan.joshi@hotmail.com', '9876126789', 'male', '1', '1991-11-02'),
// ('Sanya Mehta', 'sanya.mehta@yahoo.com', '9392939393', 'female', '1', '1996-01-10'),
// ('Aditya Verma', 'aditya.verma@gmail.com', '9876549876', 'male', '1', '1990-08-03'),
// ('Ritika Desai', 'ritika.desai@hotmail.com', '9887768999', 'female', '1', '1995-04-28')";
// var_dump($sql);


$sql = "update user set account_number = ".rand(111111111,999999999)." where user_id=2";
$result  = $conn->query($sql);
var_dump($result);
?>