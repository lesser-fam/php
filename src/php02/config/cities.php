<!-- 国名・時間・国旗画像が１つの箱に格納されているファイル -->
<!-- タイムゾーンとは、同じ標準時刻を使用する地域や区分のこと -->
<!-- 今回は docker > php > php.ini に、タイムゾーンという時間を管理する設定がされている。 データが操作されたタイミングや会員の有効期限など、システム開発において「時間」を正しく管理することは非常に重要。 そのため、地域によって異なる「タイムゾーン」は、予め適切に設定する必要がある。 -->

<?php

$cities = [
  [
    'name' => 'シドニー',
    'time_zone' => 'Australia/Sydney',
    'img' => 'australia.jpg'
  ],
  [
    'name' => '東京',
    'time_zone' => 'Asia/Tokyo',
    'img' => 'japan.jpg'
  ],
  [
    'name' => '上海',
    'time_zone' => 'Asia/Shanghai',
    'img' => 'china.jpg'
  ],
  [
    'name' => 'モスクワ',
    'time_zone' => 'Europe/Moscow',
    'img' => 'russia.jpg'
  ],
  [
    'name' => 'ロンドン',
    'time_zone' => 'Europe/London',
    'img' => 'british.jpg'
  ],
  [
    'name' => 'ヨハネスブルグ',
    'time_zone' => 'Africa/Johannesburg',
    'img' => 'south-africa.jpg'
  ],
  [
    'name' => 'ニューヨーク',
    'time_zone' => 'America/New_York',
    'img' => 'america.jpg'
  ]
];

// echo('<pre>');
// var_dump($cities);
// echo('</pre>');

// http://localhost/php02/config/cities.php

// array(7) {
//   [0]=>
//   array(3) {
//     ["name"]=>
//     string(12) "シドニー"
//     ["time_zone"]=>
//     string(16) "Australia/Sydney"
//     ["img"]=>
//     string(13) "australia.jpg"
//   }
//   [1]=>
//   array(3) {
//     ["name"]=>
//     string(6) "東京"
//     ["time_zone"]=>
//     string(10) "Asia/Tokyo"
//     ["img"]=>
//     string(9) "japan.jpg"
//   }
//   [2]=>
//   array(3) {
//     ["name"]=>
//     string(6) "上海"
//     ["time_zone"]=>
//     string(13) "Asia/Shanghai"
//     ["img"]=>
//     string(9) "china.jpg"
//   }
//   [3]=>
//   array(3) {
//     ["name"]=>
//     string(12) "モスクワ"
//     ["time_zone"]=>
//     string(13) "Europe/Moscow"
//     ["img"]=>
//     string(10) "russia.jpg"
//   }
//   [4]=>
//   array(3) {
//     ["name"]=>
//     string(12) "ロンドン"
//     ["time_zone"]=>
//     string(13) "Europe/London"
//     ["img"]=>
//     string(11) "british.jpg"
//   }
//   [5]=>
//   array(3) {
//     ["name"]=>
//     string(21) "ヨハネスブルグ"
//     ["time_zone"]=>
//     string(19) "Africa/Johannesburg"
//     ["img"]=>
//     string(16) "south-africa.jpg"
//   }
//   [6]=>
//   array(3) {
//     ["name"]=>
//     string(18) "ニューヨーク"
//     ["time_zone"]=>
//     string(16) "America/New_York"
//     ["img"]=>
//     string(11) "america.jpg"
//   }
// }