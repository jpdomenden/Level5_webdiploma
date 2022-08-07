<?php
if(isset($_POST['sub'])){
    $number1=$_POST['num1'];
    $number2=$_POST['num2'];
    $operation=$_POST['sub'];
    if ($operation=='Add')
        $answer=$number1 + $number2;
    elseif ($operation=='Substract')
    $answer=$number1 - $number2;
    elseif ($operation=='Multiply')
    $answer=$number1 * $number2;
    elseif ($operation=='Divide')
    $answer=$number1 / $number2;
}

?>

<html>

<body>
<div class="entry" style="font-size:30px">
<form method="post" action="">
<h1>Calculator</h1>
<br>
First Number:<input name="num1" value="">
<br>
Second Number:<input name="num2" value="">
<br>
<input type="submit" name="sub" value="Add">
<input type="submit" name="sub" value="Substract">
<input type="submit" name="sub" value="Multiply">
<input type="submit" name="sub" value="Divide">
<br>
<br>Answer <input type='text' value="<?php echo $answer; ?>"><br>
</form>
	</div>
</body>
</html>