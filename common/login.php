<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login DAD Perfume</title>
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
              <label class="icon_info" for="login-username"><span class="hidden">Username</span></label>
              <input name="login-username" type="text" class="form-input" placeholder="Username" required>
            </div>
    
            <div class="form-field">
              <label class="icon_lock" for="login-password"><span class="hidden">Password</span></label>
              <input name="login-password" type="password" class="form-input" placeholder="Password" required>
            </div>
    
            <div class="form-field">
                <input type="submit" name="login" value="Log in">
            </div>
          </form>
        </div>
        <?php require '../data/loginprocess.php'?>

    </div>
</body>
</html>