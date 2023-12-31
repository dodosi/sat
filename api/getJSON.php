<?php
include 'db_connect.php';
$group=$_GET['group'];
$dataCapture=$_GET['data_capture'];
//$group= "CISO";y
$querry = "SELECT question.row_counter, question.name,question.description, question.title, question.type, choice.question_name, choice.choice_name ,question.visible_if, question.is_required , question.show_other" . " FROM question, choice " . " WHERE choice.question_name = question.name and question.data_capture='$dataCapture' and question.groupe LIKE '%$group%' ORDER BY row_counter ASC";
//echo $querry;
$result = $connect->query($querry);

if ($result) {
    $surveyData = array(
        "title" => $group,
        "progressBarType"=> "pages",
        "showProgressBar"=> "both",
        "description" => "Description",
        "logoPosition" => "right",
        "pages" => array()
    );

    $currentPageName = "";
    $currentElements = array();
    $nameCounter=0;  
    while ($query_row = $result->fetch_assoc()) {
        $nameCounter ++;
        $type = $query_row['type'];
        $name = $query_row['name'];
        $title = $query_row['title'];
        $description = $query_row['description'];
        $show_other = $query_row['show_other'];
        $visible_if = $query_row['visible_if'];
        $is_required = $query_row['is_required'];
        if(($type == "text")||($type == "boolean")){
 
        $questionName = $query_row['question_name'];
        $choice = $query_row['choice_name'];
        

        $arrayOfStrings = splitStringToArray($choice);

        $choices = $arrayOfStrings;

        if ($currentPageName != $name) {
            
            if (!empty($currentElements)) {
                $surveyData["pages"][] = array(
                    "name" => $currentPageName,
                    "elements" => $currentElements
                );
            }
            $currentPageName = $name.$nameCounter;
            $currentElements = array();
        }

        $currentElements[] = array(
            "type" => $type,
            "name" => $name,
            "title" => $title,
            "description" => $description,
            "isRequired" => isStringNotEmpty($is_required),
            "visibleIf"=> isStringNotEmpty($visible_if),
            //"showOtherItem" => false
           // "choices" => $choices
        );

       }else{

        $questionName = $query_row['question_name'];
        $choice = $query_row['choice_name'];

        $arrayOfStrings = splitStringToArray($choice);

        $choices = $arrayOfStrings;

        if ($currentPageName != $name) {
          
            if (!empty($currentElements)) {
                $surveyData["pages"][] = array(
                    "name" => $currentPageName,
                    "elements" => $currentElements
                );
            }
            $currentPageName = $name.$nameCounter;
            $currentElements = array();
        }

        $currentElements[] = array(
            "type" => $type,
            "name" => $name,
            "title" => $title,
            "description" => $description,
            "isRequired" => isStringNotEmpty($is_required),
            "visibleIf"=> isStringNotEmpty($visible_if),
            "showOtherItem" => isStringNotEmpty( $show_other ) ,
            "choices" => $choices
            
        );
        
       }
        
    }

    if (!empty($currentElements)) {
        $surveyData["pages"][] = array(
            "name" => $currentPageName,
            "elements" => $currentElements
        );
    }
    $jsonString = json_encode($surveyData, JSON_PRETTY_PRINT);
    echo $jsonString;
}
function splitStringToArray($inputString) {
    $stringArray = explode(',', $inputString);
    $stringArray = array_map('trim', $stringArray);
    return $stringArray;
}

function isStringNotEmpty($inputString) {
    $trimmedString = trim($inputString);   
    if (!empty($trimmedString)) {
        return $inputString;
    } else {
        return false;
    }
}
?>