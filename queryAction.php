<?php

include 'dbutils.php';
include 'bean.php';

//查询所有图书，返回存放数据的$books数组
  $books=query();


/**
 * 查询所有图书
 * 返回存放所有图书信息的数组 arry $book_arr
 */
function query(){
    //1.连接数据库
    $link =DbUtils::connection();
    $sql = "select * from book";
    //2.查询数据表
    $resource=DbUtils::query($sql);
    //3.处理数据
    $book_arr=array();
    $count =0;
    if( $resource){
        while( ($book=mysql_fetch_object($resource))!=null){
            $b = new Book($book->id,$book->name,$book->author,$book->price,$book->picPath);
            $book_arr[$count++]=$b;
            /* echo "id: ".$book->id ." name:".$book->name." author:".$book->author; */
        }
    }
    DbUtils::free_result($resource);
    DbUtils::close_conn($link);
    return $book_arr;
}
?>