<html>
<head>
 <link rel="stylesheet" type="text/css" href="style1.css"><!--link to css-->
 <title>directions</title>
</head>
<body>
<p class="d"style="font-size:50px;">Control Direction</p>
<form action="index22.php"method="post" name="form1"><!-- link to php-->

<div>
<input class="ri"type="submit" value="RIGHT" name="right">
<!---------------------------------------->
<input class="st" type="submit" value="STOP" name="stop" >
<!---------------------------------------->
<input class="to" type="submit" value="TOP" name="top">
<!---------------------------------------->
<input class="le" type="submit" value="LEFT" name="left" >
<!---------------------------------------->
<input class="bo" type="submit" value="BOTTOM" name="bottom" >
</div>
</form>
<!------------------------------------------------------------------------- the control panel part ------------------------------------------------------------>
    
<p class="m" style="font-size:50px;">Control Motors</p>
 <form action="index22.php"method="post" name="form1"><!-- link to php-->
  <div class="motor">
    <div class="motor">
  <span id="rangeValue">0</span>
          <label class="lab" for="volume" name="engine11">engine1: </label>
        <Input class="range" type="range" name="engine1" value="0" min="0" max="180" 
		onChange="rangeSlide(this.value)" onmousemove="rangeSlide(this.value)">
		
        
 <br>
		 <span id="rangeValue2">0</span>
		 <label class="lab" for="volume" name="engine22">engine2: </label>
        <Input class="range" type="range" name="engine2" value="0" min="0" max="180" 
		onChange="rangeSlide2(this.value)" onmousemove="rangeSlide2(this.value)">
		
 <br>
         <span id="rangeValue3">0</span>
        <label  class="lab" for="volume" name="engine33">engine3: </label>
        <Input class="range" type="range" name="engine3" value="0" min="0" max="180" 
		onChange="rangeSlide3(this.value)" onmousemove="rangeSlide3(this.value)">
		
      
		 
 <br>
		 <span id="rangeValue4">0</span>
		   <label class="lab" for="volume" name="engine44">engine4:</label>
        <Input class="range" type="range" name="engine4" value="0" min="0" max="180" 
		onChange="rangeSlide4(this.value)" onmousemove="rangeSlide4(this.value)">
		
         
		 
 <br>
		 <span id="rangeValue5" >0</span>
        <label class="lab" for="volume" name="engine55">engine5: </label>
        <Input class="range" type="range" name="engine5" value="0" min="0" max="180" 
		onChange="rangeSlide5(this.value)" onmousemove="rangeSlide5(this.value)">
	
        
		  <br>
		<span id="rangeValue6" >0</span>
        <label class="lab" 	for="volume" name="engine66">engine6: </label>
        <Input class="range" type="range" name="engine6" value="0" min="0" max="180" 
		onChange="rangeSlide6(this.value)" onmousemove="rangeSlide6(this.value)">
	
        
		
		 <!--************************************************************************************-->
		 		 <script type="text/javascript">
        function rangeSlide(value) {
            document.getElementById('rangeValue').innerHTML = value;
        }
    </script>
	<!--************************************88-->
      <script type="text/javascript">
        function rangeSlide2(value) {
            document.getElementById('rangeValue2').innerHTML = value;
        }
    </script>
	<!--************************************88-->
      <script type="text/javascript">
        function rangeSlide3(value) {
            document.getElementById('rangeValue3').innerHTML = value;
        }
    </script>
	<!--************************************88-->
      <script type="text/javascript">
        function rangeSlide4(value) {
            document.getElementById('rangeValue4').innerHTML = value;
        }
    </script>
	<!--************************************88-->
     <script type="text/javascript">
        function rangeSlide5(value) {
            document.getElementById('rangeValue5').innerHTML = value;
        }
    </script>
	<!--************************************88-->
     <script type="text/javascript">
        function rangeSlide6(value) {
            document.getElementById('rangeValue6').innerHTML = value;
        }
    </script>
	<br>
	<br>
	<div class="buttons">
	    <input  class="save" type="submit" value = "Save" name =" save" id="save">
		<input  class="run"type="submit" value = "run" name="run" id="run">
		</div>
  </div>
  </form>
  <?php
$conn= new mysqli("localhost","root","","robot arm");
if(isset($_POST['right'])){
	 $stmt=$conn->prepare("insert into directions(direction) values('r')");
	 
	 echo "RIGHT";
 }
 elseif(isset($_POST['left'])){
	 	 $stmt=$conn->prepare("insert into directions(direction) values('l')");
	
	 echo"LEFT";
 }
 elseif(isset($_POST['top'])){
	 	 $stmt=$conn->prepare("insert into directions(direction) values('t')");
	
     echo"TOP";
 }
 elseif (isset($_POST['bottom'])){
	 	 $stmt=$conn->prepare("insert into directions(direction) values('b')");
	
     echo "BOTTOM";
 }
 elseif(isset($_POST['stop'])){
	 	 $stmt=$conn->prepare("insert into directions(direction) values('s')");
	
	 echo "STOP";
 }
 else{ echo" try again";}
?>
</body>
</html>