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
        <title>Round 1-2</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript" src="main.js"></script>
        <script type="text/javascript" src="jquery-3.1.1.min.js"></script>
        <script src="jquery.foggy.min.js"></script>
        <script language=javascript src="mlweb20.js"></script>
        <link rel="stylesheet" href="w3.css">

	</head>

      <style>
        .button-container {
          text-align: right;
          margin-top: 40px;
          margin-right: 910px; /* Adjust the value to move the buttons further right */
        }

        .form {
            text-align: left;
            padding-left: 50px;
            padding-right: 100px;
        }
      </style>

    <body class="w3-white w3-content" style="max-width:1600px" onLoad="timefunction('onload', 'body', 'body')">
        <!--BEGIN set vars-->
        <script language="javascript">

            //override defaults
            mlweb_outtype = "CSV";
            mlweb_fname = "mlwebform";
            chkFrm = true;
            warningTxt = "U heeft nog niet alle vragen beantwoord!";
			choice = "";
        </script>


<FORM id="mlwebform" name="mlwebform" onSubmit="return checkForm(this)" method="POST" action="save.php">

			<INPUT type=hidden id='processData' name="procdata" value="">
            <!-- set all variables here -->
            <input id="expName" type=hidden name="expname" value="gamble1-2">
            <input type=hidden name="nextURL" value="gambleCon2_1-3.php">
            <!--these will be set by the script -->
			<input type=hidden name="subject" value="<?php echo($subject)?>">
			<input type=hidden id="condnum" name="condnum" value="<?php echo($condnum)?>">
            <input id="choice" type=hidden name="choice" value="">


        <header class="w3-container w3-blue">
            <h1>Round 1-2</h1>
        </header>
        <div class="form">
            <h1></h1>
            <br>
            <div id="container"  class="w3-white w3-container w3-col" style="width:100%">
            </div>
        </div>

        <br><br><br><br><br><br><br><br><br><br><br><br><br>

		<div class="button-container">
			<button class="confirm w3-button w3-center w3-round-xlarge" name="submit" value="confirm">Confirm</button>
		</div>
		<br>
        <footer class="w3-container w3-blue">
        </footer>
</div>

        <script type="text/javascript">

			// here the json file to generate the trial, for a particular set in the json file is generated. If the third attribute is set to random, it will select an order at random.
			// if you enter a number, it will choose one of the orders using modulo of that number
            o=$("#condnum").val();
			if (o<0) {o="random"};

			generateTrial("json_files/gamble3.json", "dynSet", o);

    	//function that starts the page

	$(document).ready(function () {
		$(".confirm").click(function (event) {
			if (choice=="" && $(".choiceButton").length>0) {event.preventDefault();return false;}
			});
		});



        </script>
    </body>
</html>