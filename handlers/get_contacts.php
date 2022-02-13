<?php

require('../database/connect.php');

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

