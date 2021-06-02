<?php
    //Variable declarations
    //General Student Information
    $lastName = $firstName = $middleName = $homeAddress = $contactNumber = $birthday = $birthPlace = $gender = "";
    //General Student Information Error Variables
    $lastNameError = $firstNameError = $middleNameError = $homeAddressError = $contactNumberError = $birthdayError = $birthPlaceError = $genderError = "";
    //Educational Information
    $schoolLastAttended = $schoolAddress = $trackAndStrand = $yearGraduated = $courseThisComingSY = "";


    function dataValidation($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }


    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        //General Student Information Validations
        if(!empty($_POST['lastname'])) {
            $lastName = dataValidation($_POST['lastname']);
        } else {
            $lastNameError = "Last Name is required";
        }

        if(!empty($_POST['firstname'])) {
            $firstName = dataValidation($_POST['firstname']);
        } else {
            $firstNameError = "First Name is required";
        }

        if(!empty($_POST['middlename'])) {
            $middleName = dataValidation($_POST['middlename']);
        } else {
            $middleNameError = "Middle Name is required";
        }
        
        if(!empty($_POST['homeaddress'])) {
            $homeAddress = dataValidation($_POST['homeaddress']);
        } else {
            $homeAddressError = "Home Address is required";
        }

        if(!empty($_POST['contactnumber'])) {
            $contactNumber = dataValidation($_POST['contactnumber']);
        } else {
            $contactNumberError = "Contact Number is required";
        }

        if(!empty($_POST['birthday'])) {
            $birthday = dataValidation($_POST['birthday']);
        } else {
            $birthdayError = "Birthday is required";
        }

        if(!empty($_POST['birthplace'])) {
            $birthPlace = dataValidation($_POST['birthplace']);
        } else {
            $birthPlaceError = "Birthday is required";
        }

        $selectGender = $_POST['gender'];
        switch ($selectGender) {
          case "Select Gender";
            $genderError = "Select Gender.";
            break;
      
          case "Male";
            $gender = $selectGender;
            break;
      
          case "Female";
            $gender = $selectGender;
            break;
        }


    }
?>