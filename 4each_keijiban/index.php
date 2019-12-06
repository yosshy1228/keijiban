<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
<title>4eachblog 掲示板</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<?php
    mb_internal_encoding("utf8");
    $pdo = new PDO("mysql:dbname=lesson1;host=localhost;","root","");
    $stmt = $pdo->query("select * from 4each_keijiban");

?>
<header>
        <img src="4eachblog_logo.jpg" alt=""width="200px" hight="100%"border="0">
        <ul class="menu">
           <li>トップ</li>
           <li>プロフィール</li>
           <li>4eachについて</li>
           <li>登録フォーム</li>
           <li>問い合わせ</li>
          <li>その他</li>
        </ul>
</header>
    
<main>
    <div class="main-container">
        <div class="left">   
            <div class="keijibanH1">プログラミングに役立つ掲示板</div>
            <br>
            <form method="post" action="insert.php" class="leftsize">
                <h1>入力フォーム</h1>
                <label>ハンドルネーム</label>
                <br>
                <input type="text" class="text" size="35" name="handlename">
                <div>
                    <label>タイトル</label>
                    <br>
                    <input type="text" class="text" size="35" name="title">
                </div>
                <label>コメント</label>
                <br>
                <textarea cols="35" rows="7" name="comments"></textarea>
                <br>
                <input type="submit" class="submit" value="投稿する">
            </form>
            <br>
        <?php
            while ($row = $stmt->fetch()) {
            echo "<div class='kiji'>";
            echo"<h3>".$row['title']."</h3>";
            echo"<div class='contents'>";
                echo $row['comments'];
                echo"<div class='handlename'>posted by ".$row['handlename']."</div>";
                echo"</div>";
                echo"</div>";
            }
            ?>
<!--
            <form method="post" class="leftsize">
                <h1 class="keijibanH2">タイトル</h1>
                <div>記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身</div>
                <div>記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身</div>
                <div>記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身</div>
                <br>
                <div class="posted">posted by 通りすがり</div>
            </form>
-->
            
        </div>
        <div class="right">
            <h2>人気の記事</h2>
            <p>PHPおすすめの本</p>
            <p>PHP MyAdminの使い方</p>
            <p>いま人気にエディタTop5</p>
            <p>HTMLの基礎</p>
            <br>
            <h2>オススメリンク</h2>
            <p>インターノウス株式会社</p>
            <p>XAMPPのダウンロード</p>
            <p>Eclipseのダウンロード</p>
            <p>Brakectsのダウンロード</p>
            <h2>カテゴリ</h2>
            <p>HTML</p>
            <p>PHP</p>
            <p>MySQL</p>
            <p>JavaScript</p>
            <br>
        </div>        
    </div>
</main>
<footer>
        Copylight internous | 4each blog is the one which provides AtoZ about programming.
</footer>
</body>
</html>
