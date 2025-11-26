var responsesContainer = document.getElementById("responsesContainer");
var btn = document.getElementById("viewResponsesBtn");

btn.addEventListener("click", function () {
  var ourRequest = new XMLHttpRequest();
  ourRequest.open(
    "GET",
    "http://localhost/mine_reporter/manager_pending_responses.php"
  );
  ourRequest.onload = function () {
    var ourData = JSON.parse(ourRequest.responseText);
    renderHTML(ourData);
  };
  ourRequest.send();
});

function renderHTML(data) {
  var htmlString = "";
  for (i = 0; i < data.length; i++) {
    htmlString += '<div class="report-item">';
    htmlString +=
      "<p><strong>Response Date:</strong> " + data[i].response_date + "</p>";
    htmlString +=
      "<p><strong>Mine Type:</strong> " + data[i].type_name + "</p>";
    htmlString +=
      "<p><strong>Field Name:</strong> " + data[i].field_name + "</p>";
    htmlString += "<p><strong>Quantity:</strong> " + data[i].quantity + "</p>";
    htmlString += "<p><strong>Status:</strong> " + data[i].status + "</p>";
    htmlString +=
      '<button class="btn btn-success approve-btn" onclick="updateResponseStatus(this)" data-report-id="' +
      data[i].id +
      '">Accept</button>';
    htmlString += "    ";
    htmlString += "<hr>";
    htmlString += "</div>";
  }
  responsesContainer.insertAdjacentHTML("beforeend", htmlString);
  htmlString = "";
}

function updateResponseStatus(button) {
  var responseId = button.getAttribute("data-report-id");
  var newStatus = "accepted";
  $.ajax({
    url: "update_response_status.php",
    type: "POST",
    data: { id: responseId, status: newStatus },
    dataType: "json",
    success: function (data) {
      alert("response accepted");
      $(button).closest(".report-item").remove();
    },
    error: function (err) {
      alert("failed");
    },
  });
}
