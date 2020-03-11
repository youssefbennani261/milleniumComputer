if(window.location.pathname==="/MelliniumComputer/pages/ed9eee4c247fee6711a6e41d3dfe8bcd.php"){
    $("#login").click((e)=>{
        e.preventDefault();
       $.post("../php/login.php",{login:$("#email").val(),pwd:$("#pwd").val()},(data)=>{
           if(data=="1"){
              window.location.href="http://localhost:8080/MelliniumComputer/pages/dashboard.php"
           }
           else
           alert("password incorrect");
       })
    })
}

if(window.location.pathname==="/MelliniumComputer/pages/shop.php"){
    document.getElementById("accueilMenu").className="nav-item dropdown active";
     var xhr=new XMLHttpRequest();
     xhr.onreadystatechange=function(){
    if(this.status==200 && this.readyState==4)
        {
            if(this.responseText!=1){
        var data= JSON.parse(this.response);
        var conten="";
        for(i=0;i<data.length;i++){
            if(data[i][1]==1){
            conten+= "<div class='col-lg-3 col-6'><div class='product-box'><div class='product-image'><img src='"+data[i][6]+"' alt=''></div><div class='info'><a href='detailproduits.php'><h4 class='title'>"+data[i][0]+"</h4></a><ul class='infolist'><li><p >Date d'annonce :"+data[i][4]+"</p></li><li><p class='productId'> Article Vendu </p></li><li><h5> PRIX : "+data[i][2]+"</h5></li></ul></div><div class='adtocartbtn'><a href='detailproduits.php' onclick='detailarticle("+data[i][7]+")'>Détail Produit</a></div></div></div>";
            }
            else 
            conten+= "<div class='col-lg-3 col-6'><div class='product-box'><div class='product-image'><img src='"+data[i][6]+"' alt=''></div><div class='info'><a href='detailproduits.php'><h4 class='title'>"+data[i][0]+"</h4></a><ul class='infolist'><li><p >Date d'annonce :"+data[i][4]+"</p></li><li><h5> PRIX : "+data[i][2]+"</h5></li></ul></div><div class='adtocartbtn'><a href='detailproduits.php' onclick='detailarticle("+data[i][7]+")'>Détail Produit</a></div></div></div>";

            
    //   if(data[i]['detail']){
    // var tab= JSON.parse(data[i]['detail']);
    //    var t= Object.keys(tab[0]);
    // for(j=0;j<t.length;j++){
    //     alert(t[j]+tab[0][t[j]]);

    // }
        }
document.getElementById("co").innerHTML=conten;
    }
}
         }  
     xhr.open("POST","../php/commande.php",true);
     xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");  
     xhr.send("op=1");
     
}

