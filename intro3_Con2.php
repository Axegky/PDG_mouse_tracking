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
  <title>Round 3</title>
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

</head>

<FORM id="mlwebform" name="mlwebform" onSubmit="return checkForm(this)" method="POST" action="save3.php">

			<INPUT type=hidden id='processData' name="procdata" value="">
            <!-- set all variables here -->
            <input id="expName" type=hidden name="expname" value="intro3">
            <input type=hidden name="nextURL" value="gambleCon2_3-1.php">
            <!--these will be set by the script -->
			<input type=hidden name="subject" value="<?php echo($subject)?>">
			<input type=hidden id="condnum" name="condnum" value="<?php echo($condnum)?>">
            <input id="choice" type=hidden name="choice" value="">

<body>
    <header class="w3-container w3-blue">
        <h1>Round 3</h1>
    </header>
  <div class="form">
    <br>
    <br>
    <br>
    <p>In the following <strong>four trials</strong>, you will be paired with <strong>a real participant</strong> for each trial. Your counterparty in each trial will be <strong>different</strong>.
    <br>
    You are still <strong>the first mover</strong> of the following PDGs.</p>
    <br>
    <p>Same as in Round 2, Your mouseover and mouseout time for each payoff box will be <strong>recorded</strong> and <strong>sent to your counterparty</strong>.
    <br>
    The difference is that your counterparty will <strong>provide feedback to you</strong> after they receive the outcome.
    <br>
    Finally, you will receive both the outcome and <strong>the feedback from your counterparty</strong> for each trial after the completion of the entire experiment. </p>
    <br>
    <br>
    Click the 'Start' button to start Round 3.
    <br>
    <br>
    <button type="Start">Start</button>
    </form>
  </div>
</body>
</html>
