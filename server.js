var app = require('express')();
var http = require('http').createServer(app);

app.get('/', function (req, res) {
    res.sendFile(__dirname + '/pages/chatroom.html');
});

http.listen(3000, function(){
  console.log('listening on *:3000');
});