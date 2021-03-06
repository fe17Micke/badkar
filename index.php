<?php include('server.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style/index.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Cold spies</title>

</head>
<body>
    <div class="flexBtn">
    <header onclick="dropclose()">
      <button class="btnL btns" type="submit" name="loginbutton" id="logInButton">Log in</button>
      <button class="btnR btns" type="submit" name="registerbutton" id="signUpButton">Sign up</button>
    </header>
    </div>

    <div id="myPopupModal2" class="modal2">

          <div class="modal2-content" style="height: 40%;">
            <span class="exit2">&times;</span>
            <p>Sign in</p>

            <form method="post" action="">
                <div class="rowModal">
                    <label for="username2">Username</label>
                    <input type="text" name="username2" id="username2" value="<?php echo $username; ?>" required>
                </div>
                <div class="rowModal">
                    <label for="password2">Password</label>
                    <input type="password" name="password2" id="password2" value="<?php echo $username; ?>" required>
                </div>
                <div class="rowModal">
                    <input type="submit" name="submit2" value="Log in" />
                </div>
            </form>
          </div>

    </div>

    <script src="js/loginbutton.js"></script>

    <div id="myPopupModal" class="modal1">

          <div class="modal1-content" style="overflow: scroll; height: 85%;">
            <span class="exit">&times;</span>
            <p>Create an account</p>

            <form method="post" action="index.php">

                <div class="rowModal">
                    <label for="email">E-mail address</label>
                    <input type="email" name="email" id="email" value= "<?php echo $email; ?>" required>
                </div>
                <div class="rowModal">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" value= "<?php echo $username; ?>" required>
                </div>
                <div class="rowModal">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required>
                </div>
                <div class="rowModal">
                    <label for="password">Confirm password</label>
                    <input type="password" name="cPassword" id="cPassword" required>
                </div>
                <div class="rowModal1">
                    <label for="team">Choose side:</label>
                </div>
                <div class="rowModal2">
                <input type="radio" name="team" value="usa"> Usa
                <input type="radio" name="team" value="soviet" style="margin-left:35px">Soviet
                </div>
                <div class="rowModal1">
                <input type="checkbox" required> I agree to the <a href="#" style="color:rgb(22, 165, 55)">Terms of Use</a>
                </div>
                <div class="rowModal register">
                    <input type="submit" name="submit" value="Sign Up" id="register" onclick="submit"/>
                </div>

                <?php include('errors.php'); ?>

                <div class="rowModal3">
                    Already have an account? <a href="login.html" style="color:rgb(51, 71, 255)">Log in here</a>
                </div>
            </form>
          </div>
        </div>

        <script src="js/signup.js"></script>

    <div class="container">
      <h1>Cold spies</h1>
      <h3>Help fight the silent war</h3>
      <button class="playNow btns1" type="submit" name="registerbutton" onclick="showRegister()"><a href="html/game.html">Play Now</a></button>
    </div>

    <div class="cont">
      <p>The text adventure of a lifetime. Fight on either the side of the USA or
         the Soviet union as a spy trying to uncover the other's sides secrets</p>
    </div>
    <div class="content">
      <p>In Cold Spies you play as a spy for either the USA or the Soviet union.
         After you have picked a side the game will begin giving you missions on your map.<br><br>
         When you get close enough too the a mission icon you can start the mission.
         You are then given a story at the end of which you have several options on how you can
         handle your mission and depending your choise the mission will play out differently.<br><br>
         You are scored depending on the choises you make during the game.
         There are good choices and bad choices, just like in real life.
         In the end your score is counted up to the teams score and you can also see your individual score compared to the rest of your team.</p>
    </div>
    <footer>
      <p>Contact us: teamCherry@kyh.se<br><br>  Members: Sebastian Bergström, Julia Bäcks, Victor Pettersson, Mikael Berglund, Emil Brunngård, Elias Liljegard</p>

      <div class="socialIcons">
      <a target="_blank" href="https://sv-se.facebook.com/"><i class="fa fa-facebook fa-2x"></i></a>
      <a target="_blank" href="https://twitter.com/"><i class="fa fa-twitter fa-2x"></i></a>
      <a target="_blank" href="https://github.com/AdmiralAlpha/teamcherry"><i class="fa fa-github fa-2x"></i></a>
      <a target="_blank" href="https://tinyurl.com/2fcpre6"><i class="fa fa-envelope-o fa-2x"></i></a>
      </div>

    </footer>
</body>
</html>
