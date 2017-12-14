<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "";

$conn = mysqli_connect($servername, $username, $dbname);
$createDatabase="create database awesomee";

mysqli_query($conn,$createDatabase);

$dbname="awesomee";
$conn1=mysqli_connect($servername,$username,$password,$dbname);

$createTableSQL="create table requiredtable(
 Roll_No varchar(10) NOT NULL,
 Branch_Name varchar(50) NOT NULL,
 Student_Name varchar(50) NOT NULL,
 Fathers_Name varchar(50) NOT NULL,
 Marks int(10) NOT NULL,
 Percentile decimal(5,2) NOT NULL,
 Room varchar(10) NOT NULL
)";


mysqli_query($conn1, $createTableSQL);
?>