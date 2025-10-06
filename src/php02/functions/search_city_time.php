<!-- セレクトボックスによって送信された国と東京をブラウザに表示する。その判断を行うファイル -->


<?php

function searchCityTime($city_name)
{
  // cities.phpの読み込み
  require('config/cities.php');

  // foreachで$citiesを１つずつの配列に分解できるようにする
  // （ifの１行目）nameキーが一致したときに処理される
  // （ifの２行目）Datetime()の引数に何も入れていない場合は現在時刻が表示される
  // 各国の時刻を使用するため、DateTimeZoneを使用
  // ↑引数に$city["time_zone"]変数を渡すことで、指定された国の現在時刻を取得することができる
  // （ifの３行目）任意の日時を作成するためのformatをフォーマット文字で設定
  // （ifの４行目）３行目で設定した日時を表示するための配列の追加。"time"キーに対応した$time（３行目で設定した日時を表示させる変数）
  // （ifの５行目）returnでresult.phpファイルの変数tokyoに格納する
  foreach ($cities as $city) {
    if ($city['name'] === $city_name) {
      $date_time = new DateTime('', new DateTimeZone($city['time_zone']));
      $time = $date_time->format('H:i');
      $city['time'] = $time;

      return $city;
    }
  }
}

