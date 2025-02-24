<?php

$employeeInfo =[

    "John"=> "Styles",
    "Jane"=> "Doe",
];

$johnWorkDays = [
    'Monday' => 'Понедельник',
    'Wednesday' => 'Среда',
    'Friday' => 'Пятница',

];

$janeWorkDays = [
    'Tuesday' => 'Вторник',
    'Thursday' => 'Четверг',
    'Saturday' => 'Суббота',
];

$currentDay = date("l");

function calculateEmployee($name, $surname, $currentDay, $janeWorkDays, $johnWorkDays){
       
     $fullName = "$name $surname"; 
     $schedule = "Выходной";

     if ($fullName === "John Styles" && array_key_exists($currentDay, $johnWorkDays)) {
         $schedule = "8:00-12:00";
         echo "$schedule\n";

     } else if ($fullName === "Jane Doe" && array_key_exists($currentDay, $janeWorkDays)) {
         $schedule = "12:00-16:00";
         echo "$schedule\n";

     }else{
         echo $schedule;
     }
  
    }

?>