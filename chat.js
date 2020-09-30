
var conn = new WebSocket('ws://10.10.19.29:8080');

conn.onopen = function(e) {
    console.log("Conexão estabelecida!");
};

conn.onmessage = function(e) {    
    showMessages('other', e.data)
};


var formulario  = document.getElementById('formChat');
var mensagem    = document.getElementById('mensagem');
var nome        = document.getElementById('nome');
var btenviar    = document.getElementById('bt-enviar');

var area_content    = document.getElementById('area-chat');

btenviar.addEventListener('click', function(){
    
    if(mensagem.value != '') {
        
        var msg = { 'name' : nome.value , 'msg' : mensagem.value };
        msg = JSON.stringify(msg);
        console.log(msg);
        
        conn.send(msg);
        
        showMessages('me', msg );
        
        mensagem.value = '';
        
    }
       
});

function showMessages(who, data) {
    
    data = JSON.parse(data);
    
    console.log(data);

    var div = document.createElement('div');
    div.setAttribute('class', who);
    
    var i = document.createElement('i');
    i.setAttribute('class', 'fa fa-commenting-o fa-2x');
    
    var p_nome = document.createElement('p');
    p_nome.setAttribute('class', 'b-me');
    p_nome.textContent = data.name+" : ";
    
    var p_msg = document.createElement('p');
    p_msg.textContent = data.msg;
    
    div.appendChild(i);
    div.appendChild(p_nome);
    div.appendChild(p_msg);
        
    area_content.appendChild(div);
    
}
/*
<div class="row me">    
    <i class="fa fa-commenting-o fa-2x" aria-hidden="true"></i>    
    <p class="b-me">Saulo Frauches.:</p>
    <p>Mensagem digitada por saulo...</p>
</div>

conn.onmessage = function(e) {
    console.log(e.data);
};

conn.send('Hello World!');
 * 
 */