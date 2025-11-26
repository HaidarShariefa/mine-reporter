<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
      rel="stylesheet"
    />
    <title>Mine Reporter | Supervisor</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"
          ><img
            src="assets/IMAS_Mine_Hazard_Sign_-_Square.svg.png"
            alt="Bootstrap"
            width="50"
            height="45"
        /></a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a
                class="nav-link breadcrumb-item"
                aria-current="page"
                href="#home"
                >Home</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link breadcrumb-item"
                aria-current="page"
                href="#newReport"
              >
                Pending Reports
              </a>
            </li>
            <li class="nav-item">
              <a
                class="nav-link breadcrumb-item"
                aria-current="page"
                href="#reportsHistory"
              >
                Previous Reports
              </a>
            </li>
          </ul>
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle btn btn-outline-success" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="manageAccountBtn">
                        <i class="fa-regular fa-user"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#changeUsernameModal">Change Username</a></li>
                        <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#changePasswordModal">Change Password</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item text-danger" href="logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
      </div>
    </nav>

    <!-- Change Username Modal -->
<div class="modal fade" id="changeUsernameModal" tabindex="-1" aria-labelledby="changeUsernameModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="changeUsernameModalLabel">Change Username</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="changeUsernameForm">
          <div class="mb-3">
            <label for="newUsername" class="form-label">New Username</label>
            <input type="text" class="form-control" id="newUsername" name="newUsername" required>
          </div>
          <button type="submit" class="btn btn-primary">Save Changes</button>
        </form>
        <div id="changeUsernameResult" class="mt-3"></div>
      </div>
    </div>
  </div>
</div>

<!-- Change Password Modal -->
<div class="modal fade" id="changePasswordModal" tabindex="-1" aria-labelledby="changePasswordModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="changePasswordModalLabel">Change Password</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="changePasswordForm">
          <div class="mb-3">
            <label for="currentPassword" class="form-label">Current Password</label>
            <input type="password" class="form-control" id="currentPassword" name="currentPassword" required>
          </div>
          <div class="mb-3">
            <label for="newPassword" class="form-label">New Password</label>
            <input type="password" class="form-control" id="newPassword" name="newPassword" required>
          </div>
          <div class="mb-3">
            <label for="confirmPassword" class="form-label">Confirm New Password</label>
            <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required>
          </div>
          <button type="submit" class="btn btn-primary">Save Changes</button>
        </form>
        <div id="changePasswordResult" class="mt-3"></div>
      </div>
    </div>
  </div>
</div>

    <div class="header">
      <div class="header-content">
        <h1>Welcome Supervisor</h1>
      </div>
    </div>

    <section class="new-report py-5" id="newReport">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <h1>Pending Reports</h1>
            <p class="lead">View and approve pending reports from searchers</p>
          </div>
          <div
            class="btn btn-outline-warning"
            data-bs-toggle="modal"
            data-bs-target="#reportsModal"
            id="viewReportsBtn"
          >
            view pending reports
          </div>
        </div>
      </div>
    </section>

    <div class="modal fade" id="reportsModal" tabindex="-1" role="dialog" aria-labelledby="reportsModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="reportsModalLabel">Pending Reports</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            </button>
          </div>
          <div class="modal-body" id="reportsContainer">
            <!-- Reports will be dynamically loaded here -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <br />
    <br />

    <div class="container" id="slider">
      <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="1"
            aria-label="Slide 2"
          ></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets/searcher2.jpg" class="d-block mx-auto" alt="..." />
          </div>
          <div class="carousel-item">
            <img src="assets/searcher3.jpg" class="d-block mx-auto" alt="..." />
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

    <br />
    <br />

    <section class="new-report py-5" id="reportsHistory">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <h1>Reports History</h1>
            <p class="lead">View previously submitted reports</p>
          </div>
          <div
            class="btn btn-outline-warning"
            data-bs-toggle="modal"
            data-bs-target="#viewReportsModal"
            id="previousReportsBtn"
          >
            View Reports
          </div>
        </div>
      </div>
    </section>
    
    <div class="modal fade" id="viewReportsModal" tabindex="-1" role="dialog" aria-labelledby="viewReportsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="viewReportsModalLabel">View Previous Reports</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <form id="filterForm">
                        <div class="form-group">
                            <label for="startDate">Start Date:</label>
                            <input type="date" class="form-control" id="startDate" name="startDate">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Filter Reports</button>
                    </form>
                    <hr>
                    <div id="previousReportsContainer"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <section class="new-report py-5" id="acceptedResponses">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <h1>Accepted Responses</h1>
            <p class="lead">View the accepted responses from the manager</p>
          </div>
          <button class="btn btn-outline-warning"
            data-bs-toggle="modal"
            data-bs-target="#acceptedResponsesModal">
            View Accepted Responses
          </button>
        </div>
      </div>
    </section>

    <!-- Accepted Responses Modal -->
