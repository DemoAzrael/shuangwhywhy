<?php
//连接新浪数据库
//音乐，游戏，影视，动漫db_api2
function index_c_p($type)
{
    $link = mysql_connect(SAE_MYSQL_HOST_M . ':' . SAE_MYSQL_PORT, SAE_MYSQL_USER, SAE_MYSQL_PASS);
    mysql_select_db(SAE_MYSQL_DB, $link);
    $sql = "select * from s_picture  where type = '{$type}'"; //SQL语句
    $result = mysql_query($sql, $link); //查询
    mysql_data_seek($result, 0);
    $array = array();
    while ($row = mysql_fetch_row($result)) {
        $array[]=$row;
    }
    return $array;

}
?>