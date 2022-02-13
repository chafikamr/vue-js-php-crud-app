<?php

require('../database/connect.php');

$data = file_get_contents('php://input');

$request = json_decode($data);
// print_r($request);

$query = 'UPDATE clients
 SET 
 `Client_Phone`="'.$request->phone.'", `Client_Name`="'.$request->name.'" WHERE `Client_ID`='.$request->id.'';

$stmt = $connect->prepare($query);
$stmt->execute();

$query = 'SELECT * From clients';

$stmt = $connect->prepare($query);
$stmt->execute();
$res = $stmt->fetchAll(PDO::FETCH_ASSOC);


$contacts = [];
$i = 0;

foreach( $res as  $row ){
    $contacts[$i]['id'] = $row['Client_ID'];
    $contacts[$i]['name'] = $row['Client_Name'];
    $contacts[$i]['phone'] = $row['Client_Phone'];

    $i++;
}


echo json_encode($contacts,JSON_UNESCAPED_UNICODE);


