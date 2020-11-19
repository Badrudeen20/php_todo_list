<?php
 

    include('connection.php');
class insert extends database{  
     public function insert_item($items){
          $sql = "insert into list (item) values('$items')";
          
           $res = $this->connect()->query($sql);
           if($res){
                header("location:index.php");
           }else{
                echo "failed to insert items!";
           }
            
     }
}
if(isset($_POST['submit'])){
    $items = $_POST['item'];  
}
$get = new insert();
$result = $get->insert_item($items);

 ?>