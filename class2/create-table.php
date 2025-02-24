<?php
include ("connection.php");

$sql = "create table user(
user_id int primary key not null auto_increment,
name varchar(200) not null,
 email varchar(200) not null,
    phone varchar(20) not null,     
    gender varchar(6) not null default 'male',
    status boolean not null default 0,
    dob datetime not null default CURRENT_TIMESTAMP
)";

// var_dump($sql);
$alter_table_users  = "alter table user add column account_number int not null";
$alter_balance_column  = "alter table user add column account_balance int not null default 0";

// $conn->query($alter_balance_column);

$transaction_table = "create table transaction(
    txn_id int primary key not null auto_increment,
    receipt_id int not null, 
    user_id int,
    amount float not null,
    type enum('credit','debit') not null, 
    txn_date datetime not null default CURRENT_TIMESTAMP,
    foreign key (user_id) references  users(user_id)
)";
$conn->query($transaction_table); 

?>