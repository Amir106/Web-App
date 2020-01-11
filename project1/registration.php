<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="stylemain.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Odibee+Sans&display=swap" rel="stylesheet">
    
    
    <title>Registration</title>
</head>
<body>
    <form action="submit.php" method="post">
        <div class="container">
          <h1>Register</h1>
          <p>Fill this form in order to create an account.</p>
          <hr>
      
          <label for="email"><b>Email:</b></label>
          <br>
          <input type="text" placeholder="Enter Email" name="email" required>
          <br>

          <label for="username"><b>Username:</b></label>
          <br>
          <input type="text" placeholder="Enter Desired Username" name="username" required>
          <br>
          
      
          <label for="psw"><b>Password:</b></label>
          <br>
          <input type="password" placeholder="Enter Password" name="password" required>
          <br>
          
      
          <label for="psw-repeat"><b>Repeat Password:</b></label>
          <br>
          <input type="password" placeholder="Repeat Password" name="password-repeat" required>
          <br>
          <input type="checkbox" name="terms" required> I agree with the terms.

          <hr>
      
          <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
          <button type="submit" class="button">Register</button>
        </div>
      
        <p>Already have an account? <a href="index.html">Sign in.</a></p>
      </form>
</body>
</html>