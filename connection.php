<?php
$conn = mysqli_connect('localhost','root','','php_assignment');
if ($conn) {
    echo "New user inserted !!!";
}
else {
    echo "Error occured !!!";
}
?>