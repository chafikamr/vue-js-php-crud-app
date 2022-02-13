<?php 


$dsn = 'mysql:host=localhost;dbname=vueCrud';
$user = 'root';
$password  = '';
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
);

// start connection 
try{

    $connect = new PDO($dsn,$user,$password , $options);
   
    // $query = 'INSERT INTO `clients`(`Client_Name`, `Client_Phone`) VALUES ("محمد","06199568511")';
    // $ress = $connect->exec($query);

    // if($ress){

    //     // echo 'Row inserted succesfully';

    // } 
}

catch(PDOexception $e){
    echo 'failde '. $e->getMessage();
}