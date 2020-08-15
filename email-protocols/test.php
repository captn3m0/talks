<?php
// header("Mime-Version: 1.0");
header('Content-Type: multipart/x-mixed-replace; boundary="--never-graduate--"');
header('Date: Tue, 01 Dec 2009 23:27:30 GMT');
header('Vary: Accept-Encoding,User-Agent');
?>
multipart-not-supported
--never-graduate--
Content-Type: text/html; charset=utf-8
Content-Base: http://localhost:1111/

<html>
<head>
    <link rel="stylesheet" href="http://localhost:2080/file.css">
</head>
<body>
 Hello from a html
    <script type="text/javascript" src="http://localhost:2080/file.js"></script>
</body>
</html>
--never-graduate--