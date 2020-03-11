<?php
require('connection.php');
$op=isset($_POST['op'])?$_POST['op']:'';
$id=isset($_POST['id'])?$_POST['id']:0;
  if($op==1){
   $req = mysqli_query($con,"select description,vendue,prixU,estimation,Date(date_publication),Details,src_profile,id_article from article ORDER BY date_publication desc") or die("!!!!!!!!!!!!!!!!");
   if(mysqli_num_rows($req)){
   while ($row=mysqli_fetch_array($req)) {
      $tab[]=array(0=>$row[0],1=>$row[1],2=>$row[2],3=>$row[3],4=>$row[4],'detail'=>$row[5],6=>$row[6],7=>$row[7]); 
    }
  $tab=json_encode($tab);
  echo $tab;}
  else 
  echo 1;
}
  if($op==2){
    $req = mysqli_query($con,"select description,vendue,prixU,estimation,Date(date_publication),Details,src_profile,id_article from article WHERE id_categorie=1 ORDER BY date_publication desc") or die("!!!!!!!!!!!!!!!!");
   if(mysqli_num_rows($req)){
 while ($row=mysqli_fetch_array($req)) {
       $tab[]=array(0=>$row[0],1=>$row[1],2=>$row[2],3=>$row[3],4=>$row[4],'detail'=>$row[5],6=>$row[6],7=>$row[7]); 
     }
   $tab=json_encode($tab);
   echo $tab;
   }
   else
   echo 1;
   

  }
   if($op==3){
    $req = mysqli_query($con,"select description,vendue,prixU,estimation,Date(date_publication),Details,src_profile,id_article from article WHERE id_categorie=2 ORDER BY date_publication desc") or die("!!!!!!!!!!!!!!!!");
   if(mysqli_num_rows($req)){
while ($row=mysqli_fetch_array($req)) {
       $tab[]=array(0=>$row[0],1=>$row[1],2=>$row[2],3=>$row[3],4=>$row[4],'detail'=>$row[5],6=>$row[6],7=>$row[7]); 
     }
   $tab=json_encode($tab);
   echo $tab;


   }else
   echo 1;
    

  }
  if($op==4){
    $req = mysqli_query($con,"select description,vendue,prixU,estimation,Date(date_publication),Details,src_profile,id_article from article WHERE id_categorie=3 ORDER BY date_publication desc") or die("!!!!!!!!!!!!!!!!");
   if(mysqli_num_rows($req)){
while ($row=mysqli_fetch_array($req)) {
       $tab[]=array(0=>$row[0],1=>$row[1],2=>$row[2],3=>$row[3],4=>$row[4],'detail'=>$row[5],6=>$row[6],7=>$row[7]); 
     }
   $tab=json_encode($tab);
   echo $tab;


   }else
   echo 1;
    

  }

  if($op==5){
    $req = mysqli_query($con,"select description,vendue,prixU,estimation,Date(date_publication),Details,src_profile,id_article from article WHERE id_categorie=4 ORDER BY date_publication desc") or die("!!!!!!!!!!!!!!!!");
   if(mysqli_num_rows($req)){
while ($row=mysqli_fetch_array($req)) {
       $tab[]=array(0=>$row[0],1=>$row[1],2=>$row[2],3=>$row[3],4=>$row[4],'detail'=>$row[5],6=>$row[6],7=>$row[7]); 
     }
   $tab=json_encode($tab);
   echo $tab;


   }else
   echo 1;
    

  }
  if($op==6){
    $req = mysqli_query($con,"select description,vendue,prixU,estimation,Date(date_publication),Details,src_profile,id_article from article WHERE id_categorie=5 ORDER BY date_publication desc") or die("!!!!!!!!!!!!!!!!");
   if(mysqli_num_rows($req)){
while ($row=mysqli_fetch_array($req)) {
       $tab[]=array(0=>$row[0],1=>$row[1],2=>$row[2],3=>$row[3],4=>$row[4],'detail'=>$row[5],6=>$row[6],7=>$row[7]); 
     }
   $tab=json_encode($tab);
   echo $tab;


   }else
   echo 1;
    

  }
  if($op==7){
    $req = mysqli_query($con,"select description,vendue,prixU,estimation,Date(date_publication),Details,src_profile,id_article from article WHERE id_categorie=6 ORDER BY date_publication desc") or die("!!!!!!!!!!!!!!!!");
   if(mysqli_num_rows($req)){
while ($row=mysqli_fetch_array($req)) {
       $tab[]=array(0=>$row[0],1=>$row[1],2=>$row[2],3=>$row[3],4=>$row[4],'detail'=>$row[5],6=>$row[6],7=>$row[7]); 
     }
   $tab=json_encode($tab);
   echo $tab;


   }else
   echo 1;
    

  }
  if($op==8){
    $req = mysqli_query($con,"select description,vendue,prixU,estimation,Date(date_publication),Details,src_profile,id_article from article WHERE id_categorie=7 ORDER BY date_publication desc") or die("!!!!!!!!!!!!!!!!");
   if(mysqli_num_rows($req)){
while ($row=mysqli_fetch_array($req)) {
       $tab[]=array(0=>$row[0],1=>$row[1],2=>$row[2],3=>$row[3],4=>$row[4],'detail'=>$row[5],6=>$row[6],7=>$row[7]); 
     }
   $tab=json_encode($tab);
   echo $tab;


   }else
   echo 1;
    


  }
  if($op==9){
    $req = mysqli_query($con,"select description,vendue,prixU,estimation,Date(date_publication),Details,src_profile ,id_article from article WHERE id_categorie=8 ORDER BY date_publication desc") or die("!!!!!!!!!!!!!!!!");
   if(mysqli_num_rows($req)){
while ($row=mysqli_fetch_array($req)) {
       $tab[]=array(0=>$row[0],1=>$row[1],2=>$row[2],3=>$row[3],4=>$row[4],'detail'=>$row[5],6=>$row[6],7=>$row[7]); 
     }
   $tab=json_encode($tab);
   echo $tab;


   }else
   echo 1;
    

  }
  if($op==10){
    $req = mysqli_query($con,"select description,vendue,prixU,estimation,Date(date_publication),Details,src_profile ,id_article from article WHERE id_categorie=9 ORDER BY date_publication desc") or die("!!!!!!!!!!!!!!!!");
   if(mysqli_num_rows($req)){
while ($row=mysqli_fetch_array($req)) {
       $tab[]=array(0=>$row[0],1=>$row[1],2=>$row[2],3=>$row[3],4=>$row[4],'detail'=>$row[5],6=>$row[6],7=>$row[7]); 
     }
   $tab=json_encode($tab);
   echo $tab;


   }else
   echo 1;
    

  }

  if($op==11){

    $req = mysqli_query($con,"select description,vendue,prixU,estimation,Date(date_publication),Details,src_profile ,id_article,designation from article WHERE  id_article=".$id."") or die("!!!!!!!!!!!!!!!!");
    $img = mysqli_query($con," select src from image WHERE id_article=".$id."") or die("!!!!!!!!!!!!!!!!");
    
    while ($row=mysqli_fetch_array($req)) {
        $tab[]=array(0=>$row[0],1=>$row[1],2=>$row[2],3=>$row[3],4=>$row[4],'detail'=>$row[5],6=>$row[6],7=>$row[7],8=>$row[8]);
      }
      while ($row=mysqli_fetch_array($img)) {
        $im[]=array(0=>$row[0]); 
      }
      
    $tab=json_encode($tab);
    $im=json_encode($im);
     $tt=array(0=>$tab,1=>$im);

    echo  json_encode($tt);
 

  }

?>