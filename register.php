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
    <form action="connect.php" method="post">
      <h2>Create an account</h2>
      <form id="register-form">
        <div class="form-group">
        <input type="text" class="form-control" id="fullname" placeholder="Enter your full name" name="fullname">
        <label for="fullname">Full Name</label>
      </div>
      <div class="form-group">
        <input type="text" class="form-control" id="email" placeholder="Enter your email address" name="email">
        <label for="email">Email Address</label>
      </div>
      <div class="form-group">
        <input type="password" class="form-control" id="password" placeholder="Enter your password" name="password">
        <label for="password">Password</label>
        <i id="pass-toggle-btn" class="fa-solid fa-eye"></i>
      </div>
      <div class="form-group">
        <input type="date" class="form-control" id="date" placeholder="Select your date" name="date">
        <label for="date">Date of birth</label>
      </div>
      <div class="form-group">
        <label for="gender">Gender</label>
        <input type="gender" class="form-control" id="gender"  name="gender">
        <select id="gender">
          <option value="" selected disabled>Select your gender</option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
          <option value="Other">Other</option>
        </select>
      </div>
      <button type="submit">SUBMIT</button>
      <div class="register">
        <p>Already have an account? <a href="login.php">Login</a></p>
      </div>
    </form>
  </form>
  </div>

  <script src="js/auth.js"></script>
</body>
</html>