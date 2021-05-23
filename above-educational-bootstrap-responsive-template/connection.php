<?php      
    $host = "sql6.freemysqlhosting.net";  
    $user = "sql6411807";  
    $password = "kyRVg9HSXx";  
    $db_name = "sql6411807";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>