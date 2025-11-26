var reportsContainer = document.getElementById("reportsContainer");
var btn = document.getElementById("viewReportsBtn");

btn.addEventListener("click", function () {
  var ourRequest = new XMLHttpRequest();
  ourRequest.open(
    "GET",
    "http://localhost/mine_reporter/supervisor_pending_reports.php"
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
      "<p><strong>Report Date:</strong> " + data[i].report_date + "</p>";
    htmlString +=
      "<p><strong>Mine Type:</strong> " + data[i].type_name + "</p>";
    htmlString +=
      "<p><strong>Field Name:</strong> " + data[i].field_name + "</p>";
    htmlString += "<p><strong>Quantity:</strong> " + data[i].quantity + "</p>";
    htmlString += "<p><strong>Status:</strong> " + data[i].status + "</p>";
    htmlString +=
      '<button class="btn btn-success approve-btn" onclick="updateReportStatus(this)" value="approved" data-report-id="' +
      data[i].id +
      '">Approve</button>';
    htmlString += "    ";
    htmlString +=
      '<button class="btn btn-danger reject-btn" onclick="updateReportStatus(this)" value="rejected" data-report-id="' +
      data[i].id +
      '">Reject</button>';
    htmlString += "<hr>";
    htmlString += "</div>";
  }
  reportsContainer.insertAdjacentHTML("beforeend", htmlString);
  htmlString = "";
}

function updateReportStatus(button) {
  var reportId = button.getAttribute("data-report-id");
  var newStatus = button.value;
  $.ajax({
    url: "update_report_status.php",
    type: "POST",
    data: { id: reportId, status: newStatus },
    dataType: "json",
    success: function (data) {
      if (newStatus == "approved") {
        alert("Report approved");
      } else {
        alert("Report rejected");
      }
      $(button).closest(".report-item").remove();
    },
    error: function (err) {
      alert("failed");
    },
  });
}
