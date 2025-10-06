<!-- $status_codes という配列を用意し、問題・選択肢となるステータスコードを 多次元配列 を用いて管理 -->
<!-- code => ステータスコード -->
<!-- meaning => 意味 -->
<!-- description => ステータスコードの説明 -->

<?php
$status_codes = [
  [
    'code' => '102',
    'meaning' => 'Processing',
    'description' => '処理中である'
  ],
  [
    'code' => '200',
    'meaning' => 'OK',
    'description' => 'リクエストが正常に成功できた'
  ],
  [
    'code' => '301',
    'meaning' => 'Moved Permanently',
    'description' => 'リクエストしたリソースが恒久的に移動されている'
  ],
  [
    'code' => '304',
    'meaning' => 'Not Modified',
    'description' => 'リクエストしたリソースは更新されていない'
  ],
  [
    'code' => '400',
    'meaning' => 'Bad Request',
    'description' => 'クライアントのリクエストに異常がある'
  ],
  [
    'code' => '401',
    'meaning' => 'Unauthorized',
    'description' => 'アクセストークンが無効なときや、認証がされていない'
  ],
  [
    'code' => '403',
    'meaning' => 'Forbidden',
    'description' => '閲覧権限が無いファイルやフォルダである'
  ],
  [
    'code' => '404',
    'meaning' => 'Not found',
    'description' => 'Webページが見つからない'
  ],
  [
    'code' => '500',
    'meaning' => 'Internal Server Error',
    'description' => '何らかのサーバ内でエラーが起きた'
  ],
  [
    'code' => '502',
    'meaning' => 'Bad Gateway',
    'description' => 'サーバーがリクエストに満たすのに必要な機能をサポートしていない'
  ],
  [
    'code' => '503',
    'meaning' => 'Service Unavailable',
    'description' => '一時的にサーバにアクセスが出来ない'
  ]
];

// 確認用
// echo('<pre>');
// var_dump($status_codes);
// echo('</pre>');

// http://localhost/php03/config/status_codes.php

// array(11) {
//   [0]=>
//   array(3) {
//     ["code"]=>
//     string(3) "102"
//     ["meaning"]=>
//     string(10) "Processing"
//     ["description"]=>
//     string(18) "処理中である"
//   }
//   [1]=>
//   array(3) {
//     ["code"]=>
//     string(3) "200"
//     ["meaning"]=>
//     string(2) "OK"
//     ["description"]=>
//     string(42) "リクエストが正常に成功できた"
//   }
//   [2]=>
//   array(3) {
//     ["code"]=>
//     string(3) "301"
//     ["meaning"]=>
//     string(17) "Moved Permanently"
//     ["description"]=>
//     string(69) "リクエストしたリソースが恒久的に移動されている"
//   }
//   [3]=>
//   array(3) {
//     ["code"]=>
//     string(3) "304"
//     ["meaning"]=>
//     string(12) "Not Modified"
//     ["description"]=>
//     string(60) "リクエストしたリソースは更新されていない"
//   }
//   [4]=>
//   array(3) {
//     ["code"]=>
//     string(3) "400"
//     ["meaning"]=>
//     string(11) "Bad Request"
//     ["description"]=>
//     string(54) "クライアントのリクエストに異常がある"
//   }
//   [5]=>
//   array(3) {
//     ["code"]=>
//     string(3) "401"
//     ["meaning"]=>
//     string(12) "Unauthorized"
//     ["description"]=>
//     string(75) "アクセストークンが無効なときや、認証がされていない"
//   }
//   [6]=>
//   array(3) {
//     ["code"]=>
//     string(3) "403"
//     ["meaning"]=>
//     string(9) "Forbidden"
//     ["description"]=>
//     string(57) "閲覧権限が無いファイルやフォルダである"
//   }
//   [7]=>
//   array(3) {
//     ["code"]=>
//     string(3) "404"
//     ["meaning"]=>
//     string(9) "Not found"
//     ["description"]=>
//     string(33) "Webページが見つからない"
//   }
//   [8]=>
//   array(3) {
//     ["code"]=>
//     string(3) "500"
//     ["meaning"]=>
//     string(21) "Internal Server Error"
//     ["description"]=>
//     string(48) "何らかのサーバ内でエラーが起きた"
//   }
//   [9]=>
//   array(3) {
//     ["code"]=>
//     string(3) "502"
//     ["meaning"]=>
//     string(11) "Bad Gateway"
//     ["description"]=>
//     string(93) "サーバーがリクエストに満たすのに必要な機能をサポートしていない"
//   }
//   [10]=>
//   array(3) {
//     ["code"]=>
//     string(3) "503"
//     ["meaning"]=>
//     string(19) "Service Unavailable"
//     ["description"]=>
//     string(51) "一時的にサーバにアクセスが出来ない"
//   }
// }