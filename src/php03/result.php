<?php

// ファイルの読み込みをする
require_once('config/status_codes.php');

// エスケープ処理
$answer_code = isset($_POST['answer_code']) ? htmlspecialchars($_POST['answer_code'], ENT_QUOTES) : null;
$option = isset($_POST['option']) ? htmlspecialchars($_POST['option'], ENT_QUOTES) : null;

// データが正しく送信されなかったときの処理（$optionが空・回答を選択しなかった場合）
// header(‘Location: 遷移先のURL’)で遷移先のURLに飛ばしてくれる
// empty()は()内が空かどうか判断してくれる
if (empty($option)) {
    header('Location: index.php');
    exit;
}

// 正誤の判定
// foreach 文で多次元配列 $status_codes を一つ一つの配列に分解。 if 文を使用し、解答コードと配列が合致した時のみ必要となるデータの取得を行う。
// index.phpで問題上正解に選ばれたcodeとstatus_codes.phpのデータをforeachで格納した$status_codeを比べて、合致した$status_codeのcodeを$codeに、descriptionを$descriptionに格納する
foreach ($status_codes as $status_code) {
    if ($status_code['code'] === $answer_code) {
        $code = $status_code['code'];
        $description = $status_code['description'];
    }
}

// index.phpで回答者が選んだ答え$optionと正誤判定された$codeが同じときはtrue、違う場合はfalseを$resultに格納
$result = $option === $code;

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
  <link rel="stylesheet" href="css/result.css">
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/">
        Status Code Quiz
      </a>
    </div>
  </header>

  <main>
  <!-- 大枠 -->
  <div class="result__content">
    <!-- 正誤表示枠 -->
    <div class="result">
      <!-- 条件分岐 optionとcodeが一致するかどうか -->
      <?php if ($result): ?>
      <h2 class="result__text--correct">正解</h2>
      <?php else: ?>
      <h2 class="result__text--incorrect">不正解</h2>
      <?php endif; ?>
    </div>
    <!-- 解説表示の表のための枠 -->
    <div class="answer-table">
      <table class="answer-table__inner">
        <!-- １行目 -->
        <tr class="answer-table__row">
          <th class="answer-table__header">ステータスコード</th>
          <!-- 正解が格納された$codeを表示 -->
          <td class="answer-table__text">
          <?php echo $code ?>
          </td>
        </tr>
        <!-- ２行目 -->
        <tr class="answer-table__row">
          <th class="answer-table__header">説明</th>
          <td class="answer-table__text">
          <!-- 正解が格納された$descriptionを表示 -->
          <?php echo $description ?>
          </td>
        </tr>
      </table>
    </div>
  </div>
</main>
</body>

</html>