if(window.location.pathname==="/MelliniumComputer/pages/ordinateurs.php"){
   document.getElementById("ordinateursMenu").className="nav-item dropdown active";

    var xhr=new XMLHttpRequest();
    xhr.onreadystatechange=function(){
   if(this.status==200 && this.readyState==4)
       {
           if(this.responseText!=1){
       var data= JSON.parse(this.response);
       var conten="";
       for(i=0;i<data.length;i++){
        if(data[i][1]==1){
            conten+= "<div class='col-lg-3 col-6'><div class='product-box'><div class='product-image'><img src='"+data[i][6]+"' alt=''></div><div class='info'><a href='detailproduits.php'><h4 class='title'>"+data[i][0]+"</h4></a><ul class='infolist'><li><p >Date d'annonce :"+data[i][4]+"</p></li><li><p class='productId'> Article Vendu </p></li><li><h5> PRIX : "+data[i][2]+"</h5></li></ul></div><div class='adtocartbtn'><a href='detailproduits.php' onclick='detailarticle("+data[i][7]+")'>Détail Produit</a></div></div></div>";
            }
            else 
            conten+= "<div class='col-lg-3 col-6'><div class='product-box'><div class='product-image'><img src='"+data[i][6]+"' alt=''></div><div class='info'><a href='detailproduits.php'><h4 class='title'>"+data[i][0]+"</h4></a><ul class='infolist'><li><p >Date d'annonce :"+data[i][4]+"</p></li><li><h5> PRIX : "+data[i][2]+"</h5></li></ul></div><div class='adtocartbtn'><a href='detailproduits.php' onclick='detailarticle("+data[i][7]+")'>Détail Produit</a></div></div></div>";
       }
document.getElementById("ord").innerHTML=conten;
   }
}
        }  
    xhr.open("POST","../php/commande.php",true);
    xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");  
    xhr.send("op=2");

}
if(window.location.pathname==="/MelliniumComputer/pages/acinformatique.php"){
    document.getElementById("ordinateursMenu").className="nav-item dropdown active";
    var xhr=new XMLHttpRequest();
    xhr.onreadystatechange=function(){
   if(this.status==200 && this.readyState==4)
       {
           if(this.responseText!=1)
            {
       var data= JSON.parse(this.response);
       var conten="";
       for(i=0;i<data.length;i++){
        if(data[i][1]==1){
            conten+= "<div class='col-lg-3 col-6'><div class='product-box'><div class='product-image'><img src='"+data[i][6]+"' alt=''></div><div class='info'><a href='detailproduits.php'><h4 class='title'>"+data[i][0]+"</h4></a><ul class='infolist'><li><p >Date d'annonce :"+data[i][4]+"</p></li><li><p class='productId'> Article Vendu </p></li><li><h5> PRIX : "+data[i][2]+"</h5></li></ul></div><div class='adtocartbtn'><a href='detailproduits.php' onclick='detailarticle("+data[i][7]+")'>Détail Produit</a></div></div></div>";
            }
            else 
            conten+= "<div class='col-lg-3 col-6'><div class='product-box'><div class='product-image'><img src='"+data[i][6]+"' alt=''></div><div class='info'><a href='detailproduits.php'><h4 class='title'>"+data[i][0]+"</h4></a><ul class='infolist'><li><p >Date d'annonce :"+data[i][4]+"</p></li><li><h5> PRIX : "+data[i][2]+"</h5></li></ul></div><div class='adtocartbtn'><a href='detailproduits.php' onclick='detailarticle("+data[i][7]+")'>Détail Produit</a></div></div></div>";
       }
document.getElementById("acinfo").innerHTML=conten;
    }
   }
        }  
    xhr.open("POST","../php/commande.php",true);
    xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");  
    xhr.send("op=3");

}

if(window.location.pathname==="/MelliniumComputer/pages/stockagedonnes.php"){
    document.getElementById("ordinateursMenu").className="nav-item dropdown active";
    var xhr=new XMLHttpRequest();
    xhr.onreadystatechange=function(){
   if(this.status==200 && this.readyState==4)
       {
        if(this.responseText!=1)
        {
   var data= JSON.parse(this.response);
   var conten="";
   for(i=0;i<data.length;i++){
    if(data[i][1]==1){
        conten+= "<div class='col-lg-3 col-6'><div class='product-box'><div class='product-image'><img src='"+data[i][6]+"' alt=''></div><div class='info'><a href='detailproduits.php'><h4 class='title'>"+data[i][0]+"</h4></a><ul class='infolist'><li><p >Date d'annonce :"+data[i][4]+"</p></li><li><p class='productId'> Article Vendu </p></li><li><h5> PRIX : "+data[i][2]+"</h5></li></ul></div><div class='adtocartbtn'><a href='detailproduits.php' onclick='detailarticle("+data[i][7]+")'>Détail Produit</a></div></div></div>";
        }
        else 
        conten+= "<div class='col-lg-3 col-6'><div class='product-box'><div class='product-image'><img src='"+data[i][6]+"' alt=''></div><div class='info'><a href='detailproduits.php'><h4 class='title'>"+data[i][0]+"</h4></a><ul class='infolist'><li><p >Date d'annonce :"+data[i][4]+"</p></li><li><h5> PRIX : "+data[i][2]+"</h5></li></ul></div><div class='adtocartbtn'><a href='detailproduits.php' onclick='detailarticle("+data[i][7]+")'>Détail Produit</a></div></div></div>";
   }
document.getElementById("stock").innerHTML=conten;
}
   }
        }  
    xhr.open("POST","../php/commande.php",true);
    xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");  
    xhr.send("op=4");

}


