<?php
/**
 * Tests for AgentProtocolX
 */

use PHPUnit\Framework\TestCase;
use Agentprotocolx\Agentprotocolx;

class AgentprotocolxTest extends TestCase {
    private Agentprotocolx $instance;

    protected function setUp(): void {
        $this->instance = new Agentprotocolx(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Agentprotocolx::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
