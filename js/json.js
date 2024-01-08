$(document).ready(function() {
     // Make an AJAX request to getJSON.php
     var group=localStorage.getItem("group");
     const urlParams = new URLSearchParams(window.location.search);
     var dataCapture = urlParams.get('dc'); // This will return "%20Security%20Priority%20and%20Investment"
     // If you want to decode the URL encoded value:
     dataCapture = decodeURIComponent(dataCapture); 
     localStorage.setItem("data_capture",dataCapture);
    $.ajax({
      url: 'api/getJSONTesting.php?group='+group+'&data_capture='+dataCapture, // Adjust the path to your getJSON.php script
      method: 'GET',
      dataType: 'json',
      success: function(data) {
        const survey = new Survey.Model(data);
        survey.applyTheme(themeJson);
        //joke part
       // Example using local storage
        survey.onValueChanged.add(function (sender, options) {
          // Save progress to local storage
          localStorage.setItem('surveyProgress', JSON.stringify(sender.data));
          console.log(localStorage.getItem('surveyProgress'));
          
        });

        // Example loading progress from local storage
        var savedProgress = localStorage.getItem('surveyProgress');
        if (savedProgress) {
          survey.data = JSON.parse(savedProgress);
          //alert(JSON.parse(savedProgress));
        }



        //joke part
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
    var dataCapture=localStorage.getItem("data_capture")
     //console.log(results);
     saveSurveyResults(
         "api/handle.php",username,position,dataCapture,results
    )
    localStorage.removeItem('surveyProgress');
    
}
function saveSurveyResults(url,username,position,dataCapture,json) {
  $.ajax({  
  type: 'POST',  
  url: url, 
  data:{
    username: username,
    position: position,
    data_capture:dataCapture,
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