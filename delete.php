<?php
 include('connection.php');

  class delete extends database{
       public function delete_item($item){
            $sql = "delete from list where item = '${item}'";
            $res = $this->connect()->query($sql);
             if(res){
                  header("location:index.php");
             }else{
                  echo "Item not deleted!";
             }
       }
  }

 if($_GET['id']){
      $item = $_GET['id'];
 } 
 $get = new delete();
   $result = $get->delete_item($item);

 ?>