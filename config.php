<?php
$localhost='localhost';
$username='root';
$password='';
$dbname='visitormnt';

$conn=mysqli_connect($localhost,$username,$password,$dbname);
      if($conn){
        echo 'connected sucessfully';
      }
      else{
        echo 'connection error';
      }

?>
