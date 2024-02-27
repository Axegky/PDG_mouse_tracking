<!DOCTYPE html>
<html>
<head>
  <title>Alert!</title>
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

    .alert{
        color: red;
    }
  </style>

</head>

<body>
    <header class="w3-container w3-blue">
        <h1>Begin</h1>
    </header>
  <div class="form">
    <br>
    <br>
    <div class="alert">
        <p><strong>Please reopen this link on a computer. Thank you for your cooperation!</strong></p>
    </div>
    <br>
      <?php
    $normal_1 = "Welcome! This experiment focuses on ";
    $bold_1 = "how people change their decisions in the Prisoners' Dilemma Game under different conditions";
    $normal_2 = ". The experiment will last about ";
    $bold_2 = "10 minutes";
    $normal_3 = ".";
    echo "<p>$normal_1<strong>$bold_1</strong>$normal_2<strong>$bold_2</strong>$normal_3</p>";
    ?>
    <p style ="font-size: 16px;"><i>For respondents from SurveySwap: This survey contains credits to get free survey responses at SurveySwap.io</i></p>
    <br>
    <br>
    <form action="check-selection.php" method="post">
        Before the experiment starts, please click the following options according to your situation:
        <p><input class="w3-check" type="checkbox" name="computer" >
        I am using computer now to participate in this experiment. </p>
        <p><input class="w3-check" type="checkbox" name="age" >
        I am aging from 18 to 55. </p>
        <p><input class="w3-check" type="checkbox" name="english" >
        I am proficient in English. </p>
        <p><input class="w3-check" type="checkbox" name="disability" >
        I don't have any kind of reading, visual or attentional impairment that might affect me from understanding the experiment. </p>
        <p><input class="w3-check" type="checkbox" name="consent" >
        I consent to participant in this experiment and understand that my response in the experiment will be collected in anonymous form. </p>
    <br>
    <button type="Continue">Continue</button>
    </form>
  </div>
</body>
</html>
