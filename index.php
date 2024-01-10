<?php

// !emptyは「取得したsubmitButtonの値が空じゃない時にtrue」 (emptyが空の場合true)
if(!empty($_POST["submitButton"])) {
  // ユーザーネームの名前を取得 (inputタグのname属性から取得する)
  // $_POSTはフォームタグで送信された内容を取得する
  echo $_POST["username"];
  echo $_POST["comment"];
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>PHP 掲示板</title>
</head>
<body>
  <h1 class="title">PHP 掲示板アプリ</h1>
  <hr>
  <div class="boardWrapper">
    <section>
      <article>
        <div class="wrapper">
          <div class="nameArea">
            <span>名前: </span>
            <p class="username">kakauta0915</p>
            <time>: 2024/9/15</time>
          </div>
          <p class="comment">手書きコメントです。</p>
        </div>
      </article>
    </section>

    <form class="formWrapper" method="POST">
      <div>
        <input type="submit" value="書き込む" name="submitButton">
        <label for="">名前: </label>
        <input type="text" name="username">
      </div>
      <div>
        <textarea class="commentTextArea" name="comment">
        </textarea>
      </div>
    </form>
  </div>
</body>
</html>