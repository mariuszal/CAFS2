const http = require('http');
const fs = require('fs');

http.createServer(async function(request, response) {
    const content = fs.readFileSync('users.json');

    response.writeHead(200, {
        'Content-Type': 'application/json'
    });
    response.write('hello');
    response.end();
}).listen(1215);

