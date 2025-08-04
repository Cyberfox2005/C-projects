<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">>
    <title>Document</title>
</head>
<body>
<?php
// output string
echo"hello my first php code.<br>";
// output integer
echo 10 + 20 . "<br>"; 
//variables
// string
//declare variable string
$name = "abdo";
$friend = "nada";
$email ="username@example.com" ;
$food="pizza";
// output the value of variable string
echo "My name is :{$name}<br>";
echo "I love to eat :{$food}<br>"; 
echo "your email is:{$email}<br>";
// integer.
//declare variable integer
$age = 20;// this character($)for calling before and after  diclaration
$users = 2;
// output the value of variable integer
echo "I have :{$users} users osnline<br>";// output the value of $users
echo "I am :{$age} years old<br>";
// float
//declare variable float.
$price = 10.50;
// output the value of variable float.
echo "The price is :{$price}$<br>";
//double
$tall = 1.79;
// output the value of variable double.
echo "My height is :{$tall}m<br>";// output the value of $tall 
// character
//declare variable char
$char = 'N';// char is a single character
// output the value of variable char
echo "My favorite character is :{$char}<br>";// output the value of $char
// boolean
$is_cute = true;
$is_worker = false;
echo "Is nada cute? :{$is_cute}<br>";// 1 = true, 0 = false 
echo "Is user a worker? :{$is_worker}<br>";// tban ta7n l khawater >_<

//array
$fruits = array("apple", "banana", "orange");//declare name of array after the type of values (array)
// output the value of array
echo "I like to eat :{$fruits[0]}<br>";// output the value of first index of array
echo "I like to eat :{$fruits[1]}<br>";// output the value of second index of array
echo "I like to eat :{$fruits[2]}<br>";// output the value of third index of array
//associative array
$person = array("name" => "abdo", "age" => 20, );//declare name of associative array after the type of values (array)

// output the value of associative array
echo "My name is :{$person['name']}<br>";// output the value of name key



?>
//you can also mix betwin php and html :
// simple example:
<p>hello my friend name is<?php $friend?>^_^</p>
</body>
</html>
