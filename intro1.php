<!DOCTYPE html>
<html>

<head>
  <title>Round 1</title>
  <link rel="stylesheet" href="w3.css">

  <style>
    body {
      justify-content: center;
      height: 100vh;
      font-size: 20px;
    }

    .form {
      text-align: left;
      font-size: 20px;
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
    function checkCond() {
      var condnum = Math.floor(Math.random() * 4) + 1;

      if (condnum === 1) {
        window.location.href = "gamble1-1.php";
      } else {
        if (condnum === 2) {
            window.location.href = "gambleCon2_1-1.php";
        } else {
            if (condnum === 3) {
                window.location.href = "gambleCon3_1-1.php";
                } else {
                window.location.href = "gambleCon4_1-1.php";
                }
        }
      }
    }
  </script>
</head>


<body>
    <header class="w3-container w3-blue">
        <h1>Round 1</h1>
    </header>
  <div class="form">
    <br>
    <br>
    <br>
    <br>
    In the following <strong>four trials</strong>, you will be paired with <strong>a real participant</strong> for each trial. Your counterparty in each trial will be <strong>different</strong>.
    <br>
    <br>
    <br>
    You and your counterparty will receive <strong>no information</strong> about each other and the result will be disclosed to both parties after the completion of the entire experiment.
    <br>
    <br>
    <br>
    The payoff matrix is in the same format as you have seen in the previous page.
    <br>
    You can choose <strong>'Ally' or 'Betray'</strong> by clicking the corresponding button <strong>in each trial</strong>.
    <br>
    After making your choice, please <strong>click 'Confirm'</strong> to submit and proceed to next round.
    <br>
    <br>
    <br>
    <button type="button" onclick="checkCond()">Start</button>
    </form>
  </div>
</body>
</html>
