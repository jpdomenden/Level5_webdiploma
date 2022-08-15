<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
.flex-container {
  display: flex;
  background-color: DodgerBlue;
}

.flex-container > div {
  background-color: white;
  margin: 10px;
  padding: 60px;
  font-size: 30px;
}

</style>
</head>
<body>
  <div class= "flex-container";>
    <div>    <?php
    $num =1; 
    while($num <=10){
        for($i=1; $i<=10; $i++){
            echo $num . '*' . $i . '=' . $i * 1 ;
            echo "<br>";
    }
    ?>
    </div>
    <div><?php
    $num++;
}
    ?>
    </div>
  </div>
  

 
   
</body>
</html>