if(window.location.pathname==="/MelliniumComputer/pages/impriments.php"){
    document.getElementById("ordinateursMenu").className="nav-item dropdown active";
    var xhr=new XMLHttpRequest();
    xhr.onreadystatechange=function(){
   if(this.status==200 && this.readyState==4)
       {
        if(this.responseText!=1)
        {
   var data= JSON.parse(this.response);
   var conten="";
   for(i=0;i<data.length;i++){
    if(data[i][1]==1){
        conten+= "<div class='col-lg-3 col-6'><div class='product-box'><div class='product-image'><img src='"+data[i][6]+"' alt=''></div><div class='info'><a href='detailproduits.php'><h4 class='title'>"+data[i][0]+"</h4></a><ul class='infolist'><li><p >Date d'annonce :"+data[i][4]+"</p></li><li><p class='productId'> Article Vendu </p></li><li><h5> PRIX : "+data[i][2]+"</h5></li></ul></div><div class='adtocartbtn'><a href='detailproduits.php' onclick='detailarticle("+data[i][7]+")'>Détail Produit</a></div></div></div>";
        }
        else 
        conten+= "<div class='col-lg-3 col-6'><div class='product-box'><div class='product-image'><img src='"+data[i][6]+"' alt=''></div><div class='info'><a href='detailproduits.php'><h4 class='title'>"+data[i][0]+"</h4></a><ul class='infolist'><li><p >Date d'annonce :"+data[i][4]+"</p></li><li><h5> PRIX : "+data[i][2]+"</h5></li></ul></div><div class='adtocartbtn'><a href='detailproduits.php' onclick='detailarticle("+data[i][7]+")'>Détail Produit</a></div></div></div>";
   }
document.getElementById("impri").innerHTML=conten;
}
   }
        }  
    xhr.open("POST","../php/commande.php",true);
    xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");  
    xhr.send("op=5");

}


if(window.location.pathname==="/MelliniumComputer/pages/logiciels.php"){
    document.getElementById("ordinateursMenu").className="nav-item dropdown active";
    var xhr=new XMLHttpRequest();
    xhr.onreadystatechange=function(){
   if(this.status==200 && this.readyState==4)
       {
        if(this.responseText!=1)
        {
   var data= JSON.parse(this.response);
   var conten="";
   for(i=0;i<data.length;i++){
    if(data[i][1]==1){
        conten+= "<div class='col-lg-3 col-6'><div class='product-box'><div class='product-image'><img src='"+data[i][6]+"' alt=''></div><div class='info'><a href='detailproduits.php'><h4 class='title'>"+data[i][0]+"</h4></a><ul class='infolist'><li><p >Date d'annonce :"+data[i][4]+"</p></li><li><p class='productId'> Article Vendu </p></li><li><h5> PRIX : "+data[i][2]+"</h5></li></ul></div><div class='adtocartbtn'><a href='detailproduits.php' onclick='detailarticle("+data[i][7]+")'>Détail Produit</a></div></div></div>";
        }
        else 
        conten+= "<div class='col-lg-3 col-6'><div class='product-box'><div class='product-image'><img src='"+data[i][6]+"' alt=''></div><div class='info'><a href='detailproduits.php'><h4 class='title'>"+data[i][0]+"</h4></a><ul class='infolist'><li><p >Date d'annonce :"+data[i][4]+"</p></li><li><h5> PRIX : "+data[i][2]+"</h5></li></ul></div><div class='adtocartbtn'><a href='detailproduits.php' onclick='detailarticle("+data[i][7]+")'>Détail Produit</a></div></div></div>";
   }
document.getElementById("logi").innerHTML=conten;
}
   }
        }  
    xhr.open("POST","../php/commande.php",true);
    xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");  
    xhr.send("op=6");

}

