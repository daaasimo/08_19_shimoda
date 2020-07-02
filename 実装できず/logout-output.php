<?php session_start(); ?>
<?php require '../heder.php'; ?>
<?php require '../menu.php'; ?>
<?php
if (isset($_SESSION['customer'])) {
    unset($_SESSION['customer']);
    echo 'すでにログアウトしています。';
}
?>
<?php require '../footer.php'; ?>