<?php
/**connects to the database localhost of user root and password takuntoh180**/
$connection=new mysqli("localhost","root","takuntoh180");
if($connection -> connect_error) die("failed to connect to server");

?>
