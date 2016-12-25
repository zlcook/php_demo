<!DOCTYPE HTML> 
<html>
<head>
<meta charset="utf-8">
<title>图书管理系统首页</title>
<style type="text/css">
table ,tr,td{
	border: 1px black solid;
}
</style>
</head>
<body> 
<?php
include 'queryAction.php';

?>
<a href="add.php">添加</a>
<table>
<thead>
<tr><td>id</td><td>书名</td><td>作者</td><td>图片</td><td>价格</td><td>删除</td></tr>
</thead>


<?php 
if($books){
    $arr_len =count($books);
    for( $i=0;$i<$arr_len;$i++){
        $book= $books[$i];
        echo "<tr><td>$book->id</td><td>$book->name</td>
        <td>$book->author</td><td>$book->picPath</td><td>$book->price</td>".
        "<td><a href='serviceAction.php?method=delete&name=$book->name'>删除</a></td></tr>";
    }
}
?>

</table>
</body>