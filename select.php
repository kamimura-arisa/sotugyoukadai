<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>上村のつぶやき</title>
<link rel="stylesheet" href="css/style.css">
<!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">

<?php
//1.  DB接続します xxxにDB名を入れます
try {
$pdo = new PDO('mysql:dbname=kadai4;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。'.$e->getMessage());
}

//２．データ登録SQL作成
//作ったテーブル名を書く場所  xxxにテーブル名を入れます
$stmt = $pdo->prepare("SELECT * FROM kadai4_table");
$status = $stmt->execute();

//３．データ表示
$view="";
if($status==false){
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);
}else{
  //Selectデータの数だけ自動でループしてくれる $resultの中に「カラム名」が入ってくるのでそれを表示させる例
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
    // $view .= "<p>";
    // $view .= $result["kategori"].":".$result["simekiri"].":".$result["naiyou"];
    // $view .= "</p>";

    $view .= "<p>";
    // $view .= '<a href="kousin.php?id='.$result["id"].'">';
    $view .= $result["kategori"]."<br>". 
    $result["hiduke"]."　".
    $result["title"]."<br>".
    $result["naiyou"]."<br>".
    $result["image"];
    $view .= '</a>';
    $view .=' ';
    $view .='<a href="delete.php?id='.$result["id"].'">';
    $view .='[削除]';
    $view .= '</a>';
    $view .= "</p>";
  }

}
?>
<div>
    <div class="container jumbotron"><?=$view?></div>
</div>

<!-- Main[End] -->
<p class="modoru"><a href="index.php">戻る</a></p>
</body>
</html>
