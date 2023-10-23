<?php
include 'connect.php';
$group=$_GET['group'];
if($group=='ADMIN'){
    $querry = "SELECT question.row_counter, question.name, question.title, question.type, choice.question_name, choice.choice_name " . " FROM question, choice " . " WHERE choice.question_name = question.name and groupe='$group'";
}
$querry = "SELECT question.row_counter, question.name, question.title, question.type, choice.question_name, choice.choice_name, question.is_required, question.flag, question.description ,question.groupe,question.category" . " FROM question, choice" . " WHERE choice.question_name = question.name";
$result = $conn->query($querry);

$output = array('data' => array());

if ($result->num_rows > 0) {
    while ($row = $result->fetch_array()) {
        $deleteLink = '<a href="deleteQuestionAndChoice.php?name=' . $row[1] . '">Delete</a>';
        $updateLink = '<a href="updateQuestionAndChoice.php?row_counter=' . $row[0] . '&name=' . $row[1] . '&title=' . $row[2] . '&type=' . $row[3] . '&question_name=' . $row[4] . '&choice_name=' . $row[5] . '&is_required=' . $row[6] .'&flag=' . $row[7] .'&description=' . $row[8] .'&groupe=' . $row[9] .'&category=' . $row[10] .'">Update</a>';
        
        $linksColumn = $deleteLink . ' | ' . $updateLink; 
        
        $output['data'][] = array(
            $row[0], 
            $row[1], 
            $row[2], 
            $row[3], 
            $row[4], 
            $row[5],
            $linksColumn 
        );
    }
}

$conn->close();

echo json_encode($output);
?>
