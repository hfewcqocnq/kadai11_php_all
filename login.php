<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>ログイン画面</title>
  <link href="css/style.css" rel="stylesheet">
</head>
<body>
  <header>
    <h1 class="login_h1">LOGIN</h1>
  </header>
  <div class="container">
    <form name="login-form" action="login_act.php" method="post">
    ID : <input class="login_input" type="text" name="lid"><br>
    PW: <input class="login_input" type="password" name="lpw"><br>
    <input class="login_click" type="submit" value="ログイン">
    </form>
  </div>
</body>
</html>