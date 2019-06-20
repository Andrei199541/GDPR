function doOnCurrentPageChanged(survey) {
    document
        .getElementById('surveyPrev')
        .style
        .display = !survey.isFirstPage
            ? "inline"
            : "none";
    document
        .getElementById('surveyNext')
        .style
        .display = !survey.isLastPage
            ? "inline"
            : "none";
    document
        .getElementById('surveyComplete')
        .style
        .display = survey.isLastPage
            ? "inline"
            : "none";
    document.getElementById('surveyProgress').innerText = ( survey.currentPageNo + 1) + " of " + survey.visiblePageCount + ".";
    if (document.getElementById('surveyPageNo')) 
        document
            .getElementById('surveyPageNo')
            .value = survey.currentPageNo;
}
if (!window["%hammerhead%"]) {
    window.survey = new Survey.Model(json);
    survey.onComplete.add(function(result, e) {
        $("#surveyResult").val(JSON.stringify(result.data));
        $("#form").submit();
    });

    $("#surveyElement").Survey({
        model: survey, onCurrentPageChanged: doOnCurrentPageChanged
    });

    doOnCurrentPageChanged(survey);
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

var storageName = "SurveyJS_LoadState";
var timerId = 0;

survey
    .onCurrentPageChanged
    .add(function (survey, options) {
        // saveState(survey);
    });
survey
    .onComplete
    .add(function (survey, options) {
    });

if (parent.pageNumber) {
    survey.currentPageNo = parent.pageNumber;
}
survey.data = result;

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
    $(nextElm).prop("value", "Urmatorul");
    var style = '';
    if(nextElm.css('display') == 'none'){
        style = 'display: none;';
    }
    $("input[class='sv_prev_btn']").prop("value", "Precedentul");
    $("input[class='sv_next_btn']").parent().append('<input type="button" style="float: right; margin-right: 10px;' + style + '" value="Salveaza" onClick="saveSurvey()">');
});
