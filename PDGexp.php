<!DOCTYPE html>
<html>
<head>
  <title>Introduction</title>
  <link rel="stylesheet" href="w3.css">

  <script>
    function checkAnswer() {
      // Get the selected option value
      var selectedOption = document.querySelector('input[name="option"]:checked').value;

      // Check if the selected option is correct
      if (selectedOption === "correct") {
        // Forward to the next page
        window.location.href = "gameexp.php";
      } else {
        // Display an alert message
        alert("Your answer is incorrect. Please read the text carefully.");
      }
    }
  </script>

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

    .green-text {
      color: rgb(178, 222, 149);
    }
    .blue-text {
      color: rgb(148, 196, 241);
    }
    .yellow-text {
      color: rgb(244, 216, 136);
    }

    .image-container {
      padding-left: 100px;
    }

    .image-container img {
      max-width: 50%; /* Adjust the maximum width of the image */
    }

    .highlight {
        background-color: yellow; /* Set the background color to yellow */
        color: black; /* Set the text color to black */
        /* You can customize other CSS properties as needed */
      }
  </style>

</head>

<body>
    <header class="w3-container w3-blue">
        <h1>Introduction to PDG</h1>
    </header>
  <div class="form">
    <br>
    <br>
    The PDG (Prisoners' Dilemma Game), is a <strong>two-player</strong> game. Both players can choose <strong>'Ally'</strong> or <strong>'Betray'</strong>. The payoff is symmetrical, meaning that the payoff structure for two players is the same.
    <br>
    <br>
    <div class="image-container">
        <img src="PDGexp.png" alt="PDGexp">
        </div>
    <br>
    In the above matrix, the <strong><span class="green-text">green</span></strong> part represents <strong>Player 1's</strong> choices ('Ally' or 'Betray'),
    <br>
    and the <strong><span class="blue-text">blue</span></strong> part represents <strong>Player 2's</strong> choices ('Ally' or 'Betray').
    <br>
    The <strong><span class="yellow-text">yellow</span></strong> part represents <strong>four different outcomes</strong> corresponding to the combined choices.
    <br>
    <br>
    <br>
    <div class="image-container">
        <img src="PDG0.png" alt="PDGexp1">
        </div>
    <br>
    For example, if <strong>Player 1 chooses 'Betray'</strong> and <strong>Player 2 chooses 'Ally'</strong>, <br>
    the payoff for <strong>Player 1 is 5</strong> and for <strong>Player 2 is 0</strong>.
    <br>
    <br>
    <br>
    <div class="image-container">
        <img src="PDG1.png" alt="PDGexp1">
        </div>
    <br>
    For Player 1, choosing <strong>'Betray'</strong> always gives a <strong>larger payoff</strong> no matter what Player 2 chooses.
    <br>
    If Player 2 chooses 'Ally', the payoff for Player 1 is <strong>3 (if 'Ally')</strong> or <strong>5 (if 'Betray')</strong>.
    <br>
    If Player 2 chooses 'Betray', the payoff for Player 1 is <strong>0 (if 'Ally')</strong> or <strong>1 (if 'Betray')</strong>.
    <br>
    The same situation applies to Player 2 because the payoff is symmetrical.
    <br>
    Therefore, choosing 'Betray' is <strong>a dominant strategy</strong> for both players.
    <br>
    <strong>Both players choosing the dominant strategy leads to the outcome of 'Betray-Betray'.</strong>
    <br>
    <br>
    <br>
    <div class="image-container">
        <img src="PDG2.png" alt="PDG2">
        </div>
    <br>
    However, the result of 'Betray-Betray' generates a <strong>lower payoff</strong> than cooperation ('Ally-Ally') for both players.
    <br>
    In this case, the payoff of <strong>'Betray-Betray'</strong> is <strong>1</strong> for both, while the payoff of <strong>'Ally-Ally'</strong> is <strong>3</strong> for both.
    <br>
    <span class="highlight">Therefore, the outcome of <strong>'Ally-Ally'</strong> gives a higher payoff than that of 'Betray-Betray' for both players. </span>
    <br>
    <span class="highlight">Though the outcome of <strong>'Betray-Ally'</strong>&<strong>'Ally-Betray'</strong> gives the highest payoff for the individual who betrayed. </span>
    <br>
    <br>
    <br>
    To make sure you understand the PDG (Prisoners' Dilemma Game), please answer:
    <br>
    What is the payoff <strong>for Player 1</strong> if Player 1 chooses 'Ally' and Player 2 chooses 'Betray' in the above example?
        <br>
        <label><input type="radio" name="option" value="correct"> 0</label><br>
        <label><input type="radio" name="option" value="incorrect1"> 1</label><br>
        <label><input type="radio" name="option" value="incorrect2"> 3</label><br>
        <label><input type="radio" name="option" value="incorrect3"> 5</label><br>
        <br>
        <button type="button" onclick="checkAnswer()">Submit</button>
    <br>
    <br>
    <br>
    <br>
    <br>
    </form>
  </div>
</body>
</html>
