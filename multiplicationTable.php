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
 <h1 style="font-size:50px">Multiplication Table</h1>
 <div class="flex-container">
    <div style="color:blue">    <?php

    for($i=1; $i<=10; $i++){
        echo '1' . '*' . $i . '=' . $i * 1 ;
        echo "<br>";
    }?>
    <br>
    </div>
    <div style="color:blue">    <?php

    for($i=1; $i<=10; $i++){
        echo '2' . '*' . $i . '=' . $i * 2 ;
        echo "<br>";
    }?>
    <br>
    </div>
    <div style="color:blue">    <?php

    for($i=1; $i<=10; $i++){
        echo '3' . '*' . $i . '=' . $i * 3 ;
        echo "<br>";
    }?>
    <br>
    </div>
    <div style="color:blue">    <?php

    for($i=1; $i<=10; $i++){
        echo '4' . '*' . $i . '=' . $i * 4 ;
        echo "<br>";
    }?>
    <br>
    </div>
    <div style="color:blue">    <?php

    for($i=1; $i<=10; $i++){
        echo '5' . '*' . $i . '=' . $i * 5 ;
        echo "<br>";
    }?>
    <br>
    </div>
    <div style="color:blue">    <?php

    for($i=1; $i<=10; $i++){
        echo '6' . '*' . $i . '=' . $i * 6 ;
        echo "<br>";
    }?>
    <br>
    </div>
    <div style="color:blue">    <?php

    for($i=1; $i<=10; $i++){
        echo '7' . '*' . $i . '=' . $i * 7 ;
        echo "<br>";
    }?>
    <br>
    </div>
    <div style="color:blue">    <?php

    for($i=1; $i<=10; $i++){
        echo '8' . '*' . $i . '=' . $i * 8 ;
        echo "<br>";
    }?>
    <br>
    </div>
    <div style="color:blue">    <?php

    for($i=1; $i<=10; $i++){
        echo '9' . '*' . $i . '=' . $i * 9 ;
        echo "<br>";
    }?>
    <br>
    </div>
    <div style="color:blue">    <?php

    for($i=1; $i<=10; $i++){
        echo '10' . '*' . $i . '=' . $i * 10 ;
        echo "<br>";
    }?>
    <br>

</div>

    <!-- // $i=1;
    // while($i<=10){
    //     echo '5' . 'x' . $i . '=' . $i * 5 ;
    //     $i++;
    //     echo "<br>";
        
    // }
 
    ?> -->
</body>
</html>