<?php

mysql_connect("localhost", "root", "");
mysql_select_db("servicel");

if (isset($_GET['id'])){

    $id = mysql_real_escape_string($_GET['id']);
    $query = mysql_query("SELECT * FROM tblboleta WHERE id = '$id'");
    while ($row = mysql_fetch_assoc($query)){

        $imageData = $row["boleta"];
        $imageType = $row["tipo"];

    }
    header("content-type: image/$imageType");
    print $imageData;
}

?>