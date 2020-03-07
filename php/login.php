<?php
require("connection.php");
$pwd=isset($_POST["pwd"])?md5($_POST["pwd"]):"";
$login=isset($_POST["login"])?$_POST["login"]:"";
// $sql=mysqli_query($con,"select * from admin where login='".$login."'");
$stmt = $con->prepare("select nom,prenom,email from admin where login=? and mot_Passe=?");
     $stmt->bind_param("ss",$login,$pwd);
     $stmt->execute();
     $stmt->bind_result($nom,$prenom,$email);
     $stmt->store_result();
     if($stmt->num_rows == 1) {
          $result = $stmt->fetch();
          
}
// print_r($sql->num_rows);







?>