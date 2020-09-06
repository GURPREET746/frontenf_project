<?php
header("Content-type: application/json");
include 'Data.php';

$req = $_GET['req'] ?? null;

if ($req) {
    //$url="https://davids-restaurant.herokuapp.com/menu_items.json#";
    $jsonData = file_get_contents("data.json");
    $dataList = json_decode($jsonData, true)['menu_items'];
    try {
        $studentData = new StudentData($dataList);
    } catch (Exception $th) {
        echo json_encode([$th->getMessage()]);
        return;
    }
}

switch ($req) {
    
    case "student_data":
        $id = $_GET['id'] ?? null;
        echo $studentData->getStudentByPrn($id);
        
        break;
         
    default:
        echo json_encode(["In-valid request"]);
        break;
}

?>