if(window.location.pathname==="/MelliniumComputer/pages/telephone.php"){
    document.getElementById("telephonesMenu").className="nav-item dropdown active";
    var xhr=new XMLHttpRequest();
    xhr.onreadystatechange=function(){
   if(this.status==200 && this.readyState==4)
       {
        if(this.responseText!=1)
        {
   var data= JSON.parse(this.response);
   var conten="";
   for(i=0;i<data.length;i++){
    if(data[i][1]==1){
        conten+= "<div class='col-lg-3 col-6'><div class='product-box'><div class='product-image'><img src='"+data[i][6]+"' alt=''></div><div class='info'><a href='detailproduits.php'><h4 class='title'>"+data[i][0]+"</h4></a><ul class='infolist'><li><p >Date d'annonce :"+data[i][4]+"</p></li><li><p class='productId'> Article Vendu </p></li><li><h5> PRIX : "+data[i][2]+"</h5></li></ul></div><div class='adtocartbtn'><a href='detailproduits.php' onclick='detailarticle("+data[i][7]+")'>Détail Produit</a></div></div></div>";
        }
        else 
        conten+= "<div class='col-lg-3 col-6'><div class='product-box'><div class='product-image'><img src='"+data[i][6]+"' alt=''></div><div class='info'><a href='detailproduits.php'><h4 class='title'>"+data[i][0]+"</h4></a><ul class='infolist'><li><p >Date d'annonce :"+data[i][4]+"</p></li><li><h5> PRIX : "+data[i][2]+"</h5></li></ul></div><div class='adtocartbtn'><a href='detailproduits.php' onclick='detailarticle("+data[i][7]+")'>Détail Produit</a></div></div></div>";
   }
document.getElementById("telepho").innerHTML=conten;
}
   }
        }  
    xhr.open("POST","../php/commande.php",true);
    xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");  
    xhr.send("op=7");

}

if(window.location.pathname==="/MelliniumComputer/pages/actelephone.php"){
    document.getElementById("telephonesMenu").className="nav-item dropdown active";
    var xhr=new XMLHttpRequest();
    xhr.onreadystatechange=function(){
   if(this.status==200 && this.readyState==4)
       {
        if(this.responseText!=1)
        {
   var data= JSON.parse(this.response);
   var conten="";
   for(i=0;i<data.length;i++){
    if(data[i][1]==1){
        conten+= "<div class='col-lg-3 col-6'><div class='product-box'><div class='product-image'><img src='"+data[i][6]+"' alt=''></div><div class='info'><a href='detailproduits.php'><h4 class='title'>"+data[i][0]+"</h4></a><ul class='infolist'><li><p >Date d'annonce :"+data[i][4]+"</p></li><li><p class='productId'> Article Vendu </p></li><li><h5> PRIX : "+data[i][2]+"</h5></li></ul></div><div class='adtocartbtn'><a href='detailproduits.php' onclick='detailarticle("+data[i][7]+")'>Détail Produit</a></div></div></div>";
        }
        else 
        conten+= "<div class='col-lg-3 col-6'><div class='product-box'><div class='product-image'><img src='"+data[i][6]+"' alt=''></div><div class='info'><a href='detailproduits.php'><h4 class='title'>"+data[i][0]+"</h4></a><ul class='infolist'><li><p >Date d'annonce :"+data[i][4]+"</p></li><li><h5> PRIX : "+data[i][2]+"</h5></li></ul></div><div class='adtocartbtn'><a href='detailproduits.php' onclick='detailarticle("+data[i][7]+")'>Détail Produit</a></div></div></div>";
   }
document.getElementById("actele").innerHTML=conten;
}
   }
        }  
    xhr.open("POST","../php/commande.php",true);
    xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");  
    xhr.send("op=8");

}

