<?php
/**
 *
 */


$file = new SplFileObject('./phpcon2010.tsv');
$file->setFlags(SplFileObject::DROP_NEW_LINE | SplFileObject::SKIP_EMPTY | SplFileObject::READ_CSV);
$file->setCsvControl("\t");

foreach ($file as $line) {
    /*
array(10) {
  [0]=>
  string(11) "25080858457"
  [1]=>
  string(31) "Tue, 21 Sep 2010 02:18:12 +0000"
  [2]=>
  string(6) "hagimi"
  [3]=>
  string(6) "348326"
  [4]=>
  string(2) "ja"
  [5]=>
  string(70) "http://a1.twimg.com/profile_images/1090295913/IMG_0247_mini_normal.jpg"
  [6]=>
  string(70) "http://a1.twimg.com/profile_images/1090295913/IMG_0247_mini_normal.jpg"
  [7]=>
  string(59) "&lt;a href=&quot;http://twitter.com/&quot;&gt;web&lt;/a&gt;"
  [8]=>
  string(190) "RT @phpcon: いよいよ、PHPカンファレンスまで1週間となりました。参加登録をしていない方はおはやめに！ http://phpcon.php.gr.jp/2010/register/ #phpcon2010"
  [9]=>
  string(4) "null"
}
     */
    list($id, $created_at, $from_user, $from_user_id,
        $iso_language_code, $profile_image_url,
        $profile_image_url_mini, $source, $text) = $line;
    $date = new DateTime($created_at);

    // do something
}
