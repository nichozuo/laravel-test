<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Nichozuo\LaravelHelpers\Traits\TestCaseTrait;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;
    use TestCaseTrait;
}
