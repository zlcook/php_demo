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
include 'serviceAction.php';
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
<input type="hidden" name="method" value="add" >

   名字: <input type="text" name="name" >
   <br><br>
  作者: <input type="text" name="author" >
   <br><br>
   图片: <input type="text" name="picPath">
   <br><br>
   价格: <input type="text" name="price">
   <br><br>
   <input type="submit" name="submit" value="Submit"> 
</form>

</body>