<?php
/**
 *
 */

require 'pharstorage.php';

$num = 100;
if ($argc == 2) {
    $num = $argv[1];
}

echo $num, PHP_EOL;

$f = new pharstore('hoge.phar');

$t = microtime(true);
for ($i = 0; $i < $num; $i++) {
    echo '.';
    $data = range($i, $i + 20);
    $d = $f->get('hoge' . $i);
    if ($d != $data) {
        echo "error!!!!!!!!", PHP_EOL;
        exit(1);
    }
}

unset($f);

echo PHP_EOL;
echo "time: ", microtime(true) - $t, PHP_EOL;
