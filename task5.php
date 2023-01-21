<?php

$students = [
    ['name' => 'Alaa', 'email' => 'alaa@test.com', 'status' => 'PHP'],
    ['name' => 'Shamy', 'email' => 'shamy@test.com', 'status' => '.Net'],
    ['name' => 'Youssef', 'email' => 'youssef@test.com', 'status' => 'Testing'],
    ['name' => 'Waleid', 'email' => 'waleid@test.com', 'status' => 'PHP'],
    ['name' => 'Rahma', 'email' => 'rahma@test.com', 'status' => 'Front End'],
];
echo "<table style='Border: 2px solid black;'><tr><td>Name</td><td>Email</td><td>status</td></tr>";

foreach ($students as $val){
    if($val['status']=='PHP')
    echo "<tr style = 'color: red '><td >".$val['name']."</td><td>".$val['email']."</td> <td>".$val['status']."</td></tr>";
    else{
        echo "<tr ><td >".$val['name']."</td><td>".$val['email']."</td> <td>".$val['status']."</td></tr>";

    }
}
echo "</table></div>";












?>