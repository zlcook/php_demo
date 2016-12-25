
<!DOCTYPE HTML> 
<html>
<head>
<meta charset="utf-8">
<title>登陆</title>
</head>
<body> 

<?php
include 'dbutils.php';
//存放数据的变量
$name = $password="";
//存放错误提示信息变量
$name_err=$password_err="";

//处理post请求的数据
//1.判断是否时post请求
if($_SERVER["REQUEST_METHOD"]=="POST"){
    //2.取出数据
    $name = $_POST["name"];
    $password = $_POST["password"];
    //3.校验
    if( empty($name)){
        $name_err="用户名不能为空";
    }else{
        
        $name = test_input($name);
        //正则表达式校验
    }
    if( empty($password)){
        $password_err="密码不能为空";
    }else{
        $password = test_input($password);
        //正则表达式校验
    }
}

//校验通过，查询数据库
if(empty($name_err)&&empty($password_err)){
    //1.连接数据库
    $link=DbUtils::connection();
    //2.查询语句
    $sql ="select * from stu where name = '$name' and password = '$password'";
    //3.查询数据库,返回资源
    $res =DbUtils::query($sql);
    //4.读取数据
    if( $res){
        //4.读取查询的资源
        if(mysql_num_rows($res)==1){
            echo "登陆成功";
            //跳转到首页
            header("location:main.php");
            echo "跳转之后。";
        }else{
            echo "登陆失败";
        }
    }
    //5释放资源
    DbUtils::free_result($res);
    //6关闭连接
    DbUtils::close_conn($link);
}

/**
 * 得到处理过的字符串
 * @param unknown $data
 */
function test_input($data){
    /**
     * 
    使用 PHP trim() 函数去除用户输入数据中不必要的字符 (如：空格，tab，换行)。
    使用PHP stripslashes()函数去除用户输入数据中的反斜杠 (\)
     htmlspecialchars() 把一些预定义的字符转换为 HTML 实体
     * @var unknown
     */
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<form action="<?php echo  htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
名字: <input type="text" name="name"><p><?php echo $name_err?></p>
年龄: <input type="password" name="password"><p><?php echo $password_err?></p><br>
<input type="submit" value="提交">
</form>
</body>