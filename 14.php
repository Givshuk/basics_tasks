<?php
$foo = 'bar';
$bar = 10;

$foo = &$bar;

echo '10 = '.$foo;

