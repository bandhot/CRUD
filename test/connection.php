<?php

try{
    $db =  new PDO("mysql:host=localhost;dbname=latihann","root","",[PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION]);
} catch (Exception $error){
    echo $error->getMessage();
}
$buku=$db->query("select * from perpustakaan");

$data=$buku->fetchAll();

?>