if(window.location.pathname==="/MelliniumComputer/pages/tablettes.php"){
    document.getElementById("telephonesMenu").className="nav-item dropdown active";
    var xhr=new XMLHttpRequest();
    xhr.onreadystatechange=function(){
   if(this.status==200 && this.readyState==4)
       {
        if(this.responseText!=1)
        {
   var data= JSON.parse(this.response);
   var conten="";
   for(i=0;i<data.length;i++){
    if(data[i][1]==1){
        conten+= "<div class='col-lg-3 col-6'><div class='product-box'><div class='product-image'><img src='"+data[i][6]+"' alt=''></div><div class='info'><a href='detailproduits.php'><h4 class='title'>"+data[i][0]+"</h4></a><ul class='infolist'><li><p >Date d'annonce :"+data[i][4]+"</p></li><li><p class='productId'> Article Vendu </p></li><li><h5> PRIX : "+data[i][2]+"</h5></li></ul></div><div class='adtocartbtn'><a href='detailproduits.php' onclick='detailarticle("+data[i][7]+")'>Détail Produit</a></div></div></div>";
        }
        else 
        conten+= "<div class='col-lg-3 col-6'><div class='product-box'><div class='product-image'><img src='"+data[i][6]+"' alt=''></div><div class='info'><a href='detailproduits.php'><h4 class='title'>"+data[i][0]+"</h4></a><ul class='infolist'><li><p >Date d'annonce :"+data[i][4]+"</p></li><li><h5> PRIX : "+data[i][2]+"</h5></li></ul></div><div class='adtocartbtn'><a href='detailproduits.php' onclick='detailarticle("+data[i][7]+")'>Détail Produit</a></div></div></div>";
   }
document.getElementById("table").innerHTML=conten;
}
   }
        }  
    xhr.open("POST","../php/commande.php",true);
    xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");  
    xhr.send("op=9");

}

if(window.location.pathname==="/MelliniumComputer/pages/actablettes.php"){
    document.getElementById("telephonesMenu").className="nav-item dropdown active";
    var xhr=new XMLHttpRequest();
    xhr.onreadystatechange=function(){
   if(this.status==200 && this.readyState==4)
       {
        if(this.responseText!=1)
        {
   var data= JSON.parse(this.response);
   var conten="";
   for(i=0;i<data.length;i++){
    if(data[i][1]==1){
        conten+= "<div class='col-lg-3 col-6'><div class='product-box'><div class='product-image'><img src='"+data[i][6]+"' alt=''></div><div class='info'><a href='detailproduits.php'><h4 class='title'>"+data[i][0]+"</h4></a><ul class='infolist'><li><p >Date d'annonce :"+data[i][4]+"</p></li><li><p class='productId'> Article Vendu </p></li><li><h5> PRIX : "+data[i][2]+"</h5></li></ul></div><div class='adtocartbtn'><a href='detailproduits.php' onclick='detailarticle("+data[i][7]+")'>Détail Produit</a></div></div></div>";
        }
        else 
        conten+= "<div class='col-lg-3 col-6'><div class='product-box'><div class='product-image'><img src='"+data[i][6]+"' alt=''></div><div class='info'><a href='detailproduits.php'><h4 class='title'>"+data[i][0]+"</h4></a><ul class='infolist'><li><p >Date d'annonce :"+data[i][4]+"</p></li><li><h5> PRIX : "+data[i][2]+"</h5></li></ul></div><div class='adtocartbtn'><a href='detailproduits.php' onclick='detailarticle("+data[i][7]+")'>Détail Produit</a></div></div></div>";
   }
document.getElementById("actable").innerHTML=conten;
}
   }
        }  
    xhr.open("POST","../php/commande.php",true);
    xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");  
    xhr.send("op=10");

}

