<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// $var1 = "Hello";
// $var2 = "World";
// echo $var1 . $var2 . " I am here";

// define("COMMISSION", "hello again");
// echo COMMISSION;

// echo "<h1> Hello World</h1>";

// $college = "Vision College";
// echo "I am a student of {$college}<br>";

// echo "I am a student of" . $college;

// $name = "myname";
// //$name = $name . "is Harpreet";
// $name .= "is Harpreet";
// echo $name;

// echo 'We need a lunch break there\'s';


// // for ($i = 1; $i<=10; $i++){

// //     echo $i;
// // }

// $var = "Lorenna Olivera Latapie";
// echo strlen($var);

$password = "My Password";
echo strtolower($password);
echo strtoupper($password);

//trim
echo "<br>";
//echo trim(' B C D ');

//str_replace($needle, $replacement, $haystack)

echo str_replace('world', 'universe', 'Hello world');

//echo strpos("We need time to do assessment", "time");


//strpos


// echo "<br>";
// if(strlen($password) < 12){
//     echo "Please use 12 character long password";
// }
// elseif(strlen ($password) >12){
//     echo "you r not a rockstar";
// }
// else {
//     echo "YOu want to be a hacker";
// }

?>
</body>
</html>