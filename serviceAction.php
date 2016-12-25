<?php

include 'dbutils.php';
include 'bean.php';

//获取进行的操作名称
//判断action是否存在$_GET['']
if(isset($_REQUEST["method"])){
    //存在，获取进行的操作名称
    $methodName=$_REQUEST["method"];//add
    //根据操作名称进行操作
    operation($methodName);
}
/**
 * 根据操作名称进行相应操作
 * @param String $methodName
 */
function operation($methodName) {

    //删除图书
    if(!empty($methodName)&&$methodName=="delete"){
        $name =$_REQUEST["name"];
        //删除
        $result=deleteBook($name);
        //根据结果跳转
        if($result)
            header("location:main.php");
        else
            header("location:main.php");
    }
    
    //添加图书
    if(!empty($methodName)&&$methodName=="add"){
        //$id,$name,$author,$price,$picPath=null
        $book =new Book(null,$_POST["name"],$_POST["author"],$_POST["price"],$_POST["picPath"]);
        //添加
        $result=addBook($book);
        //根据结果跳转
        if($result)//成功
            header("location:main.php");
        else
            header("location:add.php");
    }
}



/**
 * 添加书籍
 * @param Book $book
 * 成功返回true，失败返回false
 */
function  addBook($book){
    $action_result =false;
    //1.连接数据库
    $link =DbUtils::connection();
    $sql = "insert into book (name, picPath,price,author)
           values ('$book->name', '$book->picPath', '$book->price', '$book->author')";
     
    //2.操作数据表
    $resource=DbUtils::query($sql);
    //3.处理数据
    if( $resource ){
        $action_result=true;
    }
    DbUtils::close_conn($link);
    return $action_result;
}

/**
 * 根据名称删除图书
 * @param String $name
 * 成功返回true，失败返回false
 */
function deleteBook($name){

    $action_result =false;
    //1.连接数据库
    $link =DbUtils::connection();
    $sql = "delete  from book where name ='$name'";
   
    //2.操作数据表
    $resource=DbUtils::query($sql);
    //3.处理数据
    if( $resource )
       $action_result=true;
    
    DbUtils::close_conn($link);
    return $action_result;
}

?>