<?php
require("connection.php");
$op=isset($_GET["op"])?$_GET["op"]:0;
$op2=isset($_POST["op"])?$_POST["op"]:0;
$des=isset($_POST["des"])?$_POST["des"]:"";
$vendu=isset($_POST["vendu"])?$_POST["vendu"]:0;
$prix=isset($_POST["prix"])?$_POST["prix"]:0;
$est=isset($_POST["est"])?$_POST["est"]:0;
$cate=isset($_POST["cate"])?$_POST["cate"]:0;
$detail=isset($_POST["detail"])?$_POST["detail"]:"";
$id=isset($_POST["id"])?$_POST["id"]:0;
$id2=isset($_GET["id"])?$_GET["id"]:0;
$descp=isset($_POST["desc"])?$_POST["desc"]:"";
if($op==1){
    $stmt = $con->prepare("select count(id_article) from article");
     $stmt->execute();
     $stmt->bind_result($nbrarticle);
     $stmt->fetch();
     $stmt->close();

     $stmt2 = $con->prepare("select count(id_article) from article where vendue=?");
     $p=1;
     $stmt2->bind_param('i',$p);
     $stmt2->execute();
     $stmt2->bind_result($nbrarticlevendu);
     $stmt2->fetch();
     $stmt2->close();
     
     $stmt3 = $con->prepare("select count(id_article) from article where vendue=?");
     $p2=0;
     $stmt3->bind_param('i',$p2);
     $stmt3->execute();
     $stmt3->bind_result($nbrarticlenonvendu);
     $stmt3->fetch();
     $stmt3->close();

     echo json_encode(array("nbrarticle"=>$nbrarticle,"vendu"=>$nbrarticlevendu,"nonvendu"=>$nbrarticlenonvendu));
}
if($op==2){
    $stmt = $con->prepare("select designation,vendue,prixU,estimation,Nom_categorie,Details,id_article,a.src_profile,description from article a join categorie c on c.id_categorie=a.id_categorie");
    $stmt->execute();
   $result=$stmt->get_result();
   while($row=$result->fetch_array()){
       $tab[]=array("desi"=>$row[0],"vendue"=>$row[1],"prixU"=>$row[2],"estimation"=>$row[3],"categorie"=>$row[4],"detail"=>json_decode($row[5]),"id"=>$row[6],"src"=>$row[7],"desc"=>$row[8]);
   }
   echo json_encode($tab);
   $stmt->close();
}
if($op2==3){
    // $test = explode('.', $_FILES["profil"]["name"]);
    // $ext = end($test);
    // $name = md5(rand(100, 999)) . '.' . $ext;
    // $location = '../upload/' . $name;
    // move_uploaded_file($_FILES["profil"]["tmp_name"], $location);
    // $location2='../upload/'.$name;
    $stmt = $con->prepare("update article set designation=?,vendue=?,prixU=?,estimation=?,Details=?,id_categorie=?,description=? where id_article=?");
    $stmt->bind_param('siiisisi',$des,$vendu,$prix,$est,$detail,$cate,$descp,$id);
    $stmt->execute();
    $stmt->fetch();
    $stmt->close();
    
    // $stmt=$con->prepare("delete from image where id_article=?");
    // $stmt->bind_param('i',$id);
    // $stmt->execute();
    // $stmt->close();
    // $count = count($_FILES['files']['name']);
    // for ($i = 0; $i < $count; $i++) {
    //     $test = explode('.', $_FILES["files"]["name"][$i]);
    //     $ext = end($test);
    //     $name = md5(rand(100, 999)) . '.' . $ext;
    //     $location = '../upload/' . $name;
    //     move_uploaded_file($_FILES["files"]["tmp_name"][$i], $location);
    //     $location2='../upload/'.$name;
    //     $stmt2 = $con->prepare("insert into image (id_article,src) values(?,?)");
    //     $stmt2->bind_param('is',$id,$location2);
    //     $stmt2->execute();
    //     $stmt2->fetch();
    //     $stmt2->close();
    // }

}
if($op2==4){
    $stmt=$con->prepare("delete from article where id_article=?");
    $stmt->bind_param('i',$id);
    $stmt->execute();
    $stmt->close();

    $stmt=$con->prepare("delete from image where id_article=?");
    $stmt->bind_param('i',$id);
    $stmt->execute();
    $stmt->close();

}
if($op2==5){
    $timestamp = date("Y-m-d H:i:s");
    $vendu=0;
    $test = explode('.', $_FILES["profil"]["name"]);
    $ext = end($test);
    $name = md5(rand(100, 999)) . '.' . $ext;
    $location = '../upload/' . $name;
    move_uploaded_file($_FILES["profil"]["tmp_name"], $location);
    $location2='../upload/'.$name;
    $stmt = $con->prepare("insert into article (designation,vendue,prixU,estimation,date_publication,Details,id_categorie,src_profile,description) values(?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param('siiississ',$des,$vendu,$prix,$est,$timestamp,$detail,$cate,$location2,$descp);
    $stmt->execute();
    $article_id=$stmt->insert_id;
    $stmt->fetch();
    $stmt->close();
    $count = count($_FILES['files']['name']);
    for ($i = 0; $i < $count; $i++) {
        $test = explode('.', $_FILES["files"]["name"][$i]);
        $ext = end($test);
        $name = md5(rand(100, 999)) . '.' . $ext;
        echo $name;
        $location = '../upload/' . $name;
        move_uploaded_file($_FILES["files"]["tmp_name"][$i], $location);
        $location2='../upload/'.$name;
        $stmt2 = $con->prepare("insert into image (id_article,src) values(?,?)");
        $stmt2->bind_param('is',$article_id,$location2);
        $stmt2->execute();
        $stmt2->fetch();
        $stmt2->close();
    }
    
    // foreach ($_FILES['files']['name'] as $name => $value)  {
    //     echo $name;
    // }

}
if($op==6){
    $stmt = $con->prepare("select id_image,src from image where id_article=?");
    $stmt->bind_param('i',$id2);
    $stmt->execute();
    $result=$stmt->get_result();
    while($row=$result->fetch_array()){
        $data[]=array("id_image"=>$row[0],"src"=>$row[1]);
    }
    echo json_encode($data);
}

?>