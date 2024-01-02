<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Divisions Example</title>
  <style>
    /* Optional styling for better visualization */
    body, html {
      height: 100%;
      margin: 5px;
      overflow: hidden;
    }
    .container {
      min-height: 100%;
      display: flex;
      flex-direction: column;
    }
    /* Styling for the main toolbar and footer */
    .toolbar {
      background-color: rgb(47, 35, 125);
      text-align: left;
      display:flex;
      padding: 10px;
      height: 4rem;
    }
    .footer {
      background-color: rgb(47, 35, 125);
      text-align: left;
      padding: 10px;
      display: flex;
      height: 4rem;
      margin-top: auto; /* Push the footer to the bottom */
    }
    /* Main content styling */
    .content {
      flex: 1; /* Grow and take remaining space */
      display: flex;    
      flex-direction: column;
    }
    .horizontal {
      flex: 1; /* Grow and take remaining space */
      display: flex;
      flex-direction: row;
    }.sec_inner_hor p{
      border: 2px solid #000;
      border-radius: 5px;
      padding: 10px;
      max-width: 25vh;
      background-color: rgb(182, 184, 183);
      font-weight: bold;
      font-size: 15px;
      min-width: 100%;
      
    }
    .sec_inner_hors p{
      border: 2px solid #000;
      border-radius: 5px;
      padding: 10px;
      max-width: 25vh;
      background-color: rgb(27, 106, 242);
      color: #fff;
      font-weight: bold;
      font-size: 16px
      
    }
    .vertical {
      flex: 1; /* Grow and take remaining space */
      display: block;
    }

    .full-width{
      width: 100%;
    }
    .box {
      padding: 10px;
      margin: 5px;
    }
  .custom-button {
   width: 200px; 
   length:200px;
   color: 78978;
  }

  <?Php
      // echo $description;
      if (isset($_GET['test'])){
        $name = $_GET['test'];
        echo $name;
      }else{
        $name='echnology and Data Usage';
      }
    
    ?>

    <?php
    $groupe='';
    include 'connect.php';
   // $querry = "SELECT question.row_counter, question.name,question.title, question.description, question.type, question.groupe,choice.question_name, choice.choice_name ,question.visible_if, question.is_required , question.show_other" . " FROM question, choice " . " WHERE choice.question_name = question.name AND question.row_counter = 19 ";
    //echo $querry;
    $querry = "SELECT question.row_counter, question.name,question.title, question.description, question.type, question.groupe,choice.question_name, choice.choice_name ,question.visible_if, question.is_required , question.show_other" . " FROM question, choice " . " WHERE choice.question_name = question.name AND question.data_capture = '$name' ";
    $result=$conn->query($querry);

    if($result){
        while($query_row=$result->fetch_assoc() ){
        
        $name = $query_row['name'];
        $type = $query_row['type'];
        $show_other = $query_row['show_other'];
        $visible_if = $query_row['visible_if'];
        $is_required = $query_row['is_required'];
        $groupe = $query_row['groupe'];
        $description = $query_row['description'];

        $choice = $query_row['choice_name'];
        
          $elements = explode(",", $choice);

          
        if (!empty($elements)) {
          $firstElement = $elements[0]; 
          $secondElement = $elements[1]; 
          $thirdElement = $elements[2]; 
          $fourthElement = $elements[3];
          $fifthElement = $elements[3];

          echo "First Element: " . $firstElement . "<br>";
          echo "Second Element: " . $secondElement . "<br>";
          echo "Third Element: " . $thirdElement . "<br>";
          echo "Fourth Element: " . $fourthElement . "<br>";
          echo "Fifth Element: " . $fifthElement . "<br>";
         
        }



        }
    }
    function splitStringToArray($inputString) {
      $stringArray = explode(',', $inputString);
      $stringArray = array_map('trim', $stringArray);
      return $stringArray;
    }
    
    ?>
   
  </style>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
  <div class="" style="margin-top: 10px;">
    <div class="toolbar" style="font-weight: bold;font-size: 35px;color: #fff;">
      DSbD Self-Assessment Tool
      <p style="margin-right: 30px; position: absolute; right: 0;">Role:  
      <?Php
                 echo $groupe;
                // echo "jsjsjsj";
                  ?>  
      </p>
      
    </div>
    <div class="content">
      <div class="horizontal">
        <div class="box sec_inner_hors" style="width: 20%; justify-content: center; align-items: center; display: flex; flex-direction: column;">

               <p>Incidents and Breaches </p>
               <!-- <a href="testing.php?test= <?php echo $description ?>,test1=kkkkkkkkkk"> <p>Security Priority and Investment </p></a> -->
               <a href="testing.php?test= Security Priority and Investment "> <p>Security Priority and Investment </p></a>
               <p>Technology and Data Usage </p>
               <p>Security in Tech.Adoption </p>
               <p>DSbD-specific awareness </p>

        </div>
        
        <div class="box vertical" style=" ">
          <div class="" style="padding: 4px; border-radius: 10px; border: 2px solid #000;background-color: rgb(27, 106, 242);font-weight: bold;font-size: 25px;color: #fff;">
            <p>
            <?Php
                   // echo $description;
                   if (isset($_GET['test'])){
                      $name = $_GET['test'];
                      echo $name;
                    }else{
                      $name='Technology and Data Usage';
                    }
                  
                  ?>
            </p>
          </div>
          <div class="full-width" style=" height: 63%;">
            <p style="padding: 20px;font-weight: bold;font-size: 25px;">Please let your reseponse to the  statement below </p>

            <div class="inner_hor" style="display: flex; height: 92%;">
              <div class="fir_inner_hor" style="width: 60%;
              justify-content: center; display: flex; flex-direction: column;
              padding: 10px; border: 2px solid #000; border-radius: 10px; margin-right: 15px;font-weight: bold;font-size: 25px;">
                <p>
                  <?Php
                  
                  echo $name;
                 // echo $querry;
                  
                  ?>
               </p>
              </div>
              <div class="sec_inner_hor" style="display: block; flex: 1; padding: 10px; border: 2px solid #000; border-radius: 10px;">
                <p><?Php
                  echo $firstElement;
                  ?>
               </p>
                <p>

                <?Php
                  echo $secondElement;
                  ?>

                </p>
                <p>
                <?Php
                  echo $secondElement;
                  ?>
                </p>
                <p>
                <?Php
                  echo $secondElement;
                  ?>
                </p>
                <p>
                <?Php
                  echo $secondElement;
                  ?>
                </p>
              </div>
            </div>
            <div class="mybutton">

            <button class="btn" style="height: 4rem; margin: 5px; font: size 20px; color: #fff;  width: 25%; background-color: rgb(47, 35, 125);font-size: 20px;font-weight: bold;">Back</button>


            <button class="btn" style="float: right; height: 4rem; margin: 5px; font: size 20px; color: #fff; width: 25%; background-color: rgb(47, 35, 125);font-size: 20px;font-weight: bold;">Next</button>
          
            </div>
         
          </div>
        </div>
      
      </div>
    </div>
    <div class="footer" style="font-weight: bold;font-size: 35px;color: #fff;">
      Overall Progress:      %
      <p style="margin-right: 30px; position: absolute; right: 0;">Save for Later</p>
    </div>
  </div>
</body>
</html>