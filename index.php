<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css" />
</head>
<body>
 <?php
 include('database.php');
 $get = new query();
 $result = $get->getdata();   
  ?>
   <div class="container">
        <form action="insertitem.php" method="POST">
             <div class="container text-center">
                  <p><strong style="color:#58D68D;">List out</strong></p>
             </div>
             <div class="form-group d-flex">
                  <input type="text" placeholder="Enter item" name="item" class="form-control" required/>
                  <input type="submit" class="btn btn-primary" name="submit" value="Add" />
             </div>
              
                  <ul id="items">
                     <?php
                      if($result){
                         foreach($result as $key=>$value){ ?>
                           <li><?php echo $value["item"]; ?><a class="float-right" href="delete.php?id=<?php echo $value["item"]; ?>">delete</a></li>
                           
                    <?php } }else{ ?>
                         <p><center><strong style="color:#fff;">Make a list !</strong></center></p>
                   <?php   }  ?>
                  </ul>
              
        </form>
   </div>
   <script src="main.js"></script>
</body>
</html>