function detailarticle( id){
    sessionStorage['id']=id;
    }



if(window.location.pathname==="/MelliniumComputer/pages/detailproduits.php"){
   
    aff();
    var xhr=new XMLHttpRequest();
     xhr.onreadystatechange=function(){
    if(this.status==200 && this.readyState==4)
        { 
        var data= JSON.parse(this.response);
       
        var donne=JSON.parse(data[0]);
       var img=data[1];
       afficherphoto(img);
        
    for(i=0;i<donne.length;i++){  
       
        if(donne[i][0]){
           
            document.getElementById("titre").innerHTML=donne[i][0];
        }

    if(donne[i][4]){

document.getElementById("date").innerHTML=donne[i][4];
}  
  if(donne[i][3]){
var cc="";
var nbr=donne[i][3];
  for(f=0;f<nbr;f++){
     cc+="<li><i class='fas fa-star'></i></li>";  
    
  }
document.getElementById("ani").innerHTML=cc;
  }


    if(donne[i]['detail']){
        var ss="";
     var tab= JSON.parse(donne[i]['detail']);
     var t= Object.keys(tab[0]);
     for(j=0;j<t.length;j++){
      
ss+="<p> "+t[j] +"  :  "+tab[0][t[j]]+"</p>";

     }
     document.getElementById("detai").innerHTML=ss;
    }

    if( donne[i][8]){
   document.getElementById("detailarticle").innerHTML=donne[i][8];
        
    }

  if( donne[i][2]){
   document.getElementById("prix").innerHTML=" PRIX : "+donne[i][2]+" DH";
        
    } 
    
    if( donne[i][1]){
        if(donne[i][1]==1)
   document.getElementById("vendu").innerHTML="<a href='#' class='mybtn'> Article Vendu  </a>";
        else
   document.getElementById("vendu").innerHTML="<a href='service.php' class='mybtn'> Info Achat  </a>";

    }
    if(donne[i][6])
    {
        document.getElementById("c").innerHTML+="<div class='owl-thumb-item'><img src='"+donne[i][6]+"' alt=''></div>";
     //  document.getElementById("product-details").innerHTML+="<div class='single-product-thumb'><img src='"+donne[i][6]+"' alt=''></div>";

    }
    

     }
}
         }  
         var a=sessionStorage['id'];
     xhr.open("POST","../php/commande.php",true);
     xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");  
     xhr.send("op=11&id="+a);

}


  function afficherphoto(images){
images=JSON.parse(images);
var c="";
var d="";
    for(i=0;i<images.length;i++)
{
c+=	"<div class='owl-thumb-item'><img src='"+images[i]+"' alt=''></div>";
d+="<div class='single-product-thumb'><img src='"+images[i]+"' alt=''></div>";
}

 document.getElementById("c").innerHTML=c;
 document.getElementById("product-details").innerHTML=d;

}

function aff(){
var xhr=new XMLHttpRequest();
xhr.onreadystatechange=function(){
if(this.status==200 && this.readyState==4)
   {
       if(this.responseText!=1){
   var data= JSON.parse(this.response);
   if(data.length<4){
       var a=data.length;
   }
   else
    a=4;
   var conten="";
   for(i=0;i<a;i++){
       conten+= "<div class='col-lg-3 col-6'><div class='product-box'><div class='product-image'><img src='"+data[i][6]+"' alt=''></div><div class='info'><a href='detailproduits.php'><h4 class='title'>"+data[i][0]+"</h4></a><ul class='infolist'><li><p >Date d'annonce :"+data[i][4]+"</p></li><li><h5> PRIX : "+data[i][2]+"</h5></li></ul></div><div class='adtocartbtn'><a href='detailproduits.php' onclick='detailarticle("+data[i][7]+")'>Détail Produit</a></div></div></div>";

   }
document.getElementById("aff").innerHTML+=conten;
}
}
    }  
xhr.open("POST","../php/commande.php",true);
xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");  
xhr.send("op=1");


}
   




