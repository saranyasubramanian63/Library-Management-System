<?php
session_start();
$con=mysql_connect("localhost","root","12345678");
mysql_select_db("library");
if (!$con) 
{
    echo "Unable to connect to DB: " . mysql_error();
    exit;
}
if (!mysql_select_db("library")) 
{
    echo "Unable to select DB: " . mysql_error();
    exit;

	}







?>