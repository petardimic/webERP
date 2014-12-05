<?php
require_once 'config.php';
 
if($_GET['type'] == 'country'){
    $result = mysql_query("SELECT name FROM country where name LIKE '".strtoupper($_GET['name_startsWith'])."%'");    
    $data = array();
    while ($row = mysql_fetch_array($result)) {
        array_push($data, $row['name']);    
    }    
    echo json_encode($data);
}
 
?>