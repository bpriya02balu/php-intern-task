<?php
class dbconnect{
    function_construct(){
require_once('congig.php');
$conn=mysql_connect(HOST,USER,PASSWORD);
mysql_select_db(DATABASE,$conn);
if(!conn)
{
    die("connot connect the database")
}
return $conn;
    }
}
?>