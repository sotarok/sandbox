<?php
/**
 *
 */

function ae($a, $b)
{
    $c = debug_backtrace();
    $c[1]['object']->assertEquals($a, $b);
}

class ClassTest
{
    public function __construct()
    {
    }

    public function assertEquals($a, $b)
    {
        if ($a == $b) {
            echo '.';
        }
        else {
            echo 'E';
        }
    }

    public function testHoge()
    {
        ae(1, 1);
        ae(1, 2);
        ae(array(1,2,3), array(1,2,3));
        ae(array(1,2,2), array(1,2,3));
    }

}

$s = new ClassTest();
$s->testHoge();

echo PHP_EOL;
