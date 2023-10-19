$(document).ready(function() {
    // Make an AJAX request to getJSON.php
    var group=localStorage.getItem("group");
    alert(group);
    $.ajax({
      url: 'api/getJSON.php?group='+group, // Adjust the path to your getJSON.php script
      method: 'GET',
      dataType: 'json',
      success: function(data) {
        const survey = new Survey.Model(data);
        survey.applyTheme(themeJson);
        // survey.onComplete.add(function(sender, options) {
        //   console.log(JSON.stringify(sender.data, null, 3));
        // });
        survey.onComplete.add(alertResults);
        // Optionally, set default data for the survey
        // survey.data = {
        //   "nps-score": 9,
        //   "promoter-features": ["performance", "ui"]
        // };
  
        // Initialize the survey with your HTML element
        $("#surveyElement").Survey({ model: survey });
      },
      error: function(xhr, status, error) {
        console.error(error);
      }
    });
  });
  function alertResults (sender) {
    const results = JSON.stringify(sender.data);
    var username=localStorage.getItem("username");
    var position=localStorage.getItem("position");
     //console.log(results);
     saveSurveyResults(
         "api/handle.php",username,position,results
    )
}
function saveSurveyResults(url,username,position, json) {
  $.ajax({  
 type: 'POST',  
 url: url, 
 data:{
   username: username,
   position: position,
   json:json
 },
 success: function(response) {
   console.log(response);
   var resultContainer = document.getElementById("surveyContainer");
   if(response==='ok'){
    //resultContainer.innerHTML = "<h3>Data Submitted</h3>";
   }else{
     resultContainer.innerHTML = "<h3>Oops!! Data were not saved to server, try again</h3>";
   }
 },
error:function(error){
  console.log(error);
}
});
}