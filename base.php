<?php
/*
*Created by .
*User:Hcer
*Date:2019/12/12
*Time:19:35
*/

$db_host = '127.0.0.1';
$db_user = 'root';
$db_pwd = 'root';
$db_name = 'lyb';

$con = new mysqli($db_host,$db_user,$db_pwd,$db_name);

if ($con -> connect_error){
    echo '数据库连接失败！！';
}
?>