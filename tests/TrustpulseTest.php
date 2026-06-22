<?php
/**
 * Tests for TrustPulse
 */

use PHPUnit\Framework\TestCase;
use Trustpulse\Trustpulse;

class TrustpulseTest extends TestCase {
    private Trustpulse $instance;

    protected function setUp(): void {
        $this->instance = new Trustpulse(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Trustpulse::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
