<?php
$connection = new mysqli("localhost","root","","dbtest");
if(!$connection)
{
     die('oops connection problem ! --> '.mysql_error());
}
?>