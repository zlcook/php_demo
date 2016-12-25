<?php
class Book{
    var $id;
    var $name;
    var $author;
    var $price;
    var $picPath;
    public function  __construct($id,$name,$author,$price,$picPath=null){
        $this->id=$id;
        $this->author=$author;
        $this->name=$name;
        $this->price=$price;
        $this->picPath=$picPath;        
    }
 /**
     * @return the $id
     */
    public function getId()
    {
        return $this->id;
    }

 /**
     * @return the $name
     */
    public function getName()
    {
        return $this->name;
    }

 /**
     * @return the $author
     */
    public function getAuthor()
    {
        return $this->author;
    }

 /**
     * @return the $price
     */
    public function getPrice()
    {
        return $this->price;
    }

 /**
     * @return the $picPath
     */
    public function getPicPath()
    {
        return $this->picPath;
    }

      
}
?>