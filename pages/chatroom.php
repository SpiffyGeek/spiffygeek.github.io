﻿<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>SpiffyChat</title>

    <!-- Include jquery, cookies, socket.io (client-side) and code -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://unpkg.com/cookie_js@1.2.2/cookie.min.js"></script>
    <script src="https://unpkg.com/socket.io-client@2/dist/socket.io.slim.js"></script>
    <script src="server.js"></script>
    <script src="chatrules.js"></script>

</head>
<body>
    <div style ="border:1px;">
        <ul id="messages"></ul>
        <form action="">
            <input id="m" autocomplete="off" /><button>Send</button>
        </form>
    </div>
</body>
</html>