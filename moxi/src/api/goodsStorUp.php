<?php
    include 'connect.php';
    $currentCon = isset($_GET["goodsname"])?$_GET["goodsname"] : "hhhhh";
    // echo $currentCon;
    $sql = "select * from goodslist  where goodsname='$currentCon' order by price DESC";
      //编写sql语句
    // $sql = 'select * from moxicgoods';
    //获取查询结果集
    $result = $conn->query($sql);
    //使用查询结果集
    $row = $result->fetch_all(MYSQLI_ASSOC);
    //释放查询结果集，避免资源浪费
    $result->close();
    //把结果输出到前台
    echo json_encode($row,JSON_UNESCAPED_UNICODE);
    // 关闭数据库，避免资源浪费
    $conn->close();
?>