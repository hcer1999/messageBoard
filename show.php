<?php
/*
*Created by .
*User:Hcer
*Date:2019/12/13
*Time:21:10
*/
include 'base.php';


$sql = 'SELECT * FROM data ORDER BY id DESC';

$result = $con -> query($sql);

$data = [];
if ($result -> num_rows > 0){
    //查询成功有数据
    while ($row = $result -> fetch_assoc()){
        array_push($data,$row);
    }
    $data = array(
        "state" => 1,
        "info" => $data
    );
}else{
    //查询失败或者无数据
    $data = array(
        "state" => -1,
        "info" => "无数据！"
    );
}
echo  json_encode($data);
?>