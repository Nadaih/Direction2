<!DOCTYPE html>
<html>
            <head>
            
            </head>
                <body>
<form action="tt.php" method="post">
                    <p>engine1 </p>
                    <input type="range"   min="0" max="30" name="1">
                    <p>engine2 </p>
                    <input type="range"   min="0" max="30" name="2">
                    <p>engine3</p>
                    <input type="range"  min="0" max="30" name="3">
                    <p>engine4</p>
                    <input type="range"   min="0" max="30" name="4">
                    <p>engine5</p>
                    <input type="range"   min="0" max="30" name="5">
                    <p>engine6</p>
                    <input type="range"   min="0" max="30"  name="6">

                    <button name="run">run</button>
                    <button name="save">save</button>
                    
<form action="cc1.php"method="post">
<div>
<center><div><input class="to" type="submit" value="TOP" name="top"></div></center>
<!---------------------------------------->
<center><div><input class="le" type="submit" value="LEFT" name="left" >
<!---------------------------------------->
<input class="st" type="submit" value="STOP" name="stop" >
<!---------------------------------------->
<input class="ri"type="submit" value="RIGHT" name="right"></div></center>
<!---------------------------------------->
<center><div><input class="bo" type="submit" value="BOTTOM" name="bottom" ></div></center>
</div>
</form>

 <!-- link to php-->      
<?php
error_reporting(E_ALL & ~E_NOTICE);
ini_set('display_errors', 1);
$servername = "localhost";
$username = "root";
$password = "";
$db ="robot arm";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);
 

if (isset($_POST['save'])) {

$sql = "INSERT INTO `engine` (`engine1`, `engine2`, `engine3`, `engine4`, `engine5`, `engine6`) VALUES
 ('".$_POST['1']."','".$_POST['2']."','".$_POST['3']."','".$_POST['4']."','".$_POST['5']."','".$_POST['6']."')"; 
$result = $conn->query($sql);
 }

 $conn= new mysqli("localhost","root","","robot arm");

 if (isset($_POST['right'])) {

    $sql = "INSERT INTO `directions` (`direction`) VALUES
     ('".$_POST['right']."')"; 
    $result = $conn->query($sql);
     }
     

if(isset($_POST['right'])){
	$sql = $conn->prepare("insert into directions(direction) values('r')");
     
	 echo "RIGHT";
 }
 elseif(isset($_POST['stop'])){
    $sql =$conn->prepare("insert into directions(direction) values('s')");
          
  echo "STOP";
}
elseif(isset($_POST['top'])){
    $sql =$conn->prepare("insert into directions(direction) values('t')");
    
    echo"TOP";
}
 elseif(isset($_POST['left'])){
    $sql = $conn->prepare("insert into directions(direction) values('l')");
     
    echo "LEFT";
    }
    elseif (isset($_POST['bottom'])){
        $sql = $conn->prepare("insert into directions(direction) values('b')");
        
        echo "BOTTOM";
    }
 else{ echo" try again";}
 ?>



</body>
</html>