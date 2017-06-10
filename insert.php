<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("127.0.0.1:49973", "azure", "6#vWHD_$", "localdb");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$usermsg = mysqli_real_escape_string($link, $_REQUEST['usermsg']);


 
// attempt insert query execution
$sql = "INSERT INTO msg (message) VALUES ('$usermsg')";

if(mysqli_query($link, $sql)){
    echo "<meta http-equiv=\"refresh\" content=\"0;URL=home.php\">";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>

