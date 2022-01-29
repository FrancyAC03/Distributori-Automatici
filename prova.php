<?php
    require_once('open_php_user.php');
    $sql="SELECT Quantita FROM contenere WHERE IdDistributore = 1 and IdBevanda = 1";
    $result=mysqli_query($conn,$sql);
    $result=mysqli_fetch_assoc($result);
    echo $result["Quantita"];
?>