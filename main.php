<?php

//Using string in php
//Use substr to cut string
$filename = "image.png";
$extension = substr($filename, strlen($filename) -3);
echo "The extension of the file is $extension"."\n";
//use explode to split string
$fruits = "apple,banana,orange";
$fruit_list = explode(",", $fruits);
echo "The second fruit in the list is $fruit_list[1]"."\n";
//use implode to join array
$fruit_list = ["apple","banana","orange"];
$fruits = implode(",", $fruit_list);
echo "The fruits are $fruits";

//split the numbers variable to an array
$given="34,53,34,23,55,66,77,54,12,31,444,224,2133,";
$given_arr=explode(",",$given);
print_r($given_arr);
echo ($given_arr[3])."\n";
//foor loop
$odd_numbers = [1,3,5,7,9];
for ($i = 0; $i < count($odd_numbers); $i=$i+1) {
    $odd_number = $odd_numbers[$i];
    echo $odd_number . "\n";
}

$odd_numbers = [1,3,5,7,9];
foreach ($odd_numbers as $odd_number) {
  echo $odd_number . "\n";
}

$phone_numbers = [
  "Alex" => "415-235-8573",
  "Jessica" => "415-492-4856",
];

foreach ($phone_numbers as $name => $number) {
  echo "$name's number is $number.\n";
}

$counter = 0;

while ($counter < 10) {
    $counter += 1;

    if ($counter > 8) {
        echo "counter is larger than 8, stopping the loop.\n";
        break;
    }

    if ($counter % 2 == 0) {
        echo "Skipping number $counter because it is even.\n";
        continue;
    }

    echo "Executing - counter is $counter.\n";
}