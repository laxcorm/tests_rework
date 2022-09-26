<?php
require('mysql.php');

/* $query = "SELECT COUNT(*) FROM tests";
$stmt = $db->prepare($query);
$stmt->execute();
$count = (int)$stmt->fetch(PDO::FETCH_ASSOC)['COUNT(*)'];
if ($count < $id) {
    require('final.php');
} */
//не выводить ответы

$query = "SELECT*FROM tests WHERE id=" . ($id = $id + ($step ?? 0)); //зачем 0
echo $query; //потом удалить 
$stmt = $db->prepare($query);
$stmt->execute();
$test = $stmt->fetchAll(PDO::FETCH_ASSOC);
// $test = empty($test)? false :$test[0];
if ($test) {
    $test =  $test[0];
}
