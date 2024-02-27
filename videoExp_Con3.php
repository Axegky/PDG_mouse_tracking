<!DOCTYPE html>
<html>

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

<head>
  <title>VideoExp</title>
  <link rel="stylesheet" href="w3.css">

  <style>
    body {
      justify-content: center;
      height: 100vh;
      font-size: 20px;
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
      font-size: 18px;
    }
    .form button {
      margin-left: 600px; /* Adjust the value to move the button to the right */
    }

  </style>

  <script>
    function checkAnswer() {
      // Get the selected option value
      var selectedOption = document.querySelector('input[name="option"]:checked').value;

      // Check if the selected option is correct
      if (selectedOption === "correct") {
        // Forward to the next page
        window.location.href = "gambleCon3_2-1.php";
      } else {
        // Display an alert message
        alert("Your answer is incorrect. Please read the text carefully.");
      }
    }
  </script>
</head>

<FORM id="mlwebform" name="mlwebform" onSubmit="return checkForm(this)" method="POST" action="save.php">

			<INPUT type=hidden id='processData' name="procdata" value="">
            <!-- set all variables here -->
            <input id="expName" type=hidden name="expname" value="videoExp">
            <!--these will be set by the script -->
			<input type=hidden name="subject" value="<?php echo($subject)?>">
			<input type=hidden id="condnum" name="condnum" value="<?php echo($condnum)?>">
            <input id="choice" type=hidden name="choice" value="">


<body>
    <header class="w3-container w3-blue">
        <h1>Video Example</h1>
    </header>
  <div class="form">
    <br>
    <br>
    <p>This page shows how the cursor movement will be recorded and presented to your counterparty.</p>
    <p><strong>Your counterparty will watch the video of your cursor movement first, then make their decision.</strong></p>
    <p>Your cursor route on each box and the mouseover time will be captured and reflected in the video. </p>
    <p>Here are two examples displaying in which form the video will be presented. </p>
    <br>
    <p>When you put your cursor on the hidden box of <strong>'Ally(You)-Ally(Counterparty)'</strong> for <strong>2 seconds</strong>, the video will be presented as follow:</p>
    <video width="700" controls>
        <source src="videoExp1.mp4" type="video/mp4">
        </video>
    <br>
    <br>
    <p>When you put your cursor on the hidden box of <strong>'Ally-Betray'</strong> for <strong>1.5 second</strong>, then <strong>'Betray-Betray'</strong> for <strong>0.5 seconds</strong>, then <strong>'Betray-Ally'</strong> for <strong>0.8 seconds</strong>, the video will be presented as follow: </p>
    <video width="700" controls>
        <source src="videoExp2.mp4" type="video/mp4">
        </video>
    <br>
    <br>
    <br>
    <p>As the video example above, your counterparty can see your cursor movement among four payoff boxes. <br>
    The recording starts one second before you start checking boxes and ends after you finish checking boxes. </p>
    <p>Your counterparty knows that you are aware of the video recording. </p>
    <p>Your <strong>final choice</strong> will <strong>not</strong> be sent to your counterparty. </p>
    <br>
        <p>Please answer: When will your cursor movement video be sent to your counterparty? </p>
        <label><input type="radio" name="option" value="correct"> Before my counterparty makes the decision</label><br>
        <label><input type="radio" name="option" value="incorrect1"> After my counterparty makes the decision</label><br>
        <label><input type="radio" name="option" value="incorrect2"> Will not be sent</label><br>
        <p>Round 2 will start <strong>immediately</strong> after you submit the answer.</p>
        <button type="button" onclick="checkAnswer()">Submit</button>
    <br><br>
    </form>
  </div>
</body>
</html>
