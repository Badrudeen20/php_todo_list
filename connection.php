<?php
 
  class database{
  	 private $host;
  	 private $user;
  	 private $db;
  	 private $pass;

  	  public function connect(){

  	  	  $this->host = 'localhost';
  	  	   $this->user = 'root';
			   $this->pass = '';
			   $this->db = 'php';
        
  	  	  //   $conn = new PDO("mysql:host=".$this->host.";dbname=".$this->db,$this->user,$this->pass);
  	  	    //   $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
            $conn = new mysqli($this->host,$this->user,$this->pass,$this->db);
  	  	        if($conn){
						 return $conn;
					}else{
						 echo "data not fount!";
					}

  	  }
  }

 ?>