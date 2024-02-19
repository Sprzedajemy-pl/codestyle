<?php

declare(strict_types=1);

use Blumilk\Codestyle\Config;
use Blumilk\Codestyle\Configuration\Defaults\Paths;
use Blumilk\Codestyle\Configuration\Defaults\SprzedajemyRules;

$config = new Config(
    paths: new Paths(
        "codestyle.php",
        "bin",
        "src",
        "tests/unit",
        "tests/codestyle",
    ),
    rules: new SprzedajemyRules(),
);

return $config->config();
