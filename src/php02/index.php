<!-- http://localhost/php02/index.php -->

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>World Clock</title>
  <link rel="stylesheet" href="css/sanitize.css">
  <link rel="stylesheet" href="css/common.css">
  <link rel="stylesheet" href="css/index.css">
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/php02/index.php">
        World Clock
      </a>
    </div>
  </header>

  <main>
    <!-- 大枠 -->
    <div class="search-form__content">
      <!-- コンテンツタイトル枠 -->
      <div class="search-form__heading">
        <h2 class="search-form__content-title">日本と世界の時間を比較</h2>
      </div>
      <form class="search-form" action="result.php" method="get">
        <!-- セレクトボックスを入れる枠   -->
        <div class="search-form__item">
          <!-- 選択肢のセレクトボックス枠 -->
          <!-- 選択肢を呼び出すためにname="city"で指定 -->
          <!-- search_city_timeで格納した$cityをresult.phpファイルで使うためにデータ送信用のname=>"city" -->
          <select class="search-form__item-select" name="city">
            <option value="シドニー">シドニー</option>
            <option value="上海">上海</option>
            <option value="モスクワ">モスクワ</option>
            <option value="ロンドン">ロンドン</option>
            <option value="ヨハネスブルグ">ヨハネスブルグ</option>
            <option value="ニューヨーク">ニューヨーク</option>
          </select>
        </div>
        <!-- imputでもbuttonは作成できるが、buttonタグだとボタン上のテキストや画像表示も可能になる -->
        <div class="search-form__button">
          <button class="search-form__button-submit" type="submit">
            検索
          </button>
        </div>
      </form>
    </div>
  </main>
</body>

</html>
