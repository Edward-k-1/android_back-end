<?php
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "android";
 $dbpass = "android";
 $db = "android";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

 return $conn;
 }

function CloseCon($conn)
 {
 $conn -> close();
 }

?>
