<?php
header ("Content-type: text/html;charset=UTF-8"); //html/plain
foreach ($_SERVER as $name => $value) {
   if (substr($name, 0, 5) == 'HTTP_') { 
	   $head .= "\r\n" . str_replace(' ', '-', ucwords(strtolower(str_replace('_', ' ', substr($name, 5))))) . ": " . $value; 
   } 
} 
echo  urldecode("url: " . $_SERVER['REQUEST_URI'] . "\r\n" . "post: " . file_get_contents("php://input") . "\r\n" . $head);
return;
