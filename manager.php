<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <title>Mine Reporter | Manager</title>
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
                Pending Responses
              </a>
            </li>
            <li class="nav-item">
              <a
                class="nav-link breadcrumb-item"
                aria-current="page"
                href="#reportsHistory"
              >Civilian Reports</a>
            </li>
            <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Edit
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item breadcrumb-item" href="#manageFieldsSection">Edit Mine Fields</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item breadcrumb-item" href="#manageMinesSection">Edit Mine Types</a></li>
          </ul>
        </li>
        <li>
        <button class="btn btn-outline-success ms-auto" data-bs-toggle="modal" data-bs-target="#addUserModal">Add User</button>
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

<!-- Add User Modal -->
<div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addUserModalLabel">Add New User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="addUserForm">
          <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
          </div>
          <div class="mb-3">
            <label for="role" class="form-label">Role</label>
            <select class="form-select" id="role" name="role" required>
              <option value="searcher">Searcher</option>
              <option value="supervisor">Supervisor</option>
              <option value="manager">Manager</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary">Add User</button>
        </form>
      </div>
    </div>
  </div>
</div>

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
        <h1>Welcome Manager</h1>
      </div>
    </div>

    <section class="new-report py-5" id="newReport">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <h1>Pending Responses</h1>
            <p class="lead">View and issue pending responses from supervisors</p>
          </div>
          <div
            class="btn btn-outline-warning"
            data-bs-toggle="modal"
            data-bs-target="#responsesModal"
            id="viewResponsesBtn"
          >
            View Pending Responses
          </div>
        </div>
      </div>
    </section>

    <div class="modal fade" id="responsesModal" tabindex="-1" role="dialog" aria-labelledby="responsesModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="responsesModalLabel">Pending Responses</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            </button>
          </div>
          <div class="modal-body" id="responsesContainer">
            <!-- Responses will be dynamically loaded here -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <div class="imgDiv">
      <div class="img1"></div>
      <div class="img2"></div>
    </div>

    <section class="new-report py-5" id="reportsHistory">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <h1>Civilian Reports</h1>
            <p class="lead">View reports submitted by civilians</p>
          </div>
          <div
            class="btn btn-outline-warning"
            data-bs-toggle="modal"
            data-bs-target="#viewCivilianReportsModal"
          >
            View Civilian Reports
          </div>
        </div>
      </div>
    </section>

    <div class="modal fade" id="viewCivilianReportsModal" tabindex="-1" role="dialog" aria-labelledby="civilianReportsLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="civilianReportsLabel">Civilian Reports</h5>
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
                    <div id="civilianReportsContainer"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <section class="new-report py-5" id="manageFieldsSection">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <h1>Manage Mine Fields</h1>
            <p class="lead">Manage the fields where teams are working</p>
          </div>
          <div
            class="btn btn-outline-warning"
            data-bs-toggle="modal"
            data-bs-target="#manageFieldsModal"
          >
            Manage Fields
          </div>
        </div>
      </div>
    </section>

    <div class="modal fade" id="manageFieldsModal" tabindex="-1" role="dialog" aria-labelledby="manageFieldsModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="manageFieldsModalLabel">Manage Fields</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body">
                        <button class="btn btn-success mb-3" data-bs-toggle="collapse" data-bs-target="#addFieldSection">Add Field</button>
                        <button class="btn btn-info mb-3" data-bs-toggle="collapse" data-bs-target="#viewFieldsSection" onclick="loadFields()">View Fields</button>
                        
                        <div id="addFieldSection" class="collapse">
                            <form id="addFieldForm">
                                <div class="form-group">
                                    <label for="addFieldName">Field Name</label>
                                    <input type="text" class="form-control" id="addFieldName" name="field_name" required>
                                </div>
                                <div class="form-group">
                                    <label for="addFieldDescription">Description</label>
                                    <textarea class="form-control" id="addFieldDescription" name="description" required></textarea>
                                </div>
                                <button type="button" class="btn btn-primary" onclick="addField()">Submit</button>
                            </form>
                        </div>
                        
                        <div id="viewFieldsSection" class="collapse">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Field Name</th>
                                        <th>Description</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody id="fieldsTableBody">
                                    <!-- Fields will be loaded here -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="new-report py-5" id="manageMinesSection">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <h1>Manage Mine Types</h1>
            <p class="lead">Manage mine types present in the fields</p>
          </div>
          <div
            class="btn btn-outline-warning"
            data-bs-toggle="modal"
            data-bs-target="#manageMinesModal"
          >
            Manage Mines
          </div>
        </div>
      </div>
    </section>

    <div class="modal fade" id="manageMinesModal" tabindex="-1" role="dialog" aria-labelledby="manageMinesModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="manageMinesModalLabel">Manage Mines</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body">
                        <button class="btn btn-success mb-3" data-bs-toggle="collapse" data-bs-target="#addMineSection">Add Mine</button>
                        <button class="btn btn-info mb-3" data-bs-toggle="collapse" data-bs-target="#viewMinesSection" onclick="loadMines()">View Mines</button>
                        
                        <div id="addMineSection" class="collapse">
                            <form id="addMineForm">
                                <div class="form-group">
                                    <label for="addMineName">Mine Type</label>
                                    <input type="text" class="form-control" id="addMineName" name="type_name" required>
                                </div>
                                <div class="form-group">
                                    <label for="addMineDescription">Description</label>
                                    <textarea class="form-control" id="addMineDescription" name="description" required></textarea>
                                </div>
                                <button type="button" class="btn btn-primary" onclick="addMine()">Submit</button>
                            </form>
                        </div>
                        
                        <div id="viewMinesSection" class="collapse">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Mine Type</th>
                                        <th>Description</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody id="minesTableBody">
                                    <!-- Mines will be loaded here -->
                                </tbody>
                            </table>
                        </div>
                    </div>
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
      background-image: url("assets/background4.jpg");
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
      #manageMinesSection,
      #manageFieldsSection{
        background-color: #b33c3c;
        color: #ffc107;
      }
      #newReport .lead,
      #reportsHistory .lead,
      #manageFieldsSection .lead,
      #manageMinesSection .lead{
        color: azure;
      }
      .imgDiv {
        display: flex;
        background-color: yellow;
        height: 50vh;
      }
      .img1 ,.img2{
        display: flex;
        width: 100%;
        height: 100%;
        align-items: center;
        justify-content: center;
      }
      .img1 {
        background-image: url("assets/img1.jpg");
        background-size: cover;
      }
      .img2 {
        background-image: url("assets/img2.jpg");
        background-size: cover;
      }
      #fieldsCollapse {
        justify-content: center;
        align-items: center;
        width: 80%
      }
      #fieldsForm {
        display: flex;
        justify-content: center;
        align-items: center;
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
    <script src="manager_pending_responses.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
    <script>

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


      $(document).ready(function() {
          $('#filterForm').submit(function(event) {
              event.preventDefault();
              fetchReports();
          });

          function fetchReports() {
              var startDate = $('#startDate').val();

              $.ajax({
                  url: 'manager_civilian_reports.php',
                  type: 'GET',
                  data: { startDate: startDate },
                  success: function(data) {
                      $('#civilianReportsContainer').html(data);
                  },
                  error: function(xhr, status, error) {
                      console.error('Error fetching reports:', error);
                  }
              });
          }
        });

  $(document).ready(function() {
    $('#addUserForm').on('submit', function(event) {
      event.preventDefault(); // Prevent the default form submission

      $.ajax({
        url: 'add_user.php',
        type: 'POST',
        data: $(this).serialize(),
        success: function(response) {
          var result = JSON.parse(response);
          if (result.success) {
            alert('User added successfully');
            $('#addUserModal').modal('hide');
            $('#addUserForm')[0].reset(); // Reset form fields
          } else {
            alert('Failed to add user: ' + result.error);
          }
        },
        error: function() {
          alert('An error occurred while adding the user.');
        }
      });
    });
  });

   function addField() {
            var fieldName = $('#addFieldName').val();
            var fieldDescription = $('#addFieldDescription').val();

            if (fieldName && fieldDescription) {
                $.ajax({
                    type: 'POST',
                    url: 'add_field.php',
                    data: {
                        field_name: fieldName,
                        description: fieldDescription
                    },
                    success: function(response) {
                        var result = JSON.parse(response);
                        if (result.success) {
                            alert('Field added successfully');
                            $('#addFieldForm')[0].reset();
                            $('#addFieldSection').collapse('hide');
                        } else {
                            alert('Failed to add field: ' + result.error);
                        }
                    },
                    error: function() {
                        alert('An error occurred while adding the field.');
                    }
                });
            } else {
                alert('Please fill in all fields.');
            }
        }

        function loadFields() {
            $.ajax({
                type: 'GET',
                url: 'get_fields.php',
                success: function(response) {
                    var fields = JSON.parse(response);
                    var fieldsTableBody = $('#fieldsTableBody');
                    fieldsTableBody.empty();

                    fields.forEach(function(field) {
                        var fieldRow = '<tr>' +
                            '<td><input type="text" class="form-control field-name" value="' + field.field_name + '" readonly></td>' +
                            '<td><textarea class="form-control field-description" readonly>' + field.description + '</textarea></td>' +
                            '<td>' +
                                '<button class="btn btn-warning edit-btn" onclick="editField(this)">Edit</button>' +
                                '<button class="btn btn-danger ml-2" onclick="deleteField(' + field.id + ')">X</button>' +
                                '<button class="btn btn-success ml-2 save-btn" style="display: none;" onclick="saveField(' + field.id + ', this)">Save</button>' +
                            '</td>' +
                            '</tr>';
                        fieldsTableBody.append(fieldRow);
                    });
                },
                error: function() {
                    alert('An error occurred while loading fields.');
                }
            });
        }

        function deleteField(id) {
            if (confirm('Are you sure you want to delete this field?')) {
                $.ajax({
                    type: 'POST',
                    url: 'delete_field.php',
                    data: { id: id },
                    success: function(response) {
                        var result = JSON.parse(response);
                        if (result.success) {
                            alert('Field deleted successfully');
                            loadFields();
                        } else {
                            alert('Failed to delete field: ' + result.error);
                        }
                    },
                    error: function() {
                        alert('An error occurred while deleting the field.');
                    }
                });
            }
        }

        function editField(button) {
            var fieldRow = $(button).closest('tr');
            fieldRow.find('.field-name, .field-description').prop('readonly', false);
            fieldRow.find('.edit-btn').hide();
            fieldRow.find('.save-btn').show();
        }

        function saveField(id, button) {
            var fieldRow = $(button).closest('tr');
            var fieldName = fieldRow.find('.field-name').val();
            var fieldDescription = fieldRow.find('.field-description').val();

            if (fieldName && fieldDescription) {
                $.ajax({
                    type: 'POST',
                    url: 'edit_field.php',
                    data: {
                        id: id,
                        field_name: fieldName,
                        description: fieldDescription
                    },
                    success: function(response) {
                        var result = JSON.parse(response);
                        if (result.success) {
                            alert('Field updated successfully');
                            fieldRow.find('.field-name, .field-description').prop('readonly', true);
                            fieldRow.find('.edit-btn').show();
                            fieldRow.find('.save-btn').hide();
                        } else {
                            alert('Failed to update field: ' + result.error);
                        }
                    },
                    error: function() {
                        alert('An error occurred while updating the field.');
                    }
                });
            } else {
                alert('Please fill in all fields.');
            }
        }

        function addMine() {
            var mineName = $('#addMineName').val();
            var mineDescription = $('#addMineDescription').val();

            if (mineName && mineDescription) {
                $.ajax({
                    type: 'POST',
                    url: 'add_mine.php',
                    data: {
                        type_name: mineName,
                        description: mineDescription
                    },
                    success: function(response) {
                        var result = JSON.parse(response);
                        if (result.success) {
                            alert('Mine added successfully');
                            $('#addMineForm')[0].reset();
                            $('#addMineSection').collapse('hide');
                        } else {
                            alert('Failed to add mine: ' + result.error);
                        }
                    },
                    error: function() {
                        alert('An error occurred while adding the mine.');
                    }
                });
            } else {
                alert('Please fill in all fields.');
            }
        }

        function loadMines() {
            $.ajax({
                type: 'GET',
                url: 'get_mines.php',
                success: function(response) {
                    var mines = JSON.parse(response);
                    var minesTableBody = $('#minesTableBody');
                    minesTableBody.empty();

                    mines.forEach(function(mine) {
                        var mineRow = '<tr>' +
                            '<td><input type="text" class="form-control mine-name" value="' + mine.type_name + '" readonly></td>' +
                            '<td><textarea class="form-control mine-description" readonly>' + mine.description + '</textarea></td>' +
                            '<td>' +
                                '<button class="btn btn-warning edit-btn" onclick="editMine(this)">Edit</button>' +
                                '<button class="btn btn-danger ml-2" onclick="deleteMine(' + mine.id + ')">X</button>' +
                                '<button class="btn btn-success ml-2 save-btn" style="display: none;" onclick="saveMine(' + mine.id + ', this)">Save</button>' +
                            '</td>' +
                            '</tr>';
                        minesTableBody.append(mineRow);
                    });
                },
                error: function() {
                    alert('An error occurred while loading mines.');
                }
            });
        }

        function deleteMine(id) {
            if (confirm('Are you sure you want to delete this mine?')) {
                $.ajax({
                    type: 'POST',
                    url: 'delete_mine.php',
                    data: { id: id },
                    success: function(response) {
                        var result = JSON.parse(response);
                        if (result.success) {
                            alert('Mine deleted successfully');
                            loadMines();
                        } else {
                            alert('Failed to delete mine: ' + result.error);
                        }
                    },
                    error: function() {
                        alert('An error occurred while deleting the mine.');
                    }
                });
            }
        }

        function editMine(button) {
            var mineRow = $(button).closest('tr');
            mineRow.find('.mine-name, .mine-description').prop('readonly', false);
            mineRow.find('.edit-btn').hide();
            mineRow.find('.save-btn').show();
        }

        function saveMine(id, button) {
            var mineRow = $(button).closest('tr');
            var mineName = mineRow.find('.mine-name').val();
            var mineDescription = mineRow.find('.mine-description').val();

            if (mineName && mineDescription) {
                $.ajax({
                    type: 'POST',
                    url: 'edit_mine.php',
                    data: {
                        id: id,
                        type_name: mineName,
                        description: mineDescription
                    },
                    success: function(response) {
                        var result = JSON.parse(response);
                        if (result.success) {
                            alert('Mine updated successfully');
                            mineRow.find('.mine-name, .mine-description').prop('readonly', true);
                            mineRow.find('.edit-btn').show();
                            mineRow.find('.save-btn').hide();
                        } else {
                            alert('Failed to update mine: ' + result.error);
                        }
                    },
                    error: function() {
                        alert('An error occurred while updating the mine.');
                    }
                });
            } else {
                alert('Please fill in all fields.');
            }
        }
    </script>
</body>
</html>