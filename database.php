<?php
  include('connection.php');
  class query extends database{
       public function getdata(){
            $sql = "select * from list";
            $res = $this->connect()->query($sql);
            if($res->num_rows > 0){
                 $arr = array();
                 while($row = $res->fetch_assoc()){
                      $arr[] = $row;
                 }

                  return $arr;
            }else{
                return 0;
            }
       }
  }

  

 ?>