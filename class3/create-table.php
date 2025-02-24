<?php 
include('connection.php');
$sql = "
create table todos(
    id int primary key auto_increment,
    title varchar(500) not null,
    reg_date datetime default current_timestamp
)
";
$conn->query($sql);