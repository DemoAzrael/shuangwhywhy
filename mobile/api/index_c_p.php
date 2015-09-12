<?php
header("content-type:text/html;charset=utf-8");
require "../db_api.php";
$type = $_POST["type"];
$data = index_c_p($type);
echo json_encode($data)
?>