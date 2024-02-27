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
  <title>Intro2</title>
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

<FORM id="mlwebform" name="mlwebform" onSubmit="return checkForm(this)" method="POST" action="save2.php">

			<INPUT type=hidden id='processData' name="procdata" value="">
            <!-- set all variables here -->
            <input id="expName" type=hidden name="expname" value="intro2">
            <input type=hidden name="nextURL" value="videoExp_Con2.php">
            <!--these will be set by the script -->
			<input type=hidden name="subject" value="<?php echo($subject)?>">
			<input type=hidden id="condnum" name="condnum" value="<?php echo($condnum)?>">
            <input id="choice" type=hidden name="choice" value="">

<body>
    <header class="w3-container w3-blue">
        <h1>Round 2</h1>
    </header>
  <div class="form">
    <br>
    <br>
    <br>
    <br>
    In the following <strong>four trials</strong>, you will be paired with <strong>a real participant</strong> for each trial. Your counterparty in each trial will be <strong>different</strong>.
    <br>
    <br>
    You are assigned to <strong>the first mover</strong> of the following PDGs: You make the choice first, then your counterparty make their choices.
    <br><br>
    <strong>Your mouseover and mouseout time</strong> for each payoff box will be <strong>recorded</strong> and made into a video, which will be <strong>sent to your counterparty</strong> before they make their decision.
    <br><br>
    You will not receive video recordings from your counterparty since you are assigned to the first mover.
    <br>
    <br>
    <br>
    <br>
    Click the 'Continue' button to see the examples of video recordings.
    <br>
    <br>
    <br>
    <br>
    <button type="Continue">Continue</button>
    </form>
  </div>
</body>
</html>
