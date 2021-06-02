<?php 
    session_start();
    include "student-new-enrollment-form-function.php";

    $username = $_SESSION['username'];
    $password = $_SESSION['password'];
    $email = $_SESSION['email'];
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <!-- Start Body -->

    <div class="container border" >
    <img src="" alt="QCU LOGO">
    <h2 class="text-center">Enrollment Form for New Students</h2>
    <hr>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

            <h2 class="mb-4">General Student Information</h2>

            <!-- General Student Information -->
            <div class="form-row">
                <span class="form-group col-md-2 text-center">Student Name:</span>

                <div class="form-group col-md-3">
                <input type="text" name="lastname" class="form-control">
                <label>Last Name</label>
                </div>

                <div class="form-group col-md-3">
                <input type="text" name="firstname" class="form-control">
                <label">First Name</label>
                </div>

                <div class="form-group col-md-3">
                <input type="text" name="middlename" class="form-control">
                <label>Middle Name</label>
                </div>
            </div>

            <div class="form-row">
                <span class="form-group col-md-2 text-center">Email Address: </span>
                <div class="form-group col-md-9">
                <input type="email" name="email" class="form-control">
                </div>
            </div>

            <div class="form-row">
                <span class="form-group col-md-2 text-center">Home Address: </span>
                <div class="form-group col-md-9">
                <input type="text" name="homeaddress" class="form-control">
                </div>
            </div>

            <div class="form-row">
                <span class="form-group col-md-2 text-center">Contact No: </span>
                <div class="form-group col-md-4">
                <input type="text" name="Contact Number" class="form-control">
                </div>

                <span class="form-group col-md-1 text-center">Birthday: </span>
                <div class="form-group col-md-4">
                <input type="date" name="birthday" class="form-control">
                </div>
            </div>

            <div class="form-row">
                <span class="form-group col-md-2 text-center">Birth Place: </span>
                <div class="form-group col-md-4">
                <input type="text" name="birthplace" class="form-control">
                </div>

                <span class="form-group col-md-1 text-center">Gender: </span>
                <div class="form-check form-check-inline">
                <p>Male</p>
                <input class="form-check-input" type="radio" name="inlineRadioOptions"value="option1">
                </div>

                <div class="form-check form-check-inline">
                <p>Female</p>
                <input class="form-check-input" type="radio" name="inlineRadioOptions"value="option1">
                </div>
            </div>

            <hr>
            <h2 class="mb-4">Educational Information</h2>
            <!-- Educational Information -->
            <div class="form-row">
                <span class="form-group col-md-2 text-center">School Last Attended: </span>
                <div class="form-group col-md-9">
                <input type="email" class="form-control">
                </div>
            </div>

            <div class="form-row">
                <span class="form-group col-md-2 text-center">School Address: </span>
                <div class="form-group col-md-9">
                <input type="email" class="form-control">
                </div>
            </div>

            <div class="form-row">
                <span class="form-group col-md-2 text-center">Track and Strand: </span>
                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                <option selected>---------Choose--------</option>
                <option value="1">ABM</option>
                <option value="2">GAS</option>
                <option value="3">STEM</option>
                </select>

                <span class="form-group col-md-2 text-center">Year Graduated: </span>
                <div class="form-group col-md-5">
                <input type="email" class="form-control">
                </div>
            </div>

            <div class="form-row">
                <span class="form-group col-md-2 text-center">Course this coming S.Y: </span>
                <select class="form-select form-select-lg mb-8" aria-label=".form-select-lg example">
                <option selected>---------Choose--------</option>
                <option value="1">BSIT</option>
                <option value="2">BSECE</option>
                <option value="3">BAC</option>
                </select>
            </div>
            <hr>

            <h2 class="mb-4">Family Information</h2>
            <!-- Educational Information -->

            <div class="form-row">
                <!-- Father Information -->
                <span class="form-group col-md-2 text-center">Name of Father:</span>
                <div class="form-group col-md-4">
                <input type="email" class="form-control">
                </div>

                <span class="form-group col-md-2 text-center">Nationality:</span>
                <div class="form-group col-md-3">
                <input type="email" class="form-control">
                </div>

                <span class="form-group col-md-2 text-center">Occupation:</span>
                <div class="form-group col-md-4">
                <input type="email" class="form-control">
                </div>

                <span class="form-group col-md-2 text-center">Contact Number:</span>
                <div class="form-group col-md-3">
                <input type="email" class="form-control">
                </div>

                <!-- Mother Information -->
                <span class="form-group col-md-2 text-center">Name of Mother:</span>
                <div class="form-group col-md-4">
                <input type="email" class="form-control">
                </div>

                <span class="form-group col-md-2 text-center">Nationality:</span>
                <div class="form-group col-md-3">
                <input type="email" class="form-control">
                </div>

                <span class="form-group col-md-2 text-center">Occupation:</span>
                <div class="form-group col-md-4">
                <input type="email" class="form-control">
                </div>

                <span class="form-group col-md-2 text-center">Contact Number:</span>
                <div class="form-group col-md-3">
                <input type="email" class="form-control">
                </div>
            </div>
            <hr>
            <!-- Files to upload -->
            <!-- <h6 class="text-primary m-4">Requirements: </h6>
            <div class="form-row">
                <div class="mb-3">
                <label for="formFile" class="form-label text-danger">*1x1 Picture</label>
                <input class="form-control" type="file" id="formFile">
                </div>

                <div class="mb-3">
                <label for="formFile" class="form-label text-danger">*Medical Certificate</label>
                <input class="form-control" type="file" id="formFile">
                </div>

                <div class="mb-3">
                <label for="formFile" class="form-label text-danger">*PSA Certificate</label>
                <input class="form-control" type="file" id="formFile">
                </div>
            </div>
            
            <div class="form-row">
                <div class="mb-3">
                <label for="formFile" class="form-label text-danger">*Diploma</label>
                <input class="form-control" type="file" id="formFile">
                </div>

                <div class="mb-3">
                <label for="formFile" class="form-label text-danger">*Form 137</label>
                <input class="form-control" type="file" id="formFile">
                </div>
            </div> -->
            <br>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            <a href="student-new-enrollment-form-cancel.php" class="btn btn-danger float-right text-white">Cancel</a>

        </form>
    </div>



  <!-- End Body -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>