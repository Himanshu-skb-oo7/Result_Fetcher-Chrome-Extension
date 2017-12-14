<?php

$rollno=$_POST['input'];
echo $rollno;
$branch=$_POST['input1'];
echo $branch;
$studentname=$_POST['input2'];
echo $studentname;
$fathersname=$_POST['input3'];
echo $fathersname;
$marks=(int)$_POST['input4'];
echo $marks;

mysql_connect('localhost','root','');
mysql_select_db("collegedata");

$query="insert into requiredtable(Roll_No,Branch_Name,Student_Name,Fathers_Name,Marks) values ('$rollno','$branch','$studentname','$fathersname','$marks')";

mysql_query($query);
header("Location:http://www.bietjhs.ac.in/studentresultdisplay/frmprintreport.aspx");

?>