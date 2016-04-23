<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
    </head>
    <body id="demo">
    <ul>
        <li v-for="user in users">@{{ user }}</li>
    </ul>
    <script src="//cdn.bootcss.com/vue/1.0.17/vue.min.js"></script>
    <script src="//cdn.bootcss.com/socket.io/1.4.5/socket.io.min.js"></script>
    <script>
        var socket = io('127.0.0.1:3000');
        new Vue({
            el: '#demo',
            data: {
                users: []
            },
            ready: function() {
                socket.on('test-channel:App\\Events\\ANewMessage', function(data) {
                    this.users.push(data.name);
                    console.log(data.name);
                }.bind(this));
            }
        });
    </script>
    </body>
</html>
