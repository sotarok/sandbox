<?php
/**
 *
 */

if ($argc != 3) exit();

$url_base = "http://d.hatena.ne.jp/{$argv[1]}/archive/{$argv[2]}%02d";

$text = "";
foreach (range(1, 12) as $mon) {
    $url = sprintf($url_base, $mon);
    $text .= '-' . $mon . '月:' . PHP_EOL;
    foreach(array_reverse(simplexml_import_dom(@DOMDocument::loadHTMLFile($url))->xpath("id('hatena-archive')//ul//ul/li/a[last()]")) as $p) {
        $text .= '--[' . $p->attributes()->href .':title=' . $p . ':bookmark]' . PHP_EOL;
    }
}

echo "generated: ", PHP_EOL;
echo $text, PHP_EOL;
