<?php
require("connection.php");
$pwd=isset($_POST["pwd"])?md5($_POST["pwd"]):"";
$login=isset($_POST["login"])?$_POST["login"]:"";
$stmt = $con->prepare("select * from admin where login=? and mot_Passe=?");
     $stmt->bind_param("ss",$login,$pwd);
     $stmt->execute();
     $result = $stmt->get_result();
     if($result->num_rows){
          session_start();
          $_SESSION["admin"]=$result->fetch_assoc();
          echo 1;
     }else
     echo 0;


$stmt->close();

// print_r($sql->num_rows);

?>