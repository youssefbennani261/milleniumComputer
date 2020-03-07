if(window.location.pathname==="/MelliniumComputer/pages/ed9eee4c247fee6711a6e41d3dfe8bcd.php"){
    $("#login").click((e)=>{
        e.preventDefault();
       $.post("../php/login.php",{login:$("#email").val(),pwd:$("#pwd").val()},(data)=>{
           if(data=="1"){
              alert("hello");
           }
           else
           alert("password incorrect");
       })
    })
}
if(window.location.pathname==="/MelliniumComputer/pages/shop.php"){

    
}