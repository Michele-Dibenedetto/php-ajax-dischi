<?php
    require ("database.php");
    $filter= $_GET["author"];
    // var_dump($database);
    header("content-type: application/json");
    // if ($filter != "") {
    //     $i = 0;
    //     // echo $database[1]["author"];
    //     while ($database[$i]["author"] != $filter) {
    //         $i++;
    //     }
        
    // } else {
        
    // }
    // $flag = "all";
    // foreach ($database as $element) {
    //     if ($element["author"] == $filter) {
    //         $flag = $element;
    //     }
    // }
    // if ($flag == "all") {
    //     echo json_encode($database);
    // } else {
    //     echo json_encode($flag);
    // }
    $filterDatabase = [];
    if ($filter == "all") {
        echo json_encode($database);
    } else {
        foreach($database as $poster) {
            if (in_array($filter, $poster)) {
                $filterDatabase[] = $poster; 
                echo json_encode($filterDatabase);
            }
        }
    }
?>