<div class="modal fade" id="acceptedResponsesModal" tabindex="-1" aria-labelledby="acceptedResponsesModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="acceptedResponsesModalLabel">Accepted Responses</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">Mine Type</th>
              <th scope="col">Field Name</th>
              <th scope="col">Latitude</th>
              <th scope="col">Longitude</th>
              <th scope="col">Quantity</th>
              <th scope="col">Response Date</th>
            </tr>
          </thead>
          <tbody id="acceptedResponsesTableBody">
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>


    <footer class="bg-dark text-white text-center py-3">
      <div class="container">
        <p class="mb-0">© Mine Reporter</p>
        <p class="mb-0">
          <a href="mailto:haidarshariefa33451@gmail.com" class="text-white"
            ><i class="fa-regular fa-envelope"></i></a
          >
          |           
          <a href="tel:+96178986316" class="text-white"><i class="fa-solid fa-phone"></i></a>
        </p>
      </div>
    </footer>

    <style>
      .header {
        position: relative;
        background-image: url("assets/background3.jpg");
        background-size: cover;
        background-position: center;
        height: 100vh;
        color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
      }
      .header-content {
        position: relative;
        z-index: 1;
      }
      .header-content h1 {
        font-size: 3em;
        margin: 0;
      }
      .new-report {
        background-color: #b33c3c;
        padding-top: 60px;
      }
      .new-report .lead {
        font-size: 1.25rem;
        color: #555;
      }
      #newReport,
      #reportsHistory,
      #acceptedResponses {
        background-color: #b33c3c;
        color: #ffc107;
      }
      #newReport .lead,
      #reportsHistory .lead, 
      #acceptedResponses .lead{
        color: azure;
      }
      .carousel-item img {
        width: auto;
        max-height: 500px;
      }
      .carousel-control-prev,
      .carousel-control-next {
        width: 45%;
      }

      .carousel-control-prev-icon,
      .carousel-control-next-icon {
        padding: 10px;
      }

      .carousel-inner {
        position: relative;
      }

      .carousel-item img {
        display: block;
        margin: 0 auto;
        max-height: 500px;
      }

      footer {
        position: relative;
        bottom: 0;
        width: 100%;
        background-color: #a42613;
        color: white;
        text-align: center;
        padding: 1rem 0;
      }
      footer a {
        color: #ffc107;
        text-decoration: none;
      }

      footer a:hover {
        color: white;
        text-decoration: underline;
      }
      .form-control[readonly] {
        background-color: #e9ecef;
        opacity: 1;
      }
    </style>

    <script src="https://kit.fontawesome.com/dfcd077466.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
    <script src="supervisor_pending_reports.js"></script>
    <script>
      function getLocation() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(showPosition);
        } else {
          alert("Geolocation is not supported by this browser.");
        }
      }

      function showPosition(position) {
        document.getElementById("latitude").value = position.coords.latitude;
        document.getElementById("longitude").value = position.coords.longitude;
      }

      function setCurrentDate() {
        const today = new Date().toISOString().split("T")[0];
        document.getElementById("reportDate").value = today;
      }

      window.onload = function () {
        getLocation();
        setCurrentDate();
      };

      $(document).ready(function() {
          $('#filterForm').submit(function(event) {
              event.preventDefault();
              fetchReports();
          });

          function fetchReports() {
              var startDate = $('#startDate').val();

              $.ajax({
                  url: 'supervisor_previous_reports.php',
                  type: 'GET',
                  data: { startDate: startDate },
                  success: function(data) {
                      console.log("fetched data: ", data)
                      $('#previousReportsContainer').html(data);
                  },
                  error: function(xhr, status, error) {
                      console.error('Error fetching reports:', error);
                  }
              });
          }
        });

        $(document).ready(function() {
    $('#acceptedResponsesModal').on('show.bs.modal', function() {
        $.ajax({
            url: 'supervisor_accepted_responses.php',
            method: 'GET',
            dataType: 'json',
            success: function(data) {
                var tableBody = $('#acceptedResponsesTableBody');
                tableBody.empty();
                data.forEach(function(response) {
                    var row = '<tr>' +
                        '<td>' + response.type_name + '</td>' +
                        '<td>' + response.field_name + '</td>' +
                        '<td>' + response.latitude + '</td>' +
                        '<td>' + response.longitude + '</td>' +
                        '<td>' + response.quantity + '</td>' +
                        '<td>' + response.response_date + '</td>' +
                        '</tr>';
                    tableBody.append(row);
                });
            },
            error: function() {
                alert('Failed to fetch data.');
            }
        });
    });
});



        $(document).ready(function() {
    // Change Username
    $('#changeUsernameForm').on('submit', function(e) {
        e.preventDefault();

        $.ajax({
            type: 'POST',
            url: 'change_username.php',
            data: {
                newUsername: $('#newUsername').val()
            },
            success: function(response) {
                var result = JSON.parse(response);
                if (result.success) {
                    $('#changeUsernameResult').text('Username changed successfully.').css('color', 'green');
                } else {
                    $('#changeUsernameResult').text('Failed to change username: ' + result.error).css('color', 'red');
                }
            },
            error: function() {
                $('#changeUsernameResult').text('An error occurred while changing the username.').css('color', 'red');
            }
        });
    });

    // Change Password
    $('#changePasswordForm').on('submit', function(e) {
        e.preventDefault();

        var newPassword = $('#newPassword').val();
        var confirmPassword = $('#confirmPassword').val();

        if (newPassword !== confirmPassword) {
            $('#changePasswordResult').text('New passwords do not match.').css('color', 'red');
            return;
        }

        $.ajax({
            type: 'POST',
            url: 'change_password.php',
            data: {
                currentPassword: $('#currentPassword').val(),
                newPassword: newPassword
            },
            success: function(response) {
                var result = JSON.parse(response);
                if (result.success) {
                    $('#changePasswordResult').text('Password changed successfully.').css('color', 'green');
                } else {
                    $('#changePasswordResult').text('Failed to change password: ' + result.error).css('color', 'red');
                }
            },
            error: function() {
                $('#changePasswordResult').text('An error occurred while changing the password.').css('color', 'red');
            }
        });
    });
});
    </script>
  </body>
</html>
