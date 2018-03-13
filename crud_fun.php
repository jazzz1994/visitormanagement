


<?php

      function dbConnection($host,$uname,$pass,$db){
        $localhost=$host;
        $username=$uname;
        $password=$pass;
        $dbname=$db;

        $conn=mysqli_connect($localhost,$username,$password,$dbname);
              if($conn){
                $msg = 'connected sucessfully';
              }
              else{
                $msg = 'connection error';
              }
              echo $msg;
              return $conn;

      }



     function insert($tname,$arr){
            $conn = dbConnection('localhost','root','','visitormnt');
            $array_keys = array_keys($arr);
            $array_values = array_values($arr);
            $field_values= implode(', ',$array_keys);
            $data_values="'".implode("','",$array_values)."'";
            $sql="INSERT into". " ".$tname." (".$field_values. ") VALUES (".$data_values.")";
            mysqli_query($conn,$sql);
            mysqli_close($conn);
          }

    function read($tname,$arr){
           $conn = dbConnection('localhost','root','','visitormnt');
           $field_values = implode(', ',$arr);
           $sql ="SELECT $field_values FROM $tname";
           $res = mysqli_query($conn,$sql);
           $row = mysqli_fetch_assoc($res);
           return $row;
           mysqli_close($conn);
            }
    function delete($tname,$arr){
          $conn = dbConnection('localhost','root','','visitormnt');
          $array_keys = array_keys($arr);
          $array_values = array_values($arr);
          $field_values = implode(' ',$array_keys);
          $data_values = "'".implode(', ',$array_values)."'";
          $sql="DELETE FROM $tname WHERE $field_values = $data_values";
          echo $sql;
          mysqli_query($conn,$sql);
          mysqli_close($conn);
    }

    function update($tname,$arr,$cond){
      $conn = dbConnection('localhost','root','','visitormnt');
      $id = $cond['id'];
      $sql = "UPDATE $tname SET ";
       foreach($arr as $key=> $value){
            $sql .= $key."='".$value."'," ;
         }
       $sql.=rtrim($sql,',');
       $sql.="WHERE id=".$id ;
      mysqli_query($conn,$sql);
      mysqli_close($conn);
       }

$tname='dumb';
$arr =array('fname'=>'jasdeep');
$cond = array('id'=>1);
delete($tname,$arr);



// $arr=array("firstname","lastname");
// print_r($arr);
// $field_values= implode('- ',$arr);
// echo "$field_values";

?>
