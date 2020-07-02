<!-- ●アップロード用のフォーム -->
<?php require './header.php';
?>
<p>アップロードするファイルを指定してください。</p>
<!-- //multipartでアップロードするファイルを纏められる -->
<form action="upload-output.php" method="post" enctype="multipart/form-data">
    <!-- inputfileでファイル選択欄 -->
    <p><input type="file" name="file"></p>
    <p><input type="submit" value="アップロード"></p>
</form>
<?php require './footer.php'; ?>