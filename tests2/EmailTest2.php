<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class EmailTest2 extends TestCase
{
    public function testCanBeCreatedFromValidEmailAddress2(): void
    {
        $this->assertInstanceOf(
            Email::class,
            Email::fromString('user@example.com')
        );
    }
}
