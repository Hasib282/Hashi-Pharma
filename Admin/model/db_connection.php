<?php 
function db_conn()
{
    $mydb="
    (DESCRIPTION =
        (ADDRESS = (PROTOCOL = TCP)(HOST = DESKTOP-QLO3OM5)(PORT = 1522))
        (CONNECT_DATA =
            (SERVER = DEDICATED)
            (SERVICE_NAME = XE)
        )
    )";

    $conn_username = "HashiPharma";
    $conn_password = "Hasib282";

    $opt = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_NUM,
    ];

    try{
        $conn = new PDO("oci:dbname=".$mydb, $conn_username, $conn_password, $opt);
    }
    catch(PDOException $e){
        echo ($e->getMessage());
    }
    return $conn;
}

?>
