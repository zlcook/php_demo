<?php
class DbUtils{

    /**
     * 连接数据库
     */
   public static function  connection(){
        $link =mysql_connect("127.0.0.1","root","") or die("连接数据库失败");
        //2.选中数据库
        mysql_select_db("library");
        mysql_query("set names utf8");
        return $link;
    }
    
    /**
     * 查询数据库,返回资源
     * @param String $sql
     * return rescource
     */
    public static function  query( $sql){
         $res =mysql_query($sql);
        return $res;
    }
    public static function free_result($resource){
        if( $resource)
           mysql_free_result($resource);
    }
    
    public static function close_conn($link){
        //关闭连接
        if( $link )
          mysql_close($link);
    }
}
?>