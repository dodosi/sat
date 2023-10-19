<form action="training.php" method="POST">
    <input type="text" name="fname">
    <Input type="submit" name="submit">
</form>    
<?php
  if(isset($_REQUEST['submit'])){
    $fname=$_REQUEST['fname'];
  } 
  $x=5;
  $y='Kab';
  $sum=$x+$y;
  echo '<h1>Name is '.$fname.'</h1><br>';
  echo "The sum of ".$x.' AND '.$y.' IS '.$sum;
  if($sum>12){
    echo 'Yeah';
  }else{
    echo 'No';
  }
  ?>
