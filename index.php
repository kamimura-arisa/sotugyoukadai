<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>【投稿者用】つぶやきます</title>
  <link href="css/style.css" rel="stylesheet">
  <!-- <style>div{padding: 10px;font-size:16px;}</style> -->
</head>
<body>


<form method="post" action="insert.php">
  <!-- <div class="jumbotron"> -->
   <fieldset>
    <legend class="taitoru">今日のブログ</legend>
     <label class="kate">カテゴリ：
     <select name="kategori">
<option value="仕事">仕事</option>
<option value="ご飯">ご飯</option>
<option value="旅行">旅行</option>
<option value="その他">その他</option>
</select>
</label>
<br><br>
     <label class="hiduke">日付： <input type="date" name="hiduke"></label><br><br>
     <label class="title">タイトル：<input type="text" name="title"></label><br><br>
     <label class="nai">投稿内容：<textArea name="naiyou" rows="4" cols="40"></textArea></label><br>
     <!-- <label class="gazo">投稿写真：<input type="file" name="gazo" ></label><br> -->
     <br><br>
     <input type="submit" value="登録">

     <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">登録済みつぶやき一覧・削除</a></div>
    <a  href="tubuyaki.php">閲覧者用ページへ</a>
    </div>
  </nav>
    </fieldset>
  <!-- </div> -->
</form>
<!-- Main[End] -->


</body>
</html>
