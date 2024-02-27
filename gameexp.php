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
        <title>Introduction</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript" src="main.js"></script>
        <script type="text/javascript" src="jquery-3.1.1.min.js"></script>
        <script src="jquery.foggy.min.js"></script>
        <script language=javascript src="mlweb20.js"></script>
        <link rel="stylesheet" href="w3.css">

      <script>
        function checkAnswer() {
          // Get the selected option value
          var selectedOption = document.querySelector('input[name="option"]:checked').value;

          // Check if the selected option is correct
          if (selectedOption === "correct") {
            // Forward to the next page
            window.location.href = "intro1.php";
          } else {
            // Display an alert message
            alert("Your answer is incorrect. Please read the text carefully.");
          }
        }
      </script>

      <style>
        .button-container {
          text-align: right;
          margin-top: 40px;
          margin-right: 920px; /* Adjust the value to move the buttons further right */
        }

        .button-container button {
          margin-left: 40px; /* Adjust the value to add spacing between buttons */
        }

        .form {
            text-align: left;
            padding-left: 100px;
            padding-right: 100px;
        }

        .highlight {
            background-color: yellow; /* Set the background color to yellow */
            color: black; /* Set the text color to black */
            /* You can customize other CSS properties as needed */
          }
      </style>

<FORM id="mlwebform" name="mlwebform" onSubmit="return checkForm(this)" method="POST" action="save0.php">

			<INPUT type=hidden id='processData' name="procdata" value="">
            <!-- set all variables here -->
            <input id="expName" type=hidden name="expname" value="example">
            <!--these will be set by the script -->
			<input type=hidden name="subject" value="<?php echo($subject)?>">
			<input type=hidden id="condnum" name="condnum" value="<?php echo($condnum)?>">
            <input id="choice" type=hidden name="choice" value="">


        <header class="w3-container w3-blue">
            <h1>Example</h1>
        </header>
        <div class="form">
            <h1></h1>
            <br>
            <p style ="font-size: 18px;">Below is an example PDG matrix that you will see in the formal trials. </p>
            <p style ="font-size: 18px;"><strong>The value in the boxes will change, but the rules for PDG mentioned in the previous page will always apply. </strong></p>
            <p style ="font-size: 18px;">You can check the payoff by <strong>putting your cursor</strong> over the grey box. </p>
            <p style ="font-size: 18px;">Your choice in the current webpage will <strong>not</strong> be recorded. </p>
            <div id="container"  class="w3-white w3-container w3-col" style="width:100%">
            </div>
        </div>

        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

        <div class="form">
            <h1></h1>
            <p style ="font-size: 18px;">To make sure you understand how to check the boxes, please answer:
                <br>What is the payoff for <strong>your counterparty</strong> if you choose 'Betray' and your counterparty chooses 'Ally'?<p>
                <label style ="font-size: 18px;"><input type="radio" name="option" value="correct"> 1</label><br>
                <label style ="font-size: 18px;"><input type="radio" name="option" value="incorrect2"> 2</label><br>
                <label style ="font-size: 18px;"><input type="radio" name="option" value="incorrect1"> 3</label><br>
                <label style ="font-size: 18px;"><input type="radio" name="option" value="incorrect3"> 4</label><br>
            <br>
            <p style ="font-size: 18px;">There will be <strong>three rounds</strong> for this experiment, each round contains <strong>four trials</strong>. </p>
            <p style ="font-size: 18px;">For each trial you will be paired with a different counterparty and play a PDG.  </p>
            <p style ="font-size: 18px;"><span class="highlight">Please note: 30% of all participants will be randomly chosen and will <strong>receive the payment</strong>. The payment amount is determined by <strong>the outcome of a random trial</strong> with <strong>1 unit = 1 euro</strong>. </span></p>
            <br>
            <p style ="font-size: 18px;">Before you proceed, please make sure that you understand the PDG and <strong>be familiar with checking the payoffs</strong> in hidden boxes. This page will proceed after you correctly answer the above question.</p>
            <p style ="font-size: 18px;">There is <strong>no backward option</strong> after this page.</p>
            <p style ="font-size: 18px;">You can still click 'Back' to browse the previous page now. </p>
            <div class="button-container">
                 <button type="button" onclick="window.location.href = 'PDGexp.php';">Back</button>
                 <button type="button" onclick="checkAnswer()">Start</button>
            </div><br>
        </div>

        <br><br>
        <footer class="w3-container w3-blue">
        </footer>
</div>

        <script type="text/javascript">

			// here the json file to generate the trial, for a particular set in the json file is generated. If the third attribute is set to random, it will select an order at random.
			// if you enter a number, it will choose one of the orders using modulo of that number
            o=$("#condnum").val();
			if (o<0) {o="random"};

			generateTrial("json_files/gambleexp.json", "dynSet", o);

    	//function that starts the page


        </script>
    </body>
</html>