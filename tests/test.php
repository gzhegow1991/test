<?php

define('__DIR_ROOT__', __DIR__ . '/..');

\Gzhegow\Lib\Lib::entrypoint()
    ->setAllRecommended()
    //
    ->setCustomDirRoot(__DIR_ROOT__)
    //
    ->useAll()
    //
    ->lock()
;


$theDebug = \Gzhegow\Lib\Lib::debug();
$theTest = \Gzhegow\Lib\Lib::test();


// > TEST
$fn = function () use ($theDebug) {
    $theDebug->dump_value('TEST 1');
    echo PHP_EOL;
};
$test = $theTest->newCase($fn);
$test->expectStdout('
"TEST 1"
');
$test->run();
