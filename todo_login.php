<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>todoリストログイン画面</title>
</head>

<body>
  <div class="page01">
    <form action="todo_login_act.php" method="POST">
      <fieldset>
        <legend>todoリストログイン画面</legend>
        <div>
          username: <input type="text" name="username">
        </div>
        <div>
          password: <input type="text" name="password">
        </div>
        <div>
          <button id="login">Login</button>
        </div>
        <a href="todo_register.php">or register</a>
      </fieldset>
    </form>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script>
    $("#login").on("click", function() {
      $(".page01").remove();
    });


    <
    /body>

    <
    /html>