const SURVEY_ID = 1;
//const survey = new Survey.Model(surveyJson3);

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
 

 function loadJSONData(url) {
  return new Promise(function(resolve, reject) {
    $.ajax({
      url: url,
      type: 'GET',
      dataType: 'json',
      success: function(jsonData) {
        var jsonString = JSON.stringify(jsonData);
        //resolve(jsonString);
		resolve(jsonData);
      },
      error: function(xhr, status, error) {
        reject(error);
      }
    });
  });
}
// Assigning the function to a variable
const fetchData = async function() {
  try {
    const url='questionaires/'+localStorage.getItem("questionaire");
    //alert(url)
    const jsonString = await loadJSONData(url);
    return jsonString; // Return the fetched data
  } catch (error) {
    console.error('Failed to load the JSON file:', error);
    throw error; // Rethrow the error
  }
};

// Example usage
async function processData() {
  try {
	  const data = await fetchData();
    // Use the fetched data
    console.log('Fetched data:', data);
	const survey = new Survey.Model(data);
	survey.onComplete.add(alertResults);
    $("#surveyContainer").Survey({ model: survey });
	
    // Continue with other operations using the fetched data
  } catch (error) {
    // Handle any errors
  }
}

// Call the processData function
processData();