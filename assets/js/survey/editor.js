var obj;
var surveyName = "";
function setSurveyName(name) {
  var $titleTitle = jQuery("#sjs_editor_title_show");
  $titleTitle.find("span:first-child").text(name);
}
function startEdit() {
  var $titleEditor = jQuery("#sjs_editor_title_edit");
  var $titleTitle = jQuery("#sjs_editor_title_show");
  $titleTitle.hide();
  $titleEditor.show();
  $titleEditor.find("input")[0].value = surveyName;
  $titleEditor.find("input").focus();
}
function cancelEdit() {
  var $titleEditor = jQuery("#sjs_editor_title_edit");
  var $titleTitle = jQuery("#sjs_editor_title_show");
  $titleEditor.hide();
  $titleTitle.show();
}
function postEdit() {
  cancelEdit();
  var oldName = surveyName;
  var $titleEditor = jQuery("#sjs_editor_title_edit");
  surveyName = $titleEditor.find("input")[0].value;
  setSurveyName(surveyName);
  jQuery
    .get("/changeName?id=" + surveyId + "&name=" + surveyName, function(data) {
      surveyId = data.Id;
    })
    .fail(function(error) {
      surveyName = oldName;
      setSurveyName(surveyName);
      alert(JSON.stringify(error));
    });
}

function getParams() {
  var url = window.location.href
    .slice(window.location.href.indexOf("?") + 1)
    .split("&");
  var result = {};
  url.forEach(function(item) {
    var param = item.split("=");
    result[param[0]] = param[1];
  });
  return result;
}

Survey.dxSurveyService.serviceUrl = site_url;
var accessKey = "";
var editor = new SurveyEditor.SurveyEditor("editor");
// var surveyId = decodeURI(getParams()["id"]);
var surveyId = 1;
editor.loadSurvey(surveyId);
editor.saveSurveyFunc = function(saveNo, callback) {
  var xhr = new XMLHttpRequest();
  xhr.open(
    "POST",
    Survey.dxSurveyService.serviceUrl + "/changeJson?accessKey=" + accessKey
  );
  xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
  xhr.onload = function() {
    var result = xhr.response ? JSON.parse(xhr.response) : null;
    if (xhr.status === 200) {
      callback(saveNo, true);
    }
  };
  xhr.send(
    JSON.stringify({ Id: surveyId, Json: editor.text, Text: editor.text })
  );
};
editor.isAutoSave = true;
editor.showState = true;
editor.showOptions = true;

surveyName = surveyId;
setSurveyName(surveyName);

function selectFile() {
    $('#file_path').click();
    var value = $(obj).val();
    $('#file_path').change(function () {
      if ($('#file_path')[0].files.length) {
      var fileName = $('#file_path')[0].files[0].name;
      if (!fileName) return false;
      var edit_name = $("#surveyquestioneditorwindow").find(".modal-title").text().split("Edit: ")[1];
      $.ajax({
        type: 'GET',
        url: site_url + "/file/checkFileName",
        data: {filename: fileName},
        dataType: "JSON",
        success: function (response) {
          filePath = "";
          if (response == true) {
            filePath = '\n <a href="../assets/uploads/' + fileName + '" > ' + fileName + ' </a>';
            var current = JSON.parse(editor.text);
            for (var i in current.pages) {
              var elements = current.pages[i].elements;
              for (var j in elements) {
                if (elements[j].type == "html" && elements[j].name == edit_name) {
                  elements[j].html = value + filePath;
                }
              }
            }
            editor.text = JSON.stringify(current);
            // editor.saveSurveyFunc();
          } else {
            toastr['warning']("Please select a correct file.");
          }
          $(obj).val(value + filePath);
        }
      });
    }
  });
}

$(document).on('mousedown','textarea',function() {
  obj = $(this);
  var element = $(this).prev("grammarly-ghost");
  $("#select_file").remove();
  element.append("<input type='button' id='select_file' onclick='selectFile()' class='btn btn-primary' style='position: absolute; top: -10px; right: 15px; z-index: 100' value='Choose File'>");  
});

var custom_toolbar ='<div tabindex="0" draggable="true" class="svd_toolbox_item svd-light-border-color">\
  <span class="svd_toolbox_item_text hidden-sm hidden-xs" data-bind="text:title" id="custom_custion">Custom Question</span></div>';
  
$("#icon-actionaddtotoolbox").click(function() {
  var pageName = $('.svd_selected_page').find('.svd-page-name').text();
  if (custom_flag == 1) {
    if (!confirm("Are you sure update the custom question?")) {
      return false;
    }
  } else if(!confirm("Are you sure add to the toolbox")) {
    return false;
  }
  if (custom_flag == 0) {
    var element = $(".svd_toolbox_title").after(custom_toolbar);
  }
  $.ajax({
    type: 'POST',
    url: site_url + "/questions/customQuestion",
    data: {json: editor.text, page: pageName},
    dataType: "JSON",
    success: function (response) {
      if (response == "OK") {
        custom_flag = 1;
      }
    }
  });
});

window.onload = function() {
  var reloading = sessionStorage.getItem("reloading");
  
  if (reloading) {
      $(".svd-page-name").each(function() {
        if($(this).text() == reloading) {
          $(this).parent().click();
        }
      });
      sessionStorage.removeItem("reloading");
  }
}

function reloadPage() {
  sessionStorage.setItem("reloading", pageName);
  document.location.reload();
}

$(document).ready(function() {
  document.getElementById("custom_custion").onmousedown = function(e) {
    e = e || window.event;
    e.preventDefault();
    document.onmouseup = function() {
      pageName = $('.svd_selected_page').find('.svd-page-name').text();
      var xhr = new XMLHttpRequest();
      xhr.open(
        "POST",
        Survey.dxSurveyService.serviceUrl + "/changeJson?pageName=" + pageName
      );
      xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
      xhr.onload = function() {
        var result = xhr.response ? JSON.parse(xhr.response) : null;
        if (xhr.status === 200) {
          reloadPage();
        }
      };
      xhr.send(
        JSON.stringify({ Id: surveyId, Json: editor.text, Text: editor.text })
      );
    };
  };

  $(".survey-page-header-content").find("button").attr("onclick", "window.location='" + site_url + "'");
});
