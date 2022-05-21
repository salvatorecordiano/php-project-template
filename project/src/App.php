<?php declare(strict_types=1);

namespace salvatorecordiano;

class App
{
    public function main(): void
    {
        echo self::run();
    }

    public function run(): string
    {
        return 'Hello World';
    }
}
