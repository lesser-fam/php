<?php

// 'config/status_codes.php'からデータを参照
require_once('config/status_codes.php');

//array_rand関数を用いて変数$random_numbersに、配列$status_codesの中から４つ、ランダムに選択して格納。取り出すのは値ではなく、$status_codesのキー（0～10）。
$random_indexes = array_rand($status_codes, 4);

// 上記で$random_indexesに格納された４つの数字に対応した$status_codesのデータだけを$indexに収納して、$option[]に格納、ランダムな選択肢を作成
foreach ($random_indexes as $index) {
  $options[] = $status_codes[$index];
}

// $optionsの中から１つを正解として$questionに格納
// mt_randは乱数を生成。mt_rand(0 , 99)とかで範囲指定可能。
$question = $options[mt_rand(0, 3)];

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Status Code Quiz</title>
  <link rel="stylesheet" href="css/sanitize.css">
  <link rel="stylesheet" href="css/common.css">
  <link rel="stylesheet" href="css/index.css">
</head>

<body>
  <!-- ヘッダー全体 -->
  <header class="header">
    <!-- ロゴ枠 -->
    <div class="header__inner">
      <a class="header__logo" href="/">
        Status Code Quiz
      </a>
    </div>
  </header>

  <main>
    <!-- 大枠 -->
    <div class="quiz__content">
      <!-- 問題文枠 -->
      <div class="question">
        <!-- 問題の説明文を表示。 -->
        <p class="question__text">Q. 以下の内容に当てはまるステータスコードを選んでください</p>
        <!-- "description"キーで対応した問題を表示 -->
        <p class="question__text">
          <?php echo $question['description'] ?>
        </p> 
      </div>
      <!-- actionが送信先、配列を利用した長いデータになるためmethod属性をpostにする -->
      <form class="quiz-form" action="result.php" method="post">
        <!-- ブラウザに表示することなくデータの送信を行う -->
        <!-- 正解のコードを送る -->
        <input type="hidden" name="answer_code" value="<?php echo $question['code'] ?>">
        <!-- 選択肢枠・選択肢の説明文をランダムで４つforeachで表示 -->
        <div class="quiz-form__item">
          <!-- endまでの内容をランダムな内容で４回繰り返し表示 -->
          <?php foreach ($options as $option): ?>
          <!-- 選択肢１つ分枠 -->
          <div class="quiz-form__group">
            <!-- 選択肢内容枠・type属性をradioで１つだけ選択できるように設定 -->
            <input class="quiz-form__radio" id="<?php echo $option['code'] ?>" type="radio" name="option"
              value="<?php echo $option['code'] ?>">
            <!-- 選択肢内容・inputのid属性とlabelのfor属性を同じにすると紐づけ可能。label要素をクリックすることでinputにチェックをつけることができる（codeを表示） -->
            <label class="quiz-form__label" for="<?php echo $option['code'] ?>">
              <?php echo $option['code'] ?>
            </label>
          </div>
          <?php endforeach; ?>
        </div>
        <div class="quiz-form__button">
          <button class="quiz-form__button-submit" type="submit">
            回答
          </button>
        </div>
      </form>
    </div>
  </main>
</body>

</html>