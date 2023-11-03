<?php

declare(strict_types=1);

use App\Framework\Controllers\HomeController;
use App\Framework\Controllers\PostController;

return [
    ['GET', '/', [HomeController::class, 'index']],
    ['GET', '/posts/{id:\d+}', [PostController::class, 'show']],
];