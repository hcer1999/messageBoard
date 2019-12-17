<?php
/*
*Created by .
*User:Hcer
*Date:2019/12/12
*Time:19:41
*/

include_once "base.php";


$username = $_POST['username'];
$content =$_POST['content'];
$time = time();

if($username === ''){
    echo "<script>alert('留言人不能为空！');location.href='./index.html';</script>";
}elseif ($content === '') {
    echo "<script>alert('留言内容不能为空！');location.href='./index.html';</script>";
}

$sql = "INSERT INTO data(username,content,date) VALUES('{$username}','{$content}',$time)";

// // echo $sql;
// var_dump($con);
// var_dump($con -> query($sql));

if ($con -> query($sql)){
    //添加成功
    echo "<script>alert('留言成功！');location.href='./index.html';</script>";
}else{
    //添加失败
    echo "<script>alert('留言失败！{$sql}');location.href='./index.html';</script>";
}
$con -> close();
?>