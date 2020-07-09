<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/page2.css">
  <title>todolist</title>
</head>

<!-- TOP画面 -->

<body>
  <div class="page01">
    <h1>SIMPLE TODO</h1>
    <button id="start">START</button>
  </div>

  <!-- 入力画面 -->
  <div class="page02" style="display: none;">
    <form action="todo_create.php" method="POST">
      <fieldset style="
    border: none;">

        <a href="todo_read.php">一覧画面</a>
        <a href="todo_logout.php">logout</a>
        deadline: <input type="date" name="deadline">
        todo: <input type="text" name="todo">
        <button>submit</button>
      </fieldset>
    </form>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script>
    $("#start").on("click", function() {
      $(".page01").remove();
      $(".page02").fadeIn();
    });
  </script>

</body>

</html>