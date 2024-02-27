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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <style>
    body {
      justify-content: center;
      height: 100vh;
      font-size: 18px;
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

<FORM id="mlwebform" name="mlwebform" onSubmit="return checkForm(this)" method="POST" action="saveq.php">

			<INPUT type=hidden id='processData' name="procdata" value="">
            <!-- set all variables here -->
            <input id="expName" type=hidden name="expname" value="survey">
            <input type=hidden name="nextURL" value="survey2.php">
            <input type=hidden name="to_email" value="">
            <!--these will be set by the script -->
			<input type=hidden name="subject" value="<?php echo($subject)?>">
			<input type=hidden id="condnum" name="condnum" value="<?php echo($condnum)?>">
           <input id="choice" type=hidden name="choice" value="">

<body>
    <header class="w3-container w3-blue">
        <h1>Survey (1/2)</h1>
    </header>
  <div class="form">
    <form id="numberForm">
      <br>
      <br>
      <br>
      <div class="w3-row w3-border">
          <div class="w3-container w3-col w3-white w3-left-align w3-large " style="width: 30%;"><strong>Please rate from 1 to 7 scale:</strong> </div>
          <div class="w3-container w3-col w3-gray w3-center" style="width: 10%;" ><b>Very <br>low</b></div>
          <div class="w3-container w3-col w3-white w3-center" style="width: 10%;" ><b>Low</b></div>
          <div class="w3-container w3-col w3-gray w3-center" style="width: 10%;" ><b>Low to moderate</b></div>
          <div class="w3-container w3-col w3-white w3-center" style="width: 10%;" ><b>Moderate</b></div>
          <div class="w3-container w3-col w3-gray w3-center" style="width: 10%;" ><b>Moderate to high</b></div>
          <div class="w3-container w3-col w3-white w3-center" style="width: 10%;" ><b>High</b></div>
          <div class="w3-container w3-col w3-gray w3-center" style="width: 10%;" ><b>Very high</b></div>
      </div>

      <div class="w3-row w3-border">
          <div class="w3-container w3-col w3-light-grey w3-left-align w3-hover-blue" style="width: 30%;height: 90px">To what extent do you perceive the level of pressure in <strong>Round 1</strong>?</div>
          <div class="w3-container w3-col w3-gray w3-center w3-hover-blue" style="width: 10%;" ><input class="w3-radio" type="radio" name="r1" value="1" > 1</div>
          <div class="w3-container w3-col w3-white w3-center w3-hover-blue" style="width: 10%;" ><input class="w3-radio" type="radio" name="r1" value="2" > 2</div>
          <div class="w3-container w3-col w3-gray w3-center w3-hover-blue" style="width: 10%;" ><input class="w3-radio" type="radio" name="r1" value="3" > 3</div>
          <div class="w3-container w3-col w3-white w3-center w3-hover-blue" style="width: 10%;" ><input class="w3-radio" type="radio" name="r1" value="4" > 4</div>
          <div class="w3-container w3-col w3-gray w3-center w3-hover-blue" style="width: 10%;" ><input class="w3-radio" type="radio" name="r1" value="5" > 5</div>
          <div class="w3-container w3-col w3-white w3-center w3-hover-blue" style="width: 10%;" ><input class="w3-radio" type="radio" name="r1" value="6" > 6</div>
          <div class="w3-container w3-col w3-gray w3-center w3-hover-blue" style="width: 10%;" ><input class="w3-radio" type="radio" name="r1" value="7" > 7</div>
      </div>

      <div class="w3-row w3-border">
          <div class="w3-container w3-col w3-light-grey w3-left-align w3-hover-blue" style="width: 30%;height: 90px">To what extent do you perceive the level of pressure in <strong>Round 2</strong>?</div>
          <div class="w3-container w3-col w3-gray w3-center w3-hover-blue" style="width: 10%;" ><input class="w3-radio" type="radio" name="r2" value="1" > 1</div>
          <div class="w3-container w3-col w3-white w3-center w3-hover-blue" style="width: 10%;" ><input class="w3-radio" type="radio" name="r2" value="2" > 2</div>
          <div class="w3-container w3-col w3-gray w3-center w3-hover-blue" style="width: 10%;" ><input class="w3-radio" type="radio" name="r2" value="3" > 3</div>
          <div class="w3-container w3-col w3-white w3-center w3-hover-blue" style="width: 10%;" ><input class="w3-radio" type="radio" name="r2" value="4" > 4</div>
          <div class="w3-container w3-col w3-gray w3-center w3-hover-blue" style="width: 10%;" ><input class="w3-radio" type="radio" name="r2" value="5" > 5</div>
          <div class="w3-container w3-col w3-white w3-center w3-hover-blue" style="width: 10%;" ><input class="w3-radio" type="radio" name="r2" value="6" > 6</div>
          <div class="w3-container w3-col w3-gray w3-center w3-hover-blue" style="width: 10%;" ><input class="w3-radio" type="radio" name="r2" value="7" > 7</div>
      </div>

      <div class="w3-row w3-border">
          <div class="w3-container w3-col w3-light-grey w3-left-align w3-hover-blue" style="width: 30%;height: 90px">To what extent do you perceive the level of pressure in <strong>Round 3</strong>?</div>
          <div class="w3-container w3-col w3-gray w3-center w3-hover-blue" style="width: 10%;" ><input class="w3-radio" type="radio" name="r3" value="1" > 1</div>
          <div class="w3-container w3-col w3-white w3-center w3-hover-blue" style="width: 10%;" ><input class="w3-radio" type="radio" name="r3" value="2" > 2</div>
          <div class="w3-container w3-col w3-gray w3-center w3-hover-blue" style="width: 10%;" ><input class="w3-radio" type="radio" name="r3" value="3" > 3</div>
          <div class="w3-container w3-col w3-white w3-center w3-hover-blue" style="width: 10%;" ><input class="w3-radio" type="radio" name="r3" value="4" > 4</div>
          <div class="w3-container w3-col w3-gray w3-center w3-hover-blue" style="width: 10%;" ><input class="w3-radio" type="radio" name="r3" value="5" > 5</div>
          <div class="w3-container w3-col w3-white w3-center w3-hover-blue" style="width: 10%;" ><input class="w3-radio" type="radio" name="r3" value="6" > 6</div>
          <div class="w3-container w3-col w3-gray w3-center w3-hover-blue" style="width: 10%;" ><input class="w3-radio" type="radio" name="r3" value="7" > 7</div>
      </div>

      <br><br>
      <div class="w3-row w3-border">
          <div class="w3-container w3-col w3-white w3-left-align w3-large " style="width: 50%;"><strong>Please state how much you agree or disagree the following statements:</strong> </div>
          <div class="w3-container w3-col w3-gray w3-center" style="width: 10%;" ><b>strongly disagree</b></div>
          <div class="w3-container w3-col w3-white w3-center" style="width: 10%;" ><b>disagree</b></div>
          <div class="w3-container w3-col w3-gray w3-center " style="width: 10%;" ><b>neutral</b></div>
          <div class="w3-container w3-col w3-white w3-center" style="width: 10%;" ><b>agree</b></div>
          <div class="w3-container w3-col w3-gray w3-center " style="width: 10%;" ><b>strongly agree</b></div>
      </div>
      <div class="w3-row w3-border">
          <div class="w3-container w3-col w3-light-grey w3-left-align w3-hover-blue" style="width: 50%;height: 60px">Most people tell a lie when they can benefit by doing so. </div>
          <div class="w3-container w3-col w3-gray w3-center w3-hover-blue" style="width: 10%;" ><input class="w3-radio" type="radio" name="q1" value="1" > 1</div>
          <div class="w3-container w3-col w3-white w3-center w3-hover-blue" style="width: 10%;" ><input class="w3-radio" type="radio" name="q1" value="2" > 2</div>
          <div class="w3-container w3-col w3-gray w3-center w3-hover-blue" style="width: 10%;" ><input class="w3-radio" type="radio" name="q1" value="3" > 3</div>
          <div class="w3-container w3-col w3-white w3-center w3-hover-blue" style="width: 10%;" ><input class="w3-radio" type="radio" name="q1" value="4" > 4</div>
          <div class="w3-container w3-col w3-gray w3-center w3-hover-blue" style="width: 10%;" ><input class="w3-radio" type="radio" name="q1" value="5" > 5</div>
      </div>
            <div class="w3-row w3-border">
          <div class="w3-container w3-col w3-light-grey w3-left-align w3-hover-blue" style="width: 50%;height: 60px">Those devoted to unselfish causes are often exploited by others. </div>
          <div class="w3-container w3-col w3-gray w3-center w3-hover-blue" style="width: 10%;" ><input class="w3-radio" type="radio" name="q2" value="1" > 1</div>
          <div class="w3-container w3-col w3-white w3-center w3-hover-blue" style="width: 10%;" ><input class="w3-radio" type="radio" name="q2" value="2" > 2</div>
          <div class="w3-container w3-col w3-gray w3-center w3-hover-blue" style="width: 10%;" ><input class="w3-radio" type="radio" name="q2" value="3" > 3</div>
          <div class="w3-container w3-col w3-white w3-center w3-hover-blue" style="width: 10%;" ><input class="w3-radio" type="radio" name="q2" value="4" > 4</div>
          <div class="w3-container w3-col w3-gray w3-center w3-hover-blue" style="width: 10%;" ><input class="w3-radio" type="radio" name="q2" value="5" > 5</div>
      </div>
            <div class="w3-row w3-border">
          <div class="w3-container w3-col w3-light-grey w3-left-align w3-hover-blue" style="width: 50%;height: 120px">Some people do not cooperate because they pursue only their own short-term self-interest. Thus, things that can be done well if people cooperate often fail because of these people. </div>
          <div class="w3-container w3-col w3-gray w3-center w3-hover-blue" style="width: 10%;" ><input class="w3-radio" type="radio" name="q3" value="1" > 1</div>
          <div class="w3-container w3-col w3-white w3-center w3-hover-blue" style="width: 10%;" ><input class="w3-radio" type="radio" name="q3" value="2" > 2</div>
          <div class="w3-container w3-col w3-gray w3-center w3-hover-blue" style="width: 10%;" ><input class="w3-radio" type="radio" name="q3" value="3" > 3</div>
          <div class="w3-container w3-col w3-white w3-center w3-hover-blue" style="width: 10%;" ><input class="w3-radio" type="radio" name="q3" value="4" > 4</div>
          <div class="w3-container w3-col w3-gray w3-center w3-hover-blue" style="width: 10%;" ><input class="w3-radio" type="radio" name="q3" value="5" > 5</div>
      </div>
            <div class="w3-row w3-border">
          <div class="w3-container w3-col w3-light-grey w3-left-align w3-hover-blue" style="width: 50%;height: 60px">Most people are basically honest. </div>
          <div class="w3-container w3-col w3-gray w3-center w3-hover-blue" style="width: 10%;" ><input class="w3-radio" type="radio" name="q4" value="5" > 1</div>
          <div class="w3-container w3-col w3-white w3-center w3-hover-blue" style="width: 10%;" ><input class="w3-radio" type="radio" name="q4" value="4" > 2</div>
          <div class="w3-container w3-col w3-gray w3-center w3-hover-blue" style="width: 10%;" ><input class="w3-radio" type="radio" name="q4" value="3" > 3</div>
          <div class="w3-container w3-col w3-white w3-center w3-hover-blue" style="width: 10%;" ><input class="w3-radio" type="radio" name="q4" value="2" > 4</div>
          <div class="w3-container w3-col w3-gray w3-center w3-hover-blue" style="width: 10%;" ><input class="w3-radio" type="radio" name="q4" value="1" > 5</div>
      </div>
            <div class="w3-row w3-border">
          <div class="w3-container w3-col w3-light-grey w3-left-align w3-hover-blue" style="width: 50%;height: 90px">There will be more people who will not work if the social security system is developed further. </div>
          <div class="w3-container w3-col w3-gray w3-center w3-hover-blue" style="width: 10%;" ><input class="w3-radio" type="radio" name="q5" value="1" > 1</div>
          <div class="w3-container w3-col w3-white w3-center w3-hover-blue" style="width: 10%;" ><input class="w3-radio" type="radio" name="q5" value="2" > 2</div>
          <div class="w3-container w3-col w3-gray w3-center w3-hover-blue" style="width: 10%;" ><input class="w3-radio" type="radio" name="q5" value="3" > 3</div>
          <div class="w3-container w3-col w3-white w3-center w3-hover-blue" style="width: 10%;" ><input class="w3-radio" type="radio" name="q5" value="4" > 4</div>
          <div class="w3-container w3-col w3-gray w3-center w3-hover-blue" style="width: 10%;" ><input class="w3-radio" type="radio" name="q5" value="5" > 5</div>
      </div>

      <p><strong>Before you submit, please make sure you have answered all eight questions. </strong></p>

      <div class="w3-white w3-container w3-center w3-padding">
			<button class="confirm w3-button w3-center w3-round-xlarge" name="submit" value="confirm">Submit</button>
		</div>
    </form>
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
