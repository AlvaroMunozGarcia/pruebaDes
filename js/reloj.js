function tick(){
        reloj.innerText=new Date().toLocaleTimeString();

}
let reloj =document.getElementById("relojCliente");
let intervalid=window.setInterval(tick, 500);