<?php declare(strict_types=1);

namespace salvatorecordiano\Tests;

use PHPUnit\Framework\TestCase;

class AppTest extends TestCase
{
    /**
     * @covers Calculator::
     */
    public function testApp(): void
    {
        $app = new \salvatorecordiano\App();
        self::assertEquals('Hello World', $app->run());
    }
}
