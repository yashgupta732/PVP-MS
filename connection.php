<!-- connection.php-->
<!-- Connection To MYSQL Database -->
<?php
    $server = "localhost:3308";
    $username = "root";
    $password = "";
    $db = "CRS";

    $con = mysqli_connect($server,$username,$password,$db);

    if($con)
    {
        echo "";
    }
    else
    {
        echo "Error in Connection";
    }
?>