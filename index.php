<?php
require_once('functions.php');
?>

<?php
if (isset($_POST['submit'])) {
    $name = $_POST['check_data'];
    $name = htmlspecialchars($name, ENT_QUOTES);
    $dbh = db_connect();
    $sql = 'INSERT INTO kadai_todolist (name, done) VALUES (?, 0)';
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(1, $name, PDO::PARAM_STR);

    $stmt->execute();

    $dbh = null;

    unset($name);
}


if (isset($_POST['method']) && ($_POST['method'] === 'put')) {

    $id = $_POST["id"];
    $id = htmlspecialchars($id, ENT_QUOTES);
    $id = (int) $id;

    $dbh = db_connect();

    $sql = 'UPDATE kadai_todolist SET done = 1 WHERE id = ?';
    $stmt = $dbh->prepare($sql);


    $stmt->bindValue(1, $id, PDO::PARAM_INT);
    $stmt->execute();

    $dbh = null;
}

?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/page2.css">
    <title>Todoリスト</title>
</head>

<body class="image">
    <h1>TODO LIST</h1>
    <form action="index.php" method="post">
        <ul>
            <div class="textanawer">
                <li><span></span></li><input class="textarea" type="text" name="check_data" value="" />
            </div><br /><br />
            <input class="submit" type="submit" name="submit" value="送信" />

        </ul>
    </form>
    <ul>
        <?php

        $dbh = db_connect();

        $sql = 'SELECT id, name FROM kadai_todolist WHERE done = 0 ORDER BY id DESC';
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        $dbh = null;


        while ($task = $stmt->fetch(PDO::FETCH_ASSOC)) {

            print '<li>';
            print $task["name"];

            print '　　　
          <form class="answer" action="index.php" method="post">
          <input type="hidden" name="method" value="put">
                    <input type="hidden" name="check_data" value="put">
          <input type="hidden" name="id" value="' . $task['id'] . '">
          <button type="submit">×</button>
          </form>
        ';

            print '</li>';
        }

        ?> </ul>
    <img src="" alt="">
</body>


<?php
?>

</html>