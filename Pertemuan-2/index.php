<?php

//PHP ARRAY
// $name = array("Abdul", "Budi", "Surya Paloh");
// var_dump($name);

// $name = ["Mamat", "Lidya", "Jali"];
// echo $name[0];

// $cars = array("Toyota", "Daihatsu", "Wuling");
// echo $cars[1];

// echo "<br>";

// $car = array("brand" => "Toyota", "type" => "Avanza", "price" => 250000);
// echo $car["type"];


// $name = ["Mamat", "Lidya", "Jali"];
// echo $name[0];

// echo "<br>";
// $name[0] = "Agus";
// echo $name[0];

// //menambah array item pada array biasa
// $fruits = array("Apple", "Banana", "Cherry");
// var_dump($fruits);
// echo "<br>";
// $fruits[] = "Orange";
// var_dump($fruits);

// //menambah array item pada array associative
// $cars = array("brand" => "Ford", "model" => "Mustang");
// var_dump($cars);
// echo "<br>";
// $cars["color"] = "Red";
// var_dump($cars);

// $fruits = array("Apple", "Banana", "Cherry");
// var_dump($fruits);
// echo "<br>";
// array_push($fruits, "Orange", "Kiwi", "Lemon");
// var_dump($fruits);

// $cars = array("brand" => "Ford", "model" => "Mustang");
// var_dump($cars);
// echo "<br>";
// $cars += ["color" => "red", "year" => 1964];
// var_dump($cars);


// //CONDITIONAL
// $statement = true;
// if($statement){
//     echo "Hello World";
// }

// $age = 16;
// if($age >= 17){
//     echo "Legal";
// } else {
//     echo "Maaf belum cukup umur ya dek";
// }

// $value = 80;
// if($value >= 80 && $value <= 100){
//     echo "Congratulation";
// } elseif($value > 60 && $value < 80){
//     echo "Kamu Mengulang";
// } else {
//     echo "Nilai tidak terdefinisi";
// }

// $grade = "A";
// switch($grade){
//     case "A":
//         echo "Bagus Sekali";
//         break;
//     case "B":
//         echo "Bagus";
//         break;
//     case "C":
//         echo "Cukup Bagus";
//         break;
//     default:
//     echo "Belajar lagi yaa";
// }


// //LOOPS
// for ($i = 0; $i <= 10; $i++){
//     echo $i . "<br>";
// }

// $i = 0;
// while($i <= 5){
//     echo $i += 1;
// }

// $i = 0;
// do{
//     echo $i . "<br>";
//     $i += 2;
// } while($i < 20);

// $arr = ["apple", "pinnaple", "banana", "dragon fruits"];
// foreach ($arr as $a){
//     echo $a . "<br>";
// }


// //FUNCTION
// function sayHello($name)
// {
//     echo "hello, my name is $name <br>";
// }
// sayHello("Muty");
// function addition($a, $b){
//     return $a + $b;
// }
// echo addition(5, 10);


// //TIMEZONE
// echo "Today is " . date("Y/m/d") . "<br>"; 


// echo "The time is " . date("H:i:sa") . "<br>";


// $text = strtotime("2024-03-05");
// echo "Created date is " . date("D, F Y", $text) . "<br>";

// $text = strtotime("tomorrow");
// echo "Created date is " . date("d-m-Y", $text) . "<br>";

// $text = strtotime("next week");
// echo "Created date is " . date("d-m-Y", $text) . "<br>";

// $text = strtotime("3 month");
// echo "Created date is " . date("d-m-Y", $text) . "<br>";

// $text = strtotime("next years");
// echo "Created date is " . date("d-m-Y", $text) . "<br>";