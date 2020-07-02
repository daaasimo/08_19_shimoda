<!-- ●ファイルをサーバー上に保存->
<?php require './header.php';
?>
<?php
//アップロードしたデータは一時的なファイルに保存される。ファイル名は[ ]で指定できる
//tmpnameを指定することで一時的な名前の取得が可能
// 入力画面からアップロードされたファイルかを確認をする
if (is_uploaded_file($_FILES['file']['tmp_name'])) {
	//アップロード先のフォルダがあるか確認
	if (!file_exists('upload')) {
		//アップロード先のフォルダを作成
		mkdir('upload');
	}

	//アップロードされたファイルの名前を取得して保存先のファイル名を作成
	//不正なフォルダ名が含まれている時のためにbasename関数を使ってファイル名だけ取り出し
	$file = 'upload/' . basename($_FILES['file']['name']);
	//	move_uploaded_fileを使ってスクリプトが終了したあともファイルを残せる
	if (move_uploaded_file($_FILES['file']['tmp_name'], $file)) {
		echo $file, 'のアップロードに成功しました。';
		echo '<p><img src="', $file, '"></p>';
	} else {
		echo 'アップロードに失敗しました。';
	}
} else {
	echo 'ファイルを選択してください。';
}
?>
<?php require './footer.php'; ?>