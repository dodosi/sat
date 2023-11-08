<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<title>Update question</title>
<head>

<div class="container" style="background-color:WHITE">
<?php
include 'menu.html';
?>

<body style="background-color:#cdeeff">

<div id="login">
<h2 align ="center"> Update Question</h2>
<form action="updateQuestionAndChoice.php" method="POST" >
<table border ="0" align="center">
<tr><td>
</td><td>
<input type="text" name="row_counter" hidden required="required" class="form-control" value="<?php if(isset($_GET['row_counter'])){echo $_GET['row_counter'];}?>"><br>
</td></tr>
<tr><td>
 Name :
</td><td>
<input type="text" name="name" required="required" class="form-control" value="<?php if(isset($_GET['name'])){echo $_GET['name'];}?>"><br>
</td></tr>
<tr><td>
 Title<br>
</td><td>
<!-- <input type="text" name="title" required="required" class="form-control" value="<?php if(isset($_GET['title'])){echo $_GET['title'];}?>"><br> -->
<textarea name="title" required="required" class="form-control" rows="4" cols="50">
  <?php if(isset($_GET['name'])){echo $_GET['name'];}?>
</textarea>
</td></tr>
<tr><td>
Type<br>
</td><td>
    <select name="type" required="required" class="form-control" value="<?php if(isset($_GET['type'])){echo $_GET['type'];}?>" onchange="toggleInputVisibility()">
        <option value="radiogroup">Radiogroup</option>
        <option value="checkbox">Checkbox</option>
        <option value="text">Text</option>
        <option value="ranking">Ranking</option>
        <option value="boolean">Boolean</option>
        <option value="dropdown">Dropdown</option>
    </select>
</td></tr>
<tr><td>
Choices<br>
</td><td>
<!-- <input type="text" name="choice_name" required="required" class="form-control" value="<?php if(isset($_GET['choice_name'])){echo $_GET['choice_name'];}?>"><br> -->
<textarea name="choice_name" required="required" class="form-control" rows="4" cols="50" placeholder="Enter choices">
 <?php if(isset($_GET['choice_name'])){echo $_GET['choice_name'];}?>
</textarea>
</td></tr>
<tr><td>
Required<br>
</td><td>
<input type="text" name="is_required" required="required" class="form-control" value="<?php if(isset($_GET['is_required'])){echo $_GET['is_required'];}?>"><br>
</td></tr>

<tr><td>
Flag
</td><td>
<input type="text" name="flag" required="required" class="form-control" value="<?php if(isset($_GET['flag'])){echo $_GET['flag'];}?>"><br>
</td></tr>
<tr><td>
Description<br>
</td><td>
<!-- <input type="text" name="description" required="required" class="form-control" value="<?php if(isset($_GET['description'])){echo $_GET['description'];}?>"><br> -->
<textarea name="description" required="required" class="form-control" rows="4" cols="50">
  <?php if(isset($_GET['description'])){echo $_GET['description'];}?>
</textarea>
</td></tr>
<tr><td>
Group<br>
</td><td>
          <label><input type="checkbox" name="selectedOptions[]" value="CEO">CEO</label><br>
          <label><input type="checkbox" name="selectedOptions[]" value="CFO">CFO</label><br>
          <label><input type="checkbox" name="selectedOptions[]" value="CPO">CPO</label><br>
          <label><input type="checkbox" name="selectedOptions[]" value="CISO">CISO</label><br>
          <label><input type="checkbox" name="selectedOptions[]" value="CIO">CIO</label><br>
          <label><input type="checkbox" name="selectedOptions[]" value="CTO">CTO</label><br></td></tr>
<tr><td>
Category<br>
</td><td>
<input type="text" name="category" required="required" class="form-control" value="<?php if(isset($_GET['category'])){echo $_GET['category'];}?>"><br>
</td></tr>
<tr>
          <td>Visible If:</td>
          <td>
            <label for="input1">Depends on(Question id):</label>
            <input type="text" id="input1" name="visible" placeholder="Depends on" >
            <br><br>
            <label for="input2">If Answer is:</label>
            <input type="text" id="input2" name="visibleMessage" placeholder="Choice" >
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


<tr><td>
<input type="SUBMIT" name="send" value="Update" required="required" class="btn btn-success"><br>
</td></tr>
</form>
<?php
    if(isset($_REQUEST['send'])){
        $row_counter=$_POST['row_counter'];
        $name=addslashes($_POST['name']);
        $title=addslashes($_POST['title']);
        $type=addslashes($_POST['type']);
        $is_required=addslashes($_POST['is_required']);
        $flag=addslashes($_POST['flag']);
        $description=addslashes($_POST['description']);
        //$groupe=addslashes($_POST['groupe']);
        $category=addslashes($_POST['category']);
        $choice_name=addslashes($_POST['choice_name']);
        $visible = addslashes($_POST['visible']);
        $visibleMessage =addslashes($_POST['visibleMessage']);
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

        //$querry="INSERT INTO `question`(`name`, `title`, `type`,`is_required`,`flag`,`description`,`groupe`,`category`,`visible_if`,`show_other`) 
        //VALUES (,'$category','$visibility1','$show_other')";
        $querry="UPDATE `question` SET `title`='$title',`type`='$type',`is_required`='$is_required',`flag`='$flag',`description`='$description',`groupe`='$groupe',`category`='$category',`visible_if`='$visibility1',`show_other`='$show_other' WHERE row_counter='$row_counter'";

        $result=$connect->query($querry);
        if(!$result){
            echo  mysqli_error($connect);
            exit;
        }
        else{
            // echo "Querry run successifully";
             // echo '<a href='."addChoices.php?name=$name".'>'.'&nbspCreate choices'.'</a><br>';
             $querry="UPDATE `choice` SET `choice_name`='$choice_name' WHERE question_name='$name'";
             $result=$connect->query($querry);
        if(!$result){
            echo  mysqli_error($connect);
            exit;
        }
        else{
          echo "<tr><td>Updated!!<td></tr>";
         // echo '<a href='."addChoices.php?name=$name".'>'.'&nbspCreate choices'.'</a><br>';

        }
        //mysqli_close($conn);
        }
            mysqli_close($connect);
    }
?>

</table>

</div>
<div id="footer">

</div>
</div>
</body>
</html>