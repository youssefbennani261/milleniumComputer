<?php
require("connection.php");
$pwd=isset($_POST["pwd"])?md5($_POST["pwd"]):"";
$login=isset($_POST["login"])?$_POST["login"]:"";
// $sql=mysqli_query($con,"select * from admin where login='".$login."'");
$stmt = $con->prepare("select * from admin where (login=? or email=?) and mot_Passe=?");
     $stmt->bind_param("sss",$login,$login,$pwd);
     $stmt->execute();
     $result = $stmt->get_result();
     if($result->num_rows){
          session_start();
          $_SESSION["admin"]=$result->fetch_assoc();
          echo 1;
     }


$stmt->close();

// print_r($sql->num_rows);







?>