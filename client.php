<?php 
$host    = "127.0.0.1";
$port    = 25003;
$message = "Hello Server";
echo "Message To server :".$message;
$socket = socket_create(AF_INET, SOCK_STREAM, 0) or die("Could not create socket\n");
$result = socket_connect($socket, $host, $port) or die("Could not connect to server\n"); 
socket_write($socket, $message, strlen($message)) or die("Could not send data to server\n");
$result = socket_read ($socket, 1024) or die("Could not read server response\n");
echo "Reply From Server :".$result;
socket_close($socket);
