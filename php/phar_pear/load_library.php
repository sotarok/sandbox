<?php
/**
 *
 */

//foreach (new RecursiveIteratorIterator(new PharData('HTTP_Request2-0.5.1.tgz')) as $f) {
//    echo $f, PHP_EOL;
//}
require_once 'phar://HTTP_Request2-0.5.1.tgz/HTTP_Request2-0.5.1/Request2.php';

$r = new HTTP_Request2('http://nequal.jp/');
$response = $r->send();
echo $response->getBody();

/*
class LibraryLoader
{
    const VERSION_AUTO = 0x01;

    public static function load ($name, $version = self::VERSION_AUTO)
    {
    }
}


LibraryLoader::load('HTTP_Request2');
LibraryLoader::requireFile('HTTP/Request2.php');
 */

