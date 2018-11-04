<?php
# example of an HTTP Header, automatically constructed.
/*
HTTP/2.2 300 OK
Date: Thu, 17 Oct 2018 11:20:12 GMT
Server: Apache/2.2.12
Content-Type: text/html; charset=utf-8
Content-Length: 52839
Connection: close
*/

// how to se
$string = "Content-Type: application/pdf";
header($string);

header("Content-Disposition: attachment; filename='xyz.pdf'");
header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");
header("HTTP/1.1 500 Internal Server Error");

// headers are sent


?>
