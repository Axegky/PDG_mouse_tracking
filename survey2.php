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
        <title>Survey</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript" src="main.js"></script>
        <script type="text/javascript" src="jquery-3.1.1.min.js"></script>
        <script src="jquery.foggy.min.js"></script>
        <script language=javascript src="mlweb20.js"></script>
        <link rel="stylesheet" href="w3.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">


	</head>

    <body class="w3-light-grey w3-content" style="max-width:1600px" onLoad="timefunction('onload', 'body', 'body')">
        <!--BEGIN set vars-->
        <script language="javascript">

            //override defaults
            mlweb_outtype = "CSV";
            mlweb_fname = "mlwebform";
            chkFrm = false;
            warningTxt = "Please answer all questions.";
			choice = "";
        </script>


<FORM id="mlwebform" name="mlwebform" onSubmit="return checkForm(this)" method="POST" action="saveq2.php">

			<INPUT type=hidden id='processData' name="procdata" value="">
            <!-- set all variables here -->
            <input id="expName" type=hidden name="expname" value="survey2">
            <input type=hidden name="nextURL" value="thanks_withcode.html">
            <input type=hidden name="to_email" value="">
            <!--these will be set by the script -->
			<input type=hidden name="subject" value="<?php echo($subject)?>">
			<input type=hidden id="condnum" name="condnum" value="<?php echo($condnum)?>">
            <input id="choice" type=hidden name="choice" value="">


        <header class="w3-container w3-blue">
            <h1>Survey (2/2)</h1>
        </header>
        <div class="w3-white w3-container">
            <br><br>
			<div class="w3-container">
			<p><label class="w3-text"><b>Please enter your age:</b></label>
			  <input class="w3-input w3-border w3-hover-blue" name="age" type="number" min="1" step="1" required></p>

        <p class="w3-text"><b>Please select your gender:</b>
        <select class="w3-select w3-border" name="gender" required>
            <option value="" disabled selected></option>
            <option value="female">Female</option>
            <option value="male">Male</option>
            <option value="nonbinary">Non-binary</option>
            <option value="others">Others</option>
          </select></p>

        <p class="w3-text"><b>Please select the highest education level you have achieved:</b>
        <select class="w3-select w3-border" name="education" required>
            <option value="" disabled selected></option>
            <option value="Under High School">Under High School</option>
            <option value="High School">High School</option>
            <option value="Associate's Degree">Associate's Degree</option>
            <option value="Bachelor's Degree">Bachelor's Degree</option>
            <option value="Master's Degree">Master's Degree</option>
            <option value="Doctorate or Professional Degree">Doctorate or Professional Degree</option>
          </select></p>

        <p><label class="w3-text"><b>Please enter your nationality: </b></label>
            <input class="w3-input w3-border " name="nationality" type="text" required></p><br>

        <p class="w3-text"><b>Do you have any prior knowledge of Game Theory or the Prisoners' Dilemma Game?</b></p>
                 <p><input class="w3-radio" type="radio" name="priorKnow" value="yes" required>
                  <label>Yes</label>

                  <input class="w3-radio" type="radio" name="priorKnow" value="no">
                  <label>No</label></p><br>

        <p class="w3-text"><b>Have you attended any form of the Prisoners' Dilemma Game before?</b></p>
                 <p><input class="w3-radio" type="radio" name="pastexperi" value="yes" required>
                  <label>Yes</label>

                  <input class="w3-radio" type="radio" name="pastexperi" value="no">
                  <label>No</label></p><br>

        <p><label class="w3-text">(Optional) Please enter your email address: <br>The experimental outcome, feedback from your counterparties, and payment information will be sent to you via this email address. </label>
            <input class="w3-input w3-border " name="email" type="text"></p>

        </div>
		<div class="w3-white w3-container w3-center w3-padding">
			<button class="confirm w3-button w3-center w3-round-xlarge" name="submit" value="confirm">Confirm</button>
		</div>

</div>

        <script type="text/javascript">

			// here the json file to generate the trial, for a particular set in the json file is generated. If the third attribute is set to random, it will select an order at random.
			// if you enter a number, it will choose one of the orders using modulo of that number
			// now taking the number from the condnum variable to set the order of the options
            o=$("#condnum").val();
			if (o<0) {o="random"};

			//generateTrial("json_files/tv.json", "dynSet", o);


     		//function that starts the page
	$(document).ready(function () {
		$(".confirm").click(function (event) {
			if (choice=="" && $(".choiceButton").length>0) {event.preventDefault();return false;}
			});
		});



        </script>
    </body>
</html>
