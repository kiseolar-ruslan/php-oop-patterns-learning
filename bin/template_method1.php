<?php

declare(strict_types=1);

use App\Patterns\TemplateMethod\Example1\SocialNetwork;
use App\Patterns\TemplateMethod\Example1\SubClasses\Facebook;
use App\Patterns\TemplateMethod\Example1\SubClasses\Twitter;

require_once __DIR__ . '/../vendor/autoload.php';


//function app(SocialNetwork $class, $message): void
//{
//    $class->post($message);
//}
//
//app(new Facebook('Ruslan Krietsu', '123'), 'Some message');

echo 'Username: ' . PHP_EOL;
$userName = readline();

echo 'Password: ' . PHP_EOL;
$password = readline();

echo 'Message: ' . PHP_EOL;
$message = readline();

echo "Choose the social network to post the message:" . PHP_EOL .
    "1 - Facebook" . PHP_EOL .
    "2 - Twitter" . PHP_EOL;
$choice = readline();

if ($choice !== '1' && $choice !== '2') {
    die("Sorry, I'm not sure what you mean by that." . PHP_EOL);
}

$network = match ($choice) {
    '1' => new Facebook($userName, $password),
    '2' => new Twitter($userName, $password),
    default => die(),
};

$network->post($message);



