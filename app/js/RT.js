var conn = new WebSocket('ws://localhost:8000');
conn.onopen = function(e) {
    console.log("Connection established!");
};

conn.onmessage = function(e) {

    alert(e.data);

}; 

setTimeout(function(){
    conn.send('user/novo_usuario');
},1000);
