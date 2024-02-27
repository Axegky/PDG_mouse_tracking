<?php
session_start();
if (isset($_GET['subject'])) {$subject=$_GET['subject'];$_SESSION['subject']=$subject;}
 else {
	 if (isset($_SESSION['subject'])) {$subject=$_SESSION['subject'];}
	 else {$subject="anonymous";};
		}
if (isset($_GET['condnum'])) {$condnum=$_GET['condnum'];}
 else {
	 if (isset($_SESSION['condnum'])) {$condnum=$_SESSION['condnum'];$_SESSION['condnum']=$condnum;}
		else {$condnum=-1;};
	}
?>

<html>
<head>
  <title>Questionnaire</title>
  <link rel="stylesheet" href="w3.css">

  <style>
    body {
      justify-content: center;
      height: 100vh;
    }

    .form {
      text-align: left;
      padding-left: 100px;
      padding-right: 100px;
    }

    .form label,
    .form select,
    .form input[type="number"],
    .form input[type="text"],
    .form button {
      font-size: 20px; /* Adjust the font size as needed */
    }
    .form button {
      margin-left: 0px; /* Adjust the value to move the button to the right */
    }

  </style>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function () {
      $.ajax({
        url: 'https://restcountries.com/v3.1/all',
        method: 'GET',
        success: function (response) {
          var nationalities = response.map(function (country) {
            return country.name.common;
          });

          nationalities.forEach(function (nationality) {
            var option = $('<option>').attr('value', nationality);
            $('#nationalitiesList').append(option);
          });
        },
        error: function () {
          console.log('Failed to fetch nationalities');
        }
      });
    });
  </script>
</head>
<FORM id="mlwebform" name="mlwebform" onSubmit="return checkForm(this)" method="POST" action="questionnaire.php">

  			<INPUT type=hidden id='processData' name="procdata" value="">
            <!-- set all variables here -->
            <input type=hidden name="nextURL" value="thanks.html">
            <!--these will be set by the script -->
			<input type=hidden name="subject" value="<?php echo($subject)?>">
			<INPUT type=hidden id="numberInput" name="numberInput" value="">
  			<INPUT type=hidden id="genderInput" name="genderInput" value="">
  			<INPUT type=hidden id="educationInput" name="educationInput" value="">
  			<INPUT type=hidden id="nationalityInput" name="nationalityInput" value="">
            <input type=hidden id="gameTheoryInput" name="gameTheoryInput" value="">
            <input type=hidden id="attendedGameInput" name="attendedGameInput" value="">
            <INPUT type=hidden id="contact" name="contact" value="">

<body>
    <header class="w3-container w3-blue">
        <h1>Survey (2/2)</h1>
    </header>
  <div class="form">
    <form id="numberForm">
      <br>
      <br>
      <br>
      <br>
      <label for="numberInput">Please enter your age:</label>
      <input type="number" id="numberInput" name="numberInput">
      <br>
      <br>
      <label for="genderInput">Please enter your gender:</label>
      <select id="genderInput" name="genderInput">
        <option value="" disabled selected>--Please select--</option>
        <option value="Female">Female</option>
        <option value="Male">Male</option>
        <option value="Non-binary">Binary</option>
        <option value="Prefer not to say">Prefer not to say</option>
      </select>
      <br>
      <br>
      <label for="educationInput">Please enter your highest education level:</label>
      <select id="educationInput" name="educationInput">
        <option value="" disabled selected>--Please select--</option>
        <option value="Under High School">Under High School</option>
        <option value="High School">High School</option>
        <option value="Associate's Degree">Associate's Degree</option>
        <option value="Bachelor's Degree">Bachelor's Degree</option>
        <option value="Master's Degree">Master's Degree</option>
        <option value="Doctorate or Professional Degree">Doctorate or Professional Degree</option>
        <option value="Prefer not to say">Prefer not to say</option>
      </select>
      <br>
      <br>
      <label for="nationalityInput">Please select your nationality:</label>
      <input type="text" id="nationalityInput" name="nationalityInput" list="nationalitiesList" autocomplete="off">
      <datalist id="nationalitiesList"></datalist>
      <br>
      <br>
      <label for="gameTheoryInput">Do you have any prior knowledge of Game Theory or the Prisoners' Dilemma Game?</label>
      <select id="gameTheoryInput" name="gameTheoryInput">
        <option value="" disabled selected>--Please select--</option>
        <option value="Yes">Yes</option>
        <option value="No">No</option>
      </select>
      <br>
      <br>
      <label for="attendedGameInput">Have you attended any form of the Prisoners' Dilemma Game before?</label>
      <select id="attendedGameInput" name="attendedGameInput">
        <option value="" disabled selected>--Please select--</option>
        <option value="Yes">Yes</option>
        <option value="No">No</option>
      </select>
      <br>
      <br>
      <label for="contact">To receive the experimental outcome and payment, please enter your contact information (email address, etc):</label>
      <input type="text" id="contact" name="contact">
      <br>
      <br>
      <br>
      <br>
      <button type="submit">Submit</button>
    </form>
  </div>
</body>
</html>
