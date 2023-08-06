const SURVEY_ID = 1;
const survey = new Survey.Model(surveyJson);

function alertResults (sender) {
    const results = JSON.stringify(sender.data);
     //console.log(results);
     saveSurveyResults(
         "http://localhost/kaberuka/api/handle.php?surveyId=" + SURVEY_ID,
         results
    )
}

survey.onComplete.add(alertResults);

$(function() {
    $("#surveyContainer").Survey({ model: survey });
});

 function saveSurveyResults(url, json) {
     $.ajax({  
		type: 'POST',  
		url: url, 
		data: json,
		success: function(response) {
			console.log(response);
		},
	 error:function(error){
		 console.log(error);
	 }
	});
 }