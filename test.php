<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

//$array = [
//    'a' => 'one',
//    'b' => 'two',
//    'c' => 'three',
//    'd' => 'four',
//    'e' => 'five',
//    'j' => 'six',
//];


/**
 * Class Profile
 */
class Profile
{
    /**
     * @return string
     */
    private function getUserName(): string
    {
        return 'Foo';
    }
}

$profileObj = new Profile();
$refMethod  = new ReflectionMethod($profileObj, 'getUserName');
if (true === $refMethod->isPrivate()) {
    $refMethod->setAccessible(true);
}
echo $refMethod->invoke($profileObj);

exit;


