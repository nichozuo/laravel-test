<?php

namespace Tests\Modules\Admin;


use Tests\TestCase;

class AuthControllerTest extends TestCase
{
    public function testIndex()
    {
        $this->go(__METHOD__);
    }
}
