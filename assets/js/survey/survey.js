if (!window["%hammerhead%"]) {
    window.survey = new Survey.Model(json);
    survey.onComplete.add(function(result, e) {
        $("#surveyResult").val(JSON.stringify(result.data));
        $("#form").submit();
    });

    $("#surveyElement").Survey({
        model: survey
    });
} 

var total = {
    pageCount: survey.pageCount,
    question: survey.getAllQuestions().length,
    answer: 0
};
var question = {

};
var answer = {
    requireCount: 0,
    responseCount: 0
};
var currentPage = {
    questionCount: 0
}
document.addEventListener('DOMContentLoaded', function() {
    $('.sv_prev_btn').remove(); //remove previous button
 }, false);

var storageName = "SurveyJS_LoadState";
var timerId = 0;


function loadState(survey) {
	
}


survey
    .onCurrentPageChanged
    .add(function (survey, options) {
        // saveState(survey);
    });
survey
    .onComplete
    .add(function (survey, options) {
        // clearInterval(timerId);
        // saveState(survey);
    });

survey.data = result;

//save the data every 10 seconds, it is a good idea to change it to 30-60 seconds or more.
// timerId = window.setInterval(function () {
    // saveState(survey);
// }, 10000);

$("#surveyElement").Survey({model: survey});

function saveSurvey() {
    var surveyResult = [];
    for (var i in survey.data) {
        var obj = {
            name: i, reply: survey.data[i]
        }
        surveyResult.push(obj);
    }
    $.ajax({
        url: parent.site_url + 'questions/saveSurvey',
        type: "post",
        data: {pageNumber: survey.currentPageNo, result: surveyResult},
        success: function(response) {
            if (response) {
                alert("Survey saved successfully.");
            } else {
                alert("Failed to save the survey.");
            }
        }
    });
}

$(document).ready(function() {
    var nextElm = $("input[class='sv_next_btn']");
    var style = '';
    if(nextElm.css('display') == 'none'){
        style = 'display: none;';
    }
    $("input[class='sv_next_btn']").parent().append('<input type="button" style="float: right; margin-right: 10px;' + style + '" value="Save" onClick="saveSurvey()">');
});
