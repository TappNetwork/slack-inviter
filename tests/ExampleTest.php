<?php

namespace Tapp\SlackInviter\Tests;

use Orchestra\Testbench\TestCase;
use Tapp\SlackInviter\SlackInviterServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [SlackInviterServiceProvider::class];
    }
    
    public function test_true_is_true()
    {
        $this->assertTrue(true);
    }
}
