<!-- index.phpファイルのラジオボタンで選択した都市の画像と時間が表示されるページ -->

<?php

// search_city_time.phpの読み込み
require_once('functions/search_city_time.php');

// searchCityTime 関数を result.phpファイルで呼び出し。呼び出された関数は search_city_time.phpファイルにて処理を行う。
// 下の行では、$tokyoに$city_nameが東京になったものが格納。
$tokyo = searchCityTime('東京');

// index.phpから送られたデータを受け取るため
$city = htmlspecialchars($_GET['city'], ENT_QUOTES);
// search_city_time.phpファイルで設定した関数searchCityTimeを利用して、送信されてきた内容から表示する国を特定する
$comparison = searchCityTime($city);

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>World Clock</title>
  <link rel="stylesheet" href="css/sanitize.css">
  <link rel="stylesheet" href="css/common.css">
  <link rel="stylesheet" href="css/result.css">
</head>

<body>
  <!-- 各サイト共通項目 -->
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/php02/index.php">
        World Clock
      </a>
    </div>
  </header>

  <main>
    <!-- 大枠 -->
    <div class="result__content">
      <!-- メインコンテンツ枠 -->
      <div class="result-cards">
        <!-- 枠１つ目 -->
        <div class="result-card">
          <!-- 画像枠 -->
          <div class="result-card__img-wrapper">
            <!-- 配列から"img"=>"japan.jpg"を取り出して、表示 -->
            <img class="result-card__img" src="img/<?php echo $tokyo['img']?>" alt="国旗">
          </div>
          <!-- 画像説明枠 -->
          <div class="result-card__body">
            <p class="result-card__city">
              <!-- "name"=>"東京"を取り出して、表示 -->
              <?php echo $tokyo['name']?>
            </p>
            <p class="result-card__time">
              <!-- 呼び出す"time"はsearch_city_time.phpファイルで設定したもの -->
              <?php echo $tokyo['time']?>
            </p>
          </div>
        </div>
        <!-- 枠２つ目 -->
        <div class="result-card">
          <div class="result-card__img-wrapper">
            <img class="result-card__img" src="img/<?php echo $comparison['img']?>" alt="国旗">
          </div>
          <div class="result-card__body">
            <p class="result-card__city">
              <?php echo $comparison['name']?>
            </p>
            <p class="result-card__time">
              <?php echo $comparison['time']?>
            </p>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>

</html>
