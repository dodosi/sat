<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<title>Create question</title>
<head>
    
</head>

<div class="container" style="background-color:WHITE">


<div id="target"></div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- <script>
  $(document).ready(function () {
    $("#target").load("menu.html");
  });
</script> -->

<body>
<div class="container">
    <?php
       include 'menu.html';
    ?>
    <h2 align ="center"> Create Question</h2>
    <table border ="0" align="center">
    <form action="createQuestion.php" method="POST">
      
        <tr>
          <td>Question Id:</td>
          <td><input type="text" name="name" required="required" class="form-control"><br></td>
        </tr>
        <tr>
          <td>Title:</td>
          <td>
          <textarea name="title" required="required" class="form-control" rows="4" cols="50">
          </textarea>
          </td>
        </tr>
        <tr>
        <td>Choices</td>
        <td>
        <textarea name="choices" required="required" class="form-control" rows="4" cols="50" placeholder="Enter choices">
        </textarea><br>
        </td>
        </tr>
        <tr>
          <td>Type:</td>
          <td>
            <select name="type" required="required" class="form-control" onchange="toggleInputVisibility()">
              <option value="radiogroup">Radiogroup</option>
              <option value="checkbox">Checkbox</option>
              <option value="text">Text</option>
              <option value="ranking">Ranking</option>
              <option value="boolean">Boolean</option>
              <option value="dropdown">Dropdown</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>Required:</td>
          <td>
            <select name="is_required" required="required" class="form-control">
              <option value="true">True</option>
              <option value="false">False</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>Flag:</td>
          <td><input type="text" name="flag" required="required" class="form-control"><br></td>
        </tr>
        <tr>
          <td>Description:</td>
          <td>
          <textarea name="description" required="required" class="form-control" rows="4" cols="50">
          </textarea></td>
        </tr>
        <tr>
          <td>Group:</td>
          <td>
          <label><input type="checkbox" name="selectedOptions[]" value="CEO">CEO</label><br>
          <label><input type="checkbox" name="selectedOptions[]" value="CFO">CFO</label><br>
          <label><input type="checkbox" name="selectedOptions[]" value="CPO">CPO</label><br>
          <label><input type="checkbox" name="selectedOptions[]" value="CISO">CISO</label><br>
          <label><input type="checkbox" name="selectedOptions[]" value="CIO">CIO</label><br>
          <label><input type="checkbox" name="selectedOptions[]" value="CTO">CTO</label><br>
         </td>
        </tr>
        <tr>
          <td>Category:</td>
          <td><input type="text" name="category" required="required" class="form-control"><br></td>
        </tr>
        <tr>
          <td>Visible If:</td>
          <td>
            <label for="input1">Depends on(Question id):</label>
            <input type="text" id="input1" name="visible" placeholder="Depends on">
            <br><br>
            <label for="input2">If Answer is:</label>
            <input type="text" id="input2" name="visibleMessage" placeholder="Choice">
          </td>
        </tr>
        <tr>
          <td>Has Other options:</td>
          <td>
            <select name="show_other" required="required" class="form-control" id="showOtherSelect">
              <option value="true">True</option>
              <option value="false">False</option>
            </select>
          </td>
        </tr>
        <tr>
          <td></td>
          <td></br>
            <input type="SUBMIT" name="send" value="send" required="required" class="btn btn-success"><br>
          </td>
        </tr>
    </form>
<tr><td>
<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

  if(isset($_REQUEST['send'])){
    $name=addslashes($_POST['name']);
    $title=addslashes($_POST['title']);
    $type=addslashes($_POST['type']);
    $is_required=addslashes($_POST['is_required']);
    $flag=addslashes($_POST['flag']);
    $description=addslashes($_POST['description']);
    //$groupe=addslashes($_POST['groupe[]']);
    $category=addslashes($_POST['category']);
    $visible = addslashes($_POST['visible']);
    $visibleMessage = addslashes($_POST['visibleMessage']);
    $show_other = '';
    $choices='';
    $selectedOptions = $_POST['selectedOptions'];
    $groupe=implode(',', $selectedOptions);
    if(isset($_POST['show_other'])){
      $show_other= addslashes($_POST['show_other']);
    }
    if(isset($_POST['choices'])){
      $choices=addslashes($_POST['choices']);
    }
    $visibility = '{' . $visible . '} = \'' . $visibleMessage . '\'';

    $visibility1 = addslashes($visibility);
    include 'connect.php';
    $querry="INSERT INTO `question`(`name`, `title`, `type`,`is_required`,`flag`,`description`,`groupe`,`category`,`visible_if`,`show_other`) 
                          VALUES ('$name','$title','$type','$is_required','$flag','$description','$groupe','$category','$visibility1','$show_other')";
    $choicesQuery="INSERT INTO `choice`( `question_name`, `choice_name`) 
                                VALUES ('$name','$choices')";

    $result=$connect->query($querry);
    $message='Failed';
    if($result){
        
          $result2=$connect->query($choicesQuery);
          if($result2){
            $message= "Querry run successifully";
          }else{
            echo  mysqli_error($connect);  
          }
      
    }else{
      echo  mysqli_error($connect); 
    }
    echo $message;
    mysqli_close($connect);
  }
  ?>
  </td></tr>
</div>
</div>
<script>
      function toggleInputVisibility() {
        var typeSelect = document.querySelector('select[name="type"]');
        var showOtherSelect = document.querySelector('#showOtherSelect');

        if ((typeSelect.value === 'text')||(typeSelect.value === 'boolean')) {
          showOtherSelect.value = 'false';
          showOtherSelect.disabled = true;
        } else {
          showOtherSelect.disabled = false;
        }
      }
    </script>
</body>
</html>
