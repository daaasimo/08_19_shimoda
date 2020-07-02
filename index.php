<?php
require_once('functions.php');
?>

<!-- データベースのテーブルにデータを挿入する -->
<?php
// isset関数を使って$_POST連想配列の中にsubmitという名前のキーが存在し、NULL以外の値がセットされているかを確認
if (isset($_POST['submit'])) {
    $name = $_POST['check_data'];
    //isset関数を使って$_POST連想配列の中にsubmitという名前のキーが存在し、NULL以外の値がセットされているかを確認し
    $name = htmlspecialchars($name, ENT_QUOTES);
    //コンストラクタの呼び出し
    $dbh = db_connect();
    //    データベースのテーブルにデータを挿入
    //name、doneの値をデータベースに挿入しています。最初が、?になっています。ユーザーから入力される値を、直接SQL文にはいれない。「?」をつかって、あとからひもづけ。
    $sql = 'INSERT INTO kadai_todolist (name, done) VALUES (?, 0)';
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(1, $name, PDO::PARAM_STR);
    //SQL文が実行されて、データベースのテーブルにデータ格納
    $stmt->execute();
    $dbh = null;

    unset($name);
}

//「済んだ」ボタンを押すと表示されなくなる機能
//methodというキーが存在し、NULL以外の値が設定されているかを確認し、なおかつmethodというキーの値がputという文字列と等しいかをチェック

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
    <link rel="stylesheet" href="css/page2.css?<?= strtotime('now') ?>">
    <title>Todoリスト</title>
</head>

<body>

    <h1>TODO LIST</h1>
    <div class="center"></div>

    <form class="task_input" action="index.php" method="post">
        <input class="textarea" type="text" name="check_data" value="" />
        <input class="submit" type="submit" name="submit" value="送信" />
    </form>


    <!-- <body class="image">
    <h1>TODO LIST</h1>

    <form action="index.php" method="post">
        <input class=" textarea" type="text" name="check_data" value="" />
        <input class="submit" type="submit" name="submit" value="送信" />
    </form>
    <ul class="task_list"> -->


    <ul class="task_list">



        <?php

        $dbh = db_connect();
        //SELECT文はテーブルから様々な条件をつけて引っ張りだす
        $sql = 'SELECT id, name FROM kadai_todolist WHERE done = 0 ORDER BY id DESC';
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        $dbh = null;

        //$stmt>fetchはPDOStatementインスタンスのfetchメソッド（PDOStatementクラスで定義されているfetchメソッド）です。データベースの結果セットから、次の行を取得します。PDO::FETCH_ASSOCは、連想配列の形で取得できます。whileループにいれていますので、繰り返し行の取得が繰り返しされます。
        while ($task = $stmt->fetch(PDO::FETCH_ASSOC)) {


            //済ボタンの表示
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
            //タスク名ごとにformタグができており、固有のidの値が隠しデータとして追加
            //「済んだ」ボタンが押されると、タスク名に隠しデータで設定されているフォーム（input）の情報がPHPに送られる。
            print '</li>';
        }

        ?> </ul>
    <img src="" alt="">

</body>


<?php
?>

</html>