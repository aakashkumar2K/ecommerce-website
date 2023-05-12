<?php
$SERVER="localhost";
$USERNAME="root";
$PASSWORD="";
$DATABASE="USER";
$conn=mysqli_connect($SERVER,$USERNAME,$PASSWORD,$DATABASE);
if($conn)
echo "successfull";
else
echo "not connected";
?>