<?php
$username = $_GET['username'];
$studentDetails = 
[
    'username' => 'Devdoot Parial',
    'email' => 'devdootparial12@gmail.com',
    'password' => '123123123',
    'id' => '21-45061-2',
    'cgpa' => '3.7',
    'gender' => 'Male',
    'phone' => '01883964523',
    
];


header('Content-Type: application/json');
echo json_encode($studentDetails);
?>