<?php
const host  = "localhost";
const user = "phuoc";
const pass = "deptrai123";
const db_name = "user";

session_start();
  $conn = new mysqli(host,user,pass,db_name);
if($conn->connect_error){
    die('Connection failed: ' . $conn->connect_error);
}
$_SESSION['connect'] =  $conn;



$query = 'create table userList(
    id int auto_increment primary key,
    name varchar(200) not null,
    country varchar(200) not null,
    title varchar(200) not null
)';

