<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up DAD Perfume</title>
    <link rel="shortcut icon" type="image/x-icon" href="../img/logo-icon.png">
    <link rel="stylesheet" href="../css/login.css" type="text/css">
    <link rel="stylesheet" href="../css/elegant-icons.css" type="text/css">
</head>
<body>
    <!--Login Form-->
    <div class="container">
        <div class="logo">DAD PERFUME</div>
        <div class="login-item">
          <form action="" method='POST' class="form form-login">
            <div class="form-field">
              <label class="icon_info" for="signup-username"><span class="hidden">Username</span></label>
              <input name="signup-username" type="text" class="form-input" placeholder="Username" required>
            </div>
            <div class="form-field">
              <label class="icon_info" for="signup-name"><span class="hidden">Name</span></label>
              <input name="signup-name" type="text" class="form-input" placeholder="Name" required>
            </div>            
            <div class="form-field">
              <label class="icon_lock" for="signup-password"><span class="hidden">Password</span></label>
              <input name="signup-password" type="password" class="form-input" placeholder="Password" required>
            </div>
            <div class="form-field">
              <label class="icon_mail" for="signup-email"><span class="hidden">Email</span></label>
              <input name="signup-email" type="text" class="form-input" placeholder="Email" required>
            </div>    
            <div class="form-field">
              <label class="icon_phone" for="signup-phone"><span class="hidden">Phone</span></label>
              <input name="signup-phone" type="text" class="form-input" placeholder="Phone" required>
            </div>    
            <div class="form-field">
                <input type="submit" name="signup" value="Sign Up">
            </div>
          </form>
        </div>
        <?php require '../data/signupprocess.php'?>
    </div>
</body>
</html>