<?php
$conn = new msqli(localhost, root, root)
if($conn->connect_error){
die("uncoonectted: ". $conn->connect_error .)
}
echo "connected";
?>
