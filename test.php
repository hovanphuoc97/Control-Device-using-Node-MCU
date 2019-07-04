<?php
//https://github.com/ktamas77/firebase-php
include 'firebase-php/src/firebaseLib.php';
const DEFAULT_URL = 'https://fir-template-a54fe.firebaseio.com/';
const DEFAULT_TOKEN = '9pwzQv4cekQuDY8fsPurLvGnZ1cKOei6KNHJauSW';
const DEFAULT_PATH = '/iot11';

$firebase = new \Firebase\FirebaseLib(DEFAULT_URL, DEFAULT_TOKEN);

$var = [
    'name' => 'lcvk',
    'age' => 24,
    'gender' => 'male'
];

$firebase->set(DEFAULT_PATH,$var);



// $firebase->set("/iot11",['test' => 'hello1']);
// $firebase->set("/iot11/test", "hello2");


//UPDATE: use for update [key: value] => only Array
// $firebase->update("/iot11",['test' => 'hello1']); //true
// $firebase->update("/iot11/test", "hello2");			 //false



// $age = $firebase->get("/iot11/age");
// echo "age: $age<br>";

// $gender = $firebase->get("/iot11/gender");
// echo "gender: $gender<br>";

// $name = $firebase->get("/iot11/name");
// echo "name: $name<br>";
?>	