<!-- DataBase connection & Query to display the last record inserted in Engines table -->
<!DOCTYPE html>
   <html lang="di">
   <head>
       <title>directions</title>
   </head>
   <body>
   <?php 
  error_reporting(E_ALL & ~E_NOTICE);
  ini_set('display_errors', 1);
  $conn = new mysqli('localhost','root','','robot arm');
  
  $stmt=$conn->prepare("SELECT * FROM directions ORDER BY id DESC LIMIT 1");
  $stmt->execute();
  $result = $stmt->get_result();
  while($row=$result->fetch_assoc()){
      echo " direction: ".$row["direction"]." ";
  }
  
  ?>
   </body>
   </html>