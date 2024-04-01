<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CryptoCapital</title>
  <link href="css/loginstyle.css" rel="stylesheet">
</head>
<body>
  <div class="wrapper">
    <form action="#">
      <h2>Login</h2>
      <form id="login-form">
        <div class="form-group">
        <input type="text"  class="form-control" id="email" placeholder="Enter your email address" name="email" required>
        <label>Enter your email</label>
      </div>
      <div class="form-group">
        <input type="password" class="form-control" id="password" placeholder="Enter your password" name="password" required>
        <label>Enter your password</label>
      </div>
      <div class="forget">
        <label for="remember">
          <input type="checkbox" id="remember">
          <p>Remember me</p>
        </label>
        <a href="#">Forgot password?</a>
      </div>
      <button type="submit">Log In</button>
      <div class="register">
        <p>Don't have an account? <a href="register.php">Register</a></p>
      </div>
    </form>
    </form>
  </div>
</body>
</html>