<?php

namespace Tests\TestCases;

use Tests\TestCases\TestCase;
use Tests\Models\Rules\TestRuleOpenClose;
use Tests\Models\Verifiables\TestVerifiableOpenClose;

class OpenCloseTest extends TestCase
{
    public function testRulePasses() {
        $appointment = new TestVerifiableOpenClose;
        $rule = new TestRuleOpenClose();

        $this->assertTrue($rule->verify($appointment));
    }
}