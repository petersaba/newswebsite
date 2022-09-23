<?php 
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: *");
    include("connection.php");
    
    $query = $mysqli->prepare("SELECT * FROM news");
    $query->execute();
    $result = $query->get_result();

    $response = [];
    while($value = $result->fetch_assoc()){
        $response[] = $value;
    }
    
    echo json_encode($response);
?>