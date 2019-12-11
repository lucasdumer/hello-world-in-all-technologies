const Hapi = require('hapi');

const server = Hapi.server({
    port: process.env.PORT
});

server.route({
    method: 'GET',
    path: '/',
    handler: function (request, h) {
        return "Hello World!";
    }
});